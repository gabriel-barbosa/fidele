<?php get_header(); ?>

<?php if(is_archive()): ?>
<section class="archive-header">
	<div class="page-title">
		<div></div>
		<div><h1><?php woocommerce_page_title(); ?></h1></div>
	</div>

	<?php $post_id = get_option( 'woocommerce_shop_page_id' ); ?>

	<div class="subtitle">
		<p><?php $subtitle = get_field('subtitle', $post_id); echo $subtitle; ?></p>
	</div>

	<div class="content">
		<p><?php $content = get_field('content', $post_id); echo $content; ?></p>
	</div>
</section>
<?php endif; ?>

<?php global $wp_query;
$totalproducts = wc_get_loop_prop( 'total' ) ? wc_get_loop_prop( 'total' ) : $wp_query->post_count; ?>
<section>
	<?php woocommerce_content(); ?>
</section>


<?php get_footer(); ?>
