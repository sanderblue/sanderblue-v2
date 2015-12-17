define(
[
    'backbone',
    'js/Controllers/IndexController',
    'js/Controllers/DeveloperController',
    'js/Controllers/PhotographyController'
],
function(
    Backbone,
    IndexController,
    DeveloperController,
    PhotographyController
)
{
    var AppRouter = Backbone.Router.extend({
        routes: {
            '': 'index',
            'developer': 'developer',
            'adventurer/photography': 'photography'
        },

        index: function() {
            return new IndexController();
        },

        developer: function() {
            return new DeveloperController();
        },

        photography: function() {
            return new PhotographyController();
        }
    });

    var appRouter = new AppRouter();

    // appRouter.on('route', function(page) {
    //     console.debug('Page!!!', page);
    // });

    Backbone.history.start({ pushState: true });

    return appRouter;
});
