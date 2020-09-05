<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<section>
	<div class="page-title">
		<div></div>
		<div class="simulateur-header">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<div class="append">
	<div class="arrow"><img src="<?php bloginfo('template_url'); ?>/img/simulateur-arrow.svg" alt=""></div>
</div>

<div class="steps-wrapper">
	<div class="step-title">Simulateur de Devis</div>
	<section class="simulateur-steps step-1">
		<!-- AFFICHES -->
		<div id="affiches" class="gif-item" data-title="Simulateur Affiches">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-blue.gif" alt="">
			<?php else: ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches-english.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-english-blue.gif" alt="">
			<?php endif; ?>
		</div>

		<div id="brochures" class="gif-item" data-title="Simulateur Brochures">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-blue.gif" alt="">
			<?php else: ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures-english.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-english-blue.gif" alt="">
			<?php endif; ?>
		</div>

		<div id="fanzines" class="gif-item" data-title="Simulateur Fanzines">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-blue.gif" alt="">
			<?php else: ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines-english.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-english-blue.gif" alt="">
			<?php endif; ?>
		</div>

		<div id="dos-colles" class="gif-item" data-title="Simulateur Dos Collés">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/dos-colles.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/dos-colles-blue.gif" alt="">
			<?php else: ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/livres-english.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/livres-english-blue.gif" alt="">
			<?php endif; ?>
		</div>

		<div id="spirale" class="gif-item" data-title="Simulateur Spirale">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-blue.gif" alt="">
			<?php else: ?>
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale-english.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-english-blue.gif" alt="">
			<?php endif; ?>
		</div>
	</section>

	<div class="step-title">Simulateur de Devis</div>

	<section class="simulateur-steps step-2">
		<section class="dropdown">
			<div class="dropdown-item couleurs">
				<div class="dropdown-button">+ Nos Couleurs</div>
				<div class="dropdown-content">
					<?php if(have_rows('couleurs')): while(have_rows('couleurs')): the_row(); ?>
						<div class="couleur" style="background-color: <?php the_sub_field('color_available'); ?>;">
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>

			<div class="dropdown-item papers">
				<div class="dropdown-button">+ Nos Papers</div>
				<div class="dropdown-content">

				</div>
			</div>
		</section>

		<section class="calculator-title">
			<h3>Général:</h3>
		</section>

		<section id="affiches-calculator" class="calculators affiches" data-title="Simulateur Affiches">
			<?php if(qtranxf_getLanguage() == "fr"): ?>
				<!-- AFFICHES CALCULATOR - FRENCH -->
				<div class="calconic-calculator"  data-calculatorid="5e99c26393d11a001e5e0fb2"></div>
			<?php else: ?>
				<!-- AFFICHES CALCULATOR - ENGLISH -->
				<div class="calconic-calculator"  data-calculatorid="5f2c6f18a2d88c002959c5f1"></div>
			<?php endif; ?>
		</section>

		<section id="dos-colles-calculator" class="calculators dos-colles">
			<div class="calconic-calculator"  data-calculatorid="5ea1bde1a4ca0d00290b1848"></div>
		</section>

		<section id="brochures-calculator" class="calculators brochures">
			<div class="calconic-calculator"  data-calculatorid="5e9dbdaaa4ca0d00290b12c8"></div>
		</section>

		<section id="fanzines-calculator" class="calculators fanzines">
			<div class="calconic-calculator"  data-calculatorid="5ea1b573a4ca0d00290b1835"></div>
		</section>

		<section id="spirale-calculator" class="calculators spirales">
			<div class="calconic-calculator"  data-calculatorid="5ea1c010a4ca0d00290b1850"></div>
		</section>

		<script>
			$(".step-1 .gif-item").click(function() {
			var qs,j,q,s,d=document, gi=d.getElementById,
			ce=d.createElement, gt=d.getElementsByTagName,
			id="calconic_", b="https://cdn.calconic.com/static/js/";
			if(!gi.call(d,id)) { j=ce.call(d,"script"); j.id=id; j.type="text/javascript"; j.async=true;
			j.dataset.calconic=true;
			j.src=b+"calconic.min.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(j,q) }
			});
		</script>
	</section>

	<div class="step-title">Simulateur</div>
	<section class="simulateur-steps step-3">
		<div class="form affiches-form">
			<!-- AFFICHES FORM -->
			<?php echo do_shortcode('[contact-form-7 id="155" title="Affiches"]'); ?>

			<div class="submit-hidden">
				<div class="gif-item submit-button">
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
				</div>
			</div>
		</div>

		<div class="form brochures-form">
			<!-- BROCHURES FORM -->
			<?php echo do_shortcode('[contact-form-7 id="218" title="Brochures"]'); ?>

			<div class="submit-hidden">
				<div class="gif-item submit-button">
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
				</div>
			</div>
		</div>

		<div class="form dos-colles-form">
			<!-- DOS COLLÉS FORM -->
			<?php echo do_shortcode('[contact-form-7 id="219" title="Dos Collés"]'); ?>

			<div class="submit-hidden">
				<div class="gif-item submit-button">
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
				</div>
			</div>
		</div>

		<div class="form fanzines-form">
			<!-- FANZINES FORM -->
			<?php echo do_shortcode('[contact-form-7 id="221" title="Fanzines"]'); ?>

			<div class="submit-hidden">
				<div class="gif-item submit-button">
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
				</div>
			</div>
		</div>

		<div class="form spirale-form">
			<!-- SPIRALE FORM -->
			<?php echo do_shortcode('[contact-form-7 id="222" title="Spirale"]'); ?>

			<div class="submit-hidden">
				<div class="gif-item submit-button">
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
				</div>
			</div>
		</div>
	</section>
</div>

<?php endwhile; else: ?>
	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->
<?php endif; ?>


<?php get_footer(); ?>
