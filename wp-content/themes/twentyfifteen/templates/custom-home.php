<?php /* Template Name: HomePage */ ?>

<?php get_header(); ?>
<?php
if ( function_exists( 'pll_current_language' ) ) {
    $locale = pll_current_language();
}
?>

    <?php
    $about_content = get_field('about_content');
    ?>
    <section class="section mainScreen" id="mainScreen">
        <div class="mainScreen__formContainer">
            <a href="#mainScreen__formWrap" class="mainScreen__formLink"></a>
            <div class="containerCenter">
                <div class="mainScreen__formInner">
                    <div class="mainScreen__formWrap" id="mainScreen__formWrap">
                        <div class="mainScreen__formTitle">
                            <?php pll_e('Быстрый просчет'); ?>
                        </div>
                        <?php
                        echo do_shortcode('[contact-form-7 id="5" title="Быстрый просчет"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <?php if ( !empty( get_field('slider_main') ) ) : ?>
        <ul class="mainScreen__slider">
            <?php foreach( get_field('slider_main') as $slider_main_slide ) : ?>
                <?php if ( $slider_main_slide['show_slide'] ) : ?>
                    <li class="mainScreen__slide">
                        <?php if ( $slider_main_slide['show_img_video'] == 'img' && !empty( $slider_main_slide['img'] ) ): ?>
                            <?php $slider_main_bg_image = 'background-image:url('. $slider_main_slide['img'] .')'; ?>
                        <?php endif ?>
                        <div class="mainScreen__contentWrap" style="<?php echo $slider_main_bg_image; ?>">
                            <?php if ( $slider_main_slide['show_img_video'] == 'video' && !empty( $slider_main_slide['video']) ): ?>
                                <video autoplay muted loop id="myVideo">
                                    <source  src="<?php echo $slider_main_slide['video']; ?>" type="video/mp4">
                                </video>
                            <?php endif; ?>
                        </div>
                        <div class="containerCenter__left">
                            <?php if ( $slider_main_slide['text'] ) : ?>
                                <div class="containerCenter__leftInner"></div>
                            <?php endif; ?>
                        </div>
                        <div class="containerCenter">
                            <div class="mainScreen__slideInner">
                                <?php if ( $slider_main_slide['text'] ) : ?>
                                    <div class="mainScreen__slideText">
                                        <?php echo $slider_main_slide['text']; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="containerCenter__right"></div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>

    <?php if ( get_field('show_our_services') ) : ?>
    <section class="section ourServices" id="ourServices">
        <div class="containerCenter">
            <div class="ourServices__inner">
                <div class="ourServices__title section__title dark">
                    <span>
                        <?php echo get_field('services_title'); ?>
                    </span>
                </div>
                <div class="ourServices__content">
                    <?php if ( !empty(get_field('services_list')) ) : ?>
                    <ul class="ourServices__list">
                        <?php foreach( get_field('services_list') as $service_list_item ) : ?>
                        <li class="ourServices__listItem">
                            <div class="ourServices__listItemInner">
                                <div class="ourServices__listItemImgWrap">
                                    <img class="ourServices__img" src="<?php echo $service_list_item['img']; ?>" alt="">
                                    <img class="ourServices__img hover" src="<?php echo $service_list_item['img_hover']; ?>" alt="">
                                </div>
                                <div class="ourServices__listItemContent">
                                    <div class="ourServices__listItemTitle">
                                    <span>
                                        <?php echo $service_list_item['title']; ?>
                                    </span>
                                    </div>
                                    <div class="ourServices__listItemText">
                                        <?php echo $service_list_item['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
                <div class="ourServices__addInfo">
                    <div class="ourServices__addInfoContent">
                        <div class="ourServices__addInfoContentInner">
                            <?php echo the_field('services_info'); ?>
                        </div>
                    </div>
                    <div class="ourServices__addInfoReadmore"></div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>


    <?php if ( get_field('show_about_us') ) : ?>
    <?php $about_us_bg = !empty(get_field('about_us_bg')) ? 'background-image:url('. get_field('about_us_bg') .');' : ''; ?>
    <?php $about_us_bg_mobile = !empty(get_field('about_us_bg_mobile')) ? 'background-image:url('. get_field('about_us_bg_mobile') .');' : ''; ?>
    <section class="section aboutUs" id="aboutUs" style="<?php echo $about_us_bg; ?>">
        <div class="aboutUs__bgMobile" style="<?php echo $about_us_bg_mobile; ?>"></div>
        <div class="containerCenter">
            <div class="aboutUs__titleInner">
                <div class="aboutUs__title section__title light">
                    <span>
                        <?php echo get_field('about_us_title'); ?>
                    </span>
                </div>
            </div>
        </div>

        <?php if ( !empty(get_field('about_us__info')) ) : ?>
        <div class="aboutUs__info">
            <div class="aboutUs__infoleft"></div>
            <div class="containerCenter">
                <div class="aboutUs__infoInner">
                    <?php echo get_field('about_us__info'); ?>
                </div>
            </div>
            <div class="aboutUs__infoRight"></div>
        </div>
        <?php endif; ?>

        <?php if ( !empty(get_field('about_us_list')) ) : ?>
            <div class="containerCenter">
                <div class="aboutUs__listInner">
                    <ul class="aboutUs__list">
                        <?php foreach( get_field('about_us_list') as $about_us_item ) : ?>
                        <li class="aboutUs__listItem">
                            <div class="aboutUs__listItemHeader">
                                <?php echo $about_us_item['header']; ?>
                            </div>
                            <div class="aboutUs__listItemFooter">
                                <?php echo $about_us_item['footer']; ?>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
    </section>
    <?php endif; ?>


    <?php if ( get_field('show_reviews') ) : ?>
    <section class="section reviews" id="reviews">
        <div class="containerCenter">
            <div class="reviews__titleInner">
                <div class="reviews__title section__title dark">
                    <span>
                        <?php echo get_field('reviews_title'); ?>
                    </span>
                </div>
            </div>
        </div>

        <?php if ( !empty(get_field('reviews_list')) ) : ?>
            <div class="containerCenter">
                <div class="reviews__listInner">
                    <div class="reviews__list">
                        <?php foreach( get_field('reviews_list') as $reviews_item ) : ?>
                            <?php if ( $reviews_item['show_review_item_in_slider'] ) : ?>
                            <a class="reviews__listItem" href="<?php echo $reviews_item['review']['sizes']['large']; ?>">
                                <span>
                                    <img src="<?php echo $reviews_item['review']['sizes']['medium']; ?>" alt="">
                                </span>
                            </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </section>
    <?php endif; ?>


    <?php if ( get_field('show_video_on_page') ) : ?>
    <section class="section video" style="background-color: <?php echo get_field('video_bg_color'); ?>">
        <div class="containerCenter">
            <div class="video__inner has_nav">
                <div class="video__main">
                    <?php if (!empty( get_field('video_list') )) : ?>
                        <ul class="video__list">
                            <?php foreach( get_field('video_list') as $video_list_item ) : ?>
                                <?php if ( $video_list_item['show_slide_in_slider'] ) : ?>
                                <li class="video__listItem">
                                    <a href="<?php echo $video_list_item['link'] ?>"
                                       class="video__link"
                                       style="background-image:url(<?php echo $video_list_item['preview'] ?>)"></a>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <?php if (!empty( get_field('video_list') ) ) : ?>
                <div class="video__nav">
                    <ul class="video__navList">
                        <?php foreach( get_field('video_list') as $video_list_item ) : ?>
                            <?php if ( $video_list_item['show_slide_in_slider'] ) : ?>
                            <li class="video__navListItem">
                                <?php echo $count; ?>
                                <div class="video__navListItemInner" style="background-image:url(<?php echo $video_list_item['preview'] ?>)"></div>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php if ( get_field('show_form_on_page') ) : ?>
    <section class="section orderForm" id="orderForm">
        <div class="containerCenter">
            <div class="orderForm__titleInner">
                <div class="orderForm__title section__title dark">
                    <span>
                        <?php echo get_field('order_form_title'); ?>
                    </span>
                </div>
            </div>
        </div>

        <?php if ( !empty(get_field('order_form_shortcode')) ) : ?>
            <?php $order_form_shortcode = get_field('order_form_shortcode'); ?>
            <div class="containerCenter">
                <div class="orderForm__inner">
                    <?php echo do_shortcode( $order_form_shortcode ); ?>
                </div>
            </div>
        <?php endif; ?>

    </section>
    <?php endif; ?>


    <?php if ( get_field('show_advantages') ) : ?>
    <section class="section advantages" id="advantages">
        <div class="containerCenter">
            <div class="advantages__titleInner">
                <div class="advantages__title section__title dark">
                    <span>
                        <?php echo get_field('advantages_title'); ?>
                    </span>
                </div>
            </div>
        </div>

        <?php if ( !empty(get_field('advantages_list')) ) : ?>
            <div class="containerCenter fullwidth">
                <div class="advantages__listInner">
                    <ul class="advantages__list">
                        <?php foreach( get_field('advantages_list') as $advantages_item ) : ?>
                            <?php if ( $advantages_item['show_advantage_in_list'] ) : ?>
                                <li class="advantages__listItem">
                                    <div class="advantages__listItemInner" style="background-image:url(<?php echo $advantages_item['img_bg'] ?>) ">
                                        <div class="advantages__itemTitle">
                                            <img src="<?php echo $advantages_item['img']; ?>" alt="" class="advantages__itemTitleIcon">
                                            <div class="advantages__itemTitleText">
                                                <?php echo $advantages_item['title']; ?>
                                            </div>
                                        </div>

                                        <div class="advantages__itemDescr" style="background-color:<?php echo $advantages_item['bg_color'] ?>;">
                                            <?php echo $advantages_item['text']; ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

    </section>
    <?php endif; ?>

    <div class="map" id="map">
        <div class="map__inner">
            <div class="map__left"></div>
            <div class="containerCenter">
                <div class="map__center">
                    <div class="map__centerInner">
                        <div class="map__address">
                            <?php echo get_field('address', 'options'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map__right"></div>
        </div>
        <div class="map__container"></div>
    </div>


<?php get_footer(); ?>