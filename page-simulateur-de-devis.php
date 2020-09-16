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
		<div class="step-subtitle">
			Estimez votre projet, choisissez une catégorie:
		</div>

		<!-- AFFICHES -->
		<div id="affiches" class="gif-item" data-title="Simulateur Affiches">
			<div class="big-desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches-big-desktop.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-big-desktop.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches-big-desktop-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-big-desktop-english.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-english-blue.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="mobile">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/affiches-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/affiches-english-blue.gif" alt="">
				<?php endif; ?>
			</div>
		</div>

		<div id="brochures" class="gif-item" data-title="Simulateur Brochures">
			<div class="big-desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures-big-desktop.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-big-desktop.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures-big-desktop-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-big-desktop-english.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-english-blue.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="mobile">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/brochures-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/brochures-english-blue.gif" alt="">
				<?php endif; ?>
			</div>
		</div>

		<div id="fanzines" class="gif-item" data-title="Simulateur Fanzines">
			<div class="big-desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines-big-desktop.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-big-desktop.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines-big-desktop-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-big-desktop-english.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-english-blue.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="mobile">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/fanzines-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/fanzines-english-blue.gif" alt="">
				<?php endif; ?>
			</div>
		</div>

		<div id="dos-colles" class="gif-item" data-title="Simulateur Dos Collés">
			<div class="big-desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/dos-colles-big-desktop.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/dos-colles-big-desktop.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/dos-colles-big-desktop-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/dos-colles-big-desktop-english.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/dos-colles.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/dos-colles-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/livres-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/livres-english-blue.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="mobile">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/dos-colles.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/dos-colles-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/livres-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/livres-english-blue.gif" alt="">
				<?php endif; ?>
			</div>
		</div>

		<div id="spirale" class="gif-item" data-title="Simulateur Spirale">
			<div class="big-desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale-big-desktop.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-big-desktop.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale-big-desktop-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-big-desktop-english.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="desktop">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-english-blue.gif" alt="">
				<?php endif; ?>
			</div>

			<div class="mobile">
				<?php if(qtranxf_getLanguage() == "fr"): ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-blue.gif" alt="">
				<?php else: ?>
					<img class="static" src="<?php bloginfo('template_url'); ?>/img/spirale-english.png" alt="">
					<img class="hover" src="<?php bloginfo('template_url'); ?>/img/spirale-english-blue.gif" alt="">
				<?php endif; ?>
			</div>
		</div>
	</section>

	<div class="step-title">Simulateur de Devis</div>

	<section class="simulateur-steps step-2">
		<section class="dropdown">
			<div class="dropdown-item couleurs">
				<div class="dropdown-button">+ Nos Couleurs</div>
				<div class="dropdown-content">
					<?php if( have_rows('liste_des_coleurs', 13) ): while( have_rows('liste_des_coleurs', 13) ): the_row(); ?>
					<?php if(have_rows('couleurs')): while(have_rows('couleurs')): the_row(); ?>
						<div class="couleur" style="background-color: <?php the_sub_field('couleur'); ?>;">
							<colour class="couleurs-hover" style="color: <?php the_sub_field('couleur'); ?>; border: 1px solid;">
								<div class="row colour-title">
									<p class="s2"><?php the_sub_field('nom_couleur'); ?></p>
								</div>

								<div class="row form-opacity">
									<svg width="97" height="84" viewBox="0 0 97 84" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M95.8068 44.9798C93.6042 40.6157 88.7551 36.7591 83.9348 35.5C83.8771 33.8255 83.3755 32.0324 82.4357 30.1733C78.9415 23.2514 70.4368 17.6347 63.4773 17.661C61.269 17.6676 59.4008 18.2477 58.0458 19.3421C55.1571 14.0484 48.6128 9.8227 43.2447 9.84247C41.7283 9.84907 40.4425 10.1853 39.4046 10.8445C34.7227 4.52243 26.6447 -0.0197128 20.0831 6.43326e-05C12.2472 0.0264338 9.07592 6.38807 13.014 14.1868C13.2793 14.7208 13.5849 15.2614 13.9193 15.7954C12.0684 15.057 10.2291 14.6681 8.57428 14.6747C2.75071 14.6945 0.392451 19.4212 3.32154 25.2225C3.84047 26.2443 4.50355 27.2661 5.29924 28.2484C0.13875 29.3691 -1.48147 34.3529 1.45914 40.1806C4.42859 46.061 11.3073 51.1173 17.5979 52.093C17.3269 53.7345 17.7075 55.6265 18.6992 57.591C21.069 62.2848 26.4313 66.3325 31.5111 67.2818C31.7821 68.1454 32.1453 69.0222 32.5893 69.9056C36.5274 77.7043 46.1046 84.0264 53.9405 84.0001C59.5392 83.9803 62.9353 80.7368 62.6989 75.6871C66.9311 79.7612 72.5759 82.352 77.2348 82.3388C83.7388 82.319 86.6794 77.3352 84.0501 70.9274C86.0336 71.7646 87.994 72.2063 89.7526 72.1997C95.5762 72.1799 97.9344 67.4532 95.0111 61.6519C93.7253 59.1073 91.5977 56.6945 88.9742 54.7959C89.6315 54.9079 90.26 54.9607 90.8424 54.9607C96.3488 54.9343 98.5802 50.4647 95.8068 44.9798Z" fill="<?php the_sub_field('couleur'); ?>"/>
									</svg>

									<div class="row colour-opacity">
										<div class="gradient" style="background: linear-gradient(90deg, <?php the_sub_field('couleur'); ?> 0%, #FFFFFF 100%);"></div>
										<div class="opacity-module opacity-10" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-20" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-30" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-40" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-50" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-60" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-70" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-80" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-90" style="background: <?php the_sub_field('couleur'); ?>;"></div>
										<div class="opacity-module opacity-100" style="background: <?php the_sub_field('couleur'); ?>;"></div>
									</div>
								</div>

								<div class="row colour-hex">
									<div class="hex-code">
										<p>HEX: <?php the_sub_field('couleur'); ?></p>
									</div>

									<div class="percent-opacity">
										<div class="percent-module">10%</div>
										<div class="percent-module">20%</div>
										<div class="percent-module">30%</div>
										<div class="percent-module">40%</div>
										<div class="percent-module">50%</div>
										<div class="percent-module">60%</div>
										<div class="percent-module">70%</div>
										<div class="percent-module">80%</div>
										<div class="percent-module">90%</div>
										<div class="percent-module">100%</div>
									</div>
								</div>
							</colour>
						</div>
					<?php endwhile; endif; endwhile; endif; ?>
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
