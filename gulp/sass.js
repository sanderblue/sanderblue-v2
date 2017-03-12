'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var cache = require('gulp-cached');
var sourcemaps = require('gulp-sourcemaps');
var progeny = require('gulp-progeny');
var browserSync = require('browser-sync');
var cleanCSS = require('gulp-clean-css');

/**
 * Glob to match all .scss files.
 */
var SCSS_FILES = './web/assets/sass/**/*.scss';

/**
 * CSS distribution output path
 */
var DIST_PATH = './web/assets/css';

gulp.task('sass', function() {
    return gulp.src(SCSS_FILES)
        .pipe(cache('sass'))
        .pipe(progeny())
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass().on('error', handleSassError))
        .pipe(cleanCSS())
        .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(DIST_PATH))
    ;
});

// gulp.task('watch', function() {
//     gulp.watch('./web/assets/sass/**/*.scss', ['sass']);
// });

gulp.task('watch:sass', ['sass'], function() {
    browserSync.init({
        proxy: 'http://sanderblue.lcl/',
        port: 3000,
    });

    gulp.watch(SCSS_FILES, ['sass'], browserSync.reload);
});


/**
 * System beep for when an error occurs.
 */
function beep() {
    process.stdout.write('\u0007');
}

/**
 * Error handler for Sass compilation.
 *
 * @param {Object} error
 */
function handleSassError(error) {
    process.stderr.write(error.messageFormatted + '\n');

    // If in production environment, kill the process with failure exit code.
    if (environment === 'prod') {
        process.exit(1);
    } else {
        beep();
        this.emit('end');
    }
}
