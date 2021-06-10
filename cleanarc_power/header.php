<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- addding the cdn's -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
	integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />


	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/media.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/superfishg.css"> 
		
</head>
<?php wp_head(); ?>

<body <?php body_class(); ?>> 
	<!-- Top Bar -->
	<div class="topbar">
		<div class="container">
			<div class="topbar-content">
<!-- 				<div class="contact-link">
					<a href="tel:<?php// the_field('phone_number', 'options'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> Call: <?php// the_field('phone_number', 'options'); ?></a>
					<a href="mailto:<?php// the_field('email_address', 'options'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <?php// the_field('email_address', 'options'); ?></a>
				</div> -->
				<ul class="social-link">
					<?php if( have_rows('social_icons', 'options') ): while( have_rows('social_icons', 'options') ) : the_row(); ?>
						<li>
							<a href="<?php the_sub_field('linkdata', 'options'); ?>">
								<i class="fa <?php the_sub_field('iconData'); ?>"></i>
							</a>
						</li>
					<?php endwhile; else : endif; ?>
				</ul>
			</div>
		</div>
	</div>

	<!-- Site Custom Header -->
	<header class="sch-header">
		<?php if ( !is_home() && ! is_front_page() ) { ?> 
			<!-- <div class="allCatsLink">
				<a href="#">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div> -->
		<?php } ?>
		<div class="container">
			<div class="sch-content">
				<div class="sch-logo">
					<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
					<a href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>"></a>
				</div>

				<div class="sch-menu">
					<nav>
						<?php
						wp_nav_menu( array( 
							'theme_location' => 'header-menu', 
							'container' => 'ul',
							'container_class' => 'mainMenu', 
							'menu_class'=> 'main-menu', 
						) ); 
						?>
					</nav>
					<ul class="functional-menu">
						<li><a href="<?php echo site_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png"></a></li>
						<li><a href="<?php echo site_url(); ?>/my-account/"><img src="<?php echo get_template_directory_uri(); ?>/images/account.png"></a></li>						
					</ul>
					<div class="SearchContainer">
						<?php get_search_form(); ?>
					</div>
					<div class="nav-toggler">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
			<?php if ( !is_home() && ! is_front_page() ) { ?> 

				<div class="allcatesMenu">
					<div class="closeIconSideBar"><i class="fa fa-close"></i></div>
					<div class="headingAllCategories">
						<h5><i class="fa fa-diamond"></i> ALL Categories</h5>
					</div>
					<?php $termchildren = get_terms( 'product_cat' );?>
					<ul>
						<?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
							<li class="oistItemInner">
								<a href="<?php echo $term_link; ?>">
									<?php echo $category->name; ?>
								</a>
							</li>
						<?php } ?>

					</ul>
				</div>
			<?php } ?>
		</div>

		<div class="allCategoryMenunew">
			<div class="container">
				<div class="neewMenuCOntainer">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/02/Screenshot-2021-02-14-at-4.53.21-AM.png">
					<span>All Categories </span>
					<ul>
						<?php $termchildren = get_terms( 'product_cat',  array('parent' => 0) );?>
						<?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
							<?php $yes = get_field('is_featured', 'product_cat_'.$category->term_id); ?>
								<?php if($category->name === "Charging Stations"){ ?>
								<?php } else {?>
								<li>
									<a href="<?php echo $term_link; ?>">
										<?php  
											$idcat = $category->term_id;
											$thumbnail_id = get_woocommerce_term_meta( $idcat, 'thumbnail_id', true );
											$image = wp_get_attachment_url( $thumbnail_id );
										?>
										<h6><?php echo '<img src="'.$image.'" alt="" />'; ?><?php echo $category->name; ?></h6>
									</a>
								</li>
							<?php } }?>
						</ul>
					</div>
				</div>
			</div>
		</header>

<div class="mainCLass">
	


