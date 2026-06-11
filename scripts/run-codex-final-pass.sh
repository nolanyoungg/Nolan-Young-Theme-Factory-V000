#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
source "$script_dir/theme-factory-common.sh"
root_dir="$(theme_factory_repo_root)"
cd "$root_dir"

slug="${1:-}"
prompt_file="${2:-}"

[ -n "$slug" ] || theme_factory_fail "Usage: bash scripts/run-codex-final-pass.sh <theme-slug> <prompt-file>"
[ -n "$prompt_file" ] || theme_factory_fail "Missing prompt file."
[ -f "$prompt_file" ] || theme_factory_fail "Prompt file not found: $prompt_file"

codex_command="${CODEX_COMMAND:-$(theme_factory_codex_command_for_context final-pass)}"
if [ -z "${CODEX_COMMAND:-}" ] && [ -n "${codex_command:-}" ]; then
  printf 'Using default Codex final-pass command: %s\n' "$codex_command"
fi
theme_factory_require_cmd "${codex_command%% *}"

run_dir="$(cd "$(dirname "$prompt_file")" && pwd)"
last_message="$run_dir/codex-last-message.md"
raw_file="$run_dir/codex-final-raw.md"

printf 'Running Codex final pass with command: %s\n' "$codex_command"
printf 'Prompt: %s\n' "$prompt_file"
printf 'Last message: %s\n' "$last_message"
printf 'Raw transcript: %s\n' "$raw_file"

cmd="$codex_command --output-last-message \"$last_message\" - < \"$prompt_file\""
if [ "${CODEX_STREAM_RAW:-0}" = "1" ]; then
  bash -lc "$cmd" 2>&1 | tee "$raw_file"
else
  set +e
  bash -lc "$cmd" > "$raw_file" 2>&1
  status=$?
  set -e
  printf 'Codex final pass exited with status %s. Last transcript lines:\n' "$status"
  tail -80 "$raw_file" || true
  exit "$status"
fi
