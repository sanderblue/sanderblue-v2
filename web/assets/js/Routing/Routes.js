define(
[
    'backbone',
    'js/Controllers/IndexController'
],
function(
    Backbone,
    IndexController
)
{
    console.debug('Routes Backbone: ', Backbone);

    var AppRouter = Backbone.Router.extend({
        routes: {
            '': 'index',    // /
            'home': 'index',    // /home
        },

        index: function() {
            return new IndexController();
        }
    });

    var appRouter = new AppRouter();

    appRouter.on('route', function(page) {
        console.debug('Page!!!', page);
    });

    Backbone.history.start({ pushState: true });

    return appRouter;
});
