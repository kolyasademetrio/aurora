<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php
if ( function_exists( 'pll_current_language' ) ) {
	$locale = pll_current_language();
}
?>

</div><!-- site__main -->
</div><!-- content__main -->


<footer id="colophon" class="footer" role="contentinfo">
	<div class="containerCenter">
		<div class="footer__inner">
			<div class="footer__logoWrap">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="footer__logoLink">
					<span class="footer__logoImgWrap">
						<img src="<?php the_field('logo_img_ru', 'option'); ?>" alt="Aurora">
					</span>
				</a>
			</div>

			<div class="footer__content">
				<nav class="footer__menuWrap">
					<?php $menu_name = 'main_menu_'. $locale; ?>
					<?php
					wp_nav_menu( array(
						'theme_location'  => 'primary',
						'menu'            => $menu_name,
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'footer__menu',
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

				<div class="footer__contactsWrap">
					<div class="footer__address">
						<?php if( !empty( get_field('address', 'options') ) ): ?>
							<?php echo get_field('address', 'options'); ?>
						<?php endif; ?>
					</div>

					<div class="footer__contacts">
						<?php if ( !empty(get_field('phone_1', 'option')) ) : ?>
							<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_1', 'option') ); ?>" class="footer__phone phone_link">
								<?php echo get_field('phone_1', 'option'); ?> (viber)
							</a>
						<?php endif; ?>


						<?php if ( !empty(get_field('email_2', 'option')) ) : ?>
							<a href="mailto:tel:<?php echo get_field('email_2', 'option'); ?>" class="footer__mail mail_link">
								<?php echo get_field('email_2', 'option'); ?>
							</a>
						<?php endif; ?>
					</div>

					<div class="footer__contacts last">
						<?php if ( !empty(get_field('phone_2', 'option')) ) : ?>
							<a href="tel:<?php echo str_replace( array(' ', '(', ')', '-'), '', get_field('phone_2', 'option') ); ?>" class="footer__phone phone_link">
								<?php echo get_field('phone_2', 'option'); ?> (viber)
							</a>
						<?php endif; ?>

						<?php if ( !empty(get_field('email_1', 'option')) ) : ?>
							<a href="mailto:tel:<?php echo get_field('email_1', 'option'); ?>" class="footer__mail mail_link">
								<?php echo get_field('email_1', 'option'); ?>
							</a>
						<?php endif; ?>
					</div>
				</div>

				<div class="footer__copyright">Разработка сайта <a href="http://www.seotm.ua/">SEOTM Digital Agency</a></div>
			</div>
		</div>
	</div>
</footer><!-- .site-footer -->

</div><!-- wrapper__main -->

<?php wp_footer(); ?>

</body>
</html>
