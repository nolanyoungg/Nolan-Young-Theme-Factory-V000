# Global Instructions

## Technical Rules
- The selected prompt file is authoritative and must be included verbatim in model prompts.
- Use the selected `nolan-showcase-theme-XX` slug consistently across theme, preview, ZIP, and reports.
- Follow contracts before creative preferences.
- Build classic WordPress themes with local assets and no remote runtime dependencies.

## Required File Behavior
- Required files must contain useful implementation, documentation, or build logic.
- Generated PHP must use WordPress APIs, escaping, sanitization, and nonces where appropriate.
- Generated assets must be local to the theme or preview.

## Output Requirements
- File-writing stages must use the file-block protocol.
- Reports must be readable Markdown.
- The result must be buildable, packageable, and validatable.

## Failure Conditions
- Missing required files.
- Rewritten or summarized user prompt.
- Secrets, unsafe PHP, or remote scripts.
- Empty output, weak fallback output, or report-only output in a file-writing stage.
