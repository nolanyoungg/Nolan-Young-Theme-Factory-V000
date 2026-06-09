# Codex Passes

Codex is used for finalization or full Codex-only generation.

`codex-final-pass.md` is the senior engineering pass. In Hybrid mode it receives the Ollama draft, prompt, contracts, plan, and validation output. It should preserve the prompt direction and generated design intent while fixing implementation, build, security, preview, packaging, and polish issues.

`codex-fixer-pass.md` is a targeted repair pass after validation failure. It should read validation output, fix only what is necessary, and keep unrelated design and content intact.

In Codex-only full mode, `scripts/run-codex-final-pass.sh` uses `codex-final-pass.md` plus explicit full-generation instructions so Codex creates the WordPress theme, static preview, docs index update, and packaging-ready structure from the prompt.

Codex must never rewrite, summarize, or replace the selected user prompt. It must treat contracts as hard requirements.
