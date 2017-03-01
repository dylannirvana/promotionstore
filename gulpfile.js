// VARIABLES
var gulp = require('gulp'),
    gutil = require('gulp-util'),
    browserify = require('gulp-browserify'),
    compass = require('gulp-compass'),
    connect = require('gulp-connect'),
    gulpif = require('gulp-if'),
    uglify = require('gulp-uglify'),
    minifyHTML = require('gulp-minify-html'),
    rename = require('gulp-rename'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat');

var env,
    jsSources,
    sassSources,
    htmlSources,
    outputDir,
    wpDir,
    sassStyle;

    /* THIS IS THE WORDPRESS DIRECTORY */
    wpDir = 'wordpress/wp-content/themes/promotionstoretheme/';

// ENVIRONMENT
env = process.env.NODE_ENV || 'development';

if (env==='development') {
  // outputDir = wpDir; // to WordPress
  outputDir = 'builds/development/';  // to bootstrap
  sassStyle = 'expanded';
} else {
  outputDir = 'builds/production/';
  sassStyle = 'compressed';
}

// PATHS
bowerSources = ['bower_components/**/'];
jsSources = [
  bowerSources + 'dist/jquery.min.js',
  bowerSources + 'dist/js/*.min.js',
  // 'bower_components/jquery/dist/jquery.min.js',
  // 'bower_components/tether/dist/js/tether.min.js',
  // 'bower_components/bootstrap/dist/js/bootstrap.min.js',
  'components/scripts/javascript.js'
 ];

sassSources = [ 'components/sass/style.scss' ];
htmlSources = [ 'components/*.html'];

// TASKS
gulp.task('js', function() {
  gulp.src(jsSources)
    .pipe(concat('script.js'))
    .pipe(browserify())
    .on('error', gutil.log)
    .pipe(gulpif(env === 'production', uglify()))
    .pipe(gulp.dest(outputDir + 'js'))
    .pipe(connect.reload())
});

gulp.task('compass', function() {
  gulp.src(sassSources)
    .pipe(sourcemaps.init())
    .pipe(compass({
      sass: 'components/sass',
      image: outputDir + 'images',
      css: outputDir + 'css',
      sourcemap: true,
      style: sassStyle
    })
    .on('error', gutil.log))
    .pipe(sourcemaps.write(outputDir))
    .pipe(gulp.dest(outputDir))
    .pipe(connect.reload())
});

gulp.task('watch', function() {
  gulp.watch(jsSources, ['js']);
  gulp.watch('components/sass/*.scss', ['compass']);
  gulp.watch('components/sass/**./*.scss', ['compass']);
  gulp.watch('components/*.html', ['html']);
  // gulp.watch('builds/development/js/*.json', ['json']);
  gulp.watch('builds/development/images/**/*.*', ['images']);
});

gulp.task('connect', function() {
  connect.server({
    root: outputDir,
    livereload: true
  });
});

gulp.task('html', function() {
  gulp.src('builds/development/*.html')
  // gulp.src('components/*.html')
    .pipe(gulpif(env === 'production', minifyHTML()))
    .pipe(gulpif(env === 'production', gulp.dest(outputDir)))
    // .pipe(rename('front-page.php'))
    .pipe(gulp.dest(outputDir))
    .pipe(connect.reload())
});

gulp.task('default', ['html', 'js', 'compass', 'connect', 'watch']);
