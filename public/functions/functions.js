document.addEventListener("DOMContentLoaded", function () {
    var mySwiper = new Swiper(".swiper", {
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        spaceBetween: 20,
        autoHeight: true,
    });

    window.goToSlide = function (index) {
        mySwiper.slideTo(index);
    };
});

document.addEventListener("DOMContentLoaded", function() {
    var successMessages = document.getElementsByClassName("success-message");
    var errorMessages = document.getElementsByClassName("error-message");

    if (successMessages.length > 0) {
        var successMessage = successMessages[0];

        setTimeout(() => {
            successMessage.classList.add('d-none');
        }, 5000);
    }

    if (errorMessages.length > 0) {
        var errorMessage = errorMessages[0];

        setTimeout(() => {
            errorMessage.classList.add('d-none');
        }, 5000);
    }
});
