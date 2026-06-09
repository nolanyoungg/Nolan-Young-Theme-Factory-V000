#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

if [ "${1:-}" != "" ]; then
  bash scripts/validate-theme.sh "$1"
  exit 0
fi

found=0
while IFS= read -r theme_dir; do
  found=1
  bash scripts/validate-theme.sh "$(basename "$theme_dir")"
done < <(find wp-content/themes -mindepth 1 -maxdepth 1 -type d -name 'nolan-showcase-theme-[0-9][0-9]' | sort)

if [ "$found" -eq 0 ]; then
  printf 'No generated themes found.\n'
fi
