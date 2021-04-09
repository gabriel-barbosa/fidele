<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<div class="fixed-wrapper">
	<div class="product-cat-menu">
		<div class="cat-item all">
			<a href="<?php bloginfo('url'); ?>/editions/">All</a>
		</div>


		<?php global $wp_query;
		// get the query object
		$cat_obj = $wp_query->get_queried_object();
		$currentcat = $cat_obj->slug;

		$terms = get_terms( 'product_cat', array( 'exclude' => array( '15',)));
		foreach( $terms as $term ): ?>
		<div class="cat-item <?php echo($term->slug); if($currentcat == $term->slug): echo(' current'); endif; ?>">
			<a href="<?php $term_link = get_term_link( $term ); echo($term_link); ?>"><?php echo($term->name); ?></a>
		</div>
		<?php endforeach; ?>

		<div class="cat-item orderby-form">
			<form class="woocommerce-ordering" method="get">
				<select name="orderby" class="orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
					<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
						<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
					<?php endforeach; ?>
				</select>
				<input type="hidden" name="paged" value="1" />
				<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
			</form>
		</div>
	</div>

	<div class="product-cat-menu mobile">
		<div class="cat-item dropdown">
		  <button onclick="myFunction()" class="dropbtn">Category: <?php if(is_shop()): ?>All<?php else: echo $cat_obj->name; endif; ?></button>
		  <div id="myDropdown" class="dropdown-content">
				<div class="cat-item all">
					<a href="<?php bloginfo('url'); ?>/editions/">All</a>
				</div>
				<?php foreach( $terms as $term ): ?>
				<div class="cat-item <?php echo($term->slug); if($currentcat == $term->slug): echo(' current'); endif; ?>">
					<a href="<?php $term_link = get_term_link( $term ); echo($term_link); ?>"><?php echo($term->name); ?></a>
				</div>
				<?php endforeach; ?>
		  </div>
		</div>

		<div class="cat-item orderby-form">
			<form class="woocommerce-ordering" method="get">
				<select name="orderby" class="orderby" aria-label="<?php esc_attr_e( 'Shop order', 'woocommerce' ); ?>">
					<?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
						<option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
					<?php endforeach; ?>
				</select>
				<input type="hidden" name="paged" value="1" />
				<?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
			</form>
		</div>
	</div>
</div>
