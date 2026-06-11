Use Codex only. Do not use Ollama. Do not use any local-only model workflow.
Model requested: gpt-5.5 with high reasoning

Theme folder name:
001_nolan_young_theme_saas

Theme display name:
Nolan Young Theme 001 — SaaS Business

Theme concept:

Build a premium, dark-mode-first website for an AI automation, analytics, and custom software studio called SignalForge Systems.

This must be the only generated showcase theme in the repo after this run.

Design DNA:
- Business category: AI automation, custom software, dashboards, internal tools, analytics, and workflow optimization
- Audience: small businesses, operations teams, service companies, ecommerce teams, and founders
- Visual style: modern SaaS command center, sharp, clean, premium, technical, polished
- Color palette: deep navy background, electric blue accents, cyan highlights, white text, muted slate panels, optional lime-green micro accents
- Layout rhythm: dashboard-style hero, split-screen sections, angular cards, metric panels, code/data visual assets, workflow diagrams, and horizontal feature bands
- Asset style: local SVG visuals only, including dashboards, automation nodes, data streams, AI assistant panels, workflow maps, terminal cards, analytics charts, and system diagrams
- Interaction style: crisp, fast, minimal, reduced-motion safe
- Footer architecture: large dark conversion footer with services, company links, blog/resources links, contact CTA, and mini inquiry form

Use this repository's AGENTS.md as the source of truth.

Hard output requirements:
- Update docs/index.html with one polished gallery card linking to themes/THEME_SLUG/index.html
- No lorem ipsum
- No external icon libraries
- No APIs
- No secrets
- No environment files
- Use local SVG artwork
- Use JavaScript
- No jQuery dependency
- Runtime CSS must be complete and must not depend on an unbuilt Sass step
- run php lint

Create every required WordPress theme file from AGENTS.md,

Header requirements:
Build a fully functional premium nolan-menu header.

Desktop nav:
- Brand/logo area: SignalForge Systems
- Services opens a full-width menu panel
- About Us opens a full-width menu panel
- Blog opens a full-width menu panel
- Work links to /work/
- Contact links to /contact/
- Contact Us CTA links to /contact/

Services rail labels:
- AI Workflow Automation
- Custom Dashboards
- Internal Tools
- CRM & Data Cleanup
- WordPress Integrations
- Reporting Systems

About Us rail labels:
- Engineering Approach
- How We Scope Work
- Support Standards

Blog panel cards:
- Automation Readiness Checklist
- Dashboard Planning Guide
- AI Chatbot Use Cases
- Data Cleanup Before Reporting

Header behavior:
- Panels open and close on click
- Only one panel open at a time
- Same trigger toggles active panel closed
- Outside click closes active panel
- Escape closes active panel
- Backdrop appears while a panel is open
- Body scroll locks while a panel is open
- aria-expanded updates accurately
- aria-controls used where appropriate
- Closed panels hidden from assistive technology
- Strong focus-visible states
- No keyboard traps
- Right-side panel content updates on left rail hover and keyboard focus
- Solid readable dark or slate panel backgrounds
- Stable z-index above all page content

Mobile header:
- Dedicated mobile drawer, not stacked desktop markup
- Open button
- Close button
- Backdrop click close
- Outside click close
- Escape close
- Accurate aria-expanded
- Body scroll lock
- Accordions for Services, About Us, and Blog
- Direct links for Work and Contact
- Full-width CTA
- Solid readable drawer background
- No keyboard traps
- No hidden focusable links inside closed accordions

Homepage:
Build a complete, impressive homepage with at least 11 fully developed sections, here are just some ideas:
1. SaaS command-center hero, very interactive, with shooting star background effect.
2. Problem statement section
3. Services grid
4. Automation workflow section
5. Dashboard/reporting showcase
6. Featured work/project preview with filtering
7. Process section
8. Technology/style pillars section
9. Testimonials/proof section
10. Blog/resources preview
11. FAQ section
12. Final CTA section

Footer:
Create a polished dark SaaS footer:
- Large CTA top band
- Brand statement
- Services column
- Company column
- Blog/resources column
- Contact block
- Mini inquiry/newsletter form
- Bottom legal row
- Fully responsive layout
- Strong spacing and polished styling

Internal pages:
About Us:
- Engineering story
- Values
- Process
- Client experience
- Support standards
- CTA

Services:
- Service overview
- Detailed service sections
- Comparison grid
- Process
- FAQ
- CTA

Work:
- Strongest visual internal page
- At least 12 project cards
- Filters
- Featured case study
- Dashboard/system visuals
- CTA

Blog:
- Resource library
- At least 6 helpful article cards
- Topic cards
- Automation and analytics education angle
- CTA

Contact:
- Accessible inquiry form
- Name, email, company, website, service type, budget range, timeline, message
- Contact details
- Process expectations
- FAQ
- Final CTA

JavaScript requirements:
Use JavaScript and safely no-op if markup is missing. Include:
- initHeaderMenu()
- initMobileDrawer()
- initRailPanels()
- initPortfolioFilter()
- initCarousel()
- initBeforeAfter()
- initTestimonials()
- initScrollReveal()

Accessibility requirements:
- Skip link
- Semantic landmarks
- Proper heading order
- Visible focus states
- Keyboard-accessible nav
- Keyboard-accessible accordions
- Accurate aria-expanded
- Useful aria-controls
- No hidden focusable controls inside closed panels or accordions
- prefers-reduced-motion support
- Forms with labels
- No console errors

Gallery page requirement:
Make docs/index.html look polished. It should show only one showcase card for this generated theme and include a small homepage snapshot using an embedded local iframe or a local visual preview. It should link to themes/THEME_SLUG/index.html.

Quality bar:
This must look like a real premium SaaS/software studio website. It must be fully responsive, polished on mobile, complete in the header, complete in the footer, complete on the homepage, visually impressive in the static preview, and ready to pass validation.
