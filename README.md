# Nolan Young Theme Factory

A small Codex-powered WordPress theme factory.

Put a prompt in `prompts/pending/`, run one script, and receive:
- an installable classic WordPress theme in `wp-content/themes/`
- a static preview in `docs/themes/`
- a WordPress upload ZIP in `dist/zipped-themes/`
- an optional GitHub pull request for review

Generated themes are already present:
- Theme: `wp-content/themes/nolan-showcase-theme-01/`
- Preview: `docs/themes/nolan-showcase-theme-01/index.html`
- ZIP: `dist/zipped-themes/nolan-showcase-theme-01.zip`

## Requirements

- Git
- Bash
- Node/npm, for generated theme builds
- `zip` and `unzip`
- Codex CLI
- GitHub CLI (`gh`) for automatic PR creation
- PHP is optional; validation uses `php -l` when available

## Run

```bash
bash scripts/run-theme-workflow.sh
```

The script asks for:
- a prompt file from `prompts/pending/`
- a Codex model: `gpt-5.5`, `gpt-5.4`, or `gpt-5.4-mini`
- a reasoning level: `low`, `medium`, `high`, or `xhigh`

Defaults:
- model: `gpt-5.4-mini`
- reasoning: `low`
- PR creation: automatic after validation passes

Noninteractive example:

```bash
THEME_PROMPT_FILE=prompts/pending/01-premium-photography-studio.txt \
CODEX_MODEL=gpt-5.4-mini \
CODEX_REASONING=low \
bash scripts/run-theme-workflow.sh
```

To generate locally without opening a PR:

```bash
SKIP_THEME_PR=1 bash scripts/run-theme-workflow.sh
```

The old command still works as a wrapper:

```bash
bash scripts/run-hybrid-theme-workflow.sh
```

## Validate

```bash
bash scripts/validate-theme.sh nolan-showcase-theme-01
```

Or:

```bash
bash scripts/validate-all.sh
```

Validation blocks unsafe patterns including secrets, placeholder content, remote preview dependencies, and unsanitized SVG media upload support. Committed local SVG assets are allowed.

## Package

```bash
bash scripts/package-theme.sh nolan-showcase-theme-01
```

The ZIP is written to `dist/zipped-themes/<theme-slug>.zip`.

## Preview

GitHub Pages deploys the `docs/` folder from `main`. Each generated preview must be linked from `docs/index.html` and should closely match the WordPress theme layout, copy, navigation, and visual system.

## Pull Requests

After a theme passes validation, `scripts/run-theme-workflow.sh` automatically creates a branch, commits the generated output, pushes it to GitHub, and opens a PR.

To run that step manually:

```bash
bash scripts/create-theme-pr.sh nolan-showcase-theme-01
```

The script stages only:
- `wp-content/themes/<theme-slug>/`
- `docs/themes/<theme-slug>/`
- `dist/zipped-themes/<theme-slug>.zip`
- `docs/index.html`

Set `SKIP_THEME_PR=1` to disable automatic PR creation for a local-only run.

## Repository Layout

- `prompts/pending/`: prompt files ready to run
- `prompts/completed/`: prompt files after successful runs
- `wp-content/themes/`: generated WordPress themes
- `docs/`: GitHub Pages gallery and static previews
- `dist/zipped-themes/`: packaged upload ZIPs
- `scripts/`: generation, packaging, and validation scripts
