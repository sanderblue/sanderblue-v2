define(
[
    'jquery',
    'owlcarousel'
],
function($, OwlCarousel) {

    function PhotographyController(options) {
        $(function() {
            $('#photography-carousel').owlCarousel({
                items : 1,
                autoHeight: true
            });
        });
    }

    return PhotographyController;
});
