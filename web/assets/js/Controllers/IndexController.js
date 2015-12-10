define(
[
    'js/Models/User'
],
function(User) {

    function IndexController(options) {
        this.user = new User();

        console.debug('User', this.user);
        console.debug('Full Name:', this.user.getFullName());
    }

    return IndexController;
});
