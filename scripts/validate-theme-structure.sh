#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
source "$script_dir/theme-factory-common.sh"
root_dir="$(theme_factory_repo_root)"
cd "$root_dir"

slug="${1:-}"
[ -n "$slug" ] || theme_factory_fail "Usage: bash scripts/validate-theme-structure.sh <theme-slug>"

theme_dir="$root_dir/wp-content/themes/$slug"
failures=0

fail() {
  printf 'FAIL: %s\n' "$*" >&2
  failures=$((failures + 1))
}

check_file() {
  local path="$1"
  [ -f "$path" ] || fail "Missing file: ${path#$root_dir/}"
}

check_dir() {
  local path="$1"
  [ -d "$path" ] || fail "Missing directory: ${path#$root_dir/}"
}

[ -d "$theme_dir" ] || fail "Missing theme directory: wp-content/themes/$slug"

required_files=(
  style.css
  functions.php
  header.php
  footer.php
  front-page.php
  index.php
  page.php
  single.php
  archive.php
  search.php
  404.php
  comments.php
  assets/css/theme.css
  assets/js/theme.js
)

for file in "${required_files[@]}"; do
  check_file "$theme_dir/$file"
done

required_dirs=(
  assets/css
  assets/js
  assets/icons
  assets/images
  template-parts
)

for dir in "${required_dirs[@]}"; do
  check_dir "$theme_dir/$dir"
done

required_template_parts=(
  template-parts/content-home-hero.php
  template-parts/content-home-services.php
  template-parts/content-home-work.php
  template-parts/content-home-process.php
  template-parts/content-home-testimonials.php
  template-parts/content-home-cta.php
  template-parts/content-services.php
  template-parts/content-about.php
  template-parts/content-work.php
  template-parts/content-contact.php
  template-parts/content-blog.php
  template-parts/content-single-service.php
)

for file in "${required_template_parts[@]}"; do
  check_file "$theme_dir/$file"
done

if [ -f "$theme_dir/style.css" ]; then
  grep -Eq '^[[:space:]]*Theme Name:[[:space:]]*.+' "$theme_dir/style.css" || fail "style.css has no Theme Name header"
  grep -Eq 'Nolan Young Theme [0-9]{3}' "$theme_dir/style.css" || fail "style.css Theme Name must use the corrected display naming"
fi

if [ -f "$theme_dir/functions.php" ]; then
  [ -s "$theme_dir/functions.php" ] || fail "functions.php is empty"
fi

if [ -f "$theme_dir/assets/css/theme.css" ]; then
  [ -s "$theme_dir/assets/css/theme.css" ] || fail "Theme CSS is empty"
fi

if [ -f "$theme_dir/assets/js/theme.js" ]; then
  [ -s "$theme_dir/assets/js/theme.js" ] || fail "Theme JS is empty"
fi

if [ -d "$theme_dir/assets/images" ]; then
  image_count="$(find "$theme_dir/assets/images" "$theme_dir/assets/icons" -type f \( -iname '*.jpg' -o -iname '*.jpeg' -o -iname '*.png' -o -iname '*.webp' -o -iname '*.svg' \) | wc -l | tr -d ' ')"
  [ "$image_count" -ge 6 ] || fail "Theme must include at least 6 local visual assets"
else
  fail "Missing theme image directory"
fi

old_showcase_glob="nolan""-showcase-theme-*"
if find "$root_dir/wp-content/themes" -mindepth 1 -maxdepth 1 -type d -name "$old_showcase_glob" | grep -q .; then
  fail "Old showcase theme output remains in wp-content/themes"
fi

if command -v php >/dev/null 2>&1; then
  while IFS= read -r php_file; do
    php -l "$php_file" >/dev/null || fail "PHP syntax failed: ${php_file#$root_dir/}"
  done < <(find "$theme_dir" -type f -name '*.php' | sort)
else
  printf 'WARN: PHP is not installed; syntax lint skipped.\n' >&2
fi

if [ "$failures" -gt 0 ]; then
  printf 'Structure validation failed for %s with %s issue(s).\n' "$slug" "$failures" >&2
  exit 1
fi

printf 'Structure validation passed for %s.\n' "$slug"
