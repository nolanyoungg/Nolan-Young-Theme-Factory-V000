# Preview Repair Notes: 003 and 004

Date: 2026-06-11

## What Failed

- `003_nolan_young_theme_astragrid_systems` shipped with truncated preview/runtime CSS. The file began mid-rule instead of at `:root`, which made the GitHub Pages preview render as broken even though the required files existed.
- `004_nolan_young_theme_astragrid_systems` SVG assets used `xmlns="https://www.w3.org/2000/svg"` instead of the correct `http://www.w3.org/2000/svg` namespace. Local paths existed, but the invalid namespace created broken/blank visual asset risk in static previews.
- Existing validation checked for required files and page structure, but it did not prove CSS integrity or resolve local `src`/`href` targets deeply enough to catch these preview-quality failures before merge.

## Repair

- Restored the complete 003 CSS from the raw Codex generation transcript and synchronized it across the static preview and WordPress theme CSS outputs.
- Corrected the 004 SVG namespace across the WordPress theme and static preview assets.
- Repackaged 002, 003, and 004 ZIP artifacts after touching generated files.

## New Guardrails

- `scripts/validate-theme-quality.sh` now fails theme and preview CSS that is missing core selectors such as `:root`, `body`, or `site-header`.
- The placeholder-copy scanner now skips CSS, SCSS, JS, and map files so real CSS selectors such as `::placeholder` do not create false failures.
- `scripts/validate-security.sh` now fails invalid SVG namespace usage in theme and preview SVG files.
- `scripts/validate-preview.sh` now resolves local `src` and `href` targets in generated preview HTML so missing local assets, stylesheets, scripts, iframe targets, and page links fail validation.

## Token Efficiency Note

The recent high-reasoning 002 Codex-only run used roughly 115k tokens. The main process lesson is that expensive generation must be protected by stronger repo-side acceptance checks. Validation should catch broken preview output and stale packages immediately, before another high-token run is used to diagnose avoidable static artifact problems.

## Validation

`bash scripts/validate-all.sh` passed for:

- `000_nolan_young_theme_premium_landscaping`
- `001_nolan_young_theme_saas`
- `002_nolan_young_theme_astragrid_systems`
- `003_nolan_young_theme_astragrid_systems`
- `004_nolan_young_theme_astragrid_systems`
