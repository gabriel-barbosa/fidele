<?php get_header(); ?>

<section>
<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); // Dynamic Content. ?>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>

		<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

	</article>
	<!-- /article -->

<?php endif; ?>

</section>

<?php get_footer(); ?>
