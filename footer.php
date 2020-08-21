<?php if(wp_is_mobile()): ?>
	<!-- footer -->
	<footer class="footer mobile">
		<?php if(have_rows('footer', '148')): while(have_rows('footer', '148')): the_row(); ?>
			<div class="address">
				<?php the_sub_field('address'); ?>
			</div>

			<div class="telephone">
				<?php the_sub_field('telephone'); ?>
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
	<!-- /footer -->
<?php else: ?>
		<!-- footer -->
		<footer class="footer">
			<?php if(have_rows('footer', '148')): while(have_rows('footer', '148')): the_row(); ?>
				<div class="address">
					<?php the_sub_field('address'); ?>
				</div>

				<div class="instagram">
					<?php $instagram = get_sub_field('instagram'); ?>
					Instagram: <a href="<?php echo esc_url( $instagram['url'] ); ?>"><?php echo esc_attr( $instagram['title'] ); ?></a>
				</div>

				<div class="email">
					<?php if(have_rows('publication_email')): while(have_rows('publication_email')): the_row(); ?>
						<?php the_sub_field('span_text'); ?> <span><?php the_sub_field('email'); ?></span>
					<?php endwhile; endif; ?>
				</div>

				<div class="site_url">
					<?php the_sub_field('site_url'); ?>
				</div>

				<div class="telephone">
					<?php the_sub_field('telephone'); ?>
				</div>

				<div class="facebook">
					<?php $facebook = get_sub_field('facebook'); ?>
					Facebook: <a href="<?php echo esc_url( $facebook['url'] ); ?>"><?php echo esc_attr( $facebook['title'] ); ?></a>
				</div>

				<div class="email">
					<?php if(have_rows('impression_email')): while(have_rows('impression_email')): the_row(); ?>
						<?php the_sub_field('span_text'); ?> <span><?php the_sub_field('email'); ?></span>
					<?php endwhile; endif; ?>
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
		<!-- /footer -->
<?php endif; ?>
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
