# 002 AstraGrid Systems Workflow Observations

Run date: 2026-06-11

Branch: test/002-generation-gpt55-high

Command:

```bash
THEME_FACTORY_MODE=codex-only \
THEME_PROMPT_FILE=prompts/pending/002-astragrid-systems-codex-only.md \
THEME_SLUG=002_nolan_young_theme_astragrid_systems \
CODEX_COMMAND='codex exec --model gpt-5.5 -c model_reasoning_effort="high"' \
bash scripts/run-hybrid-theme-workflow.sh
```

## Result

- Generated `wp-content/themes/002_nolan_young_theme_astragrid_systems/`.
- Generated `docs/themes/002_nolan_young_theme_astragrid_systems/`.
- Packaged `dist/zipped-themes/002_nolan_young_theme_astragrid_systems.zip`.
- Added a visible 002 gallery card while preserving the visible 000, 001, 003, and 004 cards.
- Moved the completed 002 prompt into `prompts/completed/`.

## Validation

Full repository validation passed after refreshing all generated ZIP artifacts:

```bash
bash scripts/validate-all.sh
```

Passed for 000, 001, 002, 003, and 004:

- structure
- quality
- preview
- Nolan-menu
- security
- ZIP freshness

## Process Notes

- Initial `gpt-5.5` high runs spent too much time in hidden planning/generator composition before creating theme files.
- The first two attempts were stopped because no generated files appeared and no old outputs were being touched.
- A repo fix added Codex-only efficiency guardrails to the generated prompt:
  - preserve existing generated outputs and gallery cards
  - do not read memory files during generation
  - avoid broad old-theme archaeology
  - create output directories and `generation-progress.md` first
  - write validator-critical files early
- The successful run still used about 115k tokens, so `gpt-5.5` high is expensive for one-shot large theme generation.

## Optimization Recommendations

- Keep `gpt-5.5` high for final review or high-risk fixer passes, not default full generation.
- Use `gpt-5.5` low or `gpt-5.4-mini` medium for normal generation tests.
- Make staged Codex-only generation an explicit workflow option if high-reasoning models continue to hold large generated output in hidden reasoning.
- Keep the gallery state and current generated slugs injected by the script instead of making Codex rediscover them from the repo.
- Keep raw Codex logs ignored by git; commit concise summaries and validation output instead.
