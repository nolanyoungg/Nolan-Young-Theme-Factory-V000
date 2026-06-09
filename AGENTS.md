# Repository Guidelines

## Purpose
Nolan Young Theme Factory is an AI-assisted WordPress theme factory. It turns user prompt files into complete, installable classic WordPress themes, matching static GitHub Pages previews, ZIP packages, and run reports.

## Prompt Authority
The selected file in `prompts/pending/` is the source of truth. Do not rewrite, summarize, compress, or replace it before sending it to Ollama or Codex. Short prompts require intelligent completion. Long prompts require close preservation of requested structure, copy, tone, pages, and design direction.

## Run Modes
Ollama stages are local draft generators for planning, theme construction, preview creation, and local repair. Codex is the final senior engineering pass in Hybrid mode and the complete generator in Codex-only mode. Ollama-only mode must still attempt a complete result without Codex.

## Hard Contracts
Files in `contracts/` are requirements, not suggestions. Generated output must satisfy the theme structure, preview structure, file-block protocol, versioning, security, quality, and release artifact rules.

## Required Output Paths
Each successful run must produce:
- `wp-content/themes/nolan-showcase-theme-XX/`
- `docs/themes/nolan-showcase-theme-XX/`
- `dist/zipped-themes/nolan-showcase-theme-XX.zip`
- `reports/runs/nolan-showcase-theme-XX/`

## Quality Bar
Generated themes must be complete websites with real content, polished responsive design, compiled local assets, WordPress template coverage, accessibility basics, and a usable static preview. Do not include filler copy, unfinished placeholder files, remote CDN dependencies, secrets, API keys, or weak fallback output.

## Definition of Done
A run is done when the theme builds with `npm run build`, the ZIP is packaged, `bash scripts/validate-all.sh <theme-slug>` passes, the preview is linked from `docs/index.html`, reports are written, and final paths plus next Git commands are printed.
