requirejs.config({
    baseUrl: '/assets',
    paths: {
        'app': 'js/app',
        'jquery': 'vendor/jquery/dist/jquery',
        'foundation': 'vendor/foundation-sites/dist/foundation',
        'backbone': 'vendor/backbone/backbone',
        'underscore': 'vendor/underscore/underscore',
        'swiper': 'vendor/Swiper/dist/js/swiper.jquery.umd'
    },
    shim: {
        'app': {
            deps: ['jquery', 'underscore', 'backbone']
        },
        'jquery': {
            exports: ['$']
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
        },
        'swiper': {
            exports: ['Swiper'],
            deps: ['jquery']
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
