<?php /* Template Name: Blog Page */ get_header(); ?>
<section class="home-main" id="blogContainerPage">
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
		<div class="bttn-ltgr">
			<div class="buttons">
				<p>view as:</p>
				<button class="grids square-btn active"><i class="fa fa-th-large"></i></button>
				<button class="list square-btn"><i class="fa fa-bars"></i></button>
			</div>
			<ul class="grids">
				<?php $args = array( 'post_type' => 'post', 'posts_per_page' => -1 ); $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>" class="li-image"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
					<div class="li-data">
						<a class="frs" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<span><i class="fa fa-user"></i>Capsells</span>
						<span><i class="far fa-clock"></i><?php echo get_the_date(); ?></span>

						<div class="read-bttn">
							<div class="exceprtContainer">	
								<?php the_excerpt(); ?>
							</div>
							<a class="rd-more" href="<?php the_permalink(); ?>"><i class="fa fa-play"></i>Read More</a>
						</div>
					</div>
				</li>
			<?php endwhile; wp_reset_postdata();  ?>
		</ul>
	</div>
		<nav aria-label="...">
		  <ul class="pagination">
			<li class="page-item disabled">
			  <a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item active">
			  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
			</li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			  <a class="page-link" href="#">Next</a>
			</li>
		  </ul>
		</nav>
	<!-- <div class="social-list">
		<div class="clk"><a href="javascript:void"><i class="fa fa-plus"></i></a>
		</div>
		<ul class="fix-list">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			<li><a href="#"><i class="fa fa-instagram"></i></a></li>
		</ul>

	</div> -->
</section>

<?php get_footer(); ?>