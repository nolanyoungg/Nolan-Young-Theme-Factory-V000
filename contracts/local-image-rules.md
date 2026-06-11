# Local Image Rules

Themes must use locally stored, copyright-safe demo imagery that matches the specific business, industry, and concept of the generated theme.

Do not reuse the same visual direction for every theme. Do not force every theme into a photography, wedding, portrait, or MNY Photo-style aesthetic.

## Industry-Specific Direction

- Landscaping themes should use landscaping, gardens, lawns, plants, hardscaping, outdoor crews, and finished property images.
- Photography themes should use portraits, weddings, editorial sessions, events, studio work, and brand photography.
- Restaurant themes should use food, interiors, chefs, dining, plating, and hospitality imagery.
- Construction themes should use job sites, tools, crews, materials, finished builds, and architectural details.
- SaaS or tech themes should use teams, dashboards, devices, abstract UI visuals, offices, and product-focused visuals.
- Wellness themes should use calm interiors, people, treatment spaces, natural textures, and lifestyle imagery.
- Real estate themes should use homes, interiors, neighborhoods, agents, property details, and lifestyle imagery.

The rule is: use real, local, copyright-safe images that fit the exact website being generated.

## Allowed

- Royalty-free images that are safe for demo/theme redistribution.
- Original generated demo image assets that are safe to distribute.
- Existing repo assets clearly documented as safe to reuse.
- Local SVGs for logos, icons, accents, diagrams, interface visuals, decorative overlays, and full visual panels.
- CSS-generated visual panels when the prompt asks for non-photo visual treatment.

## Not Allowed

- Hotlinked external images.
- CDN-hosted images.
- Random Google images.
- Watermarked stock photos.
- Celebrity photos.
- Copyrighted client photos.
- Blurry placeholders.
- Gray image boxes in hero, portfolio, service, or feature sections.

## Required Storage

WordPress theme images:

```text
wp-content/themes/<theme-slug>/assets/images/
```

Static preview images:

```text
docs/themes/<theme-slug>/assets/images/
```

Use descriptive filenames tied to the generated business category, for example:

```text
home-energy-audit-dashboard.svg
attic-insulation-cutaway.svg
service-area-map.svg
project-result-card.svg
```

Do not copy generic example filenames from repository documentation. Asset names must match the actual generated business and prompt.

Do not use placeholder-style filenames such as:

```text
prompt-specific-visual-1.svg
prompt-specific-visual-2.svg
icon1.svg
image1.svg
visual-1.svg
```

If the model needs six assets, each asset still needs a specific name that describes what the asset represents.
