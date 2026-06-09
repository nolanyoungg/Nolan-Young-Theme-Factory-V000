# WordPress Theme Template Notes

Generated themes are created directly by model file blocks and must satisfy `contracts/required-theme-structure.md`.

Every theme must include a buildable asset pipeline with `package.json`, `build/webpack.config.js`, `src/scss/main.scss`, `src/js/main.js`, and compiled outputs in `assets/css/bundle.css` and `assets/js/bundle.js`.

This directory is reserved for future reusable seed assets. The current workflow relies on contracts and generated file blocks instead of copying a fixed starter theme.
