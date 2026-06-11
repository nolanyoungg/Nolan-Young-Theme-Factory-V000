const fs = require('fs');
const path = require('path');

const root = path.resolve(__dirname, '..');
const cssOut = path.join(root, 'assets/css/theme.css');
const jsOut = path.join(root, 'assets/js/theme.js');
const cssSource = path.join(root, 'assets/css/theme.css');
const jsSource = path.join(root, 'assets/js/theme.js');

fs.copyFileSync(cssSource, cssOut);
fs.copyFileSync(jsSource, jsOut);
console.log('BrightPath assets ready.');

