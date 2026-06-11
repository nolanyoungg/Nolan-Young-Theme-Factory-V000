# 003 AstraGrid Workflow Test Notes

- Test prompt was copied from `prompts/completed/004-astragrid-systems-codex-only.md` to `prompts/pending/003-astragrid-systems-codex-only.md`.
- All `004` naming references in the copied prompt were changed to `003`; `rg "004" prompts/pending/003-astragrid-systems-codex-only.md` returned no matches before the run.
- Requested model alias `5.4mini` failed before generation with: `The '5.4mini' model is not supported when using Codex with a ChatGPT account.`
- A tiny preflight confirmed the supported model name is `gpt-5.4-mini` with medium reasoning.
- The full workflow then started with `gpt-5.4-mini`, but the nested Codex run became confused by the copied reset/cleanup language.
- Instead of generating a fresh 003 theme, it decided to duplicate the already-passing 004 theme and preview into 003, then attempted cleanup behavior.
- The run was terminated before validation, packaging, PR work, or any tracked 000/001/004 output changes.
- Partial untracked 003 theme and preview copies were removed after termination.

## Optimization Findings

- Add a model preflight to the workflow before composing or sending the full final prompt. Unsupported model aliases should fail fast with a clear message.
- The prompt generator should override stale model instructions in copied prompts, or add a high-priority line that the wrapper `CODEX_COMMAND` is authoritative for model/reasoning.
- Reset/cleanup language in copied prompts is still too strong. For additive tests, the workflow should either strip reset/delete clauses or add a stronger generated-run instruction: never delete or duplicate existing generated themes during a non-reset run.
- The final Codex prompt is large and caused the nested run to spend tokens reading memory and prior 004 output. A more efficient mode should pass a compact manifest and validation contract first, then only read existing theme files when repairing, not when generating from scratch.
- The workflow should forbid "copy existing generated theme as the new theme" unless explicitly requested. This would have stopped the drift before filesystem writes.
