var gulp = require('gulp');
var rjs = require('requirejs');

var CONFIG = {
    baseUrl: './web/assets',
    paths: {

    },
    name: 'js/app',
    out: 'web/assets/build/app-built.js'
};

gulp.task('requirejs', function(cb) {
    rjs.optimize(CONFIG, function(buildResponse){
        console.log('Requirejs optimization done...', buildResponse);

        cb();
    }, cb);
});
