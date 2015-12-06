define(
[
    'backbone'
],
function(Backbone) {

    var User = Backbone.Model.extend({
        initialize: function(options) {
            console.debug('USER MODEL', options);
        },

        getFullName: function () {
            return this.get('name') +' '+ this.get('surname');
        },

        defaults: {
            name: 'John',
            surname: 'Smith'
        }
    });

    return User;
});
