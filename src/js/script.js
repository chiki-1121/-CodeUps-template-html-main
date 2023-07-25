
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    //ドロワーメニュー
    $(".js-hamburger").click(function () {
        if ($(".js-hamburger").hasClass('is-active')) {
            $(".js-hamburger").removeClass("is-active");
            // $("html").toggleClass("is-fixed");
            $(".js-sp-nav").fadeOut(300);
        } else {
            $(".js-hamburger").addClass("is-active");
            // $("html").toggleClass("is-fixed");
            $(".js-sp-nav").fadeIn(300);
        };
    });

    //Swiper
    var swiper = new Swiper(".js-works-swiper", {
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
