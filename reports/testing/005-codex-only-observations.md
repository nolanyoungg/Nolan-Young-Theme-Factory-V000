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

## Completed Run Notes

The successful 005 run was completed with Codex-only generation using the default low-cost command:

`codex exec --model gpt-5.4-mini -c model_reasoning_effort="low"`

What improved:

- The model read repository contracts and validators before writing the theme.
- The generated visual assets used business-specific local SVG names instead of prompt-example or generic numbered names.
- The output included a WordPress theme, static preview pages, run report directory, and packaged ZIP artifact.
- The shared gallery kept the existing 000-004 cards and added 005 instead of replacing the index.
- Full repository validation passed after non-model finalization.

Usage and process concerns:

- The model still replayed large patch/diff output repeatedly after files were already generated, which burned unnecessary usage.
- The model attempted gallery-dependent validation before the workflow-owned gallery update had run, creating avoidable false failures.
- The workflow prompt now tells Codex not to run `validate-all.sh` or `validate-preview.sh` inside Codex and to keep command output concise.
- `theme_factory_update_gallery_index()` was fixed to emit the iframe/button card shape required by `validate-preview.sh`, so future workflow-owned gallery updates match the validator.
- The Nolan menu validator now tolerates missing optional source directories when the required JavaScript exists under another generated path.
- Placeholder-copy scanning now ignores valid HTML `placeholder=` attributes so real form fields do not fail quality validation.

Next optimization target:

- Add a stronger output-budget guardrail for Codex runs: prefer helper scripts or compact file summaries for large generated trees, and avoid printing full patch bodies after each file write.
