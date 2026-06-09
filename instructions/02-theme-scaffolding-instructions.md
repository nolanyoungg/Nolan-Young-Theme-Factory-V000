# Theme Scaffolding Instructions

## Technical Rules
- Create the exact required theme directory and files under `wp-content/themes/<theme-slug>/`.
- Keep source files, compiled assets, docs, and templates aligned.
- Do not overwrite a different slug or old version.

## Required File Behavior
- Root files must make the theme installable.
- `package.json` must define a real `build` script.
- `build/webpack.config.js` must produce `assets/css/bundle.css` and `assets/js/bundle.js`.
- Support docs must explain installation and customization for this generated theme.

## Output Requirements
- Builder output must include file blocks for all required theme files.
- File contents must be complete enough for validation and packaging.

## Failure Conditions
- Missing required directories or files.
- Build pipeline does not create compiled assets.
- Required files are present but empty or generic.
