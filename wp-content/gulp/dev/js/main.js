jQuery(document).ready(function () {

    var htmlHeight = jQuery('html').innerHeight();
    var bodyHeight = jQuery('body').innerHeight();

    if (htmlHeight > bodyHeight) {
        jQuery('.footer').addClass("footer-absolute");
    }

    jQuery(window).on('resize', function () {
        var win = jQuery(this);
        if (win.width() <= 768) {
            jQuery('.footer').removeClass("footer-absolute");
            jQuery('.footer').addClass("footer-relative");
        }
    });

    //Homepage Slider
    var homepageSwiper = new Swiper('.swiper-container-homepage', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });

    //About Us Slider
    var aboutSwiper = new Swiper('.swiper-container-about', {
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        on: {
            slideChangeTransitionEnd: function (i, elm) {
                var allModules = jQuery('.module');
                // console.log(i, elm);
                allModules.each(function (i, elm) {
                    if (jQuery(elm).visible(true)) {
                        jQuery(elm).addClass('module-ready');
                    }
                });
            }
        }

    });

    //Team Slider
    var teamSwiper = new Swiper('.swiper-container-team', {
        init: true,
        effect: 'fade',
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    teamSwiper.on('slideChange', function () {
        var index = teamSwiper.activeIndex;
        console.log(index);
        jQuery('.tab-' + index).addClass('active');
        jQuery('.team-content .tab-content').removeClass('active');
    })

    //About Us Project Counter


    var spanCounter = jQuery('.section-projects');
    jQuery(document).on('scroll', function () {
        if (jQuery(spanCounter).visible(true) && !spanCounter.hasClass('start')) {
            spanCounter.addClass('start');

            jQuery('.count').each(function () {
                jQuery(this).prop('Counter', 0).animate({
                    Counter: jQuery(this).text()
                }, {
                    duration: 5000,
                    easing: 'swing',
                    step: function (now) {
                        jQuery(this).text(Math.ceil(now));
                    }
                });
            });
        }


    });


    //Module Add On First Window
    var allModules = jQuery('.module');
    allModules.each(function (i, elm) {
        if (jQuery(elm).visible(true)) {
            jQuery(elm).addClass('module-ready');
        }
    });

    //Module Add Scroll
    var allModules = jQuery('.module');
    jQuery(document).on('scroll', function () {
        var scroll = jQuery(document).scrollTop();
        allModules.each(function (i, elm) {
            if (jQuery(elm).visible(true)) {
                jQuery(elm).addClass('module-ready');
            }
        })

        // console.log(scroll);
    });

});

//To add a background color on header on Scroll 
$(window).on("scroll", function () {
    if ($(window).scrollTop() > 80) {
        $(".header").addClass("dark-background-on-scroll");
    } else {
        $(".header").removeClass("dark-background-on-scroll");
    }
});
