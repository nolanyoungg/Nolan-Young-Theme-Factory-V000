# Repository Guidelines

This repository is intentionally small.

## Primary Workflow

Use `bash scripts/run-theme-workflow.sh`.

The workflow should:
- choose a prompt from `prompts/pending/`
- choose a Codex model and reasoning level
- generate a classic WordPress theme under `wp-content/themes/<slug>/`
- generate a static preview under `docs/themes/<slug>/`
- package the theme ZIP under `dist/zipped-themes/`
- run `bash scripts/validate-theme.sh <slug>`

## Prompt Rules

Prompt files are authoritative. Do not rewrite, summarize, or compress the selected prompt before giving it to Codex.

## Theme Rules

Generated themes must be complete enough to install in WordPress:
- valid `style.css` theme header
- non-empty `functions.php`
- core templates such as `index.php`, `header.php`, `footer.php`, `page.php`, and `single.php`
- local compiled CSS and JS
- no secrets, API keys, CDNs, or remote runtime dependencies
- no lorem ipsum, TODO markers, or placeholder copy

## Preview Rules

Each theme needs a static preview at `docs/themes/<slug>/index.html`, with local CSS and JS. Link it from `docs/index.html`.

## Definition of Done

A theme is ready when:
- `bash scripts/validate-theme.sh <slug>` passes
- `dist/zipped-themes/<slug>.zip` exists
- the ZIP contains `<slug>/style.css`
- the preview works from `docs/themes/<slug>/index.html`
