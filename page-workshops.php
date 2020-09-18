<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<section>
	<div class="page-title">
		<div></div>
		<div><h1><?php the_field('page_title'); ?></h1></div>
	</div>

	<div class="subtitle">
		<p><?php the_field('subtitle'); ?></p>
	</div>
</section>
<?php endwhile; endif; ?>

<section class="featured-image">
	<?php $image = get_field('featured_image');
	if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" />
	<?php endif; ?>
</section>

<section class="flexible-rows">
	<?php // Check value exists.
	if( have_rows('rows') ):
    while ( have_rows('rows') ) : the_row();
        if( get_row_layout() == 'one_column_row' ): ?>
					<div class="page-title">
						<div></div>
						<div><h1><?php the_sub_field('row_title'); ?></h1></div>
					</div>

					<div class="row grid col-1">
						<div class="content">
							<?php the_sub_field('row_content'); ?>
						</div>
					</div>

        <?php elseif( get_row_layout() == 'two_column_row' ): ?>
					<div class="page-title">
						<div><h1 class="title-left"><?php the_sub_field('row_title_left'); ?></h1></div>
						<div><h1 class="title-right"><?php the_sub_field('row_title_right'); ?></h1></div>
					</div>

					<div class="row grid col-2">
						<div class="content left">
							<?php the_sub_field('left_row_content'); ?>
						</div>

						<div class="content right">
							<?php the_sub_field('right_row_content'); ?>
						</div>
					</div>
      	<?php endif;
    endwhile; endif; ?>
</section>

<?php if(have_rows('workshop_table')): ?>
	<?php if(wp_is_mobile()): while(have_rows('workshop_table')): the_row(); ?>
		<section class="workshop-table-mobile">
			<div class="description">
				<div class="head">
					Description
				</div>

				<div class="content">
					<div class="title"><?php the_sub_field('title'); ?></div>
					<p><?php the_sub_field('description'); ?></p>
				</div>
			</div>

			<div class="date">
				<span>Date:</span> <?php the_sub_field('date'); ?>
			</div>

			<div class="duration">
				<span>Duration:</span> <?php the_sub_field('duration'); ?>
			</div>

			<div class="spots">
				<span>Spots:</span> <?php the_sub_field('spots_available'); ?>
			</div>

			<div class="price">
				<span>Price:</span> <?php the_sub_field('price'); ?>
			</div>

			<div class="subscribe">
				<a href="<?php the_sub_field('subscribe'); ?>" target="_blank">Subscribe</a>
			</div>
		</section>

	<?php endwhile; else: $counter = 1; ?>
		<section class="workshop-table">
			<?php while(have_rows('workshop_table')): the_row(); ?>
			<div class="description">
				<?php if($counter == 1): ?>
				<div class="head">Description</div>
				<?php endif; ?>
				<div><?php the_sub_field('title'); ?></div>
				<p><?php the_sub_field('description'); ?></p>
			</div>

			<div class="other-infos">
				<?php if($counter == 1): ?>
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<div class="head">Date</div>
					<div class="head">Duration</div>
					<div class="head">Places</div>
					<div class="head last">Prix</div>
				<?php else: ?>
					<div class="head">Date</div>
					<div class="head">Duration</div>
					<div class="head">Spots</div>
					<div class="head last">Price</div>
				<?php endif;?>
				<?php endif; ?>
				<div class="date"><?php the_sub_field('date'); ?></div>
				<div class="duration"><?php the_sub_field('duration'); ?></div>
				<div class="spots"><?php the_sub_field('spots_available'); ?></div>
				<div class="price"><?php the_sub_field('price'); ?></div>
				<div class="subscribe" style="border-right: 0;">
					<a href="<?php the_sub_field('subscribe'); ?>" target="_blank"><?php if(qtranxf_getLanguage() == "fr"): ?>Souscrire<?php else: ?>Subscribe<?php endif; ?></a>
				</div>
			</div>
			<?php $counter++; endwhile; ?>
		</section>
	<?php endif; ?>
<?php endif; ?>


<?php get_footer(); ?>
