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

<div class="submenu"><?php
	if( have_rows('add_content_row') ):
		$counter = 0;
		while ( have_rows('add_content_row') ) : the_row();
			$counter++;
			if (get_sub_field('row_title')) {?>
				<div class="submenu-item"><span class="counter"><?php echo $counter; ?>. <a href="#<?php the_sub_field('row_title');?>"><?php the_sub_field('row_title');?></a></div><?php
			}
		endwhile;
	endif;?>
</div>

<?php
$counter = 0;
if( have_rows('add_content_row') ):
	while ( have_rows('add_content_row') ) : the_row();
		$counter++;?>
		<section class="guide-row guide-row-<?php echo $counter;?> <?php if (!get_sub_field('row_title')) { ?> guide-row-no_title<?php } ?>" id="<?php the_sub_field('row_title');?>">
			<?php if (get_sub_field('row_title')) { ?> <div class="row-title"><?php echo $counter; ?>. <?php the_sub_field('row_title');?></div><?php } ?>
			<div class="row-content">
				<div class="column-left"><?php the_sub_field('left_column'); ?></div>
				<div class="column-right"><?php the_sub_field('right_column'); ?></div>
			</div>
		</section><?php
	endwhile;
endif;?>

<?php endwhile; else : ?>
	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->
<?php endif; ?>


<?php get_footer(); ?>
