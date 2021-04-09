<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

?>
<div class="product_title">
	<h1><?php the_title(); ?></h1>
	<?php if(get_field('author')): ?>
	<h3><?php the_field('author'); ?></h3>
	<?php endif; ?>
</div>

<div class="woocommerce-product-details__short-description short-description">
	<?php if ( !empty( get_the_content() ) ): the_content(); else: the_excerpt(); endif; ?>
</div>

<?php if(get_field('details')): ?>
<div class="product-details">
	<p><?php the_field('details'); ?></p>
</div>
<?php endif; ?>

<?php if( have_rows('colours') ): ?>
<div class="product-colours">
		<p class="colours">Colours:</p>
			<div class="colour-pallette">
		    <?php while( have_rows('colours') ): the_row(); ?>
		        <div class="single-colour" style="background-color: <?php the_sub_field('colour'); ?>;">
		        </div>
		    <?php endwhile; ?>
			</div>

		<?php if(get_field('additional_details')): ?>
		<p class="additional-details"><?php the_field('additional_details'); ?></p>
		<?php endif; ?>
</div>
<?php endif; ?>
