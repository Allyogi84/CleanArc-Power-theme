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
				<div class="contact-link">
					<a href="tel:<?php the_field('phone_number', 'options'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> Call: <?php the_field('phone_number', 'options'); ?></a>
					<a href="mailto:<?php the_field('email_address', 'options'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Email: <?php the_field('email_address', 'options'); ?></a>
				</div>
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
							'menu_class'=> 'sf-menu', 
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

		</div>

		</header>

<div class="mainCLass">
	


