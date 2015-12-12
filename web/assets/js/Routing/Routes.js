define(
[
    'backbone',
    'js/Controllers/IndexController',
    'js/Controllers/DeveloperController'
],
function(
    Backbone,
    IndexController,
    DeveloperController
)
{
    var AppRouter = Backbone.Router.extend({
        routes: {
            '': 'index',
            'developer': 'developer'
            // ,
            // 'designer': 'designer',
            // 'adventurer': 'adventurer',
        },

        index: function() {
            return new IndexController();
        },

        developer: function() {
            return new DeveloperController();
        }
        // ,

        // designer: function() {
        //     return new DesignerController();
        // },

        // adventurer: function() {
        //     return new AdventurerController();
        // }
    });

    var appRouter = new AppRouter();

    // appRouter.on('route', function(page) {
    //     console.debug('Page!!!', page);
    // });

    Backbone.history.start({ pushState: true });

    return appRouter;
});
