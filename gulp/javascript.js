var gulp = require('gulp');
var rjs = require('requirejs');
var uglify = require('gulp-uglify');

var CONFIG = {
    baseUrl: './web/assets',
    paths: {

    },
    name: 'js/app',
    out: 'web/assets/js/build/main-built.js'
};

gulp.task('requirejs', function(cb) {
    rjs.optimize(CONFIG, function(buildResponse){
        console.log('Requirejs optimization done...', buildResponse);

        cb();
    }, cb);
});

gulp.task('javascript', function() {
    return gulp.src('./web/assets/js/build/main-built.js')
        .pipe(uglify())
        .dest('./web/assets/js/build')
    ;
});
