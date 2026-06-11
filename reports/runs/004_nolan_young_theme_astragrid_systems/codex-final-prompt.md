# Codex-Only Theme Generation

Theme slug: `004_nolan_young_theme_astragrid_systems`

Codex command: `codex exec -m gpt-5.5 -c model_reasoning_effort="high"`

Read these files before editing:
- AGENTS.md
- agents/00-orchestrator.md
- codex/codex-final-pass.md
- instructions/00-global-instructions.md
- instructions/10-release-instructions.md
- contracts/quality-rules.md
- contracts/release-artifact-rules.md
- contracts/premium-output-standard.md
- contracts/nolan-menu-header.md
- contracts/local-image-rules.md
- contracts/required-preview-structure.md

Task:
- generate the complete classic WordPress theme from scratch at wp-content/themes/004_nolan_young_theme_astragrid_systems/
- generate the matching static preview from scratch at docs/themes/004_nolan_young_theme_astragrid_systems/
- create index.html plus all seven required preview pages
- create complete runtime CSS and JavaScript; do not rely on an unbuilt Sass step
- create all prompt-required local assets and release files
- preserve all existing numbered generated themes, previews, ZIPs, run reports, and docs/index.html gallery links unless the prompt explicitly says this is a repo reset or zero-out run
- preserve the selected prompt direction
- if the selected prompt says "only generated showcase theme" during a normal next-theme run, interpret that as only within the new theme output; do not remove existing numbered themes or gallery cards
- fix broken PHP, styling, preview mismatch, build issues, accessibility issues, Nolan-menu behavior, local assets, and release readiness problems
- ensure all seven static preview pages exist and visually match the WordPress templates
- ensure the homepage feels premium, complete, and prompt-specific
- do not run a second Codex pass without explicit user confirmation

## Non-Negotiable Premium Output Standard

Follow the selected user prompt as the creative brief. Do not produce a generic agency site unless the prompt asks for one.
Use the required WordPress structure as the scaffold, but make the design, copy, imagery, and page staging fit the prompt.
The final output must look like a polished premium company website, not a file checklist.
Build a complete sticky Nolan-menu header with logo, Services/About/Work/Blog nav, and a right-side Contact Us CTA. Contact must not be a primary desktop nav item.
Use the exact Nolan-menu data attributes and ARIA behavior from contracts/nolan-menu-header.md.
Use local copyright-safe visual assets that match the generated business category. If the prompt requires SVG artwork only, use local SVG assets and do not create raster photography. Do not hotlink images or use CDNs.
Create matching WordPress templates and static preview pages with the same header, footer, classes, section order, image assets, and visual hierarchy.
Create all seven required static preview pages: homepage_preview.html, services_preview.html, about-us_preview.html, contact_preview.html, single_services_preview.html, blog_preview.html, and work_preview.html.
Do not use lorem ipsum, placeholder copy, gray boxes, sample text, TODOs, or generic filler.

Read and obey these contracts:
- contracts/premium-output-standard.md
- contracts/nolan-menu-header.md
- contracts/local-image-rules.md
- contracts/required-preview-structure.md
- contracts/required-theme-structure.md
- contracts/quality-rules.md

## User Prompt

# AstraGrid Systems Codex-Only Theme Prompt

Use Codex only. Do not use Ollama. Do not use any local-only model workflow. Model requested: gpt-5.5 with high reasoning.

Theme folder name:

004_nolan_young_theme_astragrid_systems

Theme display name:

Nolan Young Theme 004 - AstraGrid Systems

This run is a deliberate reset/cleanup generation run. After this run, this must be the only generated showcase theme in the repository.

Expected final output paths:

wp-content/themes/004_nolan_young_theme_astragrid_systems/
docs/themes/004_nolan_young_theme_astragrid_systems/
dist/zipped-themes/004_nolan_young_theme_astragrid_systems.zip
reports/runs/004_nolan_young_theme_astragrid_systems/

Delete/remove all other generated showcase theme outputs from the repository as part of this run, including previous numbered generated theme folders, previous preview folders, previous ZIP artifacts, previous generated run reports, completed generated prompt artifacts, and previous gallery cards.

Do not delete repository source scripts, contracts, AGENTS.md, instructions, agents, templates, workflow files, or core automation infrastructure.

Use this repository's AGENTS.md as the source of truth.

Theme concept:

Build a premium, dark-mode-first website for an AI automation, analytics, and custom software studio called AstraGrid Systems.

AstraGrid Systems helps small businesses and operations teams replace messy manual workflows with automation systems, internal software, dashboards, reporting tools, AI-assisted processes, and cleaner data infrastructure.

This should be similar in business category to the SaaS example, but it must be a completely different theme and brand direction. Do not copy the previous 001 SaaS design. Do not use SignalForge Systems anywhere. Change the visual language, layout rhythm, section composition, visual assets, homepage structure, internal page layouts, copywriting, and gallery treatment.

Design DNA:

Business category:
AI automation, custom software, dashboards, internal tools, analytics, and workflow optimization.

Audience:
Small businesses, operations teams, service companies, ecommerce teams, logistics teams, field-service businesses, and founders.

Visual style:
Modern AI operations platform, premium software studio, technical but approachable, dark-mode-first, sharp, polished, and conversion-focused.

Distinct 004 design direction:
AstraGrid Systems should feel like an intelligent operations grid. Use layered interface panels, gridline systems, orbiting data nodes, command-map visuals, workflow-routing diagrams, metric consoles, glowing connection paths, and premium dark editorial sections.

Color palette:
Deep navy, near-black blue, graphite slate, electric blue, cyan, white text, muted steel text, and small lime-green micro accents.

Layout rhythm:
Command-grid hero, split-screen diagnostic sections, angular cards, metric panels, system-map sections, horizontal workflow bands, case-study cards, dashboard panels, and high-contrast CTA blocks.

Asset style:
Local SVG visuals only. Create original local SVG assets such as:

* AI operations dashboard
* automation node map
* internal tools interface
* analytics console
* workflow routing diagram
* CRM cleanup pipeline
* reporting dashboard
* assistant panel
* system health monitor
* orbital data grid
* terminal card
* project command center

No raster photos. No external images. No remote assets.

Interaction style:
Crisp, fast, minimal, accessible, reduced-motion safe.

Footer architecture:
Large dark conversion footer with services, company links, blog/resources links, contact CTA, contact block, and mini inquiry/newsletter form.

Hard output requirements:

* Use Codex-only workflow.
* Do not use Ollama.
* Do not use any local-only model workflow.
* Create every required WordPress theme file from AGENTS.md and repository contracts.
* Update docs/index.html with one polished gallery card linking to themes/004_nolan_young_theme_astragrid_systems/index.html.
* docs/index.html must show only one showcase card for this generated 004 theme.
* No lorem ipsum.
* No placeholder copy.
* No TODO text.
* No external icon libraries.
* No external APIs.
* No secrets.
* No environment files.
* No CDN dependencies.
* Use local SVG artwork only.
* Use JavaScript.
* No jQuery dependency.
* Runtime CSS must be complete and must not depend on an unbuilt Sass step.
* Run PHP lint.
* Run the repository validation scripts.
* Package the ZIP artifact.
* Final output must pass validation.
* If validation fails, fix the exact validation failure with the Codex fixer pass.

Header requirements:

Build a fully functional premium Nolan-menu header.

Desktop nav:

* Brand/logo area: AstraGrid Systems
* Services opens a full-width menu panel
* About Us opens a full-width menu panel
* Blog opens a full-width menu panel
* Work links to /work/
* Contact links to /contact/
* Contact Us CTA links to /contact/

Services rail labels:

* AI Workflow Automation
* Custom Dashboards
* Internal Tools
* CRM & Data Cleanup
* WordPress Integrations
* Reporting Systems

About Us rail labels:

* Engineering Approach
* How We Scope Work
* Support Standards

Blog panel cards:

* Automation Readiness Checklist
* Dashboard Planning Guide
* AI Chatbot Use Cases
* Data Cleanup Before Reporting

Header behavior:

* Panels open and close on click.
* Only one panel open at a time.
* Same trigger toggles active panel closed.
* Outside click closes active panel.
* Escape closes active panel.
* Backdrop appears while a panel is open.
* Body scroll locks while a panel is open.
* aria-expanded updates accurately.
* aria-controls used where appropriate.
* Closed panels hidden from assistive technology.
* Strong focus-visible states.
* No keyboard traps.
* Right-side panel content updates on left rail hover and keyboard focus.
* Solid readable dark or slate panel backgrounds.
* Stable z-index above all page content.

Mobile header:

* Dedicated mobile drawer, not stacked desktop markup.
* Open button.
* Close button.
* Backdrop click close.
* Outside click close.
* Escape close.
* Accurate aria-expanded.
* Body scroll lock.
* Accordions for Services, About Us, and Blog.
* Direct links for Work and Contact.
* Full-width CTA.
* Solid readable drawer background.
* No keyboard traps.
* No hidden focusable links inside closed accordions.

Homepage requirements:

Build a complete, impressive homepage with at least 12 fully developed sections:

1. Command-grid hero with shooting star background effect.
2. Problem statement section.
3. Services grid.
4. Automation workflow section.
5. Dashboard/reporting showcase.
6. Featured work/project preview with filtering.
7. Process section.
8. Technology/style pillars section.
9. Testimonials/proof section.
10. Blog/resources preview.
11. FAQ section.
12. Final CTA section.

The homepage must feel premium and finished, not like a scaffold.

Footer requirements:

Create a polished dark SaaS footer:

* Large CTA top band.
* Brand statement.
* Services column.
* Company column.
* Blog/resources column.
* Contact block.
* Mini inquiry/newsletter form.
* Bottom legal row.
* Fully responsive layout.
* Strong spacing and polished styling.

Internal page requirements:

About Us:

* Engineering story.
* Values.
* Process.
* Client experience.
* Support standards.
* CTA.

Services:

* Service overview.
* Detailed service sections.
* Comparison grid.
* Process.
* FAQ.
* CTA.

Work:

This should be the strongest visual internal page.

Include:

* At least 12 project cards.
* Filters.
* Featured case study.
* Dashboard/system visuals.
* CTA.

Blog:

Include:

* Resource library.
* At least 6 helpful article cards.
* Topic cards.
* Automation and analytics education angle.
* CTA.

Contact:

Include:

* Accessible inquiry form.
* Name.
* Email.
* Company.
* Website.
* Service type.
* Budget range.
* Timeline.
* Message.
* Contact details.
* Process expectations.
* FAQ.
* Final CTA.

JavaScript requirements:

Use JavaScript and safely no-op if markup is missing. Include these functions:

initHeaderMenu();
initMobileDrawer();
initRailPanels();
initPortfolioFilter();
initCarousel();
initBeforeAfter();
initTestimonials();
initScrollReveal();

Implementation requirements:

* No jQuery.
* No console errors.
* Every function should check for required markup and safely return if not present.
* Use event delegation where appropriate.
* Respect prefers-reduced-motion.

Accessibility requirements:

* Skip link.
* Semantic landmarks.
* Proper heading order.
* Visible focus states.
* Keyboard-accessible nav.
* Keyboard-accessible accordions.
* Accurate aria-expanded.
* Useful aria-controls.
* No hidden focusable controls inside closed panels or accordions.
* prefers-reduced-motion support.
* Forms with labels.
* No console errors.

Gallery page requirement:

Make docs/index.html look polished.

It must:

* Show only one showcase card for this generated 004 theme.
* Include a small homepage snapshot using an embedded local iframe or a local visual preview.
* Link to themes/004_nolan_young_theme_astragrid_systems/index.html.
* Use complete local CSS or inline CSS with no remote dependencies.
* Be responsive and polished.

Static preview requirements:

Create the required preview directory:

docs/themes/004_nolan_young_theme_astragrid_systems/

Create all required static preview files, including:

* index.html
* homepage_preview.html
* services_preview.html
* about-us_preview.html
* contact_preview.html
* single_services_preview.html
* blog_preview.html
* work_preview.html
* assets/css/preview.css
* assets/js/preview.js
* README.md
* local SVG assets under assets/images/ and/or assets/icons/

The static preview must visually match the WordPress templates.

Quality bar:

This must look like a real premium AI automation and software studio website. It must be fully responsive, polished on mobile, complete in the header, complete in the footer, complete on the homepage, visually impressive in the static preview, and ready to pass validation.
