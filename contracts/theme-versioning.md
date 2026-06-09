# Theme Versioning

Generated themes use this slug pattern:

```text
nolan-showcase-theme-XX
```

`XX` is a two-digit integer beginning at `01`.

The workflow must:
- Scan `wp-content/themes/`, `docs/themes/`, and `dist/zipped-themes/` for existing matching slugs.
- Select the next available version.
- Never overwrite an existing generated theme, preview, or ZIP.
- Use the same slug for theme, preview, ZIP, and reports.

Examples:
- First run: `nolan-showcase-theme-01`
- Second run: `nolan-showcase-theme-02`
- Tenth run: `nolan-showcase-theme-10`
