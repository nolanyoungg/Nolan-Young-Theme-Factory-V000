# Codex-Only Theme Generation

Theme slug: `006_nolan_young_theme_lumora_harbor_hotel`

Codex command: `codex exec --model gpt-5.4-mini -c model_reasoning_effort="medium"`

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
- generate the complete classic WordPress theme from scratch at wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/
- generate the matching static preview from scratch at docs/themes/006_nolan_young_theme_lumora_harbor_hotel/
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

- The workflow has already created the new theme directory, preview directory, asset directories, and reports/runs progress marker before this Codex command started.
- Before writing generated files, read the validation scripts and contracts listed below exactly once so the first output pass targets the current gates.
- Required first reads: scripts/validate-theme-structure.sh, scripts/validate-preview.sh, scripts/validate-theme-quality.sh, contracts/required-theme-structure.md, contracts/required-preview-structure.md, contracts/nolan-menu-header.md, and contracts/local-image-rules.md.
- Do not read additional optional contracts during the first pass unless a required validator output specifically points to one.
- Then write the requested new output tree. Do not spend the first pass doing broad repo archaeology.
- Your first generated-file writes should update reports/runs/006_nolan_young_theme_lumora_harbor_hotel/generation-progress.md and create validator-critical files, not hold the site in hidden reasoning.
- Prefer incremental file writes that leave inspectable progress over holding the entire generated site in a long hidden reasoning block.
- Do not compose the whole site as one large hidden generator before writing validator-relevant files.
- Do not create a run-local generator script for the first output pass. Write the initial files directly with apply_patch so progress is visible immediately.
- Do not announce that you are about to write files unless the same action actually writes files. A progress message without new files is not progress.
- After the progress marker, immediately write the validator-critical roots and assets in small batches: style.css, functions.php, header.php, footer.php, front-page.php, assets/css/theme.css, assets/js/theme.js, docs/themes/006_nolan_young_theme_lumora_harbor_hotel/index.html, docs/themes/006_nolan_young_theme_lumora_harbor_hotel/homepage_preview.html, docs/themes/006_nolan_young_theme_lumora_harbor_hotel/assets/css/preview.css, and docs/themes/006_nolan_young_theme_lumora_harbor_hotel/assets/js/preview.js.
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
- Only after the validator-critical files exist may you create a helper script for repetitive remaining files, and only if it is run immediately.
- After writing files, do not run validate-all.sh or validate-preview.sh inside Codex. The workflow script updates docs/index.html after Codex exits, then runs full validation.
- Inside Codex, only run slug-local checks that do not depend on docs/index.html gallery state, such as PHP lint, validate-theme-structure.sh, validate-theme-quality.sh, validate-nolan-menu.sh, and validate-security.sh.
- Keep command output concise. Do not print full generated diffs or full file contents after every patch.
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

The key premium requirements are summarized above. Use these contracts as targeted references when exact details are needed:
- contracts/premium-output-standard.md
- contracts/nolan-menu-header.md
- contracts/local-image-rules.md
- contracts/required-preview-structure.md
- contracts/required-theme-structure.md
- contracts/quality-rules.md

## User Prompt

# WordPress Theme Generation Prompt — Lumora Harbor Hotel 006

Use Codex only. Do not use Ollama. Do not use any local-only model workflow. The workflow command is the source of truth for the selected Codex model and reasoning.

Theme folder name:

006_nolan_young_theme_lumora_harbor_hotel

Theme display name:

Nolan Young Theme 006 - Lumora Harbor Hotel

Expected final output paths:

wp-content/themes/006_nolan_young_theme_lumora_harbor_hotel/
docs/themes/006_nolan_young_theme_lumora_harbor_hotel/
dist/zipped-themes/006_nolan_young_theme_lumora_harbor_hotel.zip
reports/runs/006_nolan_young_theme_lumora_harbor_hotel/

This is a normal additive generation run. Preserve all existing numbered generated themes, previews, ZIPs, run reports, completed prompt history, prompt templates, and docs/index.html gallery cards.

Use this repository's AGENTS.md and contracts as the source of truth. Build the full theme and matching static preview. Do not edit docs/index.html directly; the workflow script owns gallery updates after Codex exits.

## 1. Business Identity

### Business Name

Lumora Harbor Hotel

### Short Business Description

Lumora Harbor Hotel is a refined waterfront boutique hotel for design-minded travelers, anniversary weekends, small executive retreats, intimate weddings, and local dining experiences. The hotel blends harbor views, calm luxury, seasonal food, curated wellness, and concierge-level planning into a stay that feels personal rather than corporate.

### Industry / Category

Boutique hotel, waterfront hospitality, event venue, restaurant, spa, and local travel experience brand.

### Primary Conversion Goal

Book a stay or start a reservation inquiry.

### Secondary Conversion Goals

* Explore rooms and suites
* Plan an intimate event or wedding
* Reserve dining
* View packages and seasonal offers
* Read local travel guides
* Join the hotel newsletter

---

## 2. Brand Voice and Style

### Brand Personality

Elegant, warm, cinematic, calm, polished, locally rooted, and quietly luxurious. The brand should feel like a high-end independent hotel with hospitality depth, not a generic resort template.

### Writing Style

Editorial, sensory, and specific. Use concise luxury-hospitality headings, rich supporting copy, and clear CTAs. Copy should balance atmosphere with practical details: room types, event planning, dining, wellness, arrival expectations, and reasons to book direct.

### Content Density

Rich hospitality copy with complete page sections, realistic room descriptions, event details, packages, local guides, FAQs, and clear booking paths.

---

## 3. Visual Design Direction

### Overall Website Style

Premium editorial boutique-hotel website with a luminous waterfront mood, refined typography hierarchy, spacious layouts, immersive room cards, concierge-style service panels, event showcase sections, and polished booking CTAs.

### Layout Rhythm

Full-bleed cinematic hero, booking bar, trust/award strip, room and suite cards, harbor story section, dining and wellness feature panels, event/wedding showcase, seasonal package band, local guide cards, testimonials, FAQ, and high-conversion final booking CTA.

### Image Direction

Use local generated SVG illustrations and CSS-generated visual panels only. Do not use remote photos, external images, CDN assets, or broken image links.

Create original local visual assets such as:

* harbor sunrise suite balcony
* boutique hotel lobby lounge
* king suite interior card
* waterfront dining table
* spa and wellness ritual panel
* intimate wedding terrace scene
* executive retreat meeting room
* local harbor map illustration
* booking calendar panel
* seasonal package card
* concierge itinerary board
* guest review postcard

The visuals should feel like refined editorial art direction, not generic icons. Use layered SVG scenes, subtle gradients, elegant linework, window-light shapes, water reflections, and premium card compositions.

Do not use broken image links. Prefer local SVG assets and CSS-generated visual details.

---

## 4. Color System

### Main Background Color

#fbf7ef

### Secondary Background Color

#eef5f3

### Dark Background Color

#0d2430

### Primary Brand Color

#1f6f78

### Secondary Brand Color

#c89b5f

### Accent Color

#d96f54

### Text Color

#17262c

### Muted Text Color

#68767a

### Border / Divider Color

#d8ddd8

### Surface / Card Color

#ffffff

### Hero Colors

* Hero background: #102c38
* Hero text: #fffaf1
* Hero accent: #d9b06f
* Hero visual/card background: rgba(255, 250, 241, 0.94)

### Header and Navigation Colors

* Header background: #fffaf1
* Header text: #17262c
* Header border/shadow color: rgba(23, 38, 44, 0.14)
* Dropdown background: #ffffff
* Dropdown text: #17262c
* Dropdown hover background: #eef5f3
* Dropdown hover text: #0d2430

### Form Colors

* Form background: #ffffff
* Field background: #fffdf8
* Field text: #17262c
* Field border: #cbd5d4
* Field focus border: #1f6f78
* Field placeholder text: #7b898c

### Button Colors

Primary button:

* Background: #1f6f78
* Text: #ffffff
* Hover background: #174f58
* Hover text: #ffffff

Secondary button:

* Background: #ffffff
* Text: #17262c
* Border: #c89b5f
* Hover background: #f5ead8
* Hover text: #0d2430

Text / tertiary button:

* Text: #1f6f78
* Hover text: #174f58
* Hover underline or accent: #c89b5f

---

## 5. Typography Direction

### Heading Style

Elegant editorial headings with strong hospitality hierarchy. Use large confident display sizes for hero and page intros, but keep card headings restrained and readable.

### Body Text Style

Highly readable modern system sans-serif body copy with generous line height, calm spacing, and accessible sizes.

### Font Rules

Use safe local/system font stacks. Do not depend on external Google Fonts or remote font services.

---

## 6. Header and Navigation

Create a polished responsive Nolan-menu header with a clear brand/logo area, main navigation, dropdown support, mobile navigation, and a prominent CTA.

### Header Layout

Logo left, primary nav center, reservation CTA right. Include a compact booking intent signal in the header without cluttering the nav.

### Header Behavior

Sticky on scroll, always readable, with full-width desktop dropdown panels and a mobile off-canvas drawer. Panels should feel premium: room imagery cards, event prompts, guide links, and concise descriptions.

### Header CTA

Button label: Book Direct
Button destination: /contact/

### Main Navigation Items and Dropdowns

Do not create empty or fake dropdowns. Every dropdown item must connect to a real generated page or meaningful section.

Use this structure:

1. Stay
    * Harbor King Rooms
    * Terrace Suites
    * Weekend Packages
    * Booking Details
2. Experiences
    * Waterfront Dining
    * Spa & Wellness
    * Harbor Itineraries
    * Seasonal Offers
3. Events
    * Intimate Weddings
    * Executive Retreats
    * Private Dining
    * Planning Support
4. Journal
    * Two-Day Harbor Guide
    * Packing for a Coastal Weekend
    * Planning a Small Wedding
    * Best Time to Visit

---

## 7. Pages to Build

Describe pages by business purpose, not by implementation filename. The repo agent must determine how to create the proper WordPress templates, page templates, template parts, routes, preview sections, and navigation links.

Each page should feel intentionally designed, not copied with only text swapped.

### Home Page

Purpose: Make travelers want to book a refined waterfront stay and give them a clear path into rooms, packages, dining, events, and contact.

Main sections to include:

* Cinematic harbor hero with subtle animated light/water reflection effect
* Compact booking bar with arrival, departure, guests, and CTA styling
* Trust strip with awards, guest rating, direct booking perk, and local concierge proof
* Rooms and suites preview with three distinct cards and links
* Harbor story split section with local map or balcony visual
* Dining and wellness feature panels
* Weddings and retreats showcase with event inquiry CTA
* Seasonal package band
* Guest testimonials and press-style proof
* Journal/resource preview
* FAQ section
* Final booking CTA

Primary CTA: Book direct
Secondary CTA: Explore rooms and suites

### About Page

Purpose: Tell the hotel story, express hospitality standards, and build trust with travelers and event planners.

Main sections to include:

* Founder / property story
* Harbor design philosophy
* Guest service values
* Sustainability and local sourcing
* Concierge support standards
* CTA

### Services Overview Page

Purpose: Present the hotel offerings as clear experience categories: stay, dine, gather, unwind, and explore.

Main sections to include:

* Offering overview with direct booking path
* Rooms, dining, wellness, events, and local experience cards
* Comparison grid by guest type
* Planning process and arrival expectations
* FAQ
* CTA

### Individual Service Pages

Build individual pages for these services. Each service page must have unique copy, unique layout details, clear value proposition, deliverables, process, FAQ, and CTA.

Use this structure:

1. Rooms & Suites
    * Audience: Couples, solo travelers, design-minded weekend guests, and small-group travelers
    * Problem solved: Helps guests choose the right room style and book confidently without generic hotel copy
    * Deliverables: Room type descriptions, amenity highlights, direct booking perks, upgrade notes, arrival guidance
    * Process: Compare room needs, choose dates, review package options, book direct, receive concierge note
    * FAQ topics: Check-in, views, accessibility, parking, pet policy, cancellation
    * CTA: Book direct
2. Dining & Wellness
    * Audience: Overnight guests, locals, couples, and travelers planning a restorative weekend
    * Problem solved: Connects dining, spa, and quiet rituals into a cohesive stay instead of separate add-ons
    * Deliverables: Dining details, sample menu moments, wellness appointments, morning rituals, local sourcing notes
    * Process: Reserve table, add wellness service, coordinate schedule, confirm itinerary
    * FAQ topics: Restaurant hours, dietary requests, spa appointments, local guest access
    * CTA: Reserve dining or wellness
3. Weddings & Private Events
    * Audience: Couples, families, founders, and planners who want a refined small event without a large ballroom feel
    * Problem solved: Makes intimate event planning feel clear, beautiful, and supported
    * Deliverables: Venue options, guest capacity notes, planning timeline, dining coordination, room block details
    * Process: Inquiry, availability review, planning call, proposal, event coordination
    * FAQ topics: Capacity, ceremony options, rain plans, vendor policy, room blocks
    * CTA: Start an event inquiry
4. Harbor Experiences
    * Audience: Travelers who want a local, curated weekend rather than a generic itinerary
    * Problem solved: Turns the surrounding harbor, food, shops, wellness, and nature into a curated stay
    * Deliverables: Two-day itineraries, map moments, seasonal recommendations, concierge booking support
    * Process: Share trip style, pick itinerary, reserve key experiences, receive arrival notes
    * FAQ topics: Walkability, family-friendly options, rainy day ideas, seasonal timing
    * CTA: Plan a harbor weekend

### Work / Portfolio Page

Purpose: Show the strongest visual internal page with room showcases, events, packages, and guest stay scenarios.

Showcase items to include:

1. Anniversary terrace weekend
2. Executive harbor retreat
3. Intimate wedding dinner
4. Solo writing retreat
5. Wellness and dining weekend
6. Winter harbor package
7. Family suite stay
8. Local tasting itinerary
9. Private dining celebration
10. Sunrise room upgrade story
11. Rainy day concierge itinerary
12. Direct booking package example

Each showcase item should include:

* Project summary
* Guest or client type
* Challenge or trip goal
* Solution / planned experience
* Result
* Services used
* Additional hospitality-specific proof points, if relevant

### Process Page

Purpose: Make booking, event inquiries, and concierge planning feel simple and premium.

Process steps:

1. Choose stay, event, or experience path
2. Share dates, guest count, and priorities
3. Review availability and package recommendations
4. Confirm booking or proposal
5. Receive concierge arrival support

### Resources / Blog Page

Purpose: Build organic trust with travelers and planners through helpful local guides and planning content.

Include sample educational resources, guide cards, blog-style article previews, or learning content relevant to the business.

Suggested topics:

* Two perfect days on the harbor
* How to plan an intimate waterfront wedding
* What to ask before booking a boutique hotel
* Winter weekend packing guide
* How direct booking changes the guest experience
* Small executive retreat planning checklist

### Contact Page

Purpose: Collect stay inquiries, event inquiries, dining/wellness requests, and concierge questions while setting expectations.

Include:

* Contact intro copy
* Contact form design
* Business contact details
* Service interest selector
* Expected response time
* CTA for urgent arrival questions
* Trust/support copy

### Optional Additional Pages

Add these only if they fit the business and repo scope:

* Packages page section
* Local guide section
* Event planning guide section

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

For this hospitality theme, adapt labels where useful while preserving the underlying field intent:

* Arrival date
* Departure date
* Number of guests
* Inquiry type
* Room or event interest
* Budget or planning range for events
* Accessibility or dietary notes

### Conversion Elements

Include:

* Sticky or repeated CTA sections
* Clear buttons above the fold
* Direct booking CTA in the footer
* CTA after each major service explanation
* Trust indicators near forms
* Booking bar on the homepage and relevant internal pages

---

## 9. Homepage Section Requirements

The home page should include a complete business-focused flow.

Required sections:

1. Hero section that strongly grabs the user's attention, looks polished, and includes animation in the hero and as the user scrolls.
2. Trust bar with believable stats, client types, badges, or proof points.
3. Services preview section with cards linking to real service pages.
4. Problem/solution section explaining why the business exists.
5. Process section explaining how booking or planning with the business works.
6. Featured work or case-study preview section.
7. Testimonials or review-style proof section.
8. FAQ section.
9. Final CTA section.

Additional homepage polish:

* Use at least 12 fully developed homepage sections.
* Make the hero and first viewport visually memorable without using remote images.
* Include a refined booking bar UI.
* Make the static preview homepage feel like a complete hotel website, not a compressed scaffold.

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
* Generic asset names such as `prompt-specific-visual-1.svg`, `icon1.svg`, or copied examples from documentation
* Editing docs/index.html directly inside Codex
* Running gallery-dependent validation before the workflow finalizes the gallery card

Include:

* Specific hospitality copy
* Clear page intent
* Realistic room, dining, event, and itinerary descriptions
* Realistic showcase scenarios
* Strong CTAs
* Responsive polish
* Modern spacing
* Consistent buttons
* Consistent card styles
* Useful footer and navigation
* Local SVG assets with business-specific names
* Matching WordPress templates and static preview pages
