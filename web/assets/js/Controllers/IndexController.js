define(
[
    'js/Models/User'
],
function(User) {

    function IndexController(options) {
        this.user = new User({'surname': 'blue'});
    }

    return IndexController;

    // return function IndexController() {
    //     return {
    //         index: function() {
    //             alert('WTF...................');
    //         },
    //         show: function(id) {

    //         },
    //         edit: function(id) {

    //         }
    //     };
    // };
});
