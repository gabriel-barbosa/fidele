<!doctype html>
<html <?php language_attributes(); ?> class="no-js <?php _e('[:fr]lang-fr[:en]lang-en'); ?>">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<?php if(is_archive()): ?>
			<title><?php woocommerce_page_title(); echo ' - '; bloginfo( 'name' ); ?></title>
		<?php else: ?>
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' - '; } ?><?php bloginfo( 'name' ); ?></title>
		<?php endif; ?>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
		<script>
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
			assets: '<?php echo esc_url( get_template_directory_uri() ); ?>',
			tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clear" role="banner">
					<!-- nav -->
					<nav class="nav">
						<?php html5blank_nav(); ?>
					</nav>
					<!-- /nav -->
			</header>

			<nav class="nav-mobile">
				<div>
					<?php html5blank_nav(); ?>
				</div>
			</nav>

			<div class="head-title">
				<a href="<?php bloginfo('url') ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/img/Logo.svg" /></a>
				<?php if(is_page('impression-riso', 'page-id-81', 'guide-d-impression',)): ?>
					<img class="category-icon" src="<?php bloginfo('template_url'); ?>/img/studio.svg" alt="">
				<?php endif; ?>
				<?php if(is_archive()): ?>
					<img class="category-icon" src="<?php bloginfo('template_url'); ?>/img/editions.svg" alt="">
				<?php endif; ?>
				<?php if(is_page('workshops')): ?>
					<img class="category-icon" src="<?php bloginfo('template_url'); ?>/img/workshops.svg" alt="">
				<?php endif; ?>
			</div>

			<gradient class="bottom-gradient">
			</gradient>
			<!-- /header -->
