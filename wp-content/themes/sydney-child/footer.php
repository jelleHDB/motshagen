<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */

 $linkMail1 = get_field('link_mail-kolom2_1', 'options');
 $linkPhone1 = get_field('tekst_telefoonnummer-kolom2_1', 'options');
 $linkMail2 = get_field('link_mail-kolom2_2', 'options');
 $linkPhone2 = get_field('tekst_telefoonnummer-kolom2_2', 'options');


?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

	<?php $container 	= get_theme_mod( 'footer_credits_container', 'container' ); ?>
	<?php $credits 		= sydney_footer_credits(); ?>

	<footer id="footer-costum" class="footer-costum">
		<div class="footer-inhoud">
			<div class="footer-kolom1">
			<?php if( get_field('titel-kolom1', 'options') ): ?>
				<h2 class="titel-kolom1"><?php the_field('titel-kolom1', 'options'); ?></h2>
			<?php endif; ?>
			<?php

				// Check rows existexists.
				if( have_rows('menu_items-kolom1', 'options') ):

					// Loop through rows.
					while( have_rows('menu_items-kolom1', 'options') ) : the_row();

						// Load sub field value.
						$link_footer = get_sub_field('link_menu-kolom1', 'options');
						$tekst_link_footer = get_sub_field('tekst_link-menu-kolom1', 'options');
						// Do something...

						?>
					<a class="menu-footer" href="<?php echo $link_footer; ?>">
						<?php echo $tekst_link_footer ?>
					</a>
						<?php

					// End loop.
					endwhile;

				// No value.
				else :
					// Do something...
				endif;

				?>
			</div>
			<div class="footer-kolom2">
				<div class="kolom2-adres1">
					<?php if( get_field('titel_kolom2_1', 'options') ): ?>
						<h2 class="titel_kolom2_1"><?php the_field('titel_kolom2_1', 'options'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('titel_kolom2_2', 'options') ): ?>
						<h2 class="titel_kolom2_2"><?php the_field('titel_kolom2_2', 'options'); ?></h2>
					<?php endif; ?>
					<div class="locatie-1">
						<div class="locatie-icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="locatio-info">
							<?php if( get_field('adres-kolom2_1', 'options') ): ?>
								<p class="adres-kolom2_1"><?php the_field('adres-kolom2_1', 'options'); ?></p>
							<?php endif; ?>
							<?php if( get_field('adres-kolom2_2', 'options') ): ?>
								<p class="adres-kolom2_2"><?php the_field('adres-kolom2_2', 'options'); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="mail-1">
						<div class="mail-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="mail-info">
							<?php 
							if( $linkMail1 ): ?>
								<a class="linkMail1" href="<?php echo esc_url( $linkMail1 ); ?>">
								<?php the_field('tekst_mail-kolom2_1', 'options'); ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="phone-1">
						<div class="phone-icon">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="phone-info">
							<?php 
							if( $linkPhone1 ): ?>
								<a class="linkPhone1" href="<?php echo esc_url( $linkPhone1 ); ?>">
								<?php the_field('tekst_telefoonnummer-kolom2_1', 'options'); ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="kolom2-adres2">
					<?php if( get_field('titel_kolom2_3', 'options') ): ?>
						<h2 class="titel_kolom2_3"><?php the_field('titel_kolom2_3', 'options'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('adres-kolom2_4', 'options') ): ?>
						<h2 class="adres-kolom2_4"><?php the_field('adres-kolom2_4', 'options'); ?></h2>
					<?php endif; ?>
					<div class="locatie-1">
						<div class="locatie-icon">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="locatio-info">
							<?php if( get_field('adres-kolom2_3', 'options') ): ?>
								<p class="adres-kolom2_3"><?php the_field('adres-kolom2_3', 'options'); ?></p>
							<?php endif; ?>
							<?php if( get_field('adres-kolom2_4', 'options') ): ?>
								<p class="adres-kolom2_4"><?php the_field('adres-kolom2_4', 'options'); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="mail-1">
						<div class="mail-icon">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="mail-info">
							<?php 
							if( $linkMail2 ): ?>
								<a class="linkMail2" href="<?php echo esc_url( $linkMail2 ); ?>">
								<?php the_field('tekst_mail-kolom2_2', 'options'); ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="phone-1">
						<div class="phone-icon">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="phone-info">
							<?php 
							if( $linkPhone2 ): ?>
								<a class="linkPhone2" href="<?php echo esc_url( $linkPhone2 ); ?>">
								<?php the_field('tekst_telefoonnummer-kolom2_2', 'options'); ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-kolom3">
				<?php if( get_field('titel-kolom3_1', 'options') ): ?>
					<h2 class="titel-kolom3_1"><?php the_field('titel-kolom3_1', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('titel-kolom3_2', 'options') ): ?>
					<h2 class="titel-kolom3_2"><?php the_field('titel-kolom3_2', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('openingstijden_adres_1-kolom3', 'options') ): ?>
					<?php the_field('openingstijden_adres_1-kolom3', 'options'); ?>
				<?php endif; ?>
				<?php if( get_field('titel-kolom3_3', 'options') ): ?>
					<h2 class="titel-kolom3_3"><?php the_field('titel-kolom3_3', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('titel-kolom3_4', 'options') ): ?>
					<h2 class="titel-kolom3_4"><?php the_field('titel-kolom3_4', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('openingstijden_adres_2-kolom3', 'options') ): ?>
					<?php the_field('openingstijden_adres_2-kolom3', 'options'); ?>
				<?php endif; ?>
			</div>
			<div class="footer-kolom4">
				<?php if( get_field('afbeelding-kolom4', 'options') ): ?>
					<img class="afbeelding-kolom4" src="<?php the_field('afbeelding-kolom4', 'options'); ?>" />
				<?php endif; ?>
				<?php if( get_field('titel-kolom4', 'options') ): ?>
					<h2 class="titel-kolom4"><?php the_field('titel-kolom4', 'options'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('nieuwsbrief-kolom4', 'options') ): ?>
					<?php the_field('nieuwsbrief-kolom4', 'options'); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer>

	<?php do_action('sydney_after_footer'); ?>
	<?php echo wp_kses_post( $credits ); ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
