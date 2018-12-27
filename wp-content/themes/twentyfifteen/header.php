<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<?php
$mainClass = '';
if ( wp_is_mobile() ) {
	$mainClass = 'is_mobile';
} ?>
<html <?php language_attributes(); ?> class="no-js <?php echo $mainClass; ?>" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<!--	<meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=yes">-->
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<?php
$bodyClass = (!is_front_page()) ? 'internalPages' : 'homePage';
?>
<body <?php body_class($bodyClass); ?>>

<?php
if ( function_exists( 'pll_current_language' ) ) {
	$locale = pll_current_language();
}
?>

<div class="wrapper__main <?php echo $mainClass; ?>">
	<div class="content__main">

		<!--header-->
		<header class="header" id="header">
			<div class="containerCenter wide">
				<div class="header__inner">
					<div class="header__logoWrap">
						<a href="<?php echo esc_url(home_url('/')); ?>" class="header__logoLink">
							<span class="header__logoImgWrap">
								<img src="<?php the_field('logo_img_ru', 'option'); ?>" alt="Aurora">
							</span>
						</a>
					</div>

					<nav class="header__menuWrap">
						<?php $menu_name = 'main_menu_'. $locale; ?>
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu'            => $menu_name,
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'header__menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before' => '',
								'link_after'  => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) );
						?>
					</nav>

					<div class="header__contactsWrap">
						<div class="header__contacts">
							<?php if ( !empty(get_field('phone_1', 'option')) ) : ?>
								<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_1', 'option') ); ?>" class="header__phone phone_link header__phone_1">
									<?php echo trim(get_field('phone_1', 'option')); ?> (viber)
								</a>
							<?php endif; ?>

							<?php if ( !empty(get_field('phone_2', 'option')) ) : ?>
								<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_2', 'option') ); ?>" class="header__phone phone_link no_icon  header__phone_2">
									<?php echo trim(get_field('phone_2', 'option')); ?> (viber)
								</a>
							<?php endif; ?>

							<?php if ( !empty(get_field('email_1', 'option')) ) : ?>
								<a href="mailto:tel:<?php echo get_field('email_1', 'option'); ?>" class="header__mail mail_link header__mail_1">
									<?php echo trim(get_field('email_1', 'option')); ?>
								</a>
							<?php endif; ?>

							<?php if ( !empty(get_field('email_2', 'option')) ) : ?>
								<a href="mailto:tel:<?php echo get_field('email_2', 'option'); ?>" class="header__mail mail_link header__mail_2">
									<?php echo trim(get_field('email_2', 'option')); ?>
								</a>
							<?php endif; ?>
						</div>
					</div>

					<a href="#menu__mobile" class="header__humburger">
						<span></span><span></span><span></span>
					</a>

					<div class="menu__mobile mfp-hide" id="menu__mobile">
						<div class="header__logoWrap">
							<a href="<?php echo esc_url(home_url('/')); ?>" class="header__logoLink">
							<span class="header__logoImgWrap">
								<img src="<?php the_field('logo_img_ru', 'option'); ?>" alt="Aurora">
							</span>
							</a>
						</div>

						<nav class="header__menuWrap">
							<?php $menu_name = 'main_menu_'. $locale; ?>
							<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'menu'            => $menu_name,
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'header__menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before' => '',
								'link_after'  => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'depth'           => 0,
								'walker'          => '',
							) );
							?>
						</nav>

						<div class="header__contactsWrap">
							<div class="header__contacts">
								<div class="footer__address">
									<?php if( !empty( get_field('address', 'options') ) ): ?>
										<?php echo get_field('address', 'options'); ?>
									<?php endif; ?>
								</div>

								<?php if ( !empty(get_field('phone_1', 'option')) ) : ?>
									<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_1', 'option') ); ?>" class="header__phone phone_link">
										<?php echo get_field('phone_1', 'option'); ?> (viber)
									</a>
								<?php endif; ?>

								<?php if ( !empty(get_field('email_1', 'option')) ) : ?>
									<a href="mailto:tel:<?php echo get_field('email_1', 'option'); ?>" class="header__mail mail_link">
										<?php echo get_field('email_1', 'option'); ?>
									</a>
								<?php endif; ?>

								<?php if ( !empty(get_field('phone_2', 'option')) ) : ?>
									<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_2', 'option') ); ?>" class="header__phone phone_link">
										<?php echo get_field('phone_2', 'option'); ?> (viber)
									</a>
								<?php endif; ?>

								<?php if ( !empty(get_field('email_2', 'option')) ) : ?>
									<a href="mailto:tel:<?php echo get_field('email_2', 'option'); ?>" class="header__mail mail_link">
										<?php echo get_field('email_2', 'option'); ?>
									</a>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!--<div id="menu__mobile" class="menu__mobile mfp-hide">
			<div class="menu__mobileInner">
				<ul class="header__langsWrap"><?php /*pll_the_languages();*/?></ul>
				<nav class="header__nav">
					<?php /*$menu_name = 'main_menu_'. $locale; */?>
					<?php
/*					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => 'main_menu_ru',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'header__menu',
						'menu_id'         => '',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'before'          => '',
						'after'           => '',
						'link_before' => '',
						'link_after'  => '',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth'           => 0,
						'walker'          => '',
					) );
					*/?>
				</nav>
			</div>
		</div>-->

		<div id="main" class="site__main">
			<a class="orderPopupLink" href="#orderPopup"><span></span></a>
			<div class="orderPopup mfp-hide" id="orderPopup">
				<div class="mainScreen__formWrap">
					<div class="mainScreen__formTitle">
						<?php pll_e('Перезвонить мне'); ?>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="162" title="Перезвонить мне"]') ?>
				</div>
			</div>





