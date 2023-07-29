jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    let topBtn = $('.c-to-top');
    topBtn.hide();

    // ボタンの表示設定
    $(window).scroll(function () {
        if ($(this).scrollTop() > 70) {
            // 指定px以上のスクロールでボタンを表示
            topBtn.fadeIn();
        } else {
            // 画面が指定pxより上ならボタンを非表示
            topBtn.fadeOut();
        }
    });

    // ヘッダークラス名付与

    let header = $('.p-header');
    //ヘッダーの高さを取得
    let headerHeight = $('.p-header').height();
    //メインビューの高さを取得
    let height = $('.js-mv-height').height();

    $(window).scroll(function () {
        if ($(this).scrollTop() > (height - headerHeight)) {
            header.addClass('is-color');
        } else {
            header.removeClass('is-color');
        }
    });

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