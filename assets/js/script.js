jQuery(document).ready(function ($) {
    "use strict";
    $('.wpe-slider').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1200,
        responsive: [
            {
                breakpoint: 780,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.wpe-product-slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 1200,
        centerMode: true,
        centerPadding: '200px',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1950,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '500px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '300px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1370,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '220px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1030,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '120px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 780,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '20px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.counter').counterUp({
        delay: 20,
        time: 1000
    });


    $("a#faq-btn").on("click", function () {
        $(".wpe-faqs ul li").children("div#ggg").removeClass("wpe-d-flex");
        $(this).next("div#ggg").addClass("wpe-d-flex");
    });

    $('.wpe-menu-tab').on("click", function () {
        $('.wpe-menu-hide').toggleClass('show');
        $('.wpe-menu-tab').toggleClass('active');
    });
    $('a').on("click", function () {
        $('.wpe-menu-hide').removeClass('show');
        $('.wpe-menu-tab').removeClass('active');
    });
});