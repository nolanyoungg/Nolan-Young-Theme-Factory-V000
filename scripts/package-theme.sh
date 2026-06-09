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
[ -n "$theme_slug" ] || fail "Usage: bash scripts/package-theme.sh <theme-slug>"
[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || fail "Invalid theme slug: $theme_slug"

theme_dir="wp-content/themes/$theme_slug"
zip_dir="dist/zipped-themes"
zip_path="$zip_dir/$theme_slug.zip"

[ -d "$theme_dir" ] || fail "Theme directory is missing: $theme_dir"
command -v zip >/dev/null 2>&1 || fail "zip is required. Install the zip command-line tool and rerun packaging."

mkdir -p "$zip_dir"
rm -f "$zip_path"

(
  cd "wp-content/themes"
  zip -qr "../../$zip_path" "$theme_slug" \
    -x "$theme_slug/node_modules/*" \
    -x "$theme_slug/.git/*" \
    -x "$theme_slug/.DS_Store" \
    -x "$theme_slug/**/*.map" \
    -x "$theme_slug/reports/*" \
    -x "$theme_slug/tmp/*"
)

[ -f "$zip_path" ] || fail "ZIP was not created: $zip_path"
size="$(wc -c < "$zip_path" | tr -d ' ')"
printf 'Created %s (%s bytes)\n' "$zip_path" "$size"
