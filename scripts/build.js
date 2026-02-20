const fs = require('fs');
const path = require('path');
const sass = require('sass');
const less = require('less');
const CleanCSS = require('clean-css');

const pkg = require('../package.json');
const banner = ['/**',
  ` * ${pkg.name} - ${pkg.description}`,
  ` * @version v${pkg.version}`,
  ` * @link ${pkg.homepage}`,
  ` * @license ${pkg.license} : https://github.com/nico3333fr/ROCSSTI/blob/master/LICENSE`,
  ' */',
  ''
].join('\n');

function ensureDir(dir) {
  if (!fs.existsSync(dir)) {
    fs.mkdirSync(dir, { recursive: true });
  }
}

function minify(css) {
  return new CleanCSS({ level: 2 }).minify(css).styles;
}

function writeWithBanner(filePath, content) {
  fs.writeFileSync(filePath, banner + content, 'utf8');
}

async function buildCss() {
  const srcDir = path.join(__dirname, '../src/css');
  const destDir = path.join(__dirname, '../dist/css');
  ensureDir(destDir);

  const files = fs.readdirSync(srcDir).filter(f => f.endsWith('.css'));
  for (const file of files) {
    const srcPath = path.join(srcDir, file);
    const content = fs.readFileSync(srcPath, 'utf8');
    const basename = path.basename(file, '.css');

    fs.writeFileSync(path.join(destDir, file), content, 'utf8');
    writeWithBanner(path.join(destDir, `${basename}.min.css`), minify(content));
  }
  console.log('CSS build done.');
}

async function buildLess() {
  const destDir = path.join(__dirname, '../dist/less');
  ensureDir(destDir);

  const entries = [
    './src/less/rocssti-fr/rocssti-fr.less',
    './src/less/rocssti-en/rocssti-en.less'
  ];

  for (const entry of entries) {
    const srcPath = path.join(__dirname, '..', entry);
    const basename = path.basename(entry, '.less');
    const input = fs.readFileSync(srcPath, 'utf8');

    const result = await less.render(input, { filename: srcPath });
    const css = result.css;

    fs.writeFileSync(path.join(destDir, `${basename}.css`), css, 'utf8');
    writeWithBanner(path.join(destDir, `${basename}.min.css`), minify(css));
  }
  console.log('LESS build done.');
}

async function buildSass() {
  const destDir = path.join(__dirname, '../dist/sass');
  ensureDir(destDir);

  const entries = [
    './src/sass/rocssti-fr/rocssti-fr.scss',
    './src/sass/rocssti-en/rocssti-en.scss',
    './src/sass/rocssti-mobile-first-fr/rocssti-mobile-first-fr.scss',
    './src/sass/rocssti-mobile-first-en/rocssti-mobile-first-en.scss'
  ];

  for (const entry of entries) {
    const srcPath = path.join(__dirname, '..', entry);
    const basename = path.basename(entry, '.scss');

    const result = sass.compile(srcPath);
    const css = result.css;

    fs.writeFileSync(path.join(destDir, `${basename}.css`), css, 'utf8');
    writeWithBanner(path.join(destDir, `${basename}.min.css`), minify(css));
  }
  console.log('Sass build done.');
}

async function main() {
  const task = process.argv[2] || 'css';

  try {
    if (task === 'css') {
      await buildCss();
    } else if (task === 'less') {
      await buildLess();
    } else if (task === 'sass') {
      await buildSass();
    } else if (task === 'all') {
      await buildCss();
      await buildLess();
      await buildSass();
    } else {
      console.error('Usage: node scripts/build.js [css|less|sass|all]');
      process.exit(1);
    }
  } catch (err) {
    console.error(err);
    process.exit(1);
  }
}

main();
