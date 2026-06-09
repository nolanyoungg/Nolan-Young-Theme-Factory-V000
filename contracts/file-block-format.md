# File Block Format

Ollama stages that create or edit files must output file blocks exactly like this:

```text
---FILE: relative/path/from/repo/root---
file contents here
---END FILE---
```

Example:

```text
---FILE: wp-content/themes/nolan-showcase-theme-01/style.css---
/*
Theme Name: Nolan Showcase Theme 01
Theme URI: https://example.com/
Author: Nolan Young
Description: Generated classic WordPress theme.
Version: 1.0.0
Text Domain: nolan-showcase-theme-01
*/
---END FILE---
```

Parser requirements:
- Reject absolute paths.
- Reject paths containing `..`.
- Create parent directories as needed.
- Overwrite target files when a stage intentionally provides a block for that file.
- Preserve all content between markers.
- Report how many files were written.
- Fail when a builder or preview stage returns no file blocks.

Planner and review stages may output Markdown reports without file blocks. Builder and preview stages must output file blocks. Fixer stages may output file blocks or a report-only review.
