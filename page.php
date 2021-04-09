<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<section>
	<div class="page-title">
		<div></div>
		<div><h1><?php the_title(); ?></h1></div>
	</div>

	<div class="subtitle">
		<p><?php the_field('subtitle'); ?></p>
	</div>
</section>

<section>
	<?php the_content(); ?>
</section>
<?php endwhile; else : ?>
	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->
<?php endif; ?>


<?php get_footer(); ?>
