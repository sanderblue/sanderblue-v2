'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var minify = require('gulp-minify-css');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('sass', function() {
    return gulp.src('./web/assets/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(minify())
        .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./web/assets/css'))
    ;
});

gulp.task('foundation', function() {
    var sourceFiles = [
        './web/assets/vendor/foundation-sites/foundation-sites.scss',
        './web/assets/vendor/foundation-icon-fonts/_foundation-icons.scss'
    ];

    return gulp.src(sourceFiles)
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(minify())
        .pipe(concat('foundation.css'))
        .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./web/assets/css/vendor'))
    ;
});

gulp.task('watch', function() {
    gulp.watch('./web/assets/sass/**/*.scss', ['sass']);
});


