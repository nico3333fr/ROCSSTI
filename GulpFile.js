var gulp      = require('gulp'),
    rename    = require('gulp-rename'),
    minifycss = require('gulp-minify-css'),
    header    = require('gulp-header');
	
var less = require('gulp-less'),
    sass = require('gulp-sass');
	
var pkg = require('./package.json');
var banner = ['/**',
  ' * <%= pkg.name %> - <%= pkg.description %>',
  ' * @version v<%= pkg.version %>',
  ' * @link <%= pkg.homepage %>',
  ' * @license ' + pkg.licenses[0].name + ' : ' + pkg.licenses[0].url + '',
  ' */',
  ''].join('\n');

gulp.task('css', function () {
  return gulp.src('./src/css/*.css')
    .pipe(gulp.dest('./dist/css/'))
    .pipe(minifycss())
    .pipe(rename(function (path) {
      path.basename += '.min';
    }))
	.pipe(header(banner, { pkg : pkg } ))
    .pipe(gulp.dest('./dist/css/'));
});

gulp.task('less', function () {
  return gulp.src(['./src/less/rocssti-fr/rocssti-fr.less','./src/less/rocssti-en/rocssti-en.less'])
    .pipe(less())
    .pipe(gulp.dest('./dist/less/'))
    .pipe(minifycss())
    .pipe(rename(function (path) {
      path.basename += '.min';
    }))
    .pipe(header(banner, { pkg : pkg } ))
    .pipe(gulp.dest('./dist/less/'));

});

gulp.task('sass', function () {
  return gulp.src(
    ['./src/sass/rocssti-fr/rocssti-fr.scss',
		 './src/sass/rocssti-en/rocssti-en.scss',
		 './src/sass/rocssti-mobile-first-fr/rocssti-mobile-first-fr.scss',
		 './src/sass/rocssti-mobile-first-en/rocssti-mobile-first-en.scss'])
    .pipe(sass())
    .pipe(gulp.dest('./dist/sass/'))
    .pipe(minifycss())
    .pipe(rename(function (path) {
      path.basename += '.min';
    }))
    .pipe(header(banner, { pkg : pkg } ))
    .pipe(gulp.dest('./dist/sass/'));
	
});


gulp.task('default', ['css']);
