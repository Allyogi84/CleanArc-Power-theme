<?php /* Template Name: Get Started */ get_header(); ?>
<section class="getting-started-banner">
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
		<div class="about-main-row">
			<div class="about-flex row">

				<div class="col-md-7">
					<div class="getting-started-list-links">
						<ul>
							<?php if( have_rows('list_itemss') ): while( have_rows('list_itemss') ) : the_row(); ?>
							<li><a href="<?php the_sub_field('item_Link'); ?>"><?php the_sub_field('item_text'); ?></a>
							</li>
							<?php endwhile; else : endif; ?>
						</ul>
					</div>
				</div>
				<div class="col-md-5">
					<div class="about-col-img">
						<img src="<?php the_field('image_page_right_side'); ?>" alt="how-img2">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>




