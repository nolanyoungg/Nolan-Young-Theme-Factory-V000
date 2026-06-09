# Planning Instructions

## Technical Rules
- Read the full prompt before planning.
- Infer missing details only when the prompt is short or silent.
- Preserve explicit page, content, style, and audience requirements.

## Required File Behavior
- The planner does not write files.
- The plan must name the selected theme slug and required output paths.
- The plan must describe sitemap, sections, content strategy, design direction, WordPress implementation, static preview, and risks.

## Output Requirements
- Write Markdown suitable for `reports/runs/<theme-slug>/plan.md`.
- Include enough implementation detail for builder stages to create the theme without asking follow-up questions.

## Failure Conditions
- Plan ignores the prompt.
- Plan omits required website pages or required artifacts.
- Plan relies on external services, CDNs, or unavailable assets.
