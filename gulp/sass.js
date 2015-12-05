'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass', function() {
    gulp.src('./web/assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./web/assets/css'))
    ;
});

gulp.task('watch', function() {
    gulp.watch('./web/assets/sass/**/*.scss', ['sass']);
});
