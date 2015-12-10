define(
[
    'backbone'
],
function(Backbone) {

    var MyView = Backbone.View.extend({
        tagName: 'div',
        el: '#element',
        initialize: function() {
            /* Listen to changes of the model and if any change occure call view's render function. */
            this.listenTo(this.model, 'change', this.render);
        }
    });

});
