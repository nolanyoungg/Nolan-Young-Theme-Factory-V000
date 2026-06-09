#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

theme_slug="${1:-}"

if [ -z "$theme_slug" ]; then
  slugs=()
  while IFS= read -r slug; do
    slugs+=("$slug")
  done < <(find wp-content/themes -mindepth 1 -maxdepth 1 -type d -name 'nolan-showcase-theme-[0-9][0-9]' -exec basename {} \; 2>/dev/null | sort)
  if [ "${#slugs[@]}" -eq 0 ]; then
    printf 'No generated themes found. Starter repository validation passed.\n'
    for required in AGENTS.md README.md docs/index.html scripts/run-hybrid-theme-workflow.sh scripts/validate-all.sh contracts/required-theme-structure.md; do
      [ -f "$required" ] || { printf 'Missing required starter file: %s\n' "$required" >&2; exit 1; }
    done
    exit 0
  fi
  for slug in "${slugs[@]}"; do
    bash scripts/validate-all.sh "$slug"
  done
  exit 0
fi

[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || { printf 'Invalid theme slug: %s\n' "$theme_slug" >&2; exit 2; }

bash scripts/validate-theme-structure.sh "$theme_slug"
bash scripts/validate-theme-quality.sh "$theme_slug"
bash scripts/validate-preview.sh "$theme_slug"
bash scripts/validate-security.sh "$theme_slug"
bash scripts/validate-zip-freshness.sh "$theme_slug"

printf 'All validation passed for %s.\n' "$theme_slug"
