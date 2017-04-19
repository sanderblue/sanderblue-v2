'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var rename = require('gulp-rename');

gulp.task('css', function() {
    var sourceFiles = [
        './web/assets/css/vendor/foundation.min.css',
        './web/assets/css/main.min.css'
    ];

    return gulp.src(sourceFiles)
        .pipe(concat('main.built.css'))
        .pipe(uglify())
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
        .pipe(cleanCSS())
        .pipe(concat('foundation.css'))
        .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./web/assets/css/vendor'))
    ;
});
