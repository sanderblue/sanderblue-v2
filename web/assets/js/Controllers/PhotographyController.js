define(
[
    'swiper'
],
function(Swiper) {

    function PhotographyController(options) {
        console.debug('PhotographyController');

        $(function() {
            initGallery();
        });

        function initGallery() {
            var galleryMain = new Swiper('.gallery-top', {
                effect: 'fade',
                fade: {
                    crossFade: true
                }
            });

            var galleryThumbs = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                centeredSlides: true,
                slidesPerView: 'auto',
                touchRatio: 0.2,
                slideToClickedSlide: true
            });

            galleryMain.params.control = galleryThumbs;
            galleryThumbs.params.control = galleryMain;
        }
    }

    return PhotographyController;
});
