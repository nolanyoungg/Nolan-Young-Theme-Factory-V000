import { mkdirSync, copyFileSync } from 'node:fs';
import { dirname, resolve } from 'node:path';
import { fileURLToPath } from 'node:url';

const root = resolve(dirname(fileURLToPath(import.meta.url)), '..');
const tasks = [
  ['assets/css/theme.css', 'assets/css/bundle.css'],
  ['assets/js/theme.js', 'assets/js/bundle.js'],
];

for (const [source, target] of tasks) {
  const from = resolve(root, source);
  const to = resolve(root, target);
  mkdirSync(dirname(to), { recursive: true });
  copyFileSync(from, to);
}

console.log('Copied runtime theme assets to bundle.css and bundle.js.');
