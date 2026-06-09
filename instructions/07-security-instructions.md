# Security Instructions

## Technical Rules
- Treat secrets and unsafe runtime behavior as blockers.
- Use WordPress escaping and sanitization consistently.
- Use nonces on form actions.
- Avoid dynamic command execution and unsafe includes.

## Required File Behavior
- Generated forms must sanitize inputs before use.
- Newsletter and contact handlers must avoid sending untrusted HTML.
- Preview files must not load remote scripts, styles, fonts, or images.

## Output Requirements
- Security review must identify concrete files and fixes.
- Fix output must use file blocks for changes.

## Failure Conditions
- Secret-like strings or private keys.
- Unsafe PHP functions.
- Remote runtime dependencies.
- Missing nonce or sanitization in generated form handling.
