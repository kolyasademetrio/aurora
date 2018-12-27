jQuery(document).ready(function($){

    /* ------------------------>>> Прижать футер к низу <<<------------------------------------------------- */
    (function(){
        if (  $('footer.footer').length ) {
            $(window).load(function(){
                footer();
            });

            $(window).resize(function() {
                footer();
            });

            function footer() {
                var docHeight = $(window).height(),
                    footerHeight = $('footer.footer').outerHeight(),
                    footerBottom = $('footer.footer').position().top + footerHeight;

                if (footerBottom < docHeight) {
                    $('footer.footer').css('margin-top', (docHeight - footerBottom) + 'px');
                }
            }
        }
    })();
    /* ------------------------>>> Прижать футер к низу End <<<--------------------------------------------- */


    /* ------------------------>>> высота полосы с текстом в слайдере на главной mainScreen <<<------------- */
    function setSliderLine(){
        if ( $('.containerCenter__leftInner').length && $('.mainScreen__slideText').length ) {
            var $leftLine = $('.containerCenter__leftInner'),
                $slideText = $('.mainScreen__slideText'),
                slideTextHeight = $slideText.outerHeight();

            $leftLine.css({
                'height': slideTextHeight,
            });
        }
    }

    $(window).load(function(){
        setSliderLine();
    });

    $(window).resize(function(){
        setSliderLine();
    });
    /* ------------------------>>> высота полосы с текстом в слайдере на главной mainScreen End <<<--------- */



    /* ------------------------>>> отступы под шапку в mainScreen <<<--------------------------------------- */
    function setIndentsForHeaderAndBottom(){
        if ( $('header.header').length ) {
            var headerHeight = $('header.header').outerHeight();

            if (  $('.mainScreen__slideInner').length ) {
                $('.mainScreen__slideInner').css({
                    'padding-top': headerHeight + 'px',
                    'padding-bottom': headerHeight + 'px',
                });
            }

            if ( $('.containerCenter__left').length ) {
                $('.containerCenter__left').css({
                    'padding-top': headerHeight + 'px',
                    'padding-bottom': headerHeight + 'px',
                });
            }

            /*if ( $('.mainScreen__formContainer>.containerCenter').length ) {
                $('.mainScreen__formContainer>.containerCenter').css({
                    'padding-top': headerHeight + 'px',
                    'padding-bottom': headerHeight + 'px',
                });
            }*/
        }
    }

    $(window).load(function(){
        setIndentsForHeaderAndBottom();
    });

    $(window).resize(function(){
        setIndentsForHeaderAndBottom();
    });

    if ( $('.dinamyc__page').length ) {
        $('.dinamyc__page').css({
            'padding-top': $('header.header').outerHeight(),
        });
    }
    /* ------------------------>>> отступы под шапку в mainScreen End <<<------------------------------ */



    /* ------------------------>>> setStickyHeader <<<------------------------------------------------- */
    (function(){
        if ( $("header.header").length ) {
            var $header = $("header.header"),
                headerTop = $("header.header").offset().top;

            function setStickyHeader() {
                var scroll = $(window).scrollTop();

                if (scroll > 0) {
                    $header.addClass('sticky');
                } else {
                    $header.removeClass('sticky');
                }
            }

            function setStickyheaderMobile(){
                if ( $('body').hasClass('homePage') ) {
                    var scroll = $(window).scrollTop(),
                        $site__main = $('.site__main'),
                        $header = $('header.header');

                    if (scroll >= 10) {
                        $header.css({
                            'padding-top': headerMenusHeight,
                        });

                        $header.addClass('sticky__mobile');
                    } else {
                        $header.removeClass('sticky__mobile');

                        $header.css({
                            'padding-top': '',
                        });
                    }
                }
            }

            $(window).on('load', function(){
                if ( $(window).width() >= 768 ) {
                    setStickyHeader();
                } else {
                    //setStickyheaderMobile();
                }
            });

            $(window).on('scroll', function(){
                if ( $(window).width() >= 768 ) {
                    setStickyHeader();
                } else {
                    //setStickyheaderMobile();
                }
            });
        }
    })();
    /* ------------------------>>> setStickyHeader End <<<--------------------------------------------- */



    /* ------------------------>>> click on .ourServices__addInfoReadmore <<<-------------------------- */
    function readmoreClick(){
        var $readmoreWrapper = $('.ourServices__addInfo'),
            innerHeight = $('.ourServices__addInfoContentInner').innerHeight();

        if ( $readmoreWrapper.hasClass('opened') ) {
            $readmoreWrapper.removeClass('opened');
            $('.ourServices__addInfoContent').css({
                'max-height': '',
            });
        } else {
            $readmoreWrapper.addClass('opened');
            $('.ourServices__addInfoContent').css({
                'max-height': innerHeight,
            });
        }
    }

    $(document).on('click', '.ourServices__addInfoReadmore', function(){
        readmoreClick();
    });
    /* ------------------------>>> click on .ourServices__addInfoReadmore End <<<---------------------- */



    /* ------------------------>>> Якоря меню <<<------------------------------------------------------ */
    function ancor ($ancor) {
        $ancor.on('click', function(e){
            var thisHREF = $(this).attr('href');
            if ( thisHREF.startsWith('#') ) {
                var $goal = $(thisHREF),
                    headerHeight = $('header.header').innerHeight();

                if ( $goal.length ) {
                    $('html,body').stop().animate({scrollTop: $goal.offset().top - headerHeight}, 1000);

                    setTimeout(function(){
                        $.magnificPopup.close();
                    }, 1000);

                    e.preventDefault();
                } else {
                    var homeURL = window.location.protocol + "//" + window.location.host + "/",
                        redirectURL = homeURL + thisHREF;

                    window.location.href = redirectURL;
                }
            }
        });
    }
    ancor( $('li.menu-item>a') );
    /* ------------------------>>> Якоря меню End <<<-------------------------------------------------- */


    /* ------------------------>>> Анимация скролла при переходе на якорь с Внутренней страницы <<<----- */
    function animationScrollWithHash(){
        if (window.location.hash != '') {
            var hash = window.location.hash;
            $('html,body').stop().animate({scrollTop: $(hash).offset().top - $('header.header').innerHeight()}, 1000);
        }
    }
    animationScrollWithHash();
    /* ------------------------>>> Анимация скролла при переходе на якорь с Внутренней страницы End <<<- */
    
    
    
    
    /* ------------------------>>> mainScreen__formWrap popup <<<--------------------------------------- */
    function setMainScreenFormPopup(){
        if ( $(window).width() <= 850 ) {
            $('.mainScreen__formInner .mainScreen__formWrap').addClass('mfp-hide');
            $('.section.mainScreen').addClass('has-mobile-form');
            $('.mainScreen__formLink').css({
                'top': $('header.header').outerHeight(),
            });
        } else {
            $.magnificPopup.close();
            $('.mainScreen__formInner .mainScreen__formWrap').removeClass('mfp-hide');
            $('.section.mainScreen').removeClass('has-mobile-form');
        }
    }

    $(window).on('load', function(){
        setMainScreenFormPopup();
    });

    $(window).resize(function(){
        setMainScreenFormPopup();
    });
    /* ------------------------>>> mainScreen__formWrap popup End <<<------------------------------------ */






    /* ------------------------>>> Animations <<<----------------------------------------------------- */
    $('.header__logoLink').addClass('animated zoomIn');

    $('.header__menu>.menu-item>a').addClass('wow zoomIn');
    $('.header__contacts').addClass('wow zoomIn');

    $('.ourServices__title').addClass('wow slideInRight');

    $('.aboutUs__title').addClass('wow slideInLeft');

    $('.ourServices__listItem').addClass('wow fadeInLeft');
    $('.ourServices__listItem:nth-child(1)').attr('data-wow-delay', '.8s');
    $('.ourServices__listItem:nth-child(2)').attr('data-wow-delay', '.6s');
    $('.ourServices__listItem:nth-child(3)').attr('data-wow-delay', '.4s');
    $('.ourServices__listItem:nth-child(4)').attr('data-wow-delay', '.2s');


    $('.aboutUs__info').addClass('wow fadeInRight');
    $('.aboutUs__listItem').addClass('wow bounceIn');
    $('.aboutUs__listItem:nth-child(1)').attr('data-wow-delay', '1s');
    $('.aboutUs__listItem:nth-child(2)').attr('data-wow-delay', '.8s');
    $('.aboutUs__listItem:nth-child(3)').attr('data-wow-delay', '.6s');
    $('.aboutUs__listItem:nth-child(4)').attr('data-wow-delay', '.4s');
    $('.aboutUs__listItem:nth-child(5)').attr('data-wow-delay', '.2s');

    $('.reviews__title').addClass('wow fadeInRight');
    $('.reviews__listInner').addClass('wow flipInX');

    $('.video__main').addClass('wow slideInLeft');
    $('.video__nav').addClass('wow slideInRight');

    $('.orderForm__title').addClass('wow slideInLeft');
    $('.inputs__wrap>label').addClass('wow zoomInDown');

    $('.advantages__title').addClass('wow slideInRight');
    $('.advantages__listItem').addClass('wow flipInX');
    $('.advantages__listItem:nth-child(1)').attr('data-wow-delay', '1s');
    $('.advantages__listItem:nth-child(2)').attr('data-wow-delay', '.8s');
    $('.advantages__listItem:nth-child(3)').attr('data-wow-delay', '.6s');
    $('.advantages__listItem:nth-child(4)').attr('data-wow-delay', '.4s');
    $('.advantages__listItem:nth-child(5)').attr('data-wow-delay', '.2s');
    $('.advantages__listItem:nth-child(6)').attr('data-wow-delay', '0');

    $('.map').addClass('wow zoomIn');
    $('.footer__inner').addClass('wow zoomIn');
    /* ------------------------>>> Animations End <<<------------------------------------------------- */

});