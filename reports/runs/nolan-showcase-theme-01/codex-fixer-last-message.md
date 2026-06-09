Completed the fixer pass for `nolan-showcase-theme-01`.

- Rebuilt the theme assets with `npm run build`.
- Regenerated the ZIP at [dist/zipped-themes/nolan-showcase-theme-01.zip](/Users/nolany/codex/Nolan-Young-Theme-Factory/dist/zipped-themes/nolan-showcase-theme-01.zip).
- Updated the run report to match the final state, including the verbatim prompt record in [reports/runs/nolan-showcase-theme-01/codex-full-prompt.md](/Users/nolany/codex/Nolan-Young-Theme-Factory/reports/runs/nolan-showcase-theme-01/codex-full-prompt.md) and the current validation result in [reports/runs/nolan-showcase-theme-01/validation-latest.txt](/Users/nolany/codex/Nolan-Young-Theme-Factory/reports/runs/nolan-showcase-theme-01/validation-latest.txt).
- Final validation passes: `bash scripts/validate-all.sh nolan-showcase-theme-01`.

Next Git commands:
```bash
git status --short
git add wp-content/themes/nolan-showcase-theme-01 docs/themes/nolan-showcase-theme-01 docs/index.html dist/zipped-themes/nolan-showcase-theme-01.zip reports/runs/nolan-showcase-theme-01 scripts/validate-zip-freshness.sh
git commit -m "Generate nolan-showcase-theme-01"
```