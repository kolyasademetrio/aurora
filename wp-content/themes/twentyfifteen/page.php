<?php get_header(); ?>

<div class="dinamyc__page">
	<div class="containerCenter">
		<div class="dinamyc__pageInner">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
