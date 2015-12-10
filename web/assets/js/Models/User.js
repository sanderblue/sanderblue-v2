define(
[
    'backbone'
],
function(Backbone) {

    var User = Backbone.Model.extend({

        initialize: function(options) {

        },

        getFullName: function() {
            return this.get('name') +' '+ this.get('surname');
        },

        defaults: {
            name: 'Sander',
            surname: 'Blue'
        }
    });

    return User;
});
