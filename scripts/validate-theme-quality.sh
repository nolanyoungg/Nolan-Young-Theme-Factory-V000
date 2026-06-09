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
[ -n "$theme_slug" ] || { printf 'Usage: bash scripts/validate-theme-quality.sh <theme-slug>\n' >&2; exit 2; }

theme_dir="wp-content/themes/$theme_slug"
preview_dir="docs/themes/$theme_slug"

[ -d "$theme_dir" ] || fail "Theme directory missing: $theme_dir"

if [ -d "$theme_dir" ]; then
  if grep -R -I -n -i 'lorem ipsum\|dolor sit amet\|placeholder text\|todo\|coming soon\|sample text' "$theme_dir" \
    --include='*.php' --include='*.html' --include='*.css' --include='*.js' --include='*.md' >/tmp/theme-quality.$$ 2>/dev/null; then
    cat /tmp/theme-quality.$$ >&2
    fail "Filler or unfinished text found in theme"
  fi
  rm -f /tmp/theme-quality.$$

  [ -f "$theme_dir/assets/css/bundle.css" ] && [ "$(wc -c < "$theme_dir/assets/css/bundle.css" | tr -d ' ')" -ge 500 ] || fail "bundle.css missing or not meaningful"
  [ -f "$theme_dir/assets/js/bundle.js" ] && [ "$(wc -c < "$theme_dir/assets/js/bundle.js" | tr -d ' ')" -ge 200 ] || fail "bundle.js missing or not meaningful"

  grep -R -I -q 'wp_enqueue_style' "$theme_dir/functions.php" "$theme_dir/inc" 2>/dev/null || fail "wp_enqueue_style not found"
  grep -R -I -q 'wp_enqueue_script' "$theme_dir/functions.php" "$theme_dir/inc" 2>/dev/null || fail "wp_enqueue_script not found"

  [ -f "$theme_dir/README.md" ] || fail "Theme README missing"
  [ -f "$theme_dir/CHANGELOG.md" ] || fail "Theme CHANGELOG missing"

  combined_text="$(find "$theme_dir" -type f \( -name '*.php' -o -name '*.md' -o -name '*.html' \) -not -path '*/node_modules/*' -print0 | xargs -0 cat 2>/dev/null || true)"
  printf '%s' "$combined_text" | grep -Eiq 'service|services' || fail "Theme lacks service content markers"
  printf '%s' "$combined_text" | grep -Eiq 'portfolio|work|project' || fail "Theme lacks work or portfolio content markers"
  printf '%s' "$combined_text" | grep -Eiq 'testimonial|client' || fail "Theme lacks testimonial or client content markers"
  printf '%s' "$combined_text" | grep -Eiq 'contact|booking|inquiry' || fail "Theme lacks contact or conversion content markers"
fi

[ -f "docs/index.html" ] || fail "docs/index.html missing"
grep -q "themes/$theme_slug/index.html" "docs/index.html" 2>/dev/null || fail "docs/index.html does not link to theme preview"
[ -d "$preview_dir" ] || fail "Preview directory missing: $preview_dir"

if [ "$failures" -gt 0 ]; then
  printf 'Theme quality validation failed with %s issue(s).\n' "$failures" >&2
  exit 1
fi

printf 'Theme quality validation passed for %s.\n' "$theme_slug"
