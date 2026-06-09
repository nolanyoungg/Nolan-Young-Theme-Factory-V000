

## Codex Fixer Pass

# Codex Fixer Pass

You are a targeted fixer for Nolan Young Theme Factory.

Read the validation failures, generated files, selected prompt, and contracts. Fix only what is necessary for validation and release readiness. Do not redesign unrelated files, remove prompt-specific content, or replace the theme direction unless a file is unrecoverably broken.

Required behavior:
- Repair missing files, syntax errors, build failures, stale preview links, security failures, quality blockers, and ZIP-readiness issues.
- Keep file paths under the selected theme slug.
- Maintain local assets and local runtime dependencies only.
- Ensure validation can pass after the fix.

Output should be direct repository edits through Codex. If the Codex environment cannot edit files directly, provide complete file blocks using the repository file-block protocol.


## AGENTS.md

# Repository Guidelines

## Purpose
Nolan Young Theme Factory is an AI-assisted WordPress theme factory. It turns user prompt files into complete, installable classic WordPress themes, matching static GitHub Pages previews, ZIP packages, and run reports.

## Prompt Authority
The selected file in `prompts/pending/` is the source of truth. Do not rewrite, summarize, compress, or replace it before sending it to Ollama or Codex. Short prompts require intelligent completion. Long prompts require close preservation of requested structure, copy, tone, pages, and design direction.

## Run Modes
Ollama stages are local draft generators for planning, theme construction, preview creation, and local repair. Codex is the final senior engineering pass in Hybrid mode and the complete generator in Codex-only mode. Ollama-only mode must still attempt a complete result without Codex.

## Hard Contracts
Files in `contracts/` are requirements, not suggestions. Generated output must satisfy the theme structure, preview structure, file-block protocol, versioning, security, quality, and release artifact rules.

## Required Output Paths
Each successful run must produce:
- `wp-content/themes/nolan-showcase-theme-XX/`
- `docs/themes/nolan-showcase-theme-XX/`
- `dist/zipped-themes/nolan-showcase-theme-XX.zip`
- `reports/runs/nolan-showcase-theme-XX/`

## Quality Bar
Generated themes must be complete websites with real content, polished responsive design, compiled local assets, WordPress template coverage, accessibility basics, and a usable static preview. Do not include filler copy, unfinished placeholder files, remote CDN dependencies, secrets, API keys, or weak fallback output.

## Definition of Done
A run is done when the theme builds with `npm run build`, the ZIP is packaged, `bash scripts/validate-all.sh <theme-slug>` passes, the preview is linked from `docs/index.html`, reports are written, and final paths plus next Git commands are printed.


## Required Theme Structure

# Required Theme Structure

Every generated theme must live at `wp-content/themes/nolan-showcase-theme-XX/`, where `XX` is a two-digit version.

Required root files:
- `style.css`
- `functions.php`
- `theme.json`
- `screenshot.png`
- `README.md`
- `.editorconfig`
- `.gitignore`
- `header.php`
- `footer.php`
- `front-page.php`
- `index.php`
- `page.php`
- `single.php`
- `archive.php`
- `search.php`
- `searchform.php`
- `404.php`
- `403.php`
- `comments.php`
- `package.json`
- `package-lock.json`
- `LICENSE.txt`
- `CHANGELOG.md`

Required `inc/` files:
- `inc/setup.php`
- `inc/enqueue.php`
- `inc/template-tags.php`
- `inc/helpers.php`
- `inc/custom-post-types.php`
- `inc/customizer.php`
- `inc/forms.php`
- `inc/newsletter.php`
- `inc/policy-routing.php`

Required asset paths:
- `assets/css/bundle.css`
- `assets/js/bundle.js`
- `assets/icons/icon1.svg`
- `assets/icons/README.md`
- `assets/images/hero/`
- `assets/images/portfolio/`
- `assets/images/texture/`

Required source paths:
- `src/js/main.js`
- `src/scss/main.scss`
- `src/scss/abstracts/_variables.scss`
- `src/scss/abstracts/_mixins.scss`
- `src/scss/abstracts/_functions.scss`
- `src/scss/base/_reset.scss`
- `src/scss/base/_typography.scss`
- `src/scss/base/_accessibility.scss`
- `src/scss/base/_forms.scss`
- `src/scss/base/_newsletter.scss`
- `src/scss/components/_buttons.scss`
- `src/scss/components/_cards.scss`
- `src/scss/components/_forms.scss`
- `src/scss/components/_badges.scss`
- `src/scss/components/_accordion.scss`
- `src/scss/components/_carousel.scss`
- `src/scss/components/_portfolio-filter.scss`
- `src/scss/components/_before-after.scss`
- `src/scss/layout/_container.scss`
- `src/scss/layout/_header.scss`
- `src/scss/layout/_footer.scss`
- `src/scss/layout/_grid.scss`
- `src/scss/layout/_sections.scss`
- `src/scss/pages/_homepage.scss`
- `src/scss/pages/_contact.scss`
- `src/scss/pages/_about-us.scss`
- `src/scss/pages/_services.scss`
- `src/scss/pages/_work.scss`
- `src/scss/pages/_blog.scss`
- `src/scss/pages/_policy.scss`

Required template parts:
- `template-parts/content-page.php`
- `template-parts/content-single.php`
- `template-parts/content-none.php`
- `template-parts/content-policy.php`
- `template-parts/content-search.php`
- `template-parts/content-hero.php`
- `template-parts/content-brand-statement.php`
- `template-parts/content-featured-work.php`
- `template-parts/content-all-services.php`
- `template-parts/content-single-service-highlight.php`
- `template-parts/content-process.php`
- `template-parts/content-style-pillars.php`
- `template-parts/content-testimonials.php`
- `template-parts/content-blog-preview.php`
- `template-parts/content-cta-banner.php`
- `template-parts/content-footer-widgets.php`

Required page templates:
- `page-templates/template-about-us.php`
- `page-templates/template-services.php`
- `page-templates/template-single-service.php`
- `page-templates/template-work.php`
- `page-templates/template-blog.php`
- `page-templates/template-contact.php`
- `page-templates/template-policy.php`

Required support paths:
- `blocks/README.md`
- `build/webpack.config.js`
- `docs/getting-started.md`
- `docs/customization.md`
- `accessibility/README.md`

Build requirement:
- `npm install` and `npm run build` must succeed from the theme directory.
- The build must write `assets/css/bundle.css` and `assets/js/bundle.js`.

WordPress requirement:
- `style.css` must contain a valid `Theme Name`.
- `functions.php` must be non-empty and load setup, enqueue, helper, form, newsletter, and policy modules.
- PHP files must pass `php -l` when PHP is available.


## Required Preview Structure

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


## Theme Versioning

# Theme Versioning

Generated themes use this slug pattern:

```text
nolan-showcase-theme-XX
```

`XX` is a two-digit integer beginning at `01`.

The workflow must:
- Scan `wp-content/themes/`, `docs/themes/`, and `dist/zipped-themes/` for existing matching slugs.
- Select the next available version.
- Never overwrite an existing generated theme, preview, or ZIP.
- Use the same slug for theme, preview, ZIP, and reports.

Examples:
- First run: `nolan-showcase-theme-01`
- Second run: `nolan-showcase-theme-02`
- Tenth run: `nolan-showcase-theme-10`


## Security Rules

# Security Rules

Generated themes and previews must not include:
- `OPENAI_API_KEY`
- `sk-` style API keys
- Private keys
- Filled `.env` files
- Raw password, token, or secret strings
- `eval(`
- `shell_exec(`
- `passthru(`
- `system(`
- Suspicious `base64_decode(` usage
- Remote script tags
- CDN links
- Remote CSS or font dependencies

PHP requirements:
- Escape output with WordPress helpers such as `esc_html()`, `esc_attr()`, `esc_url()`, and `wp_kses_post()`.
- Sanitize form inputs.
- Protect form actions with nonces.
- Avoid direct file writes, command execution, and unsafe dynamic includes.

Asset requirements:
- Use local assets committed in the theme or preview.
- Do not load runtime JavaScript, CSS, fonts, or images from remote domains.


## Quality Rules

# Quality Rules

Generated themes must be complete, polished websites.

Required quality markers:
- Realistic business or portfolio content derived from the prompt.
- Distinct Home, About, Services, Work, Blog, Contact, and Policy experiences.
- Responsive navigation and layouts.
- Accessible focus states, semantic headings, alt text where images are meaningful, and keyboard-safe interactions.
- Compiled CSS and JavaScript with meaningful size.
- Working WordPress enqueue calls.
- Matching static preview linked from the gallery.
- README and CHANGELOG explaining the generated theme.

Blocked content:
- Filler copy.
- Unfinished placeholders.
- Missing page sections promised by the prompt.
- Empty templates that only call `the_content()`.
- Generic toy-demo layouts.
- Broken links to missing local assets.


## Release Artifact Rules

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


## Selected Codex Configuration

Model: not specified
Reasoning level: not specified


## Validation Output

Theme structure validation passed for nolan-showcase-theme-01.
FAIL: Theme lacks service content markers
FAIL: Theme lacks work or portfolio content markers
FAIL: Theme lacks testimonial or client content markers
FAIL: Theme lacks contact or conversion content markers
Theme quality validation failed with 4 issue(s).


## Fixer Task

Repair validation failures for `nolan-showcase-theme-01` with targeted edits.


## Selected Theme Slug

nolan-showcase-theme-01


## User Prompt Verbatim

Create a premium classic WordPress theme for a boutique photography studio.

The brand should feel editorial, warm, cinematic, and high-end. Build a complete, installable classic WordPress theme with polished responsive layouts and a matching static GitHub Pages preview.

Required site sections and pages:
- Home
- About Us
- Services
- Work
- Blog
- Contact
- Policies

Homepage requirements:
- Strong hero with a clear brand statement and booking-oriented CTA
- Featured work section
- Services overview
- Process or approach section
- Testimonials
- Blog or journal preview
- Final contact or booking CTA

Design direction:
- Use local assets only
- Avoid remote CDNs, external fonts, and stock-looking filler
- Use real, specific copy with a refined visual system
- Make navigation, spacing, typography, and image treatment feel polished and intentional

Content requirements:
- Write believable copy for a real studio, not placeholder text
- Include service details, work examples, contact language, and policy content
- Keep the tone professional, confident, and human

Build and output requirements:
- Produce a complete classic WordPress theme with compiled local assets
- Produce a matching static preview for GitHub Pages
- Package the theme as a ZIP ready for WordPress upload
- Validate structure, quality, security, preview linkage, and ZIP freshness

Do not use lorem ipsum, TODO placeholders, or weak fallback pages.
