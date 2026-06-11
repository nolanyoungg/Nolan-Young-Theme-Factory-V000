const path = require('path');

module.exports = {
  mode: 'production',
  entry: {
    theme: path.resolve(__dirname, '../assets/js/theme.js'),
  },
  output: {
    path: path.resolve(__dirname, '../assets/js'),
    filename: 'bundle.js',
  },
};

