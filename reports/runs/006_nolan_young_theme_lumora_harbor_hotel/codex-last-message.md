Generated the Lumora Harbor Hotel theme and matching static preview tree.

- Theme root is in [wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/functions.php](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/functions.php) with the sticky Nolan-menu header in [header.php](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/header.php), the page templates, the required `inc/` files, and the local SVG asset set.
- Static preview is in [docs/themes/006_nolan_young_theme_lumora_harbor_hotel/homepage_preview.html](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/docs/themes/006_nolan_young_theme_lumora_harbor_hotel/homepage_preview.html) with all seven required preview pages, local assets, and the service-detail link to [single_services_preview.html](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/docs/themes/006_nolan_young_theme_lumora_harbor_hotel/single_services_preview.html).
- Build artifacts were generated with `npm run build`, producing [assets/css/bundle.css](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/assets/css/bundle.css) and [assets/js/bundle.js](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/assets/js/bundle.js).
- Run progress is recorded in [reports/runs/006_nolan_young_theme_lumora_harbor_hotel/generation-progress.md](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/reports/runs/006_nolan_young_theme_lumora_harbor_hotel/generation-progress.md).

Local checks I ran:
- PHP lint on the theme files
- `bash scripts/validate-theme-structure.sh 006_nolan_young_theme_lumora_harbor_hotel`
- `bash scripts/validate-nolan-menu.sh 006_nolan_young_theme_lumora_harbor_hotel`
- `bash scripts/validate-security.sh 006_nolan_young_theme_lumora_harbor_hotel`

I did not run the gallery-aware preview validation or edit [docs/index.html](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/docs/index.html); that is still owned by the repository workflow step that updates the shared gallery after Codex exits.