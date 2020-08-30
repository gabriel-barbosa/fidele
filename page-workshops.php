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
						<div></div>
						<div><h1><?php the_sub_field('row_title'); ?></h1></div>
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

	<?php endwhile; else: ?>
		<section class="workshop-table">
			<div class="description head">
				<div>Description</div>
			</div>

			<div class="other-infos head">
				<div>Date</div>
				<div>Duration</div>
				<div>Spots</div>
				<div>Price</div>
			</div>

			<?php while(have_rows('workshop_table')): the_row(); ?>
			<div class="description">
				<div><?php the_sub_field('title'); ?></div>
				<p><?php the_sub_field('description'); ?></p>
			</div>

			<div class="other-infos">
				<div class="date"><?php the_sub_field('date'); ?></div>
				<div class="duration"><?php the_sub_field('duration'); ?></div>
				<div class="spots"><?php the_sub_field('spots_available'); ?></div>
				<div class="price"><?php the_sub_field('price'); ?></div>
				<div class="subscribe" style="border-right: 0;">
					<a href="<?php the_sub_field('subscribe'); ?>" target="_blank">Subscribe</a>
				</div>
			</div>
			<?php endwhile; ?>
		</section>
	<?php endif; ?>
<?php endif; ?>


<?php get_footer(); ?>
