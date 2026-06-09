# Fix Instructions

## Technical Rules
- Fix validation blockers first.
- Preserve prompt direction and existing design intent.
- Make the smallest complete set of changes needed for a polished, valid result.

## Required File Behavior
- Any edited files must be emitted as file blocks.
- Repairs must keep theme, preview, docs index, and ZIP readiness aligned.
- Build-related fixes must keep `npm run build` functional.

## Output Requirements
- Provide changed file blocks and a concise summary.
- If no file changes are needed, explain why in the review report.

## Failure Conditions
- Unrelated redesign.
- Removing required files or prompt-specific content.
- Ignoring a validation failure that remains reproducible.
