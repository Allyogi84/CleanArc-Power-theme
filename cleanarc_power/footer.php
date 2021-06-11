<?php wp_footer(); ?>

<!-- Newsletter Section (NSS) -->
<section class="nls-section">
    <div class="container">
        <div class="nls-content">
            <div class="nss-info">
                <h3><?php the_field('newsheading', 'options'); ?></h3>
                <p><?php the_field('newscontent', 'options'); ?></p>
            </div>

            <div class="nss-form">
                <div class="input-group newsletter-form">
                    <?php echo do_shortcode('[contact-form-7 id="147" title="News Letter"]'); ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Site Custom Footer -->
<footer class="custom-footer">
    <div class="container">
        <div class="custom-footer-content row">
            <div class="col-md-5">
                <img class="footer-logo" src="https://cdn11.bigcommerce.com/s-sz56wcu/images/stencil/250x100/cleanarc_power_logo_1610492906__34941.original.png" alt="">
                <p class="footer-about">
                    <?php the_field('content_under_logo', 'options'); ?>
                </p>
                <ul class="footer-social-link">
                    <?php if( have_rows('social_icons', 'options') ): while( have_rows('social_icons', 'options') ) : the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field('linkdata', 'options'); ?>">
                                <i class="fa <?php the_sub_field('iconData'); ?>"></i>
                            </a>
                        </li>
                    <?php endwhile; else : endif; ?>
                </ul>
            </div>
            <div class="col-md-2">
                <h6><?php the_field('information_menu','options'); ?></h6>
                <?php
                wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'container' => 'ul',
                    'container_class' => 'footer-menu', 
                    'menu_class'=> 'footer-menu', 
                ) ); 
                ?>
            </div>
            <div class="col-md-2">
                <h6>Application</h6>
                <ul class="footer-menu">
                    <?php $termchildren = get_terms( 'product_cat',  array('parent' => 0) );?>
                    <?php foreach($termchildren as $category) {  $term_link = get_term_link( $category ); ?>
                        <?php $yes = get_field('is_featured', 'product_cat_'.$category->term_id); ?>
                        <?php if ($yes !== 'Yes') { ?>
                            <li> <a href="<?php echo $term_link; ?>"> <?php echo $category->name; ?> </a> </li>
                        <?php } } ?>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6>Contact Us</h6>
                    <div class="footer-contact">
                        <!-- <a><?php// the_field('address','options'); ?></a>
                        <a href="tel:<?php// the_field('phone_number', 'options'); ?>">Call: <?php// the_field('phone_number', 'options'); ?></a> -->
                        <a href="mailto:<?php the_field('email_address', 'options'); ?>">Email: <?php the_field('email_address', 'options'); ?></a>
                    </div>
                </div>
            </div>
            <div class="copyrights">
                <p><?php the_field('copy_right', 'options'); ?></p>
                <ul>
                    <li><a href="<?php echo site_url(); ?>/shipping-returns-privacy-policy">Privacy Policy</a></li>
                    <li><a href="<?php echo site_url(); ?>/jhon/shipping-returns-privacy-policy/">Terms of use</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>  -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>  
    <!--    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script> -->

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/yesh.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/hoverIntent.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/libs/superfish.js"></script>

    <script>
      $(window).scroll(function () {
        var $scroll = $(window).scrollTop();
        var $navbar = $(".sch-header");
        if ($scroll > 50) {
            $navbar.addClass("scroll-nav");
        } else {
            $navbar.removeClass("scroll-nav");
        }
    });
$('.breadcrumb span:nth-last-child(2) a').click( function(e) {
	e.preventDefault();
});
</script>

</div>
</body>

</html>


