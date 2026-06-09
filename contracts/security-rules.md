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
