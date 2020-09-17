<?php get_header(); ?>

<?php $couleurs = get_field('text_couleurs');
if(get_field('text_couleurs')): ?>
<style text="css">
		.a-propos .header-text .text span.color1:hover {
			color: <?php echo $couleurs['couleur_1']; ?>;
		}

		.a-propos .header-text .text span.color2:hover {
			color: <?php echo $couleurs['couleur_2']; ?>;
		}

		.a-propos .header-text .text span.color3:hover {
			color: <?php echo $couleurs['couleur_3']; ?>;
		}

		.a-propos .header-text .text span.color4:hover {
			color: <?php echo $couleurs['couleur_4']; ?>;
		}
</style>
<?php endif; ?>

<?php if ( have_posts()) : while ( have_posts() ) : the_post(); ?>
	<section class="header-text">
		<div class="text">Une Maison D'édition Et Un Atelier D'impression  Riso À Paris</div>
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


<?php get_footer(); ?>
