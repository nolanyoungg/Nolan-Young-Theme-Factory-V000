# Review Instructions

## Technical Rules
- Review the result against prompt, contracts, build expectations, and validation output.
- Prioritize correctness, security, WordPress compatibility, accessibility, responsiveness, content quality, and release readiness.

## Required File Behavior
- Reviews must distinguish blockers from improvements.
- Reviews must cite concrete paths when possible.
- Reviews must not weaken contracts to make output pass.

## Output Requirements
- Return a Markdown review report.
- Include targeted repair guidance suitable for fixer stages.

## Failure Conditions
- Review ignores validation failures.
- Review approves incomplete or unbuildable output.
- Review requests broad redesign when targeted repair is enough.
