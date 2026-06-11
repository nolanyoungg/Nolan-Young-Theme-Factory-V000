Implemented the Codex-only AstraGrid reset/generation run.

Created:
- [theme](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/wp-content/themes/004_nolan_young_theme_astragrid_systems)
- [static preview](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/docs/themes/004_nolan_young_theme_astragrid_systems)
- [ZIP](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/dist/zipped-themes/004_nolan_young_theme_astragrid_systems.zip)
- [gallery](/Users/nolany/codex/repos/Nolan-Young-Theme-Factory-V000/docs/index.html)

Reset cleanup is done: prior `000`/`001` generated themes, previews, ZIPs, completed generated prompts, and old generated run report were removed as requested by the AstraGrid prompt. The gallery now shows only the 004 AstraGrid showcase card.

Validation passes:

```text
Structure validation passed
Quality validation passed
Preview validation passed
Nolan-menu validation passed
Security validation passed
ZIP freshness validation passed
```

I also ran `npm run build` inside the theme and packaged the ZIP. PHP lint ran through the structure validator. I could not do the in-app Browser visual check because the Browser surface was unavailable in this session.

Note: `scripts/run-codex-final-pass.sh` and `scripts/run-hybrid-theme-workflow.sh` were already modified before I started, so I left those existing changes alone.

