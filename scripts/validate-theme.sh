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

slug="${1:-}"
[ -n "$slug" ] || { printf 'Usage: bash scripts/validate-theme.sh <theme-slug>\n' >&2; exit 2; }

theme_dir="wp-content/themes/$slug"
preview_dir="docs/themes/$slug"
zip_path="dist/zipped-themes/$slug.zip"

[ -d "$theme_dir" ] || fail "Missing theme directory: $theme_dir"
[ -f "$theme_dir/style.css" ] || fail "Missing style.css"
[ -f "$theme_dir/functions.php" ] || fail "Missing functions.php"
[ -f "$theme_dir/index.php" ] || fail "Missing index.php"
[ -f "$theme_dir/header.php" ] || fail "Missing header.php"
[ -f "$theme_dir/footer.php" ] || fail "Missing footer.php"
[ -f "$theme_dir/package.json" ] || fail "Missing package.json"
[ -f "$theme_dir/assets/css/bundle.css" ] || fail "Missing compiled CSS"
[ -f "$theme_dir/assets/js/bundle.js" ] || fail "Missing compiled JS"

if [ -f "$theme_dir/style.css" ]; then
  grep -Eq '^[[:space:]]*Theme Name:[[:space:]]*.+' "$theme_dir/style.css" || fail "style.css has no Theme Name header"
fi

if [ -d "$theme_dir" ]; then
  if grep -R -I -n -i 'lorem ipsum\|todo\|placeholder text\|OPENAI_API_KEY\|sk-[A-Za-z0-9_-]\{20,\}\|BEGIN .*PRIVATE KEY\|eval[[:space:]]*(' "$theme_dir" >/tmp/theme-validate.$$ 2>/dev/null; then
    cat /tmp/theme-validate.$$ >&2
    fail "Theme contains blocked placeholder, secret, or unsafe code pattern"
  fi
  rm -f /tmp/theme-validate.$$
fi

if command -v php >/dev/null 2>&1 && [ -d "$theme_dir" ]; then
  while IFS= read -r php_file; do
    php -l "$php_file" >/dev/null || fail "PHP syntax failed: $php_file"
  done < <(find "$theme_dir" -type f -name '*.php')
fi

[ -f "$preview_dir/index.html" ] || fail "Missing preview index.html"
[ -f "$preview_dir/assets/css/preview.css" ] || fail "Missing preview CSS"
[ -f "$preview_dir/assets/js/preview.js" ] || fail "Missing preview JS"
grep -q "themes/$slug/index.html" docs/index.html 2>/dev/null || fail "docs/index.html does not link to preview"

if [ -d "$preview_dir" ]; then
  if grep -R -I -n -E 'https?://|//cdn\.|cdnjs|jsdelivr|unpkg|googleapis|gstatic|fonts\.google' "$preview_dir" 2>/dev/null \
    | grep -v -E 'https?://www\.w3\.org' >/tmp/preview-validate.$$; then
    cat /tmp/preview-validate.$$ >&2
    fail "Preview contains remote runtime dependency"
  fi
  rm -f /tmp/preview-validate.$$
fi

[ -f "$zip_path" ] || fail "Missing ZIP: $zip_path"
if [ -f "$zip_path" ]; then
  command -v unzip >/dev/null 2>&1 || fail "unzip is required to inspect ZIP"
  zip_entries="$(unzip -Z1 "$zip_path")"
  printf '%s\n' "$zip_entries" | grep -qx "$slug/style.css" || fail "ZIP does not contain $slug/style.css"
  if printf '%s\n' "$zip_entries" | grep -E '(^|/)node_modules/|(^|/)\.git/' >/dev/null; then
    fail "ZIP contains node_modules or .git"
  fi
fi

if [ "$failures" -gt 0 ]; then
  printf 'Validation failed for %s with %s issue(s).\n' "$slug" "$failures" >&2
  exit 1
fi

printf 'Validation passed for %s.\n' "$slug"
