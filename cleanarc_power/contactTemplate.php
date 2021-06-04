<?php /* Template Name: Contact Page */ get_header(); ?>
    <section class="getting-started-banner">
        <div class="container">
            <div class="about-banner-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about-banner.png" alt="">
            </div>
            <div class="about-text con-text">
                <h3><strong><?php the_title(); ?></strong></h3>
                <?php the_content(); ?>
            </div>
            <div class="custom-contact-form">
                <div class="row">
                    <div class="col-md-8">
                        <?php echo do_shortcode('[contact-form-7 id="151" title="Contact Form"]'); ?>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info-col">
                            <ul>
                                <li>
                                    <a href="mailto:<?php the_field('email_address', 'options'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field('email_address', 'options'); ?></a>
                                </li>
                                <li><a href="tel:<?php the_field('phone_number', 'options'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('phone_number', 'options'); ?></a>
                                </li>
                                <li>
                                    <h6>Chat With Us:</h6><img src="<?php echo get_template_directory_uri(); ?>/assets/img/live-help.png" alt="live-help">
                                </li>
                                <li>BUSINESS HOURS:<br>Monday-Friday,10:00AM-4:00PM (Eastern)</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>