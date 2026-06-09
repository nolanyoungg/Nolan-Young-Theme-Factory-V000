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
- required root files: `style.css`, `functions.php`, `theme.json`, `screenshot.png`, `README.md`, `header.php`, `footer.php`, `front-page.php`, `index.php`, `page.php`, `single.php`, `archive.php`, `search.php`, `searchform.php`, `404.php`, `403.php`, `comments.php`, `package.json`, `package-lock.json`, `LICENSE.txt`, and `CHANGELOG.md`
- required folders: `inc/`, `assets/`, `src/`, `template-parts/`, `page-templates/`, `blocks/`, `build/`, `docs/`, and `accessibility/`
- local compiled CSS and JS
- no secrets, API keys, CDNs, or remote runtime dependencies
- no lorem ipsum, TODO markers, or placeholder copy
- do not enable SVG media uploads with `upload_mimes`; committed local SVG assets are allowed

## Preview Rules

Each theme needs a static preview at `docs/themes/<slug>/index.html`, with local CSS and JS. Link it from `docs/index.html`.

The static preview should closely mirror the WordPress theme: same visual system, section order, navigation labels, core copy, and responsive layout intent. GitHub Pages is the review surface, so preview drift is a release blocker.

## Pull Request Flow

After validation, `scripts/run-theme-workflow.sh` automatically calls `scripts/create-theme-pr.sh <slug>` to create a branch, commit generated theme output, push it, and open a GitHub PR. It stages only the theme directory, preview directory, ZIP, and `docs/index.html`. Set `SKIP_THEME_PR=1` only for local-only test runs.

## Definition of Done

A theme is ready when:
- `bash scripts/validate-theme.sh <slug>` passes
- `dist/zipped-themes/<slug>.zip` exists
- the ZIP contains `<slug>/style.css`
- the preview works from `docs/themes/<slug>/index.html`
