<?php get_header(); ?>

<?php $couleurs = get_field('text_couleurs');
if(get_field('text_couleurs')): ?>
<style text="css">
		.a-propos .index_menu .text span.color1:hover {
			color: <?php echo $couleurs['couleur_1']; ?>;
		}

		.a-propos .index_menu .text span.color2:hover {
			color: <?php echo $couleurs['couleur_2']; ?>;
		}

		.a-propos .index_menu .text span.color3:hover {
			color: <?php echo $couleurs['couleur_3']; ?>;
		}

		.a-propos .index_menu .text span.color4:hover {
			color: <?php echo $couleurs['couleur_4']; ?>;
		}
</style>
<?php endif; ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<section class="index_menu">
		<div class="text <?php if(qtranxf_getLanguage() == "fr"): ?>french<?php else: ?>english<?php endif; ?>"><?php the_field('header_text'); ?></div>
	</section>

<?php if(have_rows('map_section')): while(have_rows('map_section')): the_row(); ?>
<section class="map">
	<div class="page-title">
		<div></div>
		<div><h1><?php the_sub_field('map_title'); ?></h1></div>
	</div>

	<div class="map-description">
		<div class="text">
			<?php the_sub_field('map_description'); ?>
		</div>

		<div class="image">
			<img src="<?php the_sub_field('map_image'); ?>" alt="">
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php if(have_rows('contact_section')): while(have_rows('contact_section')): the_row(); ?>
<section class="contact">
	<div class="page-title">
		<div></div>
		<div><h1><?php the_sub_field('contact_title'); ?></h1></div>
	</div>

	<div class="form">
		<?php the_sub_field('contact_form'); ?>

		<div class="submit-hidden">
			<div class="gif-item submit-button">
				<img class="static" src="<?php bloginfo('template_url'); ?>/img/go.png" alt="">
				<img class="hover" src="<?php bloginfo('template_url'); ?>/img/go-blue.gif" alt="">
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>


<?php if(have_rows('team_section')): while(have_rows('team_section')): the_row(); ?>
<section class="team">
	<div class="page-title">
		<div></div>
		<div><h1><?php the_sub_field('team_title'); ?></h1></div>
	</div>

	<div class="grid team-members">
		<?php if(have_rows('team_members')): while(have_rows('team_members')): the_row(); ?>
		<div class="member">
			<?php $memberphoto = get_sub_field('photo'); ?>
			<img src="<?php echo esc_url($memberphoto['url']); ?>" alt="">
			<h2><?php the_sub_field('name'); ?></h1>
			<p><?php the_sub_field('description'); ?></p>
			<div class="email">
				<?php the_sub_field('email'); ?>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<?php endwhile; endif; ?>
<?php endwhile; else : ?>
	<!-- article -->
	<article>

		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	</article>
	<!-- /article -->
<?php endif; ?>

<style type="text/css">
	.design-code {
		margin-bottom: -1.1vw;
	}
	.design-code, .design-code a {
		font-size: 1.7vw;
	}

	@media only screen and (max-width: 768px) {
		.design-code {
			margin-bottom: -3vw;
		}
		.design-code, .design-code a {
			font-size: 5vw;
			line-height: 5.8vw;
		}
	}
</style>

<div class="design-code">Design by <a href="https://sometimes-always.com/" target="_blank">Sometimes Always</a>. Programming by <a href="https://fluxo.design/" target="_blank">Fluxo</a>.</div>


<?php get_footer(); ?>
