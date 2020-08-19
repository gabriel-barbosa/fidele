<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $productcounter;
global $totalproducts;
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
$productcounter++;
?>

<div class="product-item nth-<?php echo $productcounter; ?>" style="z-index: <?php echo $totalproducts; ?>;">
	<div class="background-gradient" style="background: linear-gradient(180deg, <?php the_field('background_color'); ?> 0%, transparent 100%);"></div>
	<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('large'); ?>" alt=""></a>

	<div class="product-info" style="z-index: <?php echo $totalproducts; ?>;">
		<div class="title-wrapper">
			<span class="title"><?php the_title(); ?></span>
		</div>

		<div class="price-wrapper">
			<span class="price"><?php echo $product->get_price_html(); ?></span>
		</div>

		<div class="more-info-wrapper" style="z-index: <?php echo $totalproducts; ?>;">
			<div class="row grid col-4">
				<div class="title">
					<?php the_title(); ?>, <?php the_field('author'); ?>
				</div>

				<div class="description">
					<?php the_excerpt(); ?>
				</div>

				<div class="details">
					<?php the_field('details'); ?>
				</div>
			</div>

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

				<span class="price"><?php echo $product->get_price_html(); ?></span>
			</div>
		</div>
	</div>
</div>

<?php $totalproducts--; ?>
