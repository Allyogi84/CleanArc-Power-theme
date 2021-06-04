<?php get_header(); ?>
<div class="container">
	<div class="bannerContaine">
		<div class="sliderContainerBanner">
			<?php if( have_rows('banner_container') ): while( have_rows('banner_container') ) : the_row(); ?>
			<div class="innercontainerSlider">
				<div class="imaheContainer">
					<img src="<?php the_sub_field('Bannerimage'); ?>">
				</div>
				<div class="container">
					<div class="contentContainerbanner">
						<h2><?php the_sub_field('banner_heading'); ?></h2>
					</div>
				</div>
			</div>
			<?php endwhile; else : endif; ?>
		</div>
	</div>
	<br>
	<div class="pagesada">
		<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>	
	</div>



</div>
<?php get_footer(); ?>