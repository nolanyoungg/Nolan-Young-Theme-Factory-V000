#!/usr/bin/env bash
set -Eeuo pipefail

fail() {
  printf 'ERROR: %s\n' "$*" >&2
  exit 1
}

is_interactive() {
  [ -t 0 ] && [ -z "${CI:-}" ]
}

ask_default() {
  local prompt="$1"
  local default="$2"
  local answer
  if is_interactive; then
    read -r -p "$prompt [$default]: " answer
    printf '%s\n' "${answer:-$default}"
  else
    printf '%s\n' "$default"
  fi
}

confirm() {
  local prompt="$1"
  local default="${2:-n}"
  local answer
  if ! is_interactive; then
    [ "$default" = "y" ]
    return
  fi
  read -r -p "$prompt [$default]: " answer
  answer="${answer:-$default}"
  [[ "$answer" =~ ^[Yy]$|^[Yy][Ee][Ss]$ ]]
}

validate_required_repo() {
  local required_dirs=(agents instructions prompts/pending prompts/completed contracts codex wp-content/themes docs/themes dist/zipped-themes reports/runs scripts)
  local required_scripts=(scripts/run-ollama-stage.sh scripts/run-codex-final-pass.sh scripts/get-next-theme-version.sh scripts/package-theme.sh scripts/validate-all.sh)

  for dir in "${required_dirs[@]}"; do
    [ -d "$dir" ] || fail "Required directory missing: $dir"
  done

  for script in "${required_scripts[@]}"; do
    [ -x "$script" ] || [ -f "$script" ] || fail "Required script missing: $script"
  done
}

choose_mode() {
  if [ -n "${THEME_FACTORY_MODE:-}" ]; then
    case "$THEME_FACTORY_MODE" in
      hybrid|codex|ollama) printf '%s\n' "$THEME_FACTORY_MODE"; return ;;
      *) fail "Invalid THEME_FACTORY_MODE: $THEME_FACTORY_MODE" ;;
    esac
  fi

  is_interactive || fail "THEME_FACTORY_MODE is required for noninteractive runs."

  printf '\nChoose run mode:\n' >&2
  printf '  1. Hybrid: Ollama draft + Codex final pass\n' >&2
  printf '  2. Codex only: Codex handles complete generation\n' >&2
  printf '  3. Ollama only: Local Ollama generation only\n' >&2

  local choice
  while true; do
    read -r -p "Enter 1, 2, or 3: " choice
    case "$choice" in
      1) printf 'hybrid\n'; return ;;
      2) printf 'codex\n'; return ;;
      3) printf 'ollama\n'; return ;;
      *) printf 'Please enter 1, 2, or 3.\n' >&2 ;;
    esac
  done
}

choose_prompt_file() {
  if [ -n "${THEME_PROMPT_FILE:-}" ]; then
    [ -f "$THEME_PROMPT_FILE" ] || fail "THEME_PROMPT_FILE not found: $THEME_PROMPT_FILE"
    case "$THEME_PROMPT_FILE" in
      prompts/pending/*.txt|prompts/pending/*.md) printf '%s\n' "$THEME_PROMPT_FILE"; return ;;
      *) fail "THEME_PROMPT_FILE must point to a .txt or .md file in prompts/pending/" ;;
    esac
  fi

  prompts=()
  while IFS= read -r prompt_path; do
    prompts+=("$prompt_path")
  done < <(find prompts/pending -maxdepth 1 -type f \( -name '*.txt' -o -name '*.md' \) | sort)
  if [ "${#prompts[@]}" -eq 0 ]; then
    printf 'No prompt files found in prompts/pending/.\n' >&2
    printf 'Add a .txt or .md prompt file to prompts/pending/ and rerun this script.\n' >&2
    printf '__NO_PROMPTS__\n'
    return 0
  fi

  is_interactive || fail "THEME_PROMPT_FILE is required for noninteractive runs."

  printf '\nAvailable prompt files:\n' >&2
  local i
  for i in "${!prompts[@]}"; do
    printf '  %s. %s\n' "$((i + 1))" "${prompts[$i]}" >&2
  done

  local choice
  while true; do
    read -r -p "Select prompt file by number: " choice
    if [[ "$choice" =~ ^[0-9]+$ ]] && [ "$choice" -ge 1 ] && [ "$choice" -le "${#prompts[@]}" ]; then
      printf '%s\n' "${prompts[$((choice - 1))]}"
      return
    fi
    printf 'Please choose a valid prompt number.\n' >&2
  done
}

configure_ollama() {
  if ! command -v ollama >/dev/null 2>&1; then
    return 1
  fi

  local list_output
  if ! list_output="$(ollama list 2>&1)"; then
    printf '%s\n' "$list_output" >&2
    return 1
  fi

  printf '\nInstalled Ollama models:\n%s\n' "$list_output" >&2
  models=()
  while IFS= read -r model_name; do
    models+=("$model_name")
  done < <(printf '%s\n' "$list_output" | awk 'NR > 1 && $1 != "" { print $1 }')
  [ "${#models[@]}" -gt 0 ] || fail "Ollama responded, but no installed models were found. Run: ollama pull <model>"

  if [ -n "${OLLAMA_MODEL:-}" ]; then
    local model
    for model in "${models[@]}"; do
      if [ "$model" = "$OLLAMA_MODEL" ]; then
        printf '%s\n' "$OLLAMA_MODEL"
        return
      fi
    done
    fail "OLLAMA_MODEL is not installed: $OLLAMA_MODEL"
  fi

  is_interactive || fail "OLLAMA_MODEL is required for noninteractive Ollama runs."

  local i choice
  printf '\nChoose an Ollama model:\n' >&2
  for i in "${!models[@]}"; do
    printf '  %s. %s\n' "$((i + 1))" "${models[$i]}" >&2
  done

  while true; do
    read -r -p "Select Ollama model by number: " choice
    if [[ "$choice" =~ ^[0-9]+$ ]] && [ "$choice" -ge 1 ] && [ "$choice" -le "${#models[@]}" ]; then
      printf '%s\n' "${models[$((choice - 1))]}"
      return
    fi
    printf 'Please choose an installed Ollama model.\n' >&2
  done
}

configure_codex() {
  local command_value="${CODEX_COMMAND:-codex}"
  if is_interactive; then
    command_value="$(ask_default "Enter Codex command" "$command_value")"
  fi

  local command_name="${command_value%% *}"
  [ -n "$command_name" ] || fail "Codex command cannot be empty"
  command -v "$command_name" >/dev/null 2>&1 || fail "Codex command not found: $command_name"

  printf '\nSelected Codex command:\n%s\n' "$command_value" >&2
  if is_interactive && ! confirm "Continue with this Codex command?" "y"; then
    fail "Codex command was not confirmed."
  fi

  printf '%s\n' "$command_value"
}

write_metadata() {
  local mode="$1"
  local slug="$2"
  local prompt_file="$3"
  local ollama_model="$4"
  local codex_command="$5"
  local run_dir="reports/runs/$slug"
  mkdir -p "$run_dir"
  {
    printf 'THEME_FACTORY_MODE=%q\n' "$mode"
    printf 'THEME_SLUG=%q\n' "$slug"
    printf 'THEME_PROMPT_FILE=%q\n' "$prompt_file"
    printf 'OLLAMA_MODEL=%q\n' "$ollama_model"
    printf 'CODEX_COMMAND=%q\n' "$codex_command"
    printf 'RUN_STARTED_AT=%q\n' "$(date -u '+%Y-%m-%dT%H:%M:%SZ')"
  } > "$run_dir/metadata.env"
}

run_npm_build() {
  local slug="$1"
  [ "${SKIP_NPM_BUILD:-0}" = "1" ] && { printf 'Skipping npm build because SKIP_NPM_BUILD=1.\n'; return; }
  command -v npm >/dev/null 2>&1 || fail "npm is required. Install Node.js/npm and rerun."
  [ -f "wp-content/themes/$slug/package.json" ] || fail "Theme package.json missing: wp-content/themes/$slug/package.json"
  (
    cd "wp-content/themes/$slug"
    npm install
    npm run build
  )
}

run_package() {
  local slug="$1"
  [ "${SKIP_PACKAGE:-0}" = "1" ] && { printf 'Skipping package because SKIP_PACKAGE=1.\n'; return; }
  bash scripts/package-theme.sh "$slug"
}

run_validation() {
  local slug="$1"
  [ "${SKIP_VALIDATE:-0}" = "1" ] && { printf 'Skipping validation because SKIP_VALIDATE=1.\n'; return 0; }
  mkdir -p "reports/runs/$slug"
  if bash scripts/validate-all.sh "$slug" > "reports/runs/$slug/validation-latest.txt" 2>&1; then
    cat "reports/runs/$slug/validation-latest.txt"
    return 0
  fi
  cat "reports/runs/$slug/validation-latest.txt" >&2
  return 1
}

run_ollama_draft() {
  local slug="$1"
  local prompt_file="$2"
  local model="$3"

  bash scripts/run-ollama-stage.sh planner "$slug" "$prompt_file" "$model"
  bash scripts/run-ollama-stage.sh builder "$slug" "$prompt_file" "$model"
  run_npm_build "$slug"
  bash scripts/run-ollama-stage.sh preview "$slug" "$prompt_file" "$model"
  run_package "$slug"
}

maybe_move_prompt() {
  local prompt_file="$1"
  if confirm "Move selected prompt to prompts/completed/?" "n"; then
    local base target stamped
    base="$(basename "$prompt_file")"
    target="prompts/completed/$base"
    if [ -e "$target" ]; then
      stamped="prompts/completed/$(date '+%Y%m%d-%H%M%S')-$base"
      mv "$prompt_file" "$stamped"
      printf 'Moved prompt to %s\n' "$stamped"
    else
      mv "$prompt_file" "$target"
      printf 'Moved prompt to %s\n' "$target"
    fi
  fi
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

printf 'Nolan Young Theme Factory\n'
printf 'Repository root: %s\n' "$root_dir"

validate_required_repo

mode="$(choose_mode)"
prompt_file="$(choose_prompt_file)"
if [ "$prompt_file" = "__NO_PROMPTS__" ]; then
  exit 0
fi
theme_slug="$(bash scripts/get-next-theme-version.sh)"
run_dir="reports/runs/$theme_slug"
mkdir -p "$run_dir"

printf '\nSelected mode: %s\n' "$mode"
printf 'Selected prompt: %s\n' "$prompt_file"
printf 'Next theme slug: %s\n' "$theme_slug"

ollama_model=""
codex_command=""

if [ "$mode" = "hybrid" ] || [ "$mode" = "ollama" ]; then
  if ! ollama_model="$(configure_ollama)"; then
    printf 'Ollama is unavailable or not configured correctly.\n' >&2
    if [ "$mode" = "hybrid" ] && is_interactive && confirm "Switch to Codex-only mode?" "y"; then
      mode="codex"
    else
      fail "Cannot continue with Ollama mode without an installed Ollama model."
    fi
  fi
fi

if [ "$mode" = "hybrid" ] || [ "$mode" = "codex" ]; then
  codex_command="$(configure_codex)"
  export CODEX_COMMAND="$codex_command"
fi

write_metadata "$mode" "$theme_slug" "$prompt_file" "$ollama_model" "$codex_command"

case "$mode" in
  hybrid)
    run_ollama_draft "$theme_slug" "$prompt_file" "$ollama_model"
    validation_ok=0
    if ! run_validation "$theme_slug"; then
      validation_ok=1
      if [ "${SKIP_OLLAMA_REVIEW_FIX:-0}" != "1" ]; then
        bash scripts/run-ollama-stage.sh review-fix "$theme_slug" "$prompt_file" "$ollama_model"
        run_npm_build "$theme_slug"
        run_package "$theme_slug"
        if run_validation "$theme_slug"; then
          validation_ok=0
        else
          validation_ok=1
        fi
      fi
    fi
    if [ "${SKIP_CODEX_FINAL:-0}" != "1" ]; then
      bash scripts/run-codex-final-pass.sh "$theme_slug" "$prompt_file" final
      run_npm_build "$theme_slug"
      run_package "$theme_slug"
      run_validation "$theme_slug"
    elif [ "$validation_ok" -ne 0 ]; then
      fail "Validation failed and SKIP_CODEX_FINAL=1, so the workflow cannot complete successfully."
    fi
    ;;
  codex)
    bash scripts/run-codex-final-pass.sh "$theme_slug" "$prompt_file" full
    run_npm_build "$theme_slug"
    run_package "$theme_slug"
    if ! run_validation "$theme_slug"; then
      bash scripts/run-codex-final-pass.sh "$theme_slug" "$prompt_file" fixer
      run_npm_build "$theme_slug"
      run_package "$theme_slug"
      run_validation "$theme_slug"
    fi
    ;;
  ollama)
    run_ollama_draft "$theme_slug" "$prompt_file" "$ollama_model"
    if ! run_validation "$theme_slug"; then
      if [ "${SKIP_OLLAMA_REVIEW_FIX:-0}" != "1" ]; then
        bash scripts/run-ollama-stage.sh review-fix "$theme_slug" "$prompt_file" "$ollama_model"
        run_npm_build "$theme_slug"
        run_package "$theme_slug"
        run_validation "$theme_slug"
      else
        fail "Validation failed and SKIP_OLLAMA_REVIEW_FIX=1."
      fi
    fi
    ;;
  *)
    fail "Unsupported mode after configuration: $mode"
    ;;
esac

cat <<SUMMARY

Run complete.
Mode: $mode
Theme path: wp-content/themes/$theme_slug/
Preview path: docs/themes/$theme_slug/
ZIP path: dist/zipped-themes/$theme_slug.zip
Reports path: reports/runs/$theme_slug/
Ollama model: ${ollama_model:-not used}
Codex command: ${codex_command:-not used}

Next Git commands:
  git status
  git add .
  git commit -m "Add $theme_slug"
SUMMARY

maybe_move_prompt "$prompt_file"
