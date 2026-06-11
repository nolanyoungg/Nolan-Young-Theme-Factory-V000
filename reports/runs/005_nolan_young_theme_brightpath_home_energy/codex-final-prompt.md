# Codex-Only Theme Generation

Theme slug: `005_nolan_young_theme_brightpath_home_energy`

Codex command: `codex exec --model gpt-5.4-mini -c model_reasoning_effort="low"`

Use these files as contract references when exact details are needed:
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
- generate the complete classic WordPress theme from scratch at wp-content/themes/005_nolan_young_theme_brightpath_home_energy/
- generate the matching static preview from scratch at docs/themes/005_nolan_young_theme_brightpath_home_energy/
- create index.html plus all seven required preview pages
- create complete runtime CSS and JavaScript; do not rely on an unbuilt Sass step
- create all prompt-required local assets and release files
- create this slug as a fresh generated output; do not copy, rename, or migrate an existing numbered generated theme as the new theme unless the user explicitly asks for a clone
- do not edit docs/index.html; the workflow script updates the shared preview gallery after generated files exist
- preserve all existing numbered generated themes, previews, ZIPs, run reports, and gallery links unless the prompt explicitly says this is a repo reset or zero-out run
- preserve prompts/completed/ history unless the user explicitly says to delete completed prompt history
- if the prompt contains stale model or reasoning text, ignore it; the Codex command above is the authoritative model and reasoning selection
- preserve the selected prompt direction
- if the selected prompt says "only generated showcase theme", "reset", "cleanup", or asks to delete previous outputs during a normal next-theme run, interpret that as only within the new theme output; do not remove existing numbered themes, completed prompts, run reports, ZIPs, or gallery cards
- fix broken PHP, styling, preview mismatch, build issues, accessibility issues, Nolan-menu behavior, local assets, and release readiness problems
- ensure all seven static preview pages exist and visually match the WordPress templates
- ensure the homepage feels premium, complete, and prompt-specific
- do not run a second Codex pass without explicit user confirmation

## Codex-Only Efficiency Guardrails

- Before writing generated files, read the validation scripts and contracts listed below exactly once so the first output pass targets the current gates.
- Required first reads: scripts/validate-theme-structure.sh, scripts/validate-preview.sh, scripts/validate-theme-quality.sh, contracts/required-theme-structure.md, contracts/required-preview-structure.md, contracts/nolan-menu-header.md, and contracts/local-image-rules.md.
- Then create the requested new output tree. Do not spend the first pass doing broad repo archaeology.
- Your first filesystem action must create wp-content/themes/005_nolan_young_theme_brightpath_home_energy/, docs/themes/005_nolan_young_theme_brightpath_home_energy/, reports/runs/005_nolan_young_theme_brightpath_home_energy/generation-progress.md, and a short progress note. Do this before extended planning.
- Prefer incremental file writes that leave inspectable progress over holding the entire generated site in a long hidden reasoning block.
- Do not compose the whole site as one large hidden generator before writing validator-relevant files.
- After the progress marker, immediately write the validator-critical roots and assets in small batches: style.css, functions.php, header.php, footer.php, front-page.php, assets/css/theme.css, assets/js/theme.js, docs/themes/005_nolan_young_theme_brightpath_home_energy/index.html, docs/themes/005_nolan_young_theme_brightpath_home_energy/homepage_preview.html, docs/themes/005_nolan_young_theme_brightpath_home_energy/assets/css/preview.css, and docs/themes/005_nolan_young_theme_brightpath_home_energy/assets/js/preview.js.
- Then fill the remaining required template parts, preview pages, prompt-specific local assets, package ZIP, and validation fixes.
- Do not edit docs/index.html. The workflow script owns the shared gallery update after generated files exist.
- Do not read memory files under /Users/nolany/.codex/memories during this generation run.
- Do not list or inspect full existing generated theme trees unless validation failure output specifically points to one.
- Do not copy literal example filenames from repository docs. Asset filenames must be business-specific, such as home-audit-scorecard.svg or insulation-plan-map.svg.
- Do not use filenames like prompt-specific-visual-1.svg, icon1.svg, or generic numbered placeholders.
- Do not write headings or template parts that include "Preview", "Service Detail", "Service Highlight", "All Services", or other checklist filler. Use finished business copy.
- Static preview pages and template parts must be substantial enough to inspect visually; one-line checklist files are a failure even if they satisfy structure.
- Do not use example.com in generated theme headers or links.
- Treat the repository contracts and this generated prompt as the working checklist. Read source files only when an exact contract detail is needed.
- Preserve existing generated outputs as shared release state; only edit the requested new slug, run reports, and ZIP output for this run.
- If you need a helper generator script for large file output, keep it under reports/runs/005_nolan_young_theme_brightpath_home_energy/ and use it immediately to write the generated files.
- After writing files, run the existing scripts and fix only concrete validation failures.
- The shared gallery already exists. You do not need to enumerate existing gallery cards because docs/index.html is owned by the workflow script.

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

# WordPress Theme Generation Prompt — BrightPath Home Energy 005

Use Codex only. Do not use Ollama. Do not use any local-only model workflow. The workflow command is the source of truth for the selected Codex model and reasoning.

Theme folder name:

005_nolan_young_theme_brightpath_home_energy

Theme display name:

Nolan Young Theme 005 - BrightPath Home Energy

Expected final output paths:

wp-content/themes/005_nolan_young_theme_brightpath_home_energy/
docs/themes/005_nolan_young_theme_brightpath_home_energy/
dist/zipped-themes/005_nolan_young_theme_brightpath_home_energy.zip
reports/runs/005_nolan_young_theme_brightpath_home_energy/

This is a normal additive generation run. Preserve all existing numbered generated themes, previews, ZIPs, run reports, completed prompt history, prompt templates, and docs/index.html gallery cards.

Use this repository's AGENTS.md and contracts as the source of truth.

## 1. Business Identity

### Business Name

BrightPath Home Energy

### Short Business Description

BrightPath Home Energy helps homeowners lower utility costs and improve comfort with energy audits, insulation upgrades, air sealing, smart thermostat setup, and practical electrification planning. The company gives families a clear improvement roadmap before they spend money on large equipment.

### Industry / Category

Home services company focused on home energy efficiency, comfort upgrades, weatherization, and residential electrification planning.

### Primary Conversion Goal

Request a home energy assessment.

### Secondary Conversion Goals

* Explore service pages
* View project examples
* Read homeowner energy guides
* Call for urgent comfort issues
* Join a seasonal maintenance email list

---

## 2. Brand Voice and Style

### Brand Personality

Calm, trustworthy, expert, neighborhood-friendly, practical, and polished. The brand should feel more like a premium building-science advisor than a generic contractor.

### Writing Style

Clear, benefit-focused, homeowner-friendly copy. Use confident expert language without sounding technical for its own sake. Headings should be short and useful; support copy should explain comfort, savings, and next steps.

### Content Density

Detailed service-page copy with clear CTAs, realistic project proof, homeowner education, and enough substance to feel like a real local company.

---

## 3. Visual Design Direction

### Overall Website Style

Bright premium local-service website with building-science polish. It should combine warm residential comfort, clean energy cues, diagnostic cards, home-system diagrams, and trust-building local service design.

### Layout Rhythm

Soft editorial hero, trust bar, diagnostic service cards, comfort problem/solution band, home performance process, featured project cards, seasonal maintenance callouts, testimonials, resources, FAQ, and strong contact CTA.

### Image Direction

Use local generated SVG illustrations and CSS-generated visual panels only. Do not use remote photos or external images.

Create original local visuals such as:

* home energy audit dashboard
* cutaway house insulation diagram
* air sealing checklist panel
* smart thermostat schedule card
* attic insulation scene
* comfort room temperature map
* solar-ready electrical panel illustration
* blower door test diagram
* utility savings report
* seasonal maintenance checklist
* neighborhood home exterior card
* quote request form visual

Do not use broken image links. Prefer local assets and CSS-generated visual details.

---

## 4. Color System

### Main Background Color

#fffaf1

### Secondary Background Color

#f2f7ee

### Dark Background Color

#123126

### Primary Brand Color

#1f8a5b

### Secondary Brand Color

#f4b942

### Accent Color

#e46f3c

### Text Color

#17332a

### Muted Text Color

#65766f

### Border / Divider Color

#d8e2d7

### Surface / Card Color

#ffffff

### Hero Colors

* Hero background: #fff2d6
* Hero text: #17332a
* Hero accent: #1f8a5b
* Hero visual/card background: #ffffff

### Header and Navigation Colors

* Header background: #fffaf1
* Header text: #17332a
* Header border/shadow color: rgba(23, 51, 42, 0.14)
* Dropdown background: #ffffff
* Dropdown text: #17332a
* Dropdown hover background: #f2f7ee
* Dropdown hover text: #123126

### Form Colors

* Form background: #ffffff
* Field background: #fffdf8
* Field text: #17332a
* Field border: #cbd8cf
* Field focus border: #1f8a5b
* Field placeholder text: #7b8b84

### Button Colors

Primary button:

* Background: #1f8a5b
* Text: #ffffff
* Hover background: #176846
* Hover text: #ffffff

Secondary button:

* Background: #ffffff
* Text: #17332a
* Border: #1f8a5b
* Hover background: #f2f7ee
* Hover text: #123126

Text / tertiary button:

* Text: #1f8a5b
* Hover text: #176846
* Hover underline or accent: #f4b942

---

## 5. Typography Direction

### Heading Style

Large, warm, confident sans-serif headings with strong hierarchy and no decorative font dependency.

### Body Text Style

Highly readable modern system sans-serif with slightly larger body copy for homeowners scanning on mobile.

### Font Rules

Use safe local/system font stacks. Do not depend on external Google Fonts or any remote font service.

---

## 6. Header and Navigation

Create a polished responsive Nolan-menu header with a clear brand/logo area, main navigation, dropdown support, mobile navigation, and a prominent CTA.

### Header Layout

Logo left, nav center/right, CTA button far right.

### Header Behavior

Sticky on scroll, always solid, with full-width desktop dropdown panels and a mobile off-canvas drawer.

### Header CTA

Button label: Request Assessment
Button destination: /contact/

### Main Navigation Items and Dropdowns

Do not create empty or fake dropdowns. Every dropdown item must connect to a real generated page or meaningful section.

Use this structure:

1. Services
    * Home Energy Audits
    * Insulation & Air Sealing
    * Smart Thermostat Setup
    * Electrification Planning
    * Seasonal Maintenance
2. About
    * Building Science Approach
    * Local Service Standards
    * What Happens During a Visit
3. Work
    * Comfort Upgrade Projects
    * Utility Savings Examples
4. Blog
    * Home Energy Checklist
    * Insulation Planning Guide
    * Thermostat Scheduling Tips
    * Electrification Starter Guide

---

## 7. Pages to Build

Describe pages by business purpose, not by implementation filename. The repo agent must determine how to create the proper WordPress templates, page templates, template parts, routes, preview sections, and navigation links.

Each page should feel intentionally designed, not copied with only text swapped.

### Home Page

Purpose: Explain the value of a home energy assessment, build trust quickly, and move homeowners toward requesting an appointment.

Main sections to include:

* Warm hero with animated comfort-map or energy-flow visual
* Trust bar with local proof, response times, and audit stats
* Services preview with cards linking to real service pages
* Problem/solution section about drafts, hot rooms, high bills, and unclear upgrades
* Home performance process section
* Featured work / case-study preview
* Seasonal home energy checklist band
* Testimonials / homeowner proof
* Resource preview
* FAQ section
* Final CTA

Primary CTA: Request a home energy assessment
Secondary CTA: View comfort upgrade projects

### About Page

Purpose: Position BrightPath as a careful, trustworthy home-performance partner.

Main sections to include:

* Engineering story and local service philosophy
* Building science values
* Visit experience and homeowner expectations
* Support standards and documentation
* CTA

### Services Overview Page

Purpose: Help homeowners understand which energy services fit their current problems.

Main sections to include:

* Service overview and diagnostic starting points
* Detailed service cards
* Comparison grid by homeowner need
* Process and timeline
* FAQ
* CTA

### Individual Service Pages

Build individual pages for these services. Each service page must have unique copy, unique layout details, clear value proposition, deliverables, process, FAQ, and CTA.

Use this structure:

1. Home Energy Audits
    * Audience: Homeowners dealing with high bills, uneven rooms, drafts, or unclear upgrade priorities
    * Problem solved: Finds the root causes before the homeowner spends money on random fixes
    * Deliverables: Room-by-room notes, prioritized upgrade map, efficiency opportunities, comfort risks, photo-backed findings
    * Process: Intake, walkthrough, diagnostic checklist, findings review, written recommendations
    * FAQ topics: Timing, preparation, what gets inspected, whether equipment is required
    * CTA: Schedule an assessment
2. Insulation & Air Sealing
    * Audience: Homes with drafty rooms, poor attic performance, seasonal discomfort, and high heating/cooling costs
    * Problem solved: Reduces uncontrolled air movement and improves comfort stability
    * Deliverables: Attic and envelope plan, air-sealing scope, insulation recommendations, project checklist
    * Process: Evaluate leakage areas, prioritize sealing, specify insulation approach, confirm post-work expectations
    * FAQ topics: Attic access, disruption, materials, seasonal timing
    * CTA: Request an insulation plan
3. Smart Thermostat Setup
    * Audience: Homeowners who want better comfort schedules without fighting their HVAC system
    * Problem solved: Reduces waste from poor scheduling and confusing settings
    * Deliverables: Thermostat setup, schedule strategy, homeowner walkthrough, comfort tips
    * Process: Compatibility check, installation/setup, schedule tuning, homeowner handoff
    * FAQ topics: Compatibility, Wi-Fi, app setup, rental properties
    * CTA: Plan a thermostat setup
4. Electrification Planning
    * Audience: Homeowners considering heat pumps, induction, EV charging, solar readiness, or panel upgrades
    * Problem solved: Turns a confusing upgrade path into a practical phased roadmap
    * Deliverables: Load planning notes, priority map, readiness checklist, contractor coordination guide
    * Process: Current system review, goals discussion, constraints check, roadmap delivery
    * FAQ topics: Costs, sequencing, panel capacity, incentives
    * CTA: Build an electrification roadmap

### Work / Portfolio Page

Purpose: Show realistic outcomes and prove that BrightPath can diagnose and plan improvements clearly.

Showcase items to include:

1. Drafty 1970s ranch comfort upgrade
2. Townhome attic insulation planning
3. Busy family thermostat schedule reset
4. Solar-ready electrification roadmap
5. Home office hot-room diagnosis
6. Winter utility bill reduction plan
7. Crawlspace moisture and air leakage review
8. New homeowner maintenance roadmap

Each showcase item should include:

* Project summary
* Client type
* Challenge
* Solution
* Result
* Services used
* Additional business-specific proof points, if relevant

### Process Page

Purpose: Make the assessment and recommendation process feel simple, transparent, and low-pressure.

Process steps:

1. Listen to comfort and bill concerns
2. Inspect the home systems and envelope
3. Map priority improvements
4. Review recommendations and tradeoffs
5. Support the homeowner through next steps

### Resources / Blog Page

Purpose: Educate homeowners and build trust before they contact the company.

Include sample educational resources, guide cards, blog-style article previews, or learning content relevant to the business.

Suggested topics:

* How to prepare for a home energy audit
* Why one room is always hotter or colder
* Air sealing before adding insulation
* Smart thermostat schedules that actually save money
* Electrification planning without overspending
* Seasonal home energy checklist

### Contact Page

Purpose: Collect detailed assessment requests and set expectations for response and scheduling.

Include:

* Contact intro copy
* Contact form design
* Business contact details
* Service interest selector
* Expected response time
* CTA for urgent comfort inquiries
* Trust/support copy

### Optional Additional Pages

Add these only if they fit the business and repo scope:

* Process page
* Maintenance checklist section
* Utility savings guide section

---

## 8. Forms and Conversion Elements

Create realistic front-end form layouts unless the repo already has a form-handling convention.

Form submissions should be viewable under a WordPress admin tab called:

Forms

The user should be able to export:

* All forms
* All submissions
* Submissions from a selected form

Make sure this form-admin and export requirement is included.

### Contact Form Fields

* Name
* Email
* Phone
* Company / Organization
* Message

### Quote / Consultation Form Fields

* Name
* Email
* Phone
* Project type
* Business type
* Current website URL, if applicable
* Goals
* Timeline
* Budget range

### Conversion Elements

Include:

* Sticky or repeated CTA sections
* Clear buttons above the fold
* Contact CTA in the footer
* CTA after each major service explanation
* Trust indicators near forms

---

## 9. Homepage Section Requirements

The home page should include a complete business-focused flow.

Required sections:

1. Hero section that strongly grabs the user's attention, looks polished, and includes animation in the hero and as the user scrolls.
2. Trust bar with believable stats, client types, badges, or proof points.
3. Services preview section with cards linking to real service pages.
4. Problem/solution section explaining why the business exists.
5. Process section explaining how working with the business works.
6. Featured work or case-study preview section.
7. Testimonials or review-style proof section.
8. FAQ section.
9. Final CTA section.

---

## 10. Footer Requirements

Create a complete footer with:

* Business name and short summary
* Main navigation links
* Service links
* Resource links
* Contact details
* Social links or placeholders
* Newsletter/signup area if appropriate
* Copyright line
* Privacy / Terms links if appropriate

All footer links should point to real generated pages, real sections, or safe placeholders only when unavoidable.

---

## 11. Responsive and Accessibility Requirements

The theme must be responsive and accessible.

Required:

* Mobile-first behavior
* Usable mobile navigation
* No horizontal scrolling bugs
* Tap targets large enough for mobile
* Visible focus states
* Semantic HTML
* Proper heading order
* Alt text for meaningful images
* Good color contrast
* Keyboard-accessible dropdowns where practical
* Reduced-motion consideration for animations
* No text hidden behind sticky headers
* No overflowing cards, buttons, menus, or hero visuals

---

## 12. Quality Bar

The finished theme should feel like a polished finished website, not a starter shell.

Avoid:

* Lorem ipsum
* Empty cards
* Placeholder nav items
* Broken links
* Duplicate sections with only minor text changes
* Generic "About Us" filler
* Unstyled form fields
* Inconsistent spacing
* Random colors not in the palette
* Remote images that may break
* Overly complex code that does not match repo style

Include:

* Specific business copy
* Clear page intent
* Realistic service descriptions
* Realistic case studies or portfolio examples
* Strong CTAs
* Responsive polish
* Modern spacing
* Consistent buttons
* Consistent card styles
* Useful footer and navigation

