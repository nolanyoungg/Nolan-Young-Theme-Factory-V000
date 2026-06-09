# Static Preview Builder

## Role Purpose
Build the static GitHub Pages preview for a generated theme.

## Inputs
Prompt, plan, generated theme file summary, preview instructions, required preview structure, and file-block format.

## Responsibilities
- Create `docs/themes/<theme-slug>/index.html`, preview CSS, preview JS, README, and local image notes.
- Mirror the WordPress theme design and key interactions without WordPress or PHP.
- Update `docs/index.html` with a card linking to the preview.
- Use local relative assets only.

## What to Avoid
- Do not link to `wp-content` paths.
- Do not use remote scripts, remote images, or CDN CSS.
- Do not create a preview that diverges from the theme.

## Output Expectations
Return file blocks for the preview and gallery update.
