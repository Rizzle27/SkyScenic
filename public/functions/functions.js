document.addEventListener('DOMContentLoaded', function () {
    var mySwiper = new Swiper('.swiper', {
        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
        spaceBetween: 20,
        autoHeight: true,

    });

    window.goToSlide = function (index) {
        mySwiper.slideTo(index);
    };
});
