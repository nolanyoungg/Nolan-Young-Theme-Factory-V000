# Required Preview Structure

Every generated theme must include a static preview at `docs/themes/nolan-showcase-theme-XX/`.

Required files:
- `index.html`
- `assets/css/preview.css`
- `assets/js/preview.js`
- `assets/images/README.md`
- `README.md`

The preview must:
- Work without WordPress, PHP, APIs, remote scripts, CDN CSS, external fonts, or remote images.
- Use local relative paths only.
- Visually mirror the generated WordPress theme.
- Include real page content aligned with the selected prompt.
- Provide working navigation and responsive behavior.
- Be linked from `docs/index.html` with a relative link to `themes/<theme-slug>/index.html`.

The preview may include additional local pages or assets when useful, but the minimum structure above is required.
