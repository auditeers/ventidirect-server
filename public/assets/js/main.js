(function ($) {
    "use strict";


    jQuery(document).ready(function ($) {

        $('select').niceSelect();


        //------------ Offcanvas menu -------------

        $('.filter__open__btn span').on('click', function () {
            $('.listing__product__wrapper, .overlay').addClass('active');
        })
        $('.filter__close__blk, .overlay').on('click', function () {
            $('.listing__product__wrapper, .overlay').removeClass('active');
        })



        //------------ Offcanvas menu -------------

        $('.open__allreview').on('click', function () {
            $('.allreview__offcanvas__area, .overlay').addClass('active');
        })
        $('.off__menu, .overlay').on('click', function () {
            $('.allreview__offcanvas__area, .overlay').removeClass('active');
        })





        //------------ Offcanvas menu -------------

        $('.open__choose__box').on('click', function () {
            $('.choose__offcanvas__area, .overlay').addClass('active');
        })
        $('.off__menu, .overlay').on('click', function () {
            $('.choose__offcanvas__area, .overlay').removeClass('active');
        })


        //------------ Offcanvas menu -------------

        $('.open__review').on('click', function () {
            $('.choose__offcanvas__area, .overlay').addClass('active');
        })
        $('.off__menu, .overlay').on('click', function () {
            $('.choose__offcanvas__area, .overlay').removeClass('active');
        })


        //------------ Offcanvas menu -------------

        $('.open__address__list').on('click', function () {
            $('.choose__offcanvas__area, .overlay').addClass('active');
        })
        $('.off__menu, .overlay').on('click', function () {
            $('.choose__offcanvas__area, .overlay').removeClass('active');
        })


        //------------ Offcanvas menu -------------

        $('.open__add__address__list').on('click', function () {
            $('.choose__offcanvas__blk, .overlay').addClass('active');
        })
        $('.off__menu, .overlay').on('click', function () {
            $('.choose__offcanvas__blk, .overlay').removeClass('active');
        })




        //------------ Offcanvas menu -------------

        $('.cart__ico i.fa-shopping-cart').on('click', function () {
            $('.headaer__right__blk').toggleClass('open__cart');
            $('.headaer__right__blk').removeClass('open__user');
        })



        //------------ Offcanvas menu -------------

        $('.user__icon, .user__ico').on('click', function () {
            $('.headaer__right__blk').toggleClass('open__user');
            $('.headaer__right__blk').removeClass('open__cart');
        })


        $(document).mouseup(function (e) {
            var container = $(".cart__offcanvas__blk");
            var container2 = $(".account__user__offcanvas");

            // If the target of the click isn't the container
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                $('.headaer__right__blk').removeClass('open__cart');
                //   $('.headaer__right__blk').removeClass('open__cart');
            }

            // If the target of the click isn't the container
            if (!container2.is(e.target) && container2.has(e.target).length === 0) {
                $('.headaer__right__blk').removeClass('open__user');
                //   $('.headaer__right__blk').removeClass('open__cart');
            }
        });


        //------------ Offcanvas menu -------------

        $('.open__megamenu').on('click', function () {
            $('.menu__inner__blk').toggleClass('active');
        })

        //------------ Offcanvas menu -------------

        $('.close__account__ntm').on('click', function () {
            $('.headaer__right__blk, .overlay').removeClass('open__user');
        })




        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav',
            prevArrow: '<i class="far fa-chevron-left prev-arrow"></i>',
            nextArrow: '<i class="far fa-chevron-right next-arrow"></i>'

        });

        $('.slider-nav').slick({
            slidesToShow: 8,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            focusOnSelect: true,
            prevArrow: false,
            nextArrow: false,

            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                        nav: false,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 8,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 575,
                    settings: 'unslick',
                },
            ],
        });


        //---owl dots number-----

        var i = 1;

        $('.hero-slier-main.owl-carousel .owl-dot').each(function () {
            $(this).text(i);
            i++;
        });











        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });


    }); //---document-ready-----





    $('.product__details__slide').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 3,
        margin: 16,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 20,
            },
            575: {
                items: 2,
                stagePadding: 30,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 2,
                stagePadding: 50,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });






    $('.pricing__slide__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 4,
        margin: 25,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 2,
                stagePadding: 40,
            },
            575: {
                items: 2,
                stagePadding: 40,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 3,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });



    $('.finish__ventilation__slide__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 5,
        margin: 25,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 2,
                stagePadding: 40,
            },
            575: {
                items: 2,
                stagePadding: 40,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 3,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });





    $('.pricing__geid__view__slide__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 3,
        margin: 25,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 2,
                stagePadding: 40,
            },
            575: {
                items: 2,
                stagePadding: 40,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 3,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });






    $('.based__reviews__slide').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 3,
        margin: 25,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 2,
                stagePadding: 40,
            },
            575: {
                items: 2,
                stagePadding: 40,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 3,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });




    $('.service__inner__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 3,
        margin: 20,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 2,
                stagePadding: 30,
            },
            575: {
                items: 2,
                stagePadding: 30,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 3,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });




    $('.progress__slide__area').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 3,
        margin: 15,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 1,
                stagePadding: 40,
            },
            475: {
                items: 1,
                stagePadding: 30,
            },
            575: {
                items: 1,
                stagePadding: 30,
            },
            768: {
                items: 2,
                stagePadding: 50,
            },
            992: {
                items: 2,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });




    $('.brand__slide__blk').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 9,
        margin: 12,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 3,
                stagePadding: 30,
            },
            575: {
                items: 5,
                stagePadding: 30,
            },
            768: {
                items: 5,
                stagePadding: 30,
            },
            992: {
                items: 7,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });






    $('.ventilation__brand__slide').owlCarousel({
        dots: false,
        loop: true,
        nav: false,
        autoplay: false,
        smartSpeed: 1000,
        autoplayTimeout: 3500,
        items: 6,
        margin: 12,
        slideToScroll: 1,
        center: false,
        autoplayHoverPause: true,
        responsive: {
            0: {
                stagePadding: 0,
            },
            320: {
                items: 3,
                stagePadding: 30,
            },
            575: {
                items: 5,
                stagePadding: 30,
            },
            768: {
                items: 5,
                stagePadding: 30,
            },
            992: {
                items: 6,
                stagePadding: 0,
            },
            1200: {
                stagePadding: 0,
            },
            1500: {
                stagePadding: 0,
            },
            1600: {
                stagePadding: 0,
            },
            1700: {
                stagePadding: 0,
            }
        }
    });






    
    //------------ Offcanvas menu -------------

    $('.open__menu').on('click', function () {
        $('.mobile__menu, .overlay').addClass('active');
    })
    $('.close__categorie__menu, .overlay').on('click', function () {
        $('.mobile__menu, .overlay, .categorie__mobile__menu ul li').removeClass('active');
    })




    $('.categorie__mobile__menu ul li a').click(function () {

        $(this).parent().addClass('active');

    });

    $('.back__second__blk').click(function () {
        
        $('.categorie__mobile__menu ul li').removeClass('active');

    });






}(jQuery));