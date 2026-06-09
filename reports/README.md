# Run Reports

Each generation run writes reports to `reports/runs/<theme-slug>/`.

Reports may include:
- `metadata.env`: selected mode, model, command, prompt path, and timestamps.
- `ollama-<stage>-prompt.md`: assembled prompt sent to Ollama.
- `ollama-<stage>-raw.md`: raw Ollama output.
- `codex-<mode>-prompt.md`: assembled prompt sent to Codex.
- `validation-latest.txt`: most recent validation output.
- `plan.md`, `local-review.md`, and release notes produced by model stages.

Reports are meant for debugging, review, and reproducibility. They must not contain secrets.
