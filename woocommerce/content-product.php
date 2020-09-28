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
// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

// current page number - paged is 0 on the home page, we use 1 instead
$_current_page = is_paged() ?  get_query_var( 'paged', 1 ) : 1;
// posts per page
$_ppp = get_query_var( 'posts_per_page', get_option( 'posts_per_page' ) );
// current post index on the current page
$_current_post = $wp_query->current_post;
// total number of found posts
$_total_posts = $wp_query->found_posts;

?>

<div class="product-item" style="z-index: <?php echo $counter = $_total_posts - ( $_current_page - 1 ) * $_ppp - $_current_post; ?>;">
	<div class="background-gradient" style="background: linear-gradient(180deg, <?php the_field('background_color'); ?> 10%, #fff 80%); background: -moz-linear-gradient(180deg, <?php the_field('background_color'); ?> 10%, #fff 80%); background: -webkit-linear-gradient(270deg, <?php the_field('background_color'); ?> 10%, #fff 80%); background: -o-linear-gradient(180deg, <?php the_field('background_color'); ?> 10%, #fff 80%);"></div>
	<a href="<?php the_permalink(); ?>"><img <?php if(get_field('hide_box_shadow')): ?>style="box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none;"<?php endif; ?> src="<?php the_post_thumbnail_url('large'); ?>" alt=""></a>

	<div class="product-info">
		<div class="title-wrapper">
			<span class="title"><?php the_title(); ?></span>
		</div>

		<div class="price-wrapper">
			<span class="price"><?php echo $product->get_price_html(); ?></span>
		</div>

		<div class="more-info-wrapper">
			<div class="row grid col-4">
				<div class="title">
					<a href="<?php the_permalink();?>"><?php the_title(); ?>, <?php the_field('author'); ?></a>
				</div>

				<div class="description">
					<a href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
				</div>

				<div class="details">
					<a href="<?php the_permalink();?>"><?php the_field('details'); ?></a>
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
