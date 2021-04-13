<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product; ?>

<div class="product-gallery">
		<?php $attachment_ids = $product->get_gallery_attachment_ids(); if($attachment_ids):
		foreach( $attachment_ids as $attachment_id ) : ?>
		 <div class="img-wrapper"><img class="gallery-img" src="<?php echo wp_get_attachment_image_src( $attachment_id, 'full' )[0]; ?>" alt=""></div>
	 <?php endforeach; endif; ?>

	 <?php if($product->has_child()):
		 $variations = $product->get_available_variations(); foreach ($variations as $variation): ?>
		 <?php $image_id = $variation['image_id']; $post_image_id = get_post_thumbnail_id();
		 	if($image_id != $post_image_id): ?>
	  		<div class="img-wrapper" data-option="<?php print_r($variation['attributes']['attribute_pa_option']); ?>"><img class="gallery-img" src="<?php echo $variation['image']['url']; ?>" alt=""></div>
			<?php endif; ?>
	  <?php endforeach; endif; ?>
</div>
