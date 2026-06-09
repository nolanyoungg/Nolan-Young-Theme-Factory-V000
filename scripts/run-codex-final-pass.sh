#!/usr/bin/env bash
set -Eeuo pipefail

fail() {
  printf 'ERROR: %s\n' "$*" >&2
  exit 1
}

append_file() {
  local output="$1"
  local label="$2"
  local file="$3"
  [ -f "$file" ] || fail "Required prompt component missing: $file"
  {
    printf '\n\n## %s\n\n' "$label"
    sed -n '1,$p' "$file"
  } >> "$output"
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

theme_slug="${1:-}"
prompt_file="${2:-}"
mode="${3:-final}"

[ -n "$theme_slug" ] && [ -n "$prompt_file" ] || fail "Usage: bash scripts/run-codex-final-pass.sh <theme-slug> <prompt-file> [final|fixer|full]"
[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || fail "Invalid theme slug: $theme_slug"
[ -f "$prompt_file" ] || fail "Prompt file not found: $prompt_file"
[[ "$mode" =~ ^(final|fixer|full)$ ]] || fail "Unsupported Codex mode: $mode"

codex_command="${CODEX_COMMAND:-codex}"
command_name="${codex_command%% *}"
[ -n "$command_name" ] || fail "CODEX_COMMAND is empty"
if ! command -v "$command_name" >/dev/null 2>&1; then
  fail "Codex command not found: $command_name. Set CODEX_COMMAND to the correct executable and arguments."
fi

run_dir="reports/runs/$theme_slug"
mkdir -p "$run_dir"
assembled="$run_dir/codex-$mode-prompt.md"
: > "$assembled"

case "$mode" in
  final|full)
    append_file "$assembled" "Codex Final Pass" "codex/codex-final-pass.md"
    ;;
  fixer)
    append_file "$assembled" "Codex Fixer Pass" "codex/codex-fixer-pass.md"
    ;;
esac

append_file "$assembled" "AGENTS.md" "AGENTS.md"
append_file "$assembled" "Required Theme Structure" "contracts/required-theme-structure.md"
append_file "$assembled" "Required Preview Structure" "contracts/required-preview-structure.md"
append_file "$assembled" "Theme Versioning" "contracts/theme-versioning.md"
append_file "$assembled" "Security Rules" "contracts/security-rules.md"
append_file "$assembled" "Quality Rules" "contracts/quality-rules.md"
append_file "$assembled" "Release Artifact Rules" "contracts/release-artifact-rules.md"

[ -f "$run_dir/plan.md" ] && append_file "$assembled" "Existing Plan" "$run_dir/plan.md"
[ -f "$run_dir/validation-latest.txt" ] && append_file "$assembled" "Validation Output" "$run_dir/validation-latest.txt"

if [ "$mode" = "full" ]; then
  {
    printf '\n\n## Full Codex-Only Generation Task\n\n'
    printf 'Create a complete theme at `wp-content/themes/%s/`, a static preview at `docs/themes/%s/`, and update `docs/index.html`.\n' "$theme_slug" "$theme_slug"
    printf 'Do not produce a weak fallback. Build a full polished website that satisfies all contracts.\n'
  } >> "$assembled"
elif [ "$mode" = "final" ]; then
  {
    printf '\n\n## Finalization Task\n\n'
    printf 'Finalize the existing generated output for `%s`. Preserve direction unless unrecoverable.\n' "$theme_slug"
  } >> "$assembled"
else
  {
    printf '\n\n## Fixer Task\n\n'
    printf 'Repair validation failures for `%s` with targeted edits.\n' "$theme_slug"
  } >> "$assembled"
fi

{
  printf '\n\n## Selected Theme Slug\n\n%s\n' "$theme_slug"
  printf '\n\n## User Prompt Verbatim\n\n'
  sed -n '1,$p' "$prompt_file"
} >> "$assembled"

printf 'Running Codex %s pass with command: %s\n' "$mode" "$codex_command"
bash -lc "$codex_command" < "$assembled"
