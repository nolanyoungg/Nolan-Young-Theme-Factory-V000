# Static Preview Instructions

## Technical Rules
- Build a standalone GitHub Pages preview.
- Use only HTML, local CSS, local JavaScript, and local assets.
- Mirror the generated WordPress theme design and content.

## Required File Behavior
- `docs/themes/<theme-slug>/index.html` must be complete and usable.
- `preview.css` and `preview.js` must be non-empty and meaningful.
- `docs/index.html` must include a card linking to `themes/<theme-slug>/index.html`.

## Output Requirements
- Preview stage must output file blocks for the preview files and gallery update.
- The preview README must explain what the preview represents and how it relates to the theme.

## Failure Conditions
- Preview depends on WordPress, PHP, CDNs, remote images, or external services.
- Gallery does not link to the preview.
- Preview does not match the theme direction.
