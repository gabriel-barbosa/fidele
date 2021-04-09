<?php
/**
 * Cart totals
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-totals.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.3.6
 */

defined( 'ABSPATH' ) || exit;

?>
<div class="cart_totals <?php echo ( WC()->customer->has_calculated_shipping() ) ? 'calculated_shipping' : ''; ?>">
	<div class="wc-proceed-to-checkout">
		<a class="gif-item submit-button" href="<?php bloginfo('url'); ?>/checkout/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
		</a>
	</div>

	<?php do_action( 'woocommerce_after_cart_totals' ); ?>
</div>
