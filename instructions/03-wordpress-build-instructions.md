# WordPress Build Instructions

## Technical Rules
- Build a classic WordPress theme.
- Use prefixed functions based on the theme slug.
- Load `inc/` modules from `functions.php`.
- Register theme supports, menus, sidebars, scripts, styles, and custom post types.

## Required File Behavior
- Templates must call `get_header()` and `get_footer()` where appropriate.
- Page templates must include valid `Template Name` headers.
- Forms must include nonces and sanitization.
- Enqueue compiled `assets/css/bundle.css` and `assets/js/bundle.js` with `filemtime()` cache busting.

## Output Requirements
- Provide complete PHP file blocks for root templates, `inc/`, template parts, and page templates.
- Use WordPress escaping helpers for output.

## Failure Conditions
- PHP syntax errors.
- Unsafe execution functions.
- Templates that are empty or only delegate all work to `the_content()`.
- Missing enqueue calls.
