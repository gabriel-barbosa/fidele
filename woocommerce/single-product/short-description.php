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
	<p><?php the_excerpt(); ?></p>
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

<div class="product-share">
	<div class="share">
		Share:
	</div>

	<div class="links">
		<div class="single-link">
			<a href="#">FACEBOOK</a>
		</div>

		<div class="single-link">
			<a href="#">TWITTER</a>
		</div>
	</div>
</div>

<div class="add-to-cart">
	<div class="button-cart">
		<?php global $product;

		echo apply_filters( 'woocommerce_loop_add_to_cart_link',
		    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
		        esc_url( $product->add_to_cart_url() ),
		        esc_attr( $product->get_id() ),
		        esc_attr( $product->get_sku() ),
		        $product->is_purchasable() ? 'add_to_cart_button' : '',
		        esc_attr( $product->get_type() ),
		        esc_html( $product->add_to_cart_text() )
		    ),
		$product ); ?>
	</div>

	<div class="product-price">
		<?php echo $product->get_price_html(); ?>
	</div>
</div>
</div>
