# Workflow Notes

## Run Summary

- Workflow command used: `bash scripts/run-theme-workflow.sh`
- Mode selected: Codex only
- Codex command used: `codex exec -m gpt-5.5 -c model_reasoning_effort="high"`
- Reported nested Codex usage: 173,132 tokens
- Theme slug: `004_nolan_young_theme_astragrid_systems`
- Reset semantics: intentional; prior generated `000` and `001` outputs were removed.

## Observations

- The installed Codex CLI requires `codex exec` for `--output-last-message`; the previous default `codex` command failed before generation.
- Passing a prompt file path to `codex exec` worked, but it required the agent to infer that it should read the file. A stdin-based prompt handoff would remove that ambiguity.
- The generated raw transcript became a validation hazard because it contained historical memory text with old showcase slugs. Run transcripts should not be scanned by theme quality validators.
- The first validation failure was precise and fixable: the quality validator expected literal `content-home-*` references, and the generated `front-page.php` used `get_template_part()` calls that did not match the grep pattern directly enough.
- The prompt was broad enough that one pass had to plan, reset, generate, package, validate, and repair. This worked, but it was expensive.

## Optimization Ideas

- Change `scripts/run-codex-final-pass.sh` to pipe prompt content into `codex exec -` instead of passing the prompt path as the prompt text.
- Exclude `reports/runs/*/codex-*-raw.md` from validation scans, or store raw transcripts outside paths scanned by quality checks.
- Add a compact reset-run checklist to the generated Codex prompt so reset cleanup rules are explicit without requiring broad repository discovery.
- Add a validator-friendly homepage manifest or improve the quality validator to recognize `get_template_part('template-parts/content', 'home-hero')` as satisfying `content-home-hero.php`.
- Keep the first generation pass focused on generation and validation only; do browser or visual QA from the parent workflow after the generator exits.
