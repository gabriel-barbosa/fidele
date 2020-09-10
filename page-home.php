<?php /* Template Name: Homepage */ get_header(); ?>

<section class="gradient-intro">
	<div class="gradient gradient-1"></div>
	<div class="gradient gradient-2"></div>
	<div class="gradient gradient-3"></div>
	<div class="gradient gradient-4"></div>
</section>

<section class="index_menu">
	<div class="text <?php if(qtranxf_getLanguage() == "fr"): ?>french<?php else: ?>english<?php endif; ?>"><?php if(get_field('landing_text')): the_field('landing_text'); else: ?>Une Maison D'édition Et Un Atelier D'impression  Riso À Paris<?php endif; ?></div>

	<div class="gif-item studio big-desktop">
		<a href="<?php bloginfo('url'); ?>/impression-riso/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/studio-big-desktop.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/studio-big-desktop-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item studio desktop">
		<a href="<?php bloginfo('url'); ?>/impression-riso/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/studio.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/studio-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item studio mobile">
		<a href="<?php bloginfo('url'); ?>/impression-riso/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/studio.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/studio-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item workshops big-desktop">
		<a href="<?php bloginfo('url'); ?>/workshops/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/workshops-big-desktop.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/workshops-big-desktop-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item workshops desktop">
		<a href="<?php bloginfo('url'); ?>/workshops/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/workshops.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/workshops-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item workshops mobile">
		<a href="<?php bloginfo('url'); ?>/workshops/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/workshops.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/workshops-blue.gif" alt="">
		</a>
	</div>

	<?php if(qtranxf_getLanguage() == "fr"): ?>
	<div class="gif-item editions big-desktop">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions-big-desktop.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-big-desktop-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item editions desktop">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item editions mobile">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions-mobile.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-mobile.png" alt="">
		</a>
	</div>
	<?php else: ?>
	<div class="gif-item editions big-desktop">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions-big-desktop-english.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-big-desktop-english-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item editions desktop">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-blue.gif" alt="">
		</a>
	</div>

	<div class="gif-item editions mobile">
		<a href="<?php bloginfo('url'); ?>/editions/">
			<img class="static" src="<?php bloginfo('template_url'); ?>/img/editions-mobile.png" alt="">
			<img class="hover" src="<?php bloginfo('template_url'); ?>/img/editions-mobile.png" alt="">
		</a>
	</div>
	<?php endif; ?>
</section>


<?php get_footer(); ?>
