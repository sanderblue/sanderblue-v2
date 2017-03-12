requirejs.config({
    'baseUrl': '/assets',
    'paths': {
        'app': 'js/app',
        'jquery': 'vendor/jquery/dist/jquery',
        'foundation': 'vendor/foundation-sites/dist/js/foundation'
    },
    'shim': {
        'app': {
            'deps': ['jquery']
        },
        'jquery': {
            'exports': ['$']
        },
        'foundation': {
            'deps': ['jquery']
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
