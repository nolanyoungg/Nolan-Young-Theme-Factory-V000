# Required Theme Structure

Generated themes must include the full classic WordPress structure described in `AGENTS.md`.

Key points:

- All required root PHP files must exist.
- The `inc/`, `assets/`, `src/`, `template-parts/`, `page-templates/`, `build/`, `docs/`, and `accessibility/` folders must exist.
- Local assets must be present in `assets/css/theme.css` and `assets/js/theme.js`.
- Header markup must implement the Nolan-menu contract in `contracts/nolan-menu-header.md`.
- Theme templates must share structure, class names, and content rhythm with the static preview pages.
- Local industry-appropriate visual assets must exist under `assets/images/` and be used by hero, service, portfolio/work, and visual story sections. SVG/vector assets are valid when the prompt asks for diagrams, interface visuals, generated artwork, or no raster photos.
- The theme must remain installable as a normal WordPress theme ZIP.
