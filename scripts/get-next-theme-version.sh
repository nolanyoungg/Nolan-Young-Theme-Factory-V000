#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

max=0

scan_path() {
  local path="$1"
  [ -d "$path" ] || return 0

  while IFS= read -r name; do
    if [[ "$name" =~ ^nolan-showcase-theme-([0-9][0-9])(\.zip)?$ ]]; then
      local number="${BASH_REMATCH[1]}"
      number="$((10#$number))"
      if [ "$number" -gt "$max" ]; then
        max="$number"
      fi
    fi
  done < <(find "$path" -mindepth 1 -maxdepth 1 -printf '%f\n' 2>/dev/null || find "$path" -mindepth 1 -maxdepth 1 -exec basename {} \;)
}

scan_path "wp-content/themes"
scan_path "docs/themes"
scan_path "dist/zipped-themes"

next=$((max + 1))
printf 'nolan-showcase-theme-%02d\n' "$next"
