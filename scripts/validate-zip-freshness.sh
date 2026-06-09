#!/usr/bin/env bash
set -Eeuo pipefail

fail() {
  printf 'ERROR: %s\n' "$*" >&2
  exit 1
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

theme_slug="${1:-}"
[ -n "$theme_slug" ] || fail "Usage: bash scripts/validate-zip-freshness.sh <theme-slug>"
[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || fail "Invalid theme slug: $theme_slug"

theme_dir="wp-content/themes/$theme_slug"
zip_path="dist/zipped-themes/$theme_slug.zip"

[ -d "$theme_dir" ] || fail "Theme directory missing: $theme_dir"
[ -f "$zip_path" ] || fail "ZIP missing: $zip_path"
command -v unzip >/dev/null 2>&1 || fail "unzip is required to inspect ZIP contents."

found_style=0
while IFS= read -r entry; do
  if [ "$entry" = "$theme_slug/style.css" ]; then
    found_style=1
    break
  fi
done < <(unzip -Z1 "$zip_path")

[ "$found_style" -eq 1 ] || fail "ZIP does not contain $theme_slug/style.css"

if unzip -Z1 "$zip_path" | grep -E '(^|/)node_modules/|(^|/)\.git/' >/dev/null; then
  fail "ZIP contains node_modules or .git"
fi

if find "$theme_dir" -type f -not -path '*/node_modules/*' -newer "$zip_path" | grep -q .; then
  find "$theme_dir" -type f -not -path '*/node_modules/*' -newer "$zip_path" >&2
  fail "ZIP is older than one or more theme files. Re-run scripts/package-theme.sh."
fi

printf 'ZIP freshness validation passed for %s.\n' "$theme_slug"
