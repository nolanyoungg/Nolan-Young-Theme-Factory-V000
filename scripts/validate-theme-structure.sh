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
[ -n "$theme_slug" ] || { printf 'Usage: bash scripts/validate-theme-structure.sh <theme-slug>\n' >&2; exit 2; }
[[ "$theme_slug" =~ ^nolan-showcase-theme-[0-9][0-9]$ ]] || { printf 'Invalid theme slug: %s\n' "$theme_slug" >&2; exit 2; }

theme_dir="wp-content/themes/$theme_slug"
[ -d "$theme_dir" ] || fail "Theme directory missing: $theme_dir"

required_files=(
  "style.css" "functions.php" "theme.json" "screenshot.png" "README.md" ".editorconfig" ".gitignore"
  "header.php" "footer.php" "front-page.php" "index.php" "page.php" "single.php" "archive.php"
  "search.php" "searchform.php" "404.php" "403.php" "comments.php" "package.json" "package-lock.json"
  "LICENSE.txt" "CHANGELOG.md"
  "inc/setup.php" "inc/enqueue.php" "inc/template-tags.php" "inc/helpers.php" "inc/custom-post-types.php"
  "inc/customizer.php" "inc/forms.php" "inc/newsletter.php" "inc/policy-routing.php"
  "assets/css/bundle.css" "assets/js/bundle.js" "assets/icons/icon1.svg" "assets/icons/README.md"
  "src/js/main.js" "src/scss/main.scss"
  "src/scss/abstracts/_variables.scss" "src/scss/abstracts/_mixins.scss" "src/scss/abstracts/_functions.scss"
  "src/scss/base/_reset.scss" "src/scss/base/_typography.scss" "src/scss/base/_accessibility.scss"
  "src/scss/base/_forms.scss" "src/scss/base/_newsletter.scss"
  "src/scss/components/_buttons.scss" "src/scss/components/_cards.scss" "src/scss/components/_forms.scss"
  "src/scss/components/_badges.scss" "src/scss/components/_accordion.scss" "src/scss/components/_carousel.scss"
  "src/scss/components/_portfolio-filter.scss" "src/scss/components/_before-after.scss"
  "src/scss/layout/_container.scss" "src/scss/layout/_header.scss" "src/scss/layout/_footer.scss"
  "src/scss/layout/_grid.scss" "src/scss/layout/_sections.scss"
  "src/scss/pages/_homepage.scss" "src/scss/pages/_contact.scss" "src/scss/pages/_about-us.scss"
  "src/scss/pages/_services.scss" "src/scss/pages/_work.scss" "src/scss/pages/_blog.scss" "src/scss/pages/_policy.scss"
  "template-parts/content-page.php" "template-parts/content-single.php" "template-parts/content-none.php"
  "template-parts/content-policy.php" "template-parts/content-search.php" "template-parts/content-hero.php"
  "template-parts/content-brand-statement.php" "template-parts/content-featured-work.php"
  "template-parts/content-all-services.php" "template-parts/content-single-service-highlight.php"
  "template-parts/content-process.php" "template-parts/content-style-pillars.php" "template-parts/content-testimonials.php"
  "template-parts/content-blog-preview.php" "template-parts/content-cta-banner.php" "template-parts/content-footer-widgets.php"
  "page-templates/template-about-us.php" "page-templates/template-services.php" "page-templates/template-single-service.php"
  "page-templates/template-work.php" "page-templates/template-blog.php" "page-templates/template-contact.php"
  "page-templates/template-policy.php"
  "blocks/README.md" "build/webpack.config.js" "docs/getting-started.md" "docs/customization.md" "accessibility/README.md"
)

required_dirs=(
  "assets/images/hero" "assets/images/portfolio" "assets/images/texture"
)

if [ -d "$theme_dir" ]; then
  for file in "${required_files[@]}"; do
    [ -f "$theme_dir/$file" ] || fail "Missing required file: $theme_dir/$file"
  done

  for dir in "${required_dirs[@]}"; do
    [ -d "$theme_dir/$dir" ] || fail "Missing required directory: $theme_dir/$dir"
  done

  if [ -f "$theme_dir/style.css" ]; then
    grep -Eq '^[[:space:]]*Theme Name:[[:space:]]*.+' "$theme_dir/style.css" || fail "style.css missing valid Theme Name header"
  fi

  if [ -f "$theme_dir/functions.php" ]; then
    [ -s "$theme_dir/functions.php" ] || fail "functions.php is empty"
  fi

  if [ -f "$theme_dir/assets/css/bundle.css" ]; then
    [ "$(wc -c < "$theme_dir/assets/css/bundle.css" | tr -d ' ')" -ge 500 ] || fail "bundle.css is too small"
  fi

  if [ -f "$theme_dir/assets/js/bundle.js" ]; then
    [ "$(wc -c < "$theme_dir/assets/js/bundle.js" | tr -d ' ')" -ge 200 ] || fail "bundle.js is too small"
  fi

  if command -v php >/dev/null 2>&1; then
    while IFS= read -r php_file; do
      php -l "$php_file" >/dev/null || fail "PHP syntax failed: $php_file"
    done < <(find "$theme_dir" -type f -name '*.php' -not -path '*/node_modules/*')
  else
    printf 'INFO: php not found; PHP syntax checks skipped.\n'
  fi
fi

if [ "$failures" -gt 0 ]; then
  printf 'Theme structure validation failed with %s issue(s).\n' "$failures" >&2
  exit 1
fi

printf 'Theme structure validation passed for %s.\n' "$theme_slug"
