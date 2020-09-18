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

				<footer class="footer mobile">
					<?php if(have_rows('footer', '148')): while(have_rows('footer', '148')): the_row(); ?>
						<div class="address">
							<?php the_sub_field('address'); ?>
						</div>

						<div class="telephone">
							Téléphone: <?php the_sub_field('telephone'); ?>
						</div>

						<div class="instagram">
							<?php $instagram = get_sub_field('instagram'); ?>
							<a href="<?php echo esc_url( $instagram['url'] ); ?>">Instagram</a>
						</div>

						<div class="facebook">
							<?php $facebook = get_sub_field('facebook'); ?>
							<a href="<?php echo esc_url( $facebook['url'] ); ?>">Facebook</a>
						</div>

						<div class="email">
							<?php if(have_rows('impression_email')): while(have_rows('impression_email')): the_row(); ?>
								<?php the_sub_field('span_text'); ?> <span><?php the_sub_field('email'); ?>fidele-editions.com</span>
							<?php endwhile; endif; ?>
						</div>

						<div class="email">
							<?php if(have_rows('publication_email')): while(have_rows('publication_email')): the_row(); ?>
								<?php the_sub_field('span_text'); ?> <span><?php the_sub_field('email'); ?>fidele-editions.com</span>
							<?php endwhile; endif; ?>
						</div>

						<div class="site_url">
							<?php the_sub_field('site_url'); ?>
						</div>

						<div class="opacity-row">
							<div class="opacity-module opacity-100"></div>
							<div class="opacity-module opacity-90"></div>
							<div class="opacity-module opacity-80"></div>
							<div class="opacity-module opacity-70"></div>
							<div class="opacity-module opacity-60"></div>
							<div class="opacity-module opacity-50"></div>
							<div class="opacity-module opacity-40"></div>
							<div class="opacity-module opacity-30"></div>
							<div class="opacity-module opacity-20"></div>
							<div class="opacity-module opacity-10"></div>
						</div>
					<?php endwhile; endif; ?>
				</footer>
			</nav>

			<div class="head-title">
				<a href="<?php bloginfo('url') ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/img/Logo.svg" /></a>
				<?php if(is_page(array('impression-riso', 'simulateur-de-devis', 'guide-d-impression'))): ?>
					<svg class="category-icon" width="338" height="380" viewBox="0 0 338 380" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="studio-bg" d="M296.442 143.103C287.436 148.453 277.153 153.205 265.866 157.242L250.964 161.994C227.887 168.503 201.466 172.192 173.403 172.231L157.593 171.864C155.563 171.768 153.553 171.652 151.543 171.516L138.362 170.338C97.5031 165.78 62.2882 153.301 38.9018 136.129L30.301 129.118C16.5204 116.582 8.63477 102.075 8.63477 86.6032C8.67342 39.2983 82.2536 0.956055 172.997 0.956055C263.74 0.956055 337.32 39.2983 337.32 86.5839C337.32 104.239 327.057 120.657 309.469 134.294L296.442 143.103Z" fill="white"/>
					<path d="M104.332 89.1643H97.1268C97.1268 98.1293 103.177 103.354 112.912 103.354C121.877 103.354 127.982 98.4593 127.982 91.1993C127.982 84.2143 122.042 81.5743 115.662 79.8143C108.842 77.9443 105.157 76.3493 105.157 72.6093C105.157 69.2543 108.457 67.2743 112.197 67.2743C116.432 67.2743 119.897 70.1343 119.897 74.8093H126.992C126.827 66.7243 121.382 61.7743 112.527 61.7743C103.672 61.7743 97.8418 66.3943 97.8418 73.2143C97.8418 81.2993 105.212 83.2243 111.482 85.1493C116.322 86.6343 120.612 87.9543 120.612 92.0793C120.612 95.5993 117.697 97.7993 112.912 97.7993C107.467 97.7993 104.332 94.6643 104.332 89.1643ZM134.025 67.1093V74.1493H129.46V79.2093H134.025V93.8943C134.025 100.329 136.39 103.024 142.055 103.024C143.54 103.024 144.805 102.914 146.29 102.529V97.4693C145.245 97.6893 144.64 97.6893 144.035 97.6893C141.395 97.6893 140.625 96.0943 140.625 92.5743V79.2093H146.235V74.1493H140.625V67.1093H134.025ZM168.5 98.8443V102.529H174.66V74.1493H168.06V88.5593C168.06 92.0793 167.4 94.3893 166.3 95.8743C165.2 97.3593 163.66 98.0743 161.625 98.0743C157.005 98.0743 156.4 94.2243 156.4 90.0443V74.1493H149.855V90.2643C149.855 94.3893 150.13 97.3043 151.505 99.2293C153.265 101.649 155.795 103.079 159.535 103.079C162.835 103.079 166.3 101.869 168.5 98.8443ZM179.391 88.2843C179.391 97.6893 184.121 103.079 191.381 103.079C194.901 103.079 198.091 101.539 200.071 98.7343V102.529H206.286V62.5993H199.686V77.3943C197.761 74.6993 194.846 73.5993 191.381 73.5993C184.121 73.5993 179.391 79.3193 179.391 88.2843ZM186.211 88.2843C186.211 82.3443 188.796 78.6593 193.031 78.6593C197.211 78.6593 199.796 82.3443 199.796 88.2843C199.796 94.3893 197.101 97.9643 192.921 97.9643C188.741 97.9643 186.211 94.2243 186.211 88.2843ZM219.361 74.1493H212.761V102.529H219.361V74.1493ZM219.361 62.5993H212.761V69.2543H219.361V62.5993ZM238.161 73.3793C229.526 73.3793 224.026 79.3743 224.026 88.3393C224.026 97.3043 229.471 103.299 238.106 103.299C246.851 103.299 252.351 97.3043 252.351 88.3393C252.351 79.3743 246.851 73.3793 238.161 73.3793ZM238.161 78.4393C242.781 78.4393 245.476 82.2343 245.476 88.3393C245.476 94.4443 242.781 98.2393 238.106 98.2393C233.486 98.2393 230.901 94.3343 230.901 88.3393C230.901 82.2343 233.541 78.4393 238.161 78.4393Z" fill="#215BDF"/>
					<path d="M157.631 171.845C155.601 171.748 153.591 171.632 151.581 171.497" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M250.984 161.974C227.906 168.483 201.486 172.173 173.422 172.211" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M296.442 143.102C287.435 148.452 277.153 153.204 265.865 157.241" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M30.3391 129.098C16.5585 116.562 8.67285 102.056 8.67285 86.5839C8.67285 39.2983 82.2531 0.956055 172.996 0.956055C263.739 0.956055 337.32 39.2983 337.32 86.5839C337.32 104.239 327.057 120.657 309.468 134.294" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M138.399 170.319C97.5408 165.76 62.3259 153.282 38.9395 136.11" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M38.283 95.3535L1 253.88" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M257.38 134.797L199.938 379.009" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M140.372 162.669L101.678 327.203" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M301.912 119.847L271.935 247.352" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M163.449 147.102L143.87 230.392" stroke="#215BDF" stroke-miterlimit="10"/>
					</svg>
				<?php endif; ?>
				<?php if(is_archive()): ?>
					<?php if(qtranxf_getLanguage() == "fr"): ?>
					<svg class="category-icon" width="316" height="297" viewBox="0 0 316 297" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M126.116 216.144V296.238L3 248.595V64.6213C3 64.6213 96.4302 100.776 96.4181 100.776V60.6872V49.2711V32.8107L119.164 41.6081L134.055 47.3765L189.836 68.9657V1L312.952 48.6436V150.025V154.212V232.617L219.534 196.462V264.415L126.116 228.26" fill="white"/>
					<path d="M124.116 216.144V296.238L1 248.594V64.6211L124.116 112.265V135.012" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M217.533 187.134V264.428L124.115 228.273" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M217.534 172.857V181.836" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M206.233 76.0859L217.534 80.4545V103.202" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M192.342 70.7031L201.04 74.07" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M132.056 47.377L187.849 68.9662" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M122.573 43.708L126.73 45.313" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M310.952 154.213V232.617L217.534 196.462" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M187.836 68.9657V1L310.952 48.6436V150.025" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M135.766 209.676L315.205 148.577" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M98.3213 143.81L227.557 99.7871" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M140.007 94.8627L269.255 50.8516" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M158.873 188.4L238.063 161.429" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M157.766 79.1628L219.619 58.1045" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M94.418 60.6875V100.777" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M94.418 53.2539V56.1984" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M37.9629 68.6398L117.165 41.62L94.4186 32.8105V49.2831" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M77.4668 62.0877L143.476 39.6055" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M103.051 154.756L78.5577 163.19L91.5577 200.944L116.779 192.26L114.881 186.747L96.2641 193.158L92.4858 182.185L109.335 176.384L107.455 170.923L90.6057 176.725L87.0423 166.376L104.932 160.216L103.051 154.756ZM90.0857 148.692L87.1202 156.635L92.3726 154.827L97.1582 146.257L90.0857 148.692ZM114.726 177.901C117.788 186.794 124.015 190.35 130.88 187.986C134.208 186.84 136.723 184.346 137.682 181.049L138.917 184.637L144.794 182.614L131.794 144.859L125.553 147.008L130.37 160.997C127.673 159.075 124.558 158.984 121.282 160.112C114.418 162.476 111.808 169.424 114.726 177.901ZM121.175 175.681C119.241 170.064 120.485 165.738 124.49 164.36C128.442 162.999 132.086 165.641 134.02 171.258C136.007 177.03 134.623 181.288 130.671 182.649C126.718 184.01 123.109 181.297 121.175 175.681ZM147.917 151.523L141.676 153.672L150.916 180.506L157.156 178.357L147.917 151.523ZM144.157 140.602L137.916 142.751L140.083 149.044L146.323 146.895L144.157 140.602ZM153.156 142.274L155.448 148.93L151.131 150.416L152.779 155.201L157.095 153.714L161.876 167.599C163.971 173.684 167.085 175.462 172.441 173.618C173.845 173.134 175.005 172.618 176.284 171.771L174.637 166.986C173.72 167.535 173.148 167.732 172.576 167.929C170.08 168.788 168.833 167.531 167.687 164.202L163.335 151.566L168.64 149.739L166.992 144.955L161.688 146.781L159.396 140.125L153.156 142.274ZM176.968 141.52L170.727 143.669L179.967 170.503L186.207 168.354L176.968 141.52ZM173.207 130.599L166.967 132.748L169.134 139.041L175.374 136.892L173.207 130.599ZM194.492 134.671C186.328 137.483 183.079 144.942 185.998 153.418C188.917 161.895 196.017 165.791 204.181 162.979C212.45 160.132 215.699 152.673 212.78 144.197C209.861 135.72 202.709 131.842 194.492 134.671ZM196.14 139.456C200.508 137.952 204.292 140.662 206.279 146.435C208.267 152.207 206.954 156.673 202.534 158.195C198.166 159.699 194.45 156.848 192.499 151.18C190.511 145.408 191.772 140.96 196.14 139.456ZM219.548 130.756L218.348 127.272L212.576 129.259L221.816 156.093L228.056 153.944L223.382 140.371C221.18 133.975 222.417 130.641 226.369 129.28C230.685 127.793 232.493 131.185 233.872 135.189L239.029 150.166L245.269 148.017L239.969 132.624C238.823 129.296 237.474 126.561 235.51 124.911C233.318 123.106 230.65 122.454 226.698 123.815C223.578 124.889 220.695 127.161 219.548 130.756ZM252.56 135.909L246.163 138.112C248.414 144.142 253.789 145.898 261.433 143.266C268.454 140.849 271.748 136.224 269.957 131.024C268.184 125.876 263.401 125.836 258.795 126.142C254.45 126.533 250.247 127.166 249.262 124.305C248.6 122.381 249.956 120.576 252.712 119.627C256.092 118.463 258.152 119.208 259.4 122.327L265.589 120.196C263.565 114.32 258.505 112.63 251.38 115.083C244.516 117.447 241.31 122.157 242.993 127.046C245.016 132.922 250.836 132.256 255.789 131.772C259.56 131.405 262.757 131.06 263.688 133.764C264.404 135.844 262.91 137.755 259.945 138.776C256.149 140.083 253.67 139.133 252.56 135.909Z" fill="#215BDF"/>
					</svg>
					<?php else: ?>
					<svg class="category-icon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 316 297" style="enable-background:new 0 0 316 297;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#FFFFFF;}
						.st1{fill:none;stroke:#215BDF;stroke-miterlimit:10;}
						.st2{fill:#215BDF;}
					</style>
					<path class="st0" d="M126.1,216.1v80.1L3,248.6v-184c0,0,93.4,36.2,93.4,36.2V60.7V49.3V32.8l22.7,8.8l14.9,5.8L189.8,69V1L313,48.6
						V150v4.2v78.4l-93.4-36.2v68l-93.4-36.2"/>
					<path class="st1" d="M124.1,216.1v80.1L1,248.6v-184l123.1,47.6V135"/>
					<path class="st1" d="M217.5,187.1v77.3l-93.4-36.2"/>
					<path class="st1" d="M217.5,172.9v9"/>
					<path class="st1" d="M206.2,76.1l11.3,4.4v22.7"/>
					<path class="st1" d="M192.3,70.7l8.7,3.4"/>
					<path class="st1" d="M132.1,47.4L187.8,69"/>
					<path class="st1" d="M122.6,43.7l4.2,1.6"/>
					<path class="st1" d="M311,154.2v78.4l-93.4-36.2"/>
					<path class="st1" d="M187.8,69V1L311,48.6V150"/>
					<path class="st1" d="M135.8,209.7l179.4-61.1"/>
					<path class="st1" d="M98.3,143.8l129.2-44"/>
					<path class="st1" d="M140,94.9l129.2-44"/>
					<path class="st1" d="M158.9,188.4l79.2-27"/>
					<path class="st1" d="M157.8,79.2l61.9-21.1"/>
					<path class="st1" d="M94.4,60.7v40.1"/>
					<path class="st1" d="M94.4,53.3v2.9"/>
					<path class="st1" d="M38,68.6l79.2-27l-22.7-8.8v16.5"/>
					<path class="st1" d="M77.5,62.1l66-22.5"/>
					<path class="st2" d="M103.1,154.8l-24.5,8.4l13,37.8l25.2-8.7l-1.9-5.5l-18.6,6.4l-3.8-11l16.8-5.8l-1.9-5.5l-16.8,5.8L87,166.4
						l17.9-6.2L103.1,154.8z M114.7,177.9c3.1,8.9,9.3,12.4,16.2,10.1c3.3-1.1,5.8-3.6,6.8-6.9l1.2,3.6l5.9-2l-13-37.8l-6.2,2.1l4.8,14
						c-2.7-1.9-5.8-2-9.1-0.9C114.4,162.5,111.8,169.4,114.7,177.9z M121.2,175.7c-1.9-5.6-0.7-9.9,3.3-11.3c4-1.4,7.6,1.3,9.5,6.9
						c2,5.8,0.6,10-3.3,11.4C126.7,184,123.1,181.3,121.2,175.7z M147.9,151.5l-6.2,2.1l9.2,26.8l6.2-2.1L147.9,151.5z M144.2,140.6
						l-6.2,2.1l2.2,6.3l6.2-2.1L144.2,140.6z M153.2,142.3l2.3,6.7l-4.3,1.5l1.6,4.8l4.3-1.5l4.8,13.9c2.1,6.1,5.2,7.9,10.6,6
						c1.4-0.5,2.6-1,3.8-1.8l-1.6-4.8c-0.9,0.5-1.5,0.7-2.1,0.9c-2.5,0.9-3.7-0.4-4.9-3.7l-4.4-12.6l5.3-1.8L167,145l-5.3,1.8l-2.3-6.7
						L153.2,142.3z M177,141.5l-6.2,2.1l9.2,26.8l6.2-2.1L177,141.5z M173.2,130.6l-6.2,2.1l2.2,6.3l6.2-2.1L173.2,130.6z M194.5,134.7
						c-8.2,2.8-11.4,10.3-8.5,18.7c2.9,8.5,10,12.4,18.2,9.6c8.3-2.8,11.5-10.3,8.6-18.8C209.9,135.7,202.7,131.8,194.5,134.7z
						 M196.1,139.5c4.4-1.5,8.2,1.2,10.1,7c2,5.8,0.7,10.2-3.7,11.8c-4.4,1.5-8.1-1.3-10-7C190.5,145.4,191.8,141,196.1,139.5z
						 M219.5,130.8l-1.2-3.5l-5.8,2l9.2,26.8l6.2-2.1l-4.7-13.6c-2.2-6.4-1-9.7,3-11.1c4.3-1.5,6.1,1.9,7.5,5.9l5.2,15l6.2-2.1l-5.3-15.4
						c-1.1-3.3-2.5-6.1-4.5-7.7c-2.2-1.8-4.9-2.5-8.8-1.1C223.6,124.9,220.7,127.2,219.5,130.8z M252.6,135.9l-6.4,2.2
						c2.3,6,7.6,7.8,15.3,5.2c7-2.4,10.3-7,8.5-12.2c-1.8-5.1-6.6-5.2-11.2-4.9c-4.3,0.4-8.5,1-9.5-1.8c-0.7-1.9,0.7-3.7,3.5-4.7
						c3.4-1.2,5.4-0.4,6.7,2.7l6.2-2.1c-2-5.9-7.1-7.6-14.2-5.1c-6.9,2.4-10.1,7.1-8.4,12c2,5.9,7.8,5.2,12.8,4.7c3.8-0.4,7-0.7,7.9,2
						c0.7,2.1-0.8,4-3.7,5C256.1,140.1,253.7,139.1,252.6,135.9z"/>
					</svg>
					<?php endif;?>
				<?php endif; ?>
				<?php if(is_page('workshops')): ?>
					<svg class="category-icon" width="220" height="168" viewBox="0 0 220 168" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M216.324 89.8941C211.368 81.3136 200.477 73.7147 189.636 71.2413C189.509 67.9391 188.388 64.4202 186.273 60.7611C178.413 47.1444 159.305 36.0904 143.662 36.1414C138.706 36.1542 134.49 37.3017 131.458 39.4563C124.961 29.0399 110.261 20.7271 98.1969 20.7653C94.7956 20.7781 91.8912 21.4411 89.5727 22.7415C79.0377 10.2978 60.885 1.36031 46.1334 1.39856C28.5157 1.44956 21.3947 13.9697 30.2482 29.3076C30.8469 30.3531 31.5348 31.4113 32.2864 32.4823C28.1208 31.0288 23.9934 30.2638 20.2737 30.2766C7.17823 30.3148 1.87889 39.6093 8.4521 51.0203C9.61133 53.0348 11.1145 55.0365 12.8979 56.9744C1.30564 59.1801 -2.33765 68.9846 4.27378 80.4466C10.9489 92.0105 26.4138 101.968 40.5411 103.88C39.9424 107.106 40.7832 110.829 43.0124 114.692C48.3373 123.923 60.3882 131.879 71.8148 133.766C72.4263 135.461 73.2416 137.195 74.2352 138.917C83.0887 154.254 104.617 166.698 122.222 166.647C134.808 166.609 142.439 160.221 141.904 150.289C151.407 158.296 164.107 163.409 174.566 163.37C189.177 163.332 195.789 153.528 189.878 140.918C194.324 142.576 198.744 143.43 202.693 143.417C215.789 143.379 221.088 134.072 214.515 122.674C211.623 117.663 206.846 112.92 200.948 109.184C202.426 109.401 203.84 109.516 205.152 109.503C217.534 109.478 222.553 100.68 216.324 89.8941Z" fill="white" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M151.572 62.7119C151.037 60.6975 150.146 58.6193 148.936 56.5283" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M93.2666 38.9324C95.6488 35.541 99.8398 33.4373 105.343 32.9655C105.789 32.9273 107.394 32.8508 107.954 32.8508C115.177 32.8253 123.177 35.2732 130.387 39.2766C130.986 39.6081 131.585 39.9524 132.184 40.3093C139.215 44.555 145.33 50.2541 148.948 56.5397" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M122.694 140.535C127.815 145.444 134.745 148.67 140.796 149.396C141.229 149.447 141.65 149.486 142.083 149.511C144.631 149.664 146.974 149.345 148.924 148.478C152.274 146.987 153.892 144.156 153.484 140.497" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M53.4576 107.221C53.4449 108.725 53.6487 110.268 54.0691 111.849C54.0691 111.849 55.6614 116.235 56.6932 118.032C59.776 123.362 64.8715 128.64 71.2282 132.886C71.7632 133.243 72.2983 133.587 72.8588 133.931C75.139 135.346 77.5594 136.621 80.0817 137.731C87.5848 141.007 94.986 142.333 101.164 141.53M101.177 141.543C101.801 141.466 102.413 141.364 103.011 141.237L101.177 141.543Z" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M105.688 32.7621C104.987 31.9972 104.235 31.2704 103.42 30.5564C99.5858 27.165 94.9998 24.6916 90.452 23.5696C90.2992 23.5314 90.1591 23.4931 90.0062 23.4676C89.7641 23.4166 89.5221 23.3656 89.2928 23.3146C84.9107 22.4477 81.14 22.9959 78.6177 24.8828C76.1336 26.7315 75.1273 29.6512 75.7387 33.1701" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M171.61 140.242C175.496 142.027 179.47 142.983 183.05 142.983C192.336 142.957 196.082 136.353 191.419 128.27C189.113 124.254 184.973 120.416 180.082 117.675" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M34.2223 82.1807C33.8656 82.8181 33.5854 83.5066 33.3688 84.2334C32.286 87.9053 33.1268 92.2912 35.7382 96.8173C36.286 97.7608 36.9102 98.717 37.6108 99.6732C38.5408 100.948 39.5981 102.185 40.7318 103.383C41.0121 103.677 41.3051 103.983 41.6108 104.276C45.1522 107.769 49.5089 110.842 54.3241 113.201" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M49.1013 90.0986C48.9612 90.8254 48.8848 91.5776 48.8848 92.3553C48.8848 95.224 49.8402 98.3222 51.6363 101.433C52.1841 102.389 52.8083 103.333 53.5089 104.276C53.8274 104.697 54.1459 105.118 54.4898 105.538C55.114 106.303 55.7892 107.068 56.5026 107.821C61.2414 112.768 67.4707 116.796 74.1331 119.244" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M56.3375 32.1245C54.8344 31.6017 53.3312 31.1555 51.8408 30.7985C44.3249 29.0135 37.7134 29.5235 33.2294 32.2392C28.7453 34.9676 26.9109 39.583 28.0956 45.2311" stroke="#215BDF" stroke-miterlimit="10"/>
					<path d="M42.4261 39.0348L38.5106 37.2025L33.288 61.21L38.1898 63.5038L46.8796 52.4863C48.0514 50.9944 49.0375 49.7434 50.7186 47.3967L50.898 47.4806C50.1593 50.3048 49.8149 51.8196 49.4202 53.6752L46.5289 67.4061L51.4009 69.6859L66.487 50.2941L62.9301 48.6297L54.7428 59.6636L51.1371 64.6438L50.9577 64.5599C51.6684 61.7955 52.0587 60.3386 52.4114 58.5727L55.2187 45.0211L50.1375 42.6434L41.5018 53.4675C40.5875 54.6428 38.647 57.2324 37.8064 58.4058L37.5972 58.3079L39.2003 52.3905L42.4261 39.0348ZM71.5616 59.8099C66.869 57.614 62.3555 59.4733 60.0757 64.3452C57.7959 69.2172 59.2304 73.8598 63.923 76.0557C68.6754 78.2796 73.1889 76.4204 75.4687 71.5484C77.7485 66.6764 76.2842 62.0198 71.5616 59.8099ZM70.2749 62.5597C72.7856 63.7346 73.2851 66.4823 71.7325 69.8001C70.18 73.1178 67.7503 74.4948 65.2098 73.3059C62.6991 72.131 62.2873 69.3515 63.8119 66.0936C65.3644 62.7759 67.7642 61.3849 70.2749 62.5597ZM84.9928 66.6051L81.6153 65.0246L74.3982 80.4475L77.9849 82.1259L81.1459 75.3709C82.8942 71.6348 84.8933 70.1656 87.8524 71.5503C88.3306 71.7741 88.8248 72.0417 89.3367 72.427L90.7913 69.3185C90.3391 68.9612 89.6657 68.6096 89.1576 68.3718C87.3941 67.5466 85.6714 67.7242 83.9158 68.9066L84.9928 66.6051ZM99.1586 65.5828L95.5719 63.9044L85.4175 85.604L89.0042 87.2824L92.5848 79.6307L94.6533 89.9259L99.1367 92.0239L96.5772 80.4424L105.726 76.3073L101.452 74.3072L93.2282 78.2558L99.1586 65.5828ZM104.759 88.6431L101.082 86.9227C99.5356 90.4617 101.119 93.4618 105.513 95.5178C109.548 97.406 112.898 96.7875 114.297 93.7986C115.681 90.8396 113.636 88.8259 111.523 87.0354C109.487 85.3905 107.411 83.909 108.18 82.2651C108.698 81.1592 110.036 80.9473 111.62 81.6886C113.563 82.5978 114.14 83.7786 113.376 85.6438L116.933 87.3082C118.514 83.9307 117.037 81.0903 112.942 79.1741C108.997 77.3278 105.649 78.0201 104.334 80.8297C102.754 84.2072 105.541 86.3492 107.877 88.2078C109.656 89.6231 111.178 90.8089 110.451 92.3631C109.891 93.5587 108.449 93.7585 106.746 92.9613C104.564 91.9403 103.892 90.4962 104.759 88.6431ZM128.407 79.2695L124.82 77.5911L114.666 99.2908L118.253 100.969L121.903 93.1681C123.623 89.4917 125.548 88.5707 127.82 89.6337C130.301 90.7946 129.664 93.0108 128.587 95.3122L124.559 103.92L128.146 105.599L132.286 96.7515C133.349 94.4799 133.901 92.9893 133.657 91.5636C133.36 89.785 132.245 88.3524 130.242 87.4153C128.359 86.5342 126.392 86.3786 124.575 87.4592L128.407 79.2695ZM145.602 94.4571C140.909 92.2612 136.396 94.1204 134.116 98.9924C131.836 103.864 133.271 108.507 137.963 110.703C142.716 112.927 147.229 111.068 149.509 106.196C151.789 101.324 150.324 96.667 145.602 94.4571ZM144.315 97.2069C146.826 98.3818 147.325 101.129 145.773 104.447C144.22 107.765 141.791 109.142 139.25 107.953C136.739 106.778 136.328 103.999 137.852 100.741C139.405 97.423 141.804 96.032 144.315 97.2069ZM166.633 114.209C168.913 109.337 167.901 105.038 163.955 103.191C161.923 102.24 159.857 102.294 158.038 103.301L159.003 101.238L155.656 99.6718L145.627 121.102L149.214 122.781L152.85 115.01C153.135 116.892 154.516 118.303 156.399 119.184C160.224 120.974 164.255 119.29 166.633 114.209ZM162.957 112.488C161.432 115.746 159.12 117.106 156.759 116.001C154.487 114.938 154.048 112.218 155.544 109.02C157.055 105.792 159.456 104.474 161.728 105.537C164 106.6 164.467 109.26 162.957 112.488ZM170.436 119.377L166.759 117.656C165.213 121.195 166.796 124.195 171.19 126.251C175.225 128.14 178.575 127.521 179.974 124.532C181.358 121.573 179.313 119.559 177.2 117.769C175.164 116.124 173.088 114.643 173.858 112.999C174.375 111.893 175.713 111.681 177.297 112.422C179.24 113.331 179.817 114.512 179.053 116.377L182.61 118.042C184.191 114.664 182.714 111.824 178.62 109.908C174.674 108.061 171.326 108.754 170.011 111.563C168.431 114.941 171.218 117.083 173.554 118.941C175.333 120.357 176.855 121.543 176.128 123.097C175.568 124.292 174.127 124.492 172.423 123.695C170.241 122.674 169.569 121.23 170.436 119.377Z" fill="#215BDF"/>
					</svg>

				<?php endif; ?>
			</div>
			<!-- /header -->
