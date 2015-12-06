requirejs.config({
    baseUrl: './assets',
    paths: {
        'jquery': 'vendor/jquery/dist/jquery',
        'foundation': 'vendor/foundation-sites/dist/foundation',
        'backbone': 'vendor/backbone/backbone',
        'underscore': 'vendor/underscore/underscore'
    },
    shim: {
        'jquery': {
            exports: ['jQuery', '$']
        },
        'foundation': {
            exports: ['Foundation'],
            deps: ['jquery']
        },
        'backbone': {
            exports: ['Backbone'],
            deps: ['underscore']
        },
        'underscore': {
            exports: ['_']
        }
    }
});

var ENV = 'development';
// var ENV = 'production';

var appPath = 'js/app';

if (ENV === 'production') {
    appPath = 'build/app-built';
}

require([appPath]);
