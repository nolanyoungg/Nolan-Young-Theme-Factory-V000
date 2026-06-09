# Nolan Young Theme Factory

A small Codex-powered WordPress theme factory.

Put a prompt in `prompts/pending/`, run one script, and receive:
- an installable classic WordPress theme in `wp-content/themes/`
- a static preview in `docs/themes/`
- a WordPress upload ZIP in `dist/zipped-themes/`

The first generated theme is already present:
- Theme: `wp-content/themes/nolan-showcase-theme-01/`
- Preview: `docs/themes/nolan-showcase-theme-01/index.html`
- ZIP: `dist/zipped-themes/nolan-showcase-theme-01.zip`

## Requirements

- Git
- Bash
- Node/npm, for generated theme builds
- `zip` and `unzip`
- Codex CLI
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

Noninteractive example:

```bash
THEME_PROMPT_FILE=prompts/pending/01-premium-photography-studio.txt \
CODEX_MODEL=gpt-5.4-mini \
CODEX_REASONING=low \
bash scripts/run-theme-workflow.sh
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

## Package

```bash
bash scripts/package-theme.sh nolan-showcase-theme-01
```

The ZIP is written to `dist/zipped-themes/<theme-slug>.zip`.

## Push

After validation passes:

```bash
git status
git add .
git commit -m "Add nolan-showcase-theme-01"
git push origin main
```

## Repository Layout

- `prompts/pending/`: prompt files ready to run
- `prompts/completed/`: prompt files after successful runs
- `wp-content/themes/`: generated WordPress themes
- `docs/`: GitHub Pages gallery and static previews
- `dist/zipped-themes/`: packaged upload ZIPs
- `scripts/`: generation, packaging, and validation scripts
