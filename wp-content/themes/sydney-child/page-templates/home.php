<?php
/*
Template Name: Home
*/
$linkGroothandel = get_field('link_groothandel');
$linkProject_1 = get_field('link_project_1');
$linkProject_2 = get_field('link_project_2');
$linkProject_3 = get_field('link_project_3');
$linkBestellen = get_field('link-bestellen');


get_header(); ?>

<div class="groothandel-home">
	<div class="groothandel-home-inhoud">
		<div class="groothandel-home-c1">
			<?php if( get_field('afbeelding-groothandel') ): ?>
                <img class="afbeelding-groothandel" src="<?php the_field('afbeelding-groothandel'); ?>" />
            <?php endif; ?>
		</div>
		<div class="groothandel-home-c2">
			<?php if( get_field('titel-groothandel_1') ): ?>
				<h2 class="titel-groothandel_1"><?php the_field('titel-groothandel_1'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('titel-groothandel_2') ): ?>
				<h2 class="titel-groothandel_2"><?php the_field('titel-groothandel_2'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('informatie-groothandel') ): ?>
				<span class="informatie-groothandel"><?php the_field('informatie-groothandel'); ?></span>
			<?php endif; ?>
			<?php 
			if( $linkGroothandel ): ?>
				<a class="linkGroothandel" href="<?php echo esc_url( $linkGroothandel ); ?>">
				<?php the_field('tekst_link-groothandel'); ?>
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="projecten-home">
	<div class="projecten-home-inhoud">
		<div class="projecten-home-info">
			<div class="projecten-home-titel">
				<?php if( get_field('titel-projecten_1') ): ?>
					<h2 class="titel-projecten_1"><?php the_field('titel-projecten_1'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('titel-projecten_2') ): ?>
					<h2 class="titel-projecten_2"><?php the_field('titel-projecten_2'); ?></h2>
				<?php endif; ?>
			</div>
			<div class="projecten-home-tekstinfo">
				<?php if( get_field('informatie-projecten') ): ?>
					<p class="informatie-projecten"><?php the_field('informatie-projecten'); ?></p>
				<?php endif; ?>
			</div>
		</div>
		<div class="projecten-projecten_home">
			<div class="project_1">
				<?php if( get_field('afbeelding_project_1') ): ?>
					<img class="afbeelding_project_1 afbeelding_project" src="<?php the_field('afbeelding_project_1'); ?>" />
				<?php endif; ?>
				<?php if( get_field('titel_project_1') ): ?>
					<h2 class="titel_project_1 titel_project"><?php the_field('titel_project_1'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie_project_1') ): ?>
					<p class="informatie_project_1 informatie_project"><?php the_field('informatie_project_1'); ?></p>
				<?php endif; ?>
				<?php 
				if( $linkProject_1): ?>
					<a class="link_project" href="<?php echo esc_url( $linkProject_1 ); ?>">
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
				<?php endif; ?>
			</div>
			<div class="project_2">
				<?php if( get_field('afbeelding_project_2') ): ?>
					<img class="afbeelding_project_2 afbeelding_project" src="<?php the_field('afbeelding_project_2'); ?>" />
				<?php endif; ?>
				<?php if( get_field('titel_project_2') ): ?>
					<h2 class="titel_project_2 titel_project"><?php the_field('titel_project_2'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie_project_2') ): ?>
					<p class="informatie_project_2 informatie_project"><?php the_field('informatie_project_2'); ?></p>
				<?php endif; ?>
				<?php 
				if( $linkProject_2): ?>
					<a class="link_project" href="<?php echo esc_url( $linkProject_2 ); ?>">
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
				<?php endif; ?>
			</div>
			<div class="project_3">
				<?php if( get_field('afbeelding_project_3') ): ?>
					<img class="afbeelding_project_3 afbeelding_project" src="<?php the_field('afbeelding_project_3'); ?>" />
				<?php endif; ?>
				<?php if( get_field('titel_project_3') ): ?>
					<h2 class="titel_project_3 titel_project"><?php the_field('titel_project_3'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('informatie_project_3') ): ?>
					<p class="informatie_project_3 informatie_project"><?php the_field('informatie_project_3'); ?></p>
				<?php endif; ?>
				<?php 
				if( $linkProject_3): ?>
					<a class="link_project" href="<?php echo esc_url( $linkProject_3 ); ?>">
					<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
				</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="samenwerkingen">
	<div class="samenwerkingen-inhoud">
		<div class="samenwerkingen-c1">
			<?php if( get_field('afbeelding-samenwerken') ): ?>
				<img class="afbeelding-samenwerken" src="<?php the_field('afbeelding-samenwerken'); ?>" />
			<?php endif; ?>
		</div>
		<div class="samenwerkingen-c2">
			<?php if( get_field('titel-samenwerken_1') ): ?>
				<h2 class="titel-samenwerken_1"><?php the_field('titel-samenwerken_1'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('titel-samenwerken_2') ): ?>
				<h2 class="titel-samenwerken_2"><?php the_field('titel-samenwerken_2'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('puntje-samenwerken_1') ): ?>
				<p class="puntje-samenwerken_1 puntje-samenwerken">
					<i class="fa fa-circle" aria-hidden="true"></i>
					<?php the_field('puntje-samenwerken_1'); ?>
				</p>
			<?php endif; ?>
			<?php if( get_field('puntje-samenwerken_2') ): ?>
				<p class="puntje-samenwerken_2 puntje-samenwerken">
					<i class="fa fa-circle" aria-hidden="true"></i>
					<?php the_field('puntje-samenwerken_2'); ?>
				</p>
			<?php endif; ?>
			<?php if( get_field('puntje-samenwerken_3') ): ?>
				<p class="puntje-samenwerken_3 puntje-samenwerken">
					<i class="fa fa-circle" aria-hidden="true"></i>
					<?php the_field('puntje-samenwerken_3'); ?>
				</p>
			<?php endif; ?>
			<div class="sponsors">
				<div class="sponsors-rij-1">
					<div class="sponsors_1">
						<?php if( get_field('logo-samenwerken_1') ): ?>
							<img class="logo-samenwerken_1 logo-samenwerken" src="<?php the_field('logo-samenwerken_1'); ?>" />
						<?php endif; ?>
					</div>
					<div class="sponsors_2">
						<?php if( get_field('logo-samenwerken_2') ): ?>
							<img class="logo-samenwerken_2 logo-samenwerken" src="<?php the_field('logo-samenwerken_2'); ?>" />
						<?php endif; ?>
					</div>
					<div class="sponsors_3">
						<?php if( get_field('logo-samenwerken_3') ): ?>
							<img class="logo-samenwerken_3 logo-samenwerken" src="<?php the_field('logo-samenwerken_3'); ?>" />
						<?php endif; ?>
					</div>
				</div>
				<div class="sponsors-rij-2">
					<div class="sponsors_4">
						<?php if( get_field('logo-samenwerken_4') ): ?>
							<img class="logo-samenwerken_4 logo-samenwerken" src="<?php the_field('logo-samenwerken_4'); ?>" />
						<?php endif; ?>
					</div>
					<div class="sponsors_5">
						<?php if( get_field('logo-samenwerken_5') ): ?>
							<img class="logo-samenwerken_5 logo-samenwerken" src="<?php the_field('logo-samenwerken_5'); ?>" />
						<?php endif; ?>
					</div>
					<div class="sponsors_6">
						<?php if( get_field('logo-samenwerken_6') ): ?>
							<img class="logo-samenwerken_6 logo-samenwerken" src="<?php the_field('logo-samenwerken_6'); ?>" />
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bestellen">
	<div class="bestellen-inhoud">
		<div class="bestellen-c1">
			<?php if( get_field('afbeelding-bestellen') ): ?>
				<img class="afbeelding-bestellen" src="<?php the_field('afbeelding-bestellen'); ?>" />
			<?php endif; ?>
		</div>
		<div class="bestellen-c2">
			<?php if( get_field('titel-bestellen') ): ?>
				<h2 class="titel-bestellen"><?php the_field('titel-bestellen'); ?></h2>
			<?php endif; ?>
			<?php 
			if( $linkBestellen ): ?>
				<a class="linkBestellen" href="<?php echo esc_url( $linkBestellen ); ?>">
				<?php the_field('tekst_link-bestellen'); ?>
				<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
			<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer(); ?>

