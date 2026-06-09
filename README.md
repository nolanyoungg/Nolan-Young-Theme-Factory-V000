# Nolan Young Theme Factory

Nolan Young Theme Factory is a hybrid local-AI and Codex workflow for generating complete, polished, installable classic WordPress themes from prompt files. It supports local Ollama drafting, Codex finalization, Codex-only generation, and Ollama-only experimentation.

## Repository Structure
- `prompts/pending/`: user `.txt` or `.md` theme briefs waiting to run.
- `wp-content/themes/`: generated WordPress themes.
- `docs/themes/`: static GitHub Pages previews.
- `dist/zipped-themes/`: packaged WordPress upload ZIPs.
- `reports/runs/`: assembled prompts, raw model output, validation logs, and summaries.
- `agents/`, `instructions/`, `contracts/`, `codex/`: model guidance and hard requirements.

## Required Tools
Install Git, Bash or PowerShell, Node/npm, and `zip`. Ollama is optional but required for Hybrid and Ollama-only modes. Codex is optional but required for Hybrid and Codex-only modes. PHP is optional; validation uses it for syntax checks when available.

## Add a Prompt
Place a prompt file in `prompts/pending/`, for example:

```bash
cp my-theme.txt prompts/pending/my-theme.txt
```

Do not put secrets, API keys, passwords, or private credentials in prompts.

## Run the Factory

```bash
bash scripts/run-hybrid-theme-workflow.sh
```

Choose one mode:

1. Hybrid: Ollama drafts the theme and Codex performs the final engineering pass.
2. Codex only: Codex performs complete generation and finalization.
3. Ollama only: Ollama performs local generation without Codex.

## Model Selection
For Ollama modes, the script runs `ollama list` and requires selection of an installed model. Pull a model with:

```bash
ollama pull <model>
```

For Codex modes, confirm the command at runtime or set `CODEX_COMMAND`, for example:

```bash
CODEX_COMMAND="codex --model gpt-5.5 --reasoning high" bash scripts/run-hybrid-theme-workflow.sh
```

Interactive Codex runs now prompt for:
- the Codex command or executable
- the Codex model
- the reasoning level
- optional extra Codex arguments

Noninteractive overrides also support `CODEX_EXECUTABLE`, `CODEX_MODEL`, `CODEX_REASONING`, and `CODEX_EXTRA_ARGS` when you want the script to build the Codex command for you.

## Noninteractive Overrides

```bash
THEME_FACTORY_MODE=codex \
THEME_PROMPT_FILE=prompts/pending/my-theme.txt \
CODEX_COMMAND="codex" \
bash scripts/run-hybrid-theme-workflow.sh
```

Supported variables: `THEME_FACTORY_MODE=hybrid|codex|ollama`, `THEME_PROMPT_FILE`, `OLLAMA_MODEL`, `CODEX_COMMAND`, `SKIP_CODEX_FINAL=1`, `SKIP_OLLAMA_REVIEW_FIX=1`, `SKIP_NPM_BUILD=1`, `SKIP_PACKAGE=1`, and `SKIP_VALIDATE=1`.

## Outputs
Each run creates a new slug such as `nolan-showcase-theme-01`, then writes the WordPress theme, static preview, packaged ZIP, and reports to the required output paths.

## Manual Validation

```bash
bash scripts/validate-all.sh nolan-showcase-theme-01
```

If no themes exist, `bash scripts/validate-all.sh` performs starter repo checks and exits cleanly.

## GitHub Pages and ZIPs
`docs/index.html` is the preview gallery. Generated previews are linked from that page and deployed by `.github/workflows/deploy-preview.yml`. ZIP packages are written to `dist/zipped-themes/` and contain the theme folder itself for normal WordPress upload.

## Troubleshooting
- `Ollama not found`: install Ollama or use Codex-only mode.
- `Ollama model not installed`: run `ollama list`, then `ollama pull <model>`.
- `Codex command not found`: install or configure Codex, or enter the correct command.
- `npm missing`: install Node.js with npm.
- `zip missing`: install the `zip` command-line tool.
- `validation failed`: read `reports/runs/<theme-slug>/validation-latest.txt`.
- `no prompt files found`: add a `.txt` or `.md` file to `prompts/pending/`.
- `PHP unavailable`: PHP syntax checks are skipped, but other validation still runs.

## Security Notes
Generated themes must not include secrets, API keys, remote scripts, CDN dependencies, private keys, or credential-like strings. The validator blocks common unsafe PHP functions and suspicious embedded secrets.
