<?php /*Template Name: Home Page */  get_header(); ?>

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
<div class="catsContainer" id="services">
	<div class="container">
		<div class="headingContainer">
			<h2><?php the_field('headingCategory'); ?></h2>
		</div>
		<div class="catContainerInnenr">
			<div class="row">

<?php 
if( have_rows('icon_section') ): while( have_rows('icon_section') ) : the_row(); 

$term = get_sub_field('category_title');
$image = get_sub_field('image');
	?>

						<div class="col">
							<div class="innerContainerProdct">
								<a href="<?php echo esc_url( get_term_link( $term ) ); ?>">
									<div class="imaheWrapper">
<?php 
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
									</div>
<?php 
if( $term ): ?>
    <h6><?php echo esc_html( $term->name ); ?></h6>
<?php endif; ?>

									
								
								</a>
							</div>	
						</div>
<?php endwhile;  endif; ?>

				</div>
			</div>
		</div>
	</div>

	<div class="sliderdevelopment">
		<div class="container">
			<div class="row home-row">
				<div class="col">
					<div class="sliderCno">
						<?php if( have_rows('slider_development') ): while( have_rows('slider_development') ) : the_row(); ?>
							<div class="contentLeftSideslider">
								<h2><?php the_sub_field('headingSlider') ?></h2>
								<p><?php the_sub_field('contentSlider') ?></p>
								<ul>
									<?php if( have_rows('list_item') ): while( have_rows('list_item') ) : the_row(); ?>
										<li><img src="<?php echo get_template_directory_uri(); ?>/images/yesh.png"><?php the_sub_field('listSlider') ?></li>
									<?php endwhile; else : endif; ?>
								</ul>
								<a href="<?php the_sub_field('button_link') ?>"><?php the_sub_field('button_text') ?></a>
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>
				<div class="col">
					<div class="contentRightSideslider">
						<?php if( have_rows('slider_development') ): while( have_rows('slider_development') ) : the_row(); ?>
							<div class="sliderInnerRIghtImage">
								<img src="<?php the_sub_field('imageSlider') ?>">
							</div>
						<?php endwhile; else : endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Feature Categories Sectioin start  -->	
	<div class="fetureCars" id="featurecat">
		<div class="container">
			<div class="headingFetureCat">
				<h2>Featured Categories</h2>
			</div>
			<div class="sliderCOntainerFetureCars">
				<div class="fetureCatContainerInnenr">
					<div class="sliderFeatureProducts">
				<?php $termchildren = get_terms( 'bigcommerce_category',  array('parent' => 0) );?>
				<?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );  ?>
					<?php $yes = get_field('is_featured', 'product_cat_'.$category->term_id)
 ?>
						<div class="col">
							<div class="innerContainerProdct">
								<a href="<?php echo $term_link; ?>">
									<div class="imaheWrapper">
										<img src="<?php the_field('imageasd', 'product_cat_'.$category->term_id); ?>">
									</div>
									<h6><?php echo $category->name; ?></h6>
									<span><?php// echo $category->term_id; ?></span>
									<span><?php// echo $category->description; ?></span>
									<span><?php// $image = wp_get_attachment_url( $thumbnail_id );  ?>
									<img src='<?php// echo $image; ?>' alt=''  /></span>
								</a>
							</div>	
						</div>
					<?php }  ?>

					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Feature Producdt Sectioin start  -->
			<div class="featureProduct" id="featurepro">
				<div class="container">
					<div class="hedaing">
						<h2><?php the_field('Fetureheading'); ?></h2>
					</div>
					<div class="sliderContainerProduct">
		
				</div>
			</div>
		</div>


		<div class="powerWorld">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="contentLeftContainerPower">
							<h2><?php the_field('powerHeading'); ?></h2>
							<p><?php the_field('powerContent'); ?></p>
							<a href="<?php the_field('button_linkPower'); ?>"><?php the_field('button_textPower'); ?></a>
						</div>
					</div>
					<div class="col-md-6">
						<img src="<?php the_field('imaegPower'); ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="blog">
			<div class="container">
				<div class="headingBLog">
					<h2>BLOG & ARTICLES <a href="<?php echo site_url(); ?>/blog">All News</a></h2>
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
	<div class="securoty" style="background-image: url('<?php the_field('securityImage'); ?>');">
		<div class="container">
			<div class="contentSecurity">
				<h2><?php the_field('securityheading'); ?></h2>
				<h6><?php the_field('securitySub_heading'); ?></h6>
				<p><?php the_field('securityContent'); ?></p>
			</div>
		</div>
	</div>





	<div class="yoSectionNew">
		<div class="container">
			<div class="followUs">
				<h2>Follow Us</h2>
				<ul class="socialItemsCopy">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>






	<?php get_footer(); ?>