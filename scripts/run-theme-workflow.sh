#!/usr/bin/env bash
set -Eeuo pipefail

fail() {
  printf 'ERROR: %s\n' "$*" >&2
  exit 1
}

is_interactive() {
  [ -t 0 ] && [ -z "${CI:-}" ]
}

choose_from_menu() {
  local title="$1"
  local default_index="$2"
  shift 2
  local options=("$@")
  local choice
  local i

  printf '\n%s\n' "$title" >&2
  for i in "${!options[@]}"; do
    if [ "$((i + 1))" -eq "$default_index" ]; then
      printf '  %s. %s (default)\n' "$((i + 1))" "${options[$i]}" >&2
    else
      printf '  %s. %s\n' "$((i + 1))" "${options[$i]}" >&2
    fi
  done

  while true; do
    read -r -p "Choose 1-${#options[@]} [$default_index]: " choice
    choice="${choice:-$default_index}"
    if [[ "$choice" =~ ^[0-9]+$ ]] && [ "$choice" -ge 1 ] && [ "$choice" -le "${#options[@]}" ]; then
      printf '%s\n' "${options[$((choice - 1))]}"
      return
    fi
    printf 'Please choose a valid number.\n' >&2
  done
}

ask_yes_no() {
  local question="$1"
  local default_answer="$2"
  local answer
  local prompt

  case "$default_answer" in
    y|Y) prompt="[Y/n]" ;;
    n|N) prompt="[y/N]" ;;
    *) fail "Invalid yes/no default: $default_answer" ;;
  esac

  while true; do
    read -r -p "$question $prompt: " answer
    answer="${answer:-$default_answer}"
    case "$answer" in
      y|Y|yes|YES) return 0 ;;
      n|N|no|NO) return 1 ;;
      *) printf 'Please answer y or n.\n' >&2 ;;
    esac
  done
}

select_prompt() {
  if [ -n "${THEME_PROMPT_FILE:-}" ]; then
    [ -f "$THEME_PROMPT_FILE" ] || fail "Prompt file not found: $THEME_PROMPT_FILE"
    printf '%s\n' "$THEME_PROMPT_FILE"
    return
  fi

  is_interactive || fail "THEME_PROMPT_FILE is required for noninteractive runs."

  local prompts=()
  local prompt_path
  while IFS= read -r prompt_path; do
    prompts+=("$prompt_path")
  done < <(find prompts/pending -maxdepth 1 -type f \( -name '*.txt' -o -name '*.md' \) | sort)

  [ "${#prompts[@]}" -gt 0 ] || fail "No prompt files found in prompts/pending/."

  choose_from_menu "Choose prompt file:" 1 "${prompts[@]}"
}

build_codex_command() {
  local model="${CODEX_MODEL:-gpt-5.4-mini}"
  local reasoning="${CODEX_REASONING:-low}"
  local executable="${CODEX_EXECUTABLE:-codex}"

  if is_interactive; then
    model="$(choose_from_menu "Choose Codex model:" 3 "gpt-5.5" "gpt-5.4" "gpt-5.4-mini")"
    reasoning="$(choose_from_menu "Choose Codex reasoning:" 1 "low" "medium" "high" "xhigh")"
  fi

  case "$model" in
    gpt-5.5|gpt-5.4|gpt-5.4-mini) ;;
    *) fail "Unsupported Codex model: $model" ;;
  esac

  case "$reasoning" in
    low|medium|high|xhigh) ;;
    *) fail "Unsupported Codex reasoning: $reasoning" ;;
  esac

  command -v "${executable%% *}" >/dev/null 2>&1 || fail "Codex executable not found: $executable"

  SELECTED_CODEX_MODEL="$model"
  SELECTED_CODEX_REASONING="$reasoning"
  printf '%s exec --model "%s" -c '\''reasoning_effort="%s"'\'' --sandbox workspace-write' "$executable" "$model" "$reasoning"
}

write_codex_prompt() {
  local output="$1"
  local slug="$2"
  local prompt_file="$3"

  {
    printf '# Theme Generation Task\n\n'
    printf 'Create or repair the WordPress theme `%s` in this repository.\n\n' "$slug"
    printf 'Required output paths:\n'
    printf '%s\n' "- \`wp-content/themes/$slug/\`"
    printf '%s\n' "- \`docs/themes/$slug/\`"
    printf '%s\n\n' "- update \`docs/index.html\` with a link to \`themes/$slug/index.html\`"
    printf 'Theme requirements:\n'
    printf '%s\n' '- classic WordPress theme'
    printf '%s\n' '- valid `style.css` theme header'
    printf '%s\n' '- non-empty `functions.php`'
    printf '%s\n' '- local CSS and JS in `assets/css/bundle.css` and `assets/js/bundle.js`'
    printf '%s\n' '- `package.json` with a working `npm run build`'
    printf '%s\n' '- no secrets, API keys, CDNs, remote scripts, lorem ipsum, TODOs, or placeholder copy'
    printf '%s\n\n' '- do not enable SVG uploads with `upload_mimes`; committed local SVG assets are allowed'
    printf 'Preview requirements:\n'
    printf '%s\n' "- static HTML preview at \`docs/themes/$slug/index.html\`"
    printf '%s\n' '- local preview CSS and JS'
    printf '%s\n' '- usable without WordPress or PHP'
    printf '%s\n\n' '- closely mirror the WordPress theme layout, visual system, copy, navigation, and section order'
    printf 'Selected Codex model: %s\n' "${SELECTED_CODEX_MODEL:-unknown}"
    printf 'Selected reasoning: %s\n\n' "${SELECTED_CODEX_REASONING:-unknown}"
    printf 'Use the user prompt below verbatim as the source brief.\n\n'
    printf '## User Prompt\n\n'
    sed -n '1,$p' "$prompt_file"
  } > "$output"
}

run_npm_build() {
  local slug="$1"
  local theme_dir="wp-content/themes/$slug"

  [ -f "$theme_dir/package.json" ] || fail "Missing $theme_dir/package.json"
  command -v npm >/dev/null 2>&1 || fail "npm is required."

  (
    cd "$theme_dir"
    npm install
    npm run build
  )
}

maybe_create_theme_pr() {
  local slug="$1"

  case "${CREATE_THEME_PR:-}" in
    1|true|TRUE|yes|YES)
      bash scripts/create-theme-pr.sh "$slug"
      return
      ;;
    0|false|FALSE|no|NO)
      return
      ;;
  esac

  if is_interactive; then
    if ask_yes_no "Validate, push a branch, and open a PR for $slug?" "y"; then
      bash scripts/create-theme-pr.sh "$slug"
    fi
  fi
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

printf 'Nolan Young Theme Factory\n'

prompt_file="$(select_prompt)"
slug="${THEME_SLUG:-$(bash scripts/get-next-theme-version.sh)}"
run_dir="reports/runs/$slug"
mkdir -p "$run_dir"

codex_command="$(build_codex_command)"
prompt_path="$run_dir/codex-prompt.md"
last_message="$run_dir/codex-last-message.md"
write_codex_prompt "$prompt_path" "$slug" "$prompt_file"

printf '\nPrompt: %s\n' "$prompt_file"
printf 'Theme slug: %s\n' "$slug"
printf 'Codex command: %s\n\n' "$codex_command"

bash -lc "$codex_command --output-last-message \"$last_message\" \"Read and follow $prompt_path. Make the requested repository edits, then summarize the generated theme.\""

run_npm_build "$slug"
bash scripts/package-theme.sh "$slug"
bash scripts/validate-theme.sh "$slug"
maybe_create_theme_pr "$slug"

printf '\nComplete:\n'
printf 'Theme: wp-content/themes/%s/\n' "$slug"
printf 'Preview: docs/themes/%s/index.html\n' "$slug"
printf 'ZIP: dist/zipped-themes/%s.zip\n' "$slug"
