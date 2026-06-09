# Release Artifact Rules

A generated theme is release-ready only when:
- `npm install` and `npm run build` complete inside the theme directory.
- `dist/zipped-themes/<theme-slug>.zip` exists.
- The ZIP contains the theme folder itself.
- The ZIP includes `style.css`, `functions.php`, `assets/css/bundle.css`, and `assets/js/bundle.js`.
- The ZIP does not contain `node_modules/`, `.git/`, `.DS_Store`, source maps, or report files.
- The ZIP is newer than files inside `wp-content/themes/<theme-slug>/`.
- `docs/index.html` links to the preview.
- `reports/runs/<theme-slug>/` contains enough run detail to review what happened.

Release summaries should include the selected mode, selected model or Codex command, output paths, validation result, and next Git commands.
