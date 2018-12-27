jQuery(document).ready(function($) {

    if ( $('.mainScreen__slider').length ) {
        $('.mainScreen__slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // asNavFor: '',
            dots: false,
            arrows: true,
            centerMode: false,
            focusOnSelect: true,
            autoplay: false,
            autoplaySpeed: 6000,

        });
    }

    (function(){
        function reviewSliderInit(){
            $('.reviews__list').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                // asNavFor: '',
                dots: false,
                arrows: false,
                centerMode: false,
                focusOnSelect: false,
                autoplay: false,
                autoplaySpeed: 6000,
                responsive: [
                    {
                        breakpoint: 768,/*767px and less*/
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 601,/*600px and less*/
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 451,/*450px and less*/
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            centerMode: true,
                        }
                    },
                    {
                        breakpoint: 321,/*320px and less*/
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: true,
                        }
                    }
                ]
            });
        }

        if ( $('.reviews__list').length ) {

            var itemsLength =  $('.reviews__listItem').length,
                windowWidth = $(window).width();

            if (
                (windowWidth > 767 && itemsLength > 5) ||
                (windowWidth <= 767 && windowWidth > 600 && itemsLength > 4) ||
                (windowWidth <= 600 && windowWidth > 450 && itemsLength > 3) ||
                (windowWidth <= 450 && windowWidth > 320 && itemsLength > 2) ||
                (windowWidth == 320 && itemsLength > 1)
            ) {
                reviewSliderInit();
            }
        }
    })();



    $('.reviews__list').magnificPopup({
        type:'image',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        // closeMarkup: '<div class="mfp-close"><span class="search-close-icon">&times;</span><span class="search-close-text"> Закрыть</span></div>',
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
            },
            close: function() {
            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'reviews__gallery';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;

                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
            },
            elementParse: function(item) {
            },
            markupParse: function(template, values, item) {
            },
            change: function(){
            }
        },
        gallery: {
            enabled:true,
            navigateByImgClick: false,
        },
        delegate: '.reviews__listItem:not(.slick-cloned)',
    });

    $('.orderPopupLink').magnificPopup({
        type:'inline',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
            },
            close: function() {

            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'order__popup';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;
            }
        }
    });

    (function(){
        if ( $('.video__listItem').length > 1 ) {
            $('.video__list').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.video__navList',
                autoplay: false
            });
        }

        if ( $('.video__navListItem').length > 1 ) {
            var $navList = $('.video__navList'),
                slideCount = $('.video__navListItem').length,
                verticalMode = $(window).width() > 600 ? true : false;

            console.log( 'slideCount', slideCount );

            $navList.on('init', function(event, slick){
                if ( slideCount <= 3 ) {
                    if ( $(window).width() > 600 ) {
                        $navList.closest('.video__nav').addClass('inited');
                    } else if ( $(window).width() <= 600 ) {
                        $navList.closest('.video__nav').addClass('inited-mob');
                    }
                }
            });

            $navList.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.video__list',
                dots: false,
                focusOnSelect: true,
                vertical: verticalMode,
                arrows: true,
                prevArrow:'<div type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;"></div>',
                nextArrow:'<div type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;"></div>',
            });
        } else {
            $('.video__inner').removeClass('has_nav');
        }

        $('.video__link').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false,
        });

    })();

    $('.header__humburger').magnificPopup({
        type:'inline',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
            },
            close: function() {

            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'meinMenu__popup';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;
            }
        }
    });


    $('.mainScreen__formLink').magnificPopup({
        type:'inline',
        removalDelay: 500,
        mainClass: 'mfp-fade popup_inline',
        showCloseBtn: true,
        closeMarkup: '<div class="mfp-close"></div>',
        closeBtnInside: true,
        closeOnContentClick: false,
        closeOnBgClick: true,
        alignTop: false,
        fixedContentPos: true,
        callbacks: {
            open: function() {
                $('.mfp-content .mainScreen__formWrap').css({
                    'margin-top': $('header.header').outerHeight(),
                });
            },
            close: function() {

            },
            beforeOpen: function() {
                var $triggerEl = $(this.st.el),
                    newClass = 'mainScreen__formPopup';
                this.st.mainClass = this.st.mainClass + ' ' + newClass;
            }
        }
    });

    $('input[type="tel"]').mask("+38 (999) 999-99-99");

    
    /* Неиспользуется */
    (function(){
        /*var slidesToShow = 7,
            windowWidth = $(window).width();

        if ( windowWidth < 1200 && windowWidth > 767 ) {
            slidesToShow = 5;
        } else if ( windowWidth <= 767 && windowWidth >= 320 ) {
            slidesToShow = 3;
        }

        $('.partners__list').owlCarousel({
            center: true,
            loop: true,
            items: slidesToShow,
            autoplay: true,
            autoplayTimeout:3000
        });*/
    })();


    new WOW().init();

});

