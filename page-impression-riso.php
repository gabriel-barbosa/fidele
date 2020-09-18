<?php get_header(); ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
<section>
	<div class="page-title">
		<div></div>
		<div><h1><?php the_title(); ?></h1></div>
	</div>

	<div class="subtitle">
		<p><?php the_field('subtitle'); ?></p>
	</div>

	<div class="grid col-2">
		<div class="simulateur-de-devis">
			<p class="s2"><?php the_field('simulateur_de_devis'); ?></p>
		</div>

		<div class="guide-d-impression">
			<p class="s2"><?php the_field('guide_dimpression'); ?></p>
		</div>

		<div class="simulateur-de-devis big-desktop">
				<div class="gif-item">
					<a href="<?php bloginfo('url'); ?>/impression-riso/simulateur-de-devis">
						<?php if(qtranxf_getLanguage() == "fr"): ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur-big-desktop.png" alt="">
							<img class="hover" src="<?php bloginfo('template_url'); ?>/img/simulateur-big-desktop.gif" alt="">
						<?php else: ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur-big-desktop-english.png" alt="">
							<img class="hover" src="<?php bloginfo('template_url'); ?>/img/simulateur-big-desktop-english.gif" alt="">
						<?php endif; ?>
					</a>
				</div>
		</div>

		<div class="simulateur-de-devis desktop">
				<div class="gif-item">
					<a href="<?php bloginfo('url'); ?>/impression-riso/simulateur-de-devis">
						<?php if(qtranxf_getLanguage() == "fr"): ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur.png" alt="">
							<img class="hover" src="<?php bloginfo('template_url'); ?>/img/simulateur-blue.gif" alt="">
						<?php else: ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur-english.png" alt="">
							<img class="hover" src="<?php bloginfo('template_url'); ?>/img/simulateur-english-blue.gif" alt="">
						<?php endif; ?>
					</a>
				</div>
		</div>

		<div class="simulateur-de-devis mobile">
				<div class="gif-item">
					<a href="<?php bloginfo('url'); ?>/impression-riso/simulateur-de-devis">
						<?php if(qtranxf_getLanguage() == "fr"): ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur-de-devis.svg" alt="">
						<?php else: ?>
							<img class="static" src="<?php bloginfo('template_url'); ?>/img/simulateur-de-devis-english.svg" alt="">
						<?php endif; ?>
					</a>
				</div>
		</div>

		<div class="guide-d-impression big-desktop">
			<div class="gif-item">
				<a href="<?php bloginfo('url'); ?>/impression-riso/guide-d-impression">
					<?php if(qtranxf_getLanguage() == "fr"): ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop.png" alt="">
						<img class="hover" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop.gif" alt="">
					<?php else: ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop-english.png" alt="">
						<img class="hover" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop-english.gif" alt="">
					<?php endif; ?>
				</a>
			</div>
		</div>

		<div class="guide-d-impression desktop">
			<div class="gif-item">
				<a href="<?php bloginfo('url'); ?>/impression-riso/guide-d-impression">
					<?php if(qtranxf_getLanguage() == "fr"): ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide.png" alt="">
						<img class="hover" src="<?php bloginfo('template_url'); ?>/img/guide-blue.gif" alt="">
					<?php else: ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop-english.png" alt="">
						<img class="hover" src="<?php bloginfo('template_url'); ?>/img/guide-big-desktop-english.gif" alt="">
					<?php endif; ?>
				</a>
			</div>
		</div>

		<div class="guide-d-impression mobile">
			<div class="gif-item">
				<a href="<?php bloginfo('url'); ?>/impression-riso/guide-d-impression">
					<?php if(qtranxf_getLanguage() == "fr"): ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide-dimpression.svg" alt="">
					<?php else: ?>
						<img class="static" src="<?php bloginfo('template_url'); ?>/img/guide-dimpression-english.svg" alt="">
					<?php endif; ?>
				</a>
			</div>
		</div>
	</div>
</section>

<?php if( have_rows('liste_des_coleurs') ): ?>
  <?php while( have_rows('liste_des_coleurs') ): the_row(); ?>
		<section>
			<div class="page-title">
				<div class="download-row">
					<?php
					$file = get_field('download_couleurs');
					if( $file ):
					$url = wp_get_attachment_url( $file ); ?>
					<div class="download-button">
				    <a href="<?php echo esc_html($url); ?>">Click Here To Download Our Color Palette</a>
					</div>
					<?php endif; ?>
				</div>
				<div><h1><?php the_sub_field('coleurs_title'); ?></h1></div>
			</div>

			<div class="subtitle">
				<p class="s1"><?php the_sub_field('couleurs_description'); ?></p>
			</div>

			<div class="grid col-3 couleurs">
				<?php if(have_rows('couleurs')): while(have_rows('couleurs')): the_row(); ?>
					<colour class="single-colour" style="color: <?php the_sub_field('couleur'); ?>">
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
				<?php endwhile; endif; ?>
			</div>

			<?php if( $file ):
			$url = wp_get_attachment_url( $file ); ?>
			<div class="download-button-mobile">
				<a href="<?php echo esc_html($url); ?>">
					<img src="<?php bloginfo('template_url'); ?>/img/download-button.svg" alt="">
				</a>
			</div>
			<?php endif; ?>
		</section>

		<?php if( have_rows('exemples') ): ?>
		  <?php while( have_rows('exemples') ): the_row(); ?>
				<section>
					<div class="page-title">
						<div></div>
						<div><h1><?php the_sub_field('exemples_title'); ?></h1></div>
					</div>

					<div class="subtitle">
						<p class="s1"><?php the_sub_field('exemples_description'); ?></p>
					</div>

					<div class="exemples-galerie">
						<?php
						$images = get_sub_field('exemples_galerie');
						if( $images ): ?>
			        <?php foreach( $images as $image ): ?>
		            <div class="single-image">
	                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </div>
						<?php endforeach; endif; ?>

						<div class="gradient"></div>
					</div>
				</section>
			<?php endwhile; endif; ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php endwhile; ?>

<?php else : ?>
	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->
<?php endif; ?>

<?php get_footer(); ?>
