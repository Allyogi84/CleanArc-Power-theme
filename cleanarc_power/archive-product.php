<?php get_header(); ?>
<?php $term = get_queried_object(); ?>
<?php if ( have_posts() ) : ?>

<?php $children = get_terms( $term->taxonomy, array( 'parent'    => $term->term_id, 'hide_empty' => false ) );
if ( $children && $term->name != 'Wind' && $term->name != 'Water' ) { ?>
<div class="bannerContainerCats" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/x.png');">
	<div class="container">
		<h1 class="archive-title">
			<?php single_term_title(); ?>
		</h1>
		<?php if ( category_description() ) : ?>
		<div class="archive-meta"><?php echo category_description(); ?></div>
		<?php endif; ?>
	</div>
</div>
<div class="tabsContaienrforSubCats">
	<div class="listTatgTabs">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<?php $children = get_terms( $term->taxonomy, array( 'parent'    => $term->term_id, 'hide_empty' => false ) );
																	 if ( $children ) { $j=1; ?>
			<?php  foreach( $children as $subcat ) {  $str = $subcat->name; $new_str = str_replace(' ', '', $str); $string = preg_replace('/[^A-Za-z0-9\-]/', '', $new_str); ?>
			<li class="nav-item">
				<a class="nav-link <?php echo $j === 1 ? 'active' : '' ?> " id="<?php echo $string; ?>-tab" data-toggle="tab" href="#<?php echo $string; ?>" role="tab" aria-controls="<?php echo $string; ?>" aria-selected="true"><?php echo $subcat->name;  ?></a>
			</li>
			<?php $j++; }  ?>
			<?php } ?>
		</ul>
	</div>
	<div class="tab-content" id="myTabContent">
		<?php $children = get_terms( $term->taxonomy, array( 'parent'    => $term->term_id, 'hide_empty' => false ) );
																	 if ( $children ) { $i=1; ?>
		<?php  foreach( $children as $subcat ) {  $str = $subcat->name; $new_str = str_replace(' ', '', $str); $string = preg_replace('/[^A-Za-z0-9\-]/', '', $new_str); ?>
		<div class="tab-pane fade <?php echo $i === 1 ? ' show active' : '' ?>" id="<?php echo $string; ?>" role="tabpanel" aria-labelledby="<?php echo $string; ?>-tab">
			<?php $cat = $subcat->term_id; ?>
			<div class="ContainerSeemstab">
				<div class="container">
					<div class="row tabContainerCustom" id="<?php echo $string; ?>">
						<div class="col-md-6">
							<div class="breadcrumb">
								<?php  if(function_exists('get_hansel_and_gretel_breadcrumbs')): 
												echo get_hansel_and_gretel_breadcrumbs();
												endif; ?>
							</div>
							<h2><?php echo $subcat->name; ?></h2>
							<p><?php echo $subcat->description; ?></p>
						</div>
						<div class="col-md-6">
							<img src="<?php the_field('image_main_image', 'product_cat_'.$subcat->term_id); ?>">
						</div>
					</div>
				</div>
			</div>
			<div class="tagsCOntainerProducts">
				<div class="container">
					<div class="tagContainersCheck">
						<div id="filters">
							<!-- <select class="filter option-set clearfix pro-region"  data-filter-group="lichtfarbe">
<option value="*" data-filter-value="" class="selected">All Regions</option>
<?php  $brand_terms = get_terms('pa_region');
												foreach ($brand_terms as $term) : ?>
<option value="#filter-lichtfarbe-<?php echo $term->slug; ?>" data-filter-value=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
<?php	endforeach; ?>
</select> -->
							<ul data-filter-group="leistung" class="pro-tag">
								<?php $terms = get_terms( 'product_tag' );
												$term_array = array();
												if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
													foreach ( $terms as $term ) { ?>
								<li data-filter-value1="#filter-leistung-<?php echo $term->slug; ?>" data-filter-value=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
								<?php } } ?>
							</ul>

						</div>
					</div>
					<div class="productTagFilter">
						<div class="grid">

							<?php $childrensub = get_terms( $subcat->taxonomy, array( 'parent'    => $subcat->term_id, 'hide_empty' => false ) );
												if ( $childrensub ) {   ?>
							<?php  foreach( $childrensub as $subcatchild ) {  $str = $subcatchild->name; $new_str = str_replace(' ', '', $str); $string = preg_replace('/[^A-Za-z0-9\-]/', '', $new_str); 
																			$term_link = get_term_link( $subcatchild );
							?>
							<?php $termcat = get_field('select_tag', 'product_cat_'.$subcatchild->term_id); ?>
							<?php $termreg = get_field('select_region', 'product_cat_'.$subcatchild->term_id); ?>

							<div class="element-item <?php echo esc_html( $termcat->slug ); ?> <?php echo esc_html( $termreg->slug ); ?>">
								<div class="catInnerContainers">
									<a href="<?php echo $term_link; ?>">
										<div class="imaheWrappers">
											<img src="<?php the_field('imageasd', 'product_cat_'.$subcatchild->term_id); ?>">
										</div>
										<h6><?php echo $subcatchild->name; ?></h6>
									</a>
								</div>	
							</div>
							<?php  }  ?>
							<?php } ?>


						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $i++; }  ?>
		<?php } ?>
	</div>
</div>

<?php } else { ?>
<?php 
	$body_classes = get_body_class();
	if(in_array('subcategory', $body_classes))
	{ ?>
<div class="contaienrSubVategoryProeucts">
	<div class="breadcrumbsWIthTitle">
		<div class="breadcrumb">
			<?php  if(function_exists('get_hansel_and_gretel_breadcrumbs')): 
	 echo get_hansel_and_gretel_breadcrumbs();
	 endif; ?>
		</div>

	</div>


	<div class="container" id="asldj">
		<div class="regionFiltertext">
			<div id="filters">
				<select class="filter option-set clearfix pro-region"  data-filter-group="lichtfarbe">
					<option value="*" data-filter-value="" class="selected">All Regions</option>
					<?php  $brand_terms = get_terms('pa_region');
	 foreach ($brand_terms as $term) : ?>
					<option value="#filter-lichtfarbe-<?php echo $term->slug; ?>" data-filter-value=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
					<?php	endforeach; ?>
				</select>
				<h2 class="text-center"><?php single_term_title(); ?></h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="grid">
			<?php while ( have_posts() ) : the_post();
	 $theid = get_the_ID();
			?>
			<?php $termsw = get_the_terms( $theid, 'product_cat' ); ?>
			<div class="element-item <?php foreach ( $termsw as $termr ) { 
				$termregs = get_field('select_region', 'product_cat_'.$termr->term_id);
				$category = $termregs;
				$name = $category->name;
				echo strtolower($name);
			} ?>">
				<div class="innerContainerCatsPage">
					<div class="imageWrapperSs">
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						</a>
					</div>
					<div class="contentContainercatsPae">
						<a href="<?php the_permalink(); ?>">
							<h5><?php the_title(); ?></h5>
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
		</div>
	</div>
</div>
<?php } else { ?>

<div class="bannerContainerSimplecate">
	<div class="container">
		<div class="bannerImageSimpleContainer">
			<img src="<?php the_field('image_main_image', 'product_cat_'.$term->term_id); ?>" />
		</div>
	</div>
</div>
<div class="simpleCatbanner">
	<div class="container">
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

		<?php if ($term->name === "Solar Street Lights"): ?>
		<?php get_template_part( 'featured-content' ); ?>
		<?php endif ?>
		<?php if ($term->name === "Hydroxyl Generators/Air Purifier"): ?>
		<?php get_template_part( 'hydroxyl-generators' ); ?>
		<?php endif ?>
	</div>
</div>
<?php }
?>
<?php } ?>
<div class="newsContainer">
	<div class="blog">
		<div class="container">
			<div class="headingBLog">
				<h2>Latest News and Related Articles</h2>
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
</div>
</div>

<?php endif; ?>
<?php get_footer(); ?>

<script>
	$(function(){

		var $container = $('.grid'),
			filters = {};
		$container.isotope({filter: '.products'});

// 		$container.isotope({
// 			itemSelector : '.element-item',
// 			filter: '.africa'
// 		});

		$('.pro-region').change(function(){
			var $this = $(this);

			var group = $this.attr('data-filter-group');

			filters[ group ] = $this.find(':selected').attr('data-filter-value');
			var isoFilters = [];
			for ( var prop in filters ) {
				isoFilters.push( filters[ prop ] )
			}
			// console.log(filters);
			var selector = isoFilters.join('');
			$container.isotope({ filter: selector });
			return false;
		});
		$('.pro-tag>li:first').addClass('active');
		$('.pro-tag>li').click(function() {
			var $this = $(this);
			var group = $this.parent().data('filter-group');
			filters[ group ] = $this.data('filter-value'); 
			var isoFilters = [];
			for ( var prop in filters ) {
				isoFilters.push( filters[ prop ] )
			}
			// console.log(filters);
			var selector = isoFilters.join('');
			$container.isotope({ filter: selector });
			return false;
		});

	});
	$(document).on( 'shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
		$('.pro-tag li:first-child').trigger('click')  
		$('.pro-tag li:first-child').addClass('active')
	})
</script>