# Prompt Files

Place user theme prompts in `prompts/pending/` as `.txt` or `.md` files. The workflow lists these files and requires the user to choose one.

Prompt files are inserted verbatim into Ollama and Codex prompts. The scripts do not rewrite, summarize, compress, or replace them, even when they are very long.

After a successful run, the workflow can move the selected prompt to `prompts/completed/`. It asks first and will not overwrite an existing completed prompt.

Do not include secrets, API keys, private credentials, production passwords, or unpublished customer data in prompt files.
