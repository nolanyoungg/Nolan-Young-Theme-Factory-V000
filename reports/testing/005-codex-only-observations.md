# 005 Codex-Only Generation Observations

## Aborted Run Notes

The first useful 005 retry was stopped because it was wasting usage and drifting into low-quality checklist output.

Observed issues:

- The model emitted and replayed very large patches before checking validators.
- It read validation scripts only after generating a large shallow tree.
- It copied documentation-style asset names such as `prompt-specific-visual-1.svg`.
- It produced thin template parts and preview pages that satisfied filenames but did not meet the premium output bar.
- It used filler headings such as `Services Preview`, `Process Preview`, `Featured Work Preview`, `Service Detail`, and `Footer Resources`.
- It generated `example.com` theme metadata.

Repo fixes applied before retry:

- Codex-only workflow now tells the model to read validators and contracts before writing generated files.
- Codex-only prompt assembly no longer enumerates existing gallery cards, since `docs/index.html` is owned by the workflow script.
- Quality validation now rejects generic numbered asset names, preview/checklist filler copy, `example.com`, very thin template parts, and undersized preview CSS.
- Contracts now explicitly forbid placeholder-style visual filenames and one-line checklist output.
