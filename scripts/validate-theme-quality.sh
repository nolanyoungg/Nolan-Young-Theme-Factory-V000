#!/usr/bin/env bash
set -Eeuo pipefail

script_dir="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
source "$script_dir/theme-factory-common.sh"
root_dir="$(theme_factory_repo_root)"
cd "$root_dir"

slug="${1:-}"
[ -n "$slug" ] || theme_factory_fail "Usage: bash scripts/validate-theme-quality.sh <theme-slug>"

theme_dir="$root_dir/wp-content/themes/$slug"
preview_dir="$root_dir/docs/themes/$slug"
failures=0

fail() {
  printf 'FAIL: %s\n' "$*" >&2
  failures=$((failures + 1))
}

strict_generation_quality=0
case "$slug" in
  [0-9][0-9][0-9]_*)
    slug_number="${slug%%_*}"
    if [ "$slug_number" -ge 5 ]; then
      strict_generation_quality=1
    fi
    ;;
esac

scan_patterns() {
  local path="$1"
  grep -R -I -n -i -E \
    --exclude='*.svg' \
    --exclude='*.png' \
    --exclude='*.jpg' \
    --exclude='*.jpeg' \
    --exclude='*.webp' \
    --exclude='*.gif' \
    --exclude='*.css' \
    --exclude='*.scss' \
    --exclude='*.js' \
    --exclude='*.map' \
    'lorem ipsum|todo|placeholder|sample text|coming soon|sample service|example service|replace this|dummy content|image here|gray box|we are passionate about excellence|your success is our mission|we help businesses grow' \
    "$path" 2>/dev/null || true
}

scan_strict_patterns() {
  local path="$1"
  grep -R -I -n -i -E \
    --exclude='*.svg' \
    --exclude='*.png' \
    --exclude='*.jpg' \
    --exclude='*.jpeg' \
    --exclude='*.webp' \
    --exclude='*.gif' \
    --exclude='*.css' \
    --exclude='*.scss' \
    --exclude='*.js' \
    --exclude='*.map' \
    'request assessment preview|services preview|process preview|featured work preview|homeowner proof preview|footer resources|example\.com' \
    "$path" 2>/dev/null || true
}

scan_generic_asset_names() {
  local path="$1"
  find "$path" -type f \( \
    -name 'landscape-garden-pathway.*' -o \
    -name 'restaurant-plated-dish.*' -o \
    -name 'construction-framing-crew.*' -o \
    -name 'software-dashboard-interface.*' -o \
    -name 'wellness-treatment-room.*' -o \
    -name 'real-estate-kitchen-detail.*' -o \
    -name 'prompt-specific-visual-*.*' -o \
    -name 'icon1.*' \
  \) -print 2>/dev/null || true
}

scan_thin_files() {
  local path="$1"
  find "$path" -type f \( -name '*.php' -o -name '*.html' -o -name '*.css' \) \
    ! -name 'style.css' \
    ! -path '*/reports/runs/*' \
    -size -420c \
    -print 2>/dev/null || true
}

if [ ! -d "$theme_dir" ]; then
  fail "Missing theme directory: wp-content/themes/$slug"
else
  theme_matches="$(scan_patterns "$theme_dir")"
  if [ -n "$theme_matches" ]; then
    printf '%s\n' "$theme_matches" >&2
    fail "Theme contains placeholder or filler copy"
  fi

  if [ "$strict_generation_quality" -eq 1 ]; then
    theme_strict_matches="$(scan_strict_patterns "$theme_dir")"
    if [ -n "$theme_strict_matches" ]; then
      printf '%s\n' "$theme_strict_matches" >&2
      fail "Theme contains checklist filler or non-production metadata"
    fi
  fi

  theme_generic_assets="$(scan_generic_asset_names "$theme_dir")"
  if [ -n "$theme_generic_assets" ]; then
    printf '%s\n' "$theme_generic_assets" >&2
    fail "Theme contains copied generic or non-specific asset filenames"
  fi

  if [ "$strict_generation_quality" -eq 1 ]; then
    thin_theme_files="$(scan_thin_files "$theme_dir/template-parts")"
    if [ -n "$thin_theme_files" ]; then
      printf '%s\n' "$thin_theme_files" >&2
      fail "Theme template parts are too thin to be premium generated output"
    fi
  fi

  if [ -f "$theme_dir/assets/css/theme.css" ]; then
    [ "$(wc -c < "$theme_dir/assets/css/theme.css" | tr -d ' ')" -ge 1000 ] || fail "Theme CSS is too small to be meaningful"
    grep -q ':root' "$theme_dir/assets/css/theme.css" || fail "Theme CSS is missing root variables"
    grep -q 'body' "$theme_dir/assets/css/theme.css" || fail "Theme CSS is missing body styling"
    grep -q 'site-header' "$theme_dir/assets/css/theme.css" || fail "Theme CSS is missing header styling"
  else
    fail "Missing theme CSS"
  fi

  if [ -f "$theme_dir/assets/js/theme.js" ]; then
    [ "$(wc -c < "$theme_dir/assets/js/theme.js" | tr -d ' ')" -ge 400 ] || fail "Theme JS is too small to be meaningful"
  else
    fail "Missing theme JS"
  fi

  grep -R -I -n -E 'wp_enqueue_style|wp_enqueue_script' "$theme_dir" >/dev/null 2>&1 || fail "Missing asset enqueue calls"
  grep -R -I -n -E 'wp_enqueue_style' "$theme_dir" >/dev/null 2>&1 || fail "Missing wp_enqueue_style call"
  grep -R -I -n -E 'wp_enqueue_script' "$theme_dir" >/dev/null 2>&1 || fail "Missing wp_enqueue_script call"
  grep -R -I -n -E 'front-page|content-home-hero|content-home-services|content-home-work|content-home-process|content-home-testimonials|content-home-cta' "$theme_dir/front-page.php" "$theme_dir/template-parts" >/dev/null 2>&1 || fail "Homepage template parts are missing or not referenced"
  grep -R -I -n -E '\.(jpg|jpeg|png|webp|svg)' "$theme_dir" >/dev/null 2>&1 || fail "Theme does not reference local visual assets"
  [ -f "$theme_dir/README.md" ] || fail "Missing theme README"
  [ -f "$theme_dir/CHANGELOG.md" ] || fail "Missing CHANGELOG"
fi

if [ -d "$preview_dir" ]; then
  preview_matches="$(scan_patterns "$preview_dir")"
  if [ -n "$preview_matches" ]; then
    printf '%s\n' "$preview_matches" >&2
    fail "Preview contains placeholder or filler copy"
  fi

  if [ "$strict_generation_quality" -eq 1 ]; then
    preview_strict_matches="$(scan_strict_patterns "$preview_dir")"
    if [ -n "$preview_strict_matches" ]; then
      printf '%s\n' "$preview_strict_matches" >&2
      fail "Preview contains checklist filler or non-production metadata"
    fi
  fi

  preview_generic_assets="$(scan_generic_asset_names "$preview_dir")"
  if [ -n "$preview_generic_assets" ]; then
    printf '%s\n' "$preview_generic_assets" >&2
    fail "Preview contains copied generic or non-specific asset filenames"
  fi

  if [ "$strict_generation_quality" -eq 1 ]; then
    thin_preview_files="$(scan_thin_files "$preview_dir")"
    if [ -n "$thin_preview_files" ]; then
      printf '%s\n' "$thin_preview_files" >&2
      fail "Preview pages or CSS are too thin to represent the generated theme"
    fi
  fi

  if [ -f "$preview_dir/assets/css/preview.css" ]; then
    if [ "$strict_generation_quality" -eq 1 ]; then
      [ "$(wc -c < "$preview_dir/assets/css/preview.css" | tr -d ' ')" -ge 3000 ] || fail "Preview CSS is too small to be a polished static preview"
    fi
    grep -q ':root' "$preview_dir/assets/css/preview.css" || fail "Preview CSS is missing root variables"
    grep -q 'body' "$preview_dir/assets/css/preview.css" || fail "Preview CSS is missing body styling"
    grep -q 'site-header' "$preview_dir/assets/css/preview.css" || fail "Preview CSS is missing header styling"
  else
    fail "Missing preview CSS"
  fi
fi

if [ -f "$root_dir/docs/index.html" ]; then
  grep -Eq "themes/$slug/(index|homepage_preview)\\.html" "$root_dir/docs/index.html" || fail "docs/index.html does not link to $slug preview"
else
  fail "Missing docs/index.html"
fi

old_showcase_pattern='nolan'"-showcase-theme-[0-9]+"
if grep -R -I -n -E "$old_showcase_pattern" "$root_dir" \
  --exclude-dir=.git \
  --exclude='codex-*-raw.md' \
  --exclude='*.png' \
  --exclude='*.jpg' \
  --exclude='*.jpeg' \
  --exclude='*.webp' >/dev/null 2>&1; then
  grep -R -I -n -E "$old_showcase_pattern" "$root_dir" \
    --exclude-dir=.git \
    --exclude='codex-*-raw.md' \
    --exclude='*.png' \
    --exclude='*.jpg' \
    --exclude='*.jpeg' \
    --exclude='*.webp' >&2
  fail "Old showcase theme references remain"
fi

if [ "$failures" -gt 0 ]; then
  printf 'Quality validation failed for %s with %s issue(s).\n' "$slug" "$failures" >&2
  exit 1
fi

printf 'Quality validation passed for %s.\n' "$slug"
