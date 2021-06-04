
	<?php } else { ?>
		<div class="bannerContainerSimplecate">
			<div class="container">
				<div class="bannerImageSimpleContainer">
					<img src="<?php the_field('image_main_image', 'product_cat_'.$term->term_id); ?>" />
				</div>
			</div>
		</div>
		<div class="simpleCatContaienr">
			<div class="container">
				<div class="containerTopSimpleCats">
					<div class="sidebar">
						<div class="sidebarLink">
							<a href="#">
								sidebar
							</a>
						</div>
					</div>
					<div class="srtBy">
						<span class="sortingBY">Sort By:</span>
						<?php woocommerce_catalog_ordering();  ?>
					</div>
				</div>
				<div class="row">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php global $product; ?>
						<div class="col-md-3">
							<div class="innerContainerCatsPage">
								<div class="imageWrapperS">
									<a href="<?php the_permalink(); ?>">
										<?php  
										if ( has_post_thumbnail() ) { ?>
											<img src="<?php echo get_the_post_thumbnail_url(); ?>">
										<?php } else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/null.png">
										<?php }
										?>

									</a>
									<?php $product_id = $product->get_id(); $product = new WC_product($product_id); $attachment_ids = $product->get_gallery_image_ids();
									foreach( $attachment_ids as $attachment_id ) { ?>
										<a href="<?php the_permalink(); ?>">
											<img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>">
										</a>
									<?php } ?>
								</div>
								<div class="contentContainercatsPae">
									<a href="<?php the_permalink(); ?>">
										<h5><?php the_title(); ?></h5>
										<div class="ratingCountCustom">
											<?php $ratingCOunts = $product->get_review_count(); ?>
											<?php for ($i=1; $i <=$ratingCOunts ; $i++) {  ?>
												<i class="fa fa-star checked"></i>
											<?php } ?>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</a>
								</div>
								<div class="permalinkAndWishLIst">
									<div class="wishtlistArchive">
										<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_pagenavi(); ?>
				</div>
				<div class="simpleCatbanner">
					<hr>
					<h2 class="subHeadingIffeturedNew"><?php the_field('category_heading_if_is_featured', 'product_cat_'.$term->term_id); ?></h2>
					<div class="row alignCenter">
						<div class="col-md-6">
							<img src="<?php the_field('column_image', 'product_cat_'.$term->term_id); ?>" />
						</div>
						<div class="col-md-6">
							<div class="simpleContentcategory">
								<h2><?php echo $term->name; ?></h2>
								<p>
									<?php echo $term->description; ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<?php if ($term->name === "Solar Street Lights"): ?>
					<?php get_template_part( 'featured-content' ); ?>
				<?php endif ?>
				<?php if ($term->name === "Hydroxyl Generators/Air Purifier"): ?>
					<?php get_template_part( 'hydroxyl-generators' ); ?>
				<?php endif ?>
			</div>
		</div>
	<?php } ?>
	<?php $children = get_terms( $term->taxonomy, array( 'parent'    => $term->term_id, 'hide_empty' => false ) );
	if ( $children ) { ?>
		<div class="newsContainer">
			<div class="blog">
				<div class="container">
					<div class="headingBLog">
						<h2>Latest News and Related Articles.</h2>
					</div>
					<div class="row sliderBlog">
						<?php 
						$args = array( 'posts_per_page' => 4);
						$loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post();  
						?>
						<div class="col-md-3 innerContainerSliderBlog">
							<a href="<?php the_permalink(); ?>">
								<div class="postImageSlider">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								</div>
								<div class="contentPostSlider">
									<span class="adateContainer"><?php echo get_the_date(); ?></span>
									<h6><?php the_title(); ?></h6>
									<?php  the_excerpt(); ?>
								</div>
							</a>
						</div>
					<?php  endwhile; wp_reset_query();  ?>
				</div>
			</div>
		</div>
		</div>
	<?php } ?>