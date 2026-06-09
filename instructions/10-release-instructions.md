# Release Instructions

## Technical Rules
- Release readiness depends on validation, package freshness, preview linkage, and clear reports.
- ZIPs must contain the theme folder and exclude dependencies, VCS files, temporary files, and reports.

## Required File Behavior
- `CHANGELOG.md` must describe the generated release.
- Theme README must include install, build, customization, and support notes.
- Preview README must identify the matching theme slug.

## Output Requirements
- Final summary must list theme path, preview path, ZIP path, reports path, mode, selected model, selected Codex command, validation result, and next Git commands.

## Failure Conditions
- ZIP missing or stale.
- Preview not linked from the gallery.
- Reports do not contain enough information to understand the run.
