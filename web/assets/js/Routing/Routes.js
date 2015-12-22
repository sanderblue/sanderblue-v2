define(
[
    // 'backbone',
    // 'js/Controllers/IndexController',
    // 'js/Controllers/DeveloperController',
    // 'js/Controllers/PhotographyController',
    'foundation'
],
function(
    // Backbone,
    // IndexController,
    // DeveloperController,
    // PhotographyController
)
{
    $(function() {
        $(document).foundation();
    });

    // var AppRouter = Backbone.Router.extend({
    //     routes: {
    //         '': 'index',
    //         'developer': 'developer',
    //         'experience': 'experience',
    //         'projects': 'projects',
    //         'photography': 'photography'
    //     },

    //     index: function() {
    //         return new IndexController();
    //     },

    //     developer: function() {
    //         return new DeveloperController();
    //     },

    //     experience: function() {
    //         return new DeveloperController();
    //     },

    //     photography: function() {
    //         return new PhotographyController();
    //     }
    // });

    // var appRouter = new AppRouter();

    // appRouter.on('route', function(page) {
    //     console.debug('Page!!!', page);
    // });

    // Backbone.history.start({ pushState: true });

    // return appRouter;
});
