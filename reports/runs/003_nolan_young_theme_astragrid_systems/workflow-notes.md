# Workflow Notes

## Run Summary

- Workflow command used: `bash scripts/run-hybrid-theme-workflow.sh`
- Mode selected: Codex only
- Theme slug: `003_nolan_young_theme_astragrid_systems`
- Prompt source: `prompts/pending/003-astragrid-systems-codex-only.md`
- Final packaging command: `bash scripts/package-theme.sh 003_nolan_young_theme_astragrid_systems`

## Observations

- The initial 003 retry demonstrated why copied prompts need model text and reset semantics reviewed before execution.
- The generator eventually produced a complete WordPress theme, static preview tree, local SVG assets, and ZIP, but it required parent workflow intervention around repo contracts.
- The important process failure was `docs/index.html`: the page visibly showed only the newest theme while keeping old preview links hidden. The validator now checks for visible iframe cards and buttons for every generated preview directory.
- The generated raw transcript was too large to keep as a normal repo artifact. Run summaries are more useful and cheaper to review.

## Optimization Notes

- Keep `gpt-5.4-mini` / low reasoning as the repo default for routine generation and reserve higher reasoning for requested stress tests.
- Use context-specific variables such as `CODEX_MODEL_GENERATION` and `CODEX_REASONING_GENERATION` when a run needs a different model.
- Validate shared release surfaces early after generation: `docs/index.html`, preview directories, and ZIP freshness.
- Treat gallery drift as a release blocker, not a cosmetic issue.
