#!/usr/bin/env bash
set -Eeuo pipefail

failures=0

fail() {
  printf 'FAIL: %s\n' "$*" >&2
  failures=$((failures + 1))
}

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
root_dir="$(cd "$script_dir/.." && pwd)"
cd "$root_dir"

theme_slug="${1:-}"
[ -n "$theme_slug" ] || { printf 'Usage: bash scripts/validate-preview.sh <theme-slug>\n' >&2; exit 2; }

preview_dir="docs/themes/$theme_slug"
index_file="$preview_dir/index.html"
css_file="$preview_dir/assets/css/preview.css"
js_file="$preview_dir/assets/js/preview.js"

[ -f "$index_file" ] || fail "Preview index missing: $index_file"
[ -f "$css_file" ] || fail "Preview CSS missing: $css_file"
[ -f "$js_file" ] || fail "Preview JS missing: $js_file"
[ -f "$preview_dir/assets/images/README.md" ] || fail "Preview image README missing"
[ -f "$preview_dir/README.md" ] || fail "Preview README missing"

[ -f "$index_file" ] && [ "$(wc -c < "$index_file" | tr -d ' ')" -ge 1500 ] || fail "Preview index is too small"
[ -f "$css_file" ] && [ "$(wc -c < "$css_file" | tr -d ' ')" -ge 500 ] || fail "Preview CSS is too small"
[ -f "$js_file" ] && [ "$(wc -c < "$js_file" | tr -d ' ')" -ge 100 ] || fail "Preview JS is too small"

if [ -d "$preview_dir" ]; then
  if grep -R -I -n -E 'src=["'\'']https?://|href=["'\'']https?://|//cdn\.|cdnjs|jsdelivr|unpkg|googleapis|gstatic|fonts\.google' "$preview_dir" >/tmp/preview-remote.$$ 2>/dev/null; then
    cat /tmp/preview-remote.$$ >&2
    fail "Preview uses remote runtime assets"
  fi
  rm -f /tmp/preview-remote.$$
fi

[ -f "docs/index.html" ] || fail "docs/index.html missing"
grep -q "themes/$theme_slug/index.html" "docs/index.html" 2>/dev/null || fail "docs/index.html does not link to preview"

if [ "$failures" -gt 0 ]; then
  printf 'Preview validation failed with %s issue(s).\n' "$failures" >&2
  exit 1
fi

printf 'Preview validation passed for %s.\n' "$theme_slug"
