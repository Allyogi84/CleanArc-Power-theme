<?php



get_header(); ?>

<div class="height"></div>

<section class="news padding-main">

    <div class="container">
        <?php if(have_posts()) : ?>
                    <h2>Search Result For: <?php the_search_query(); ?></h2>
        <div class="row">

				       <?php while (have_posts()) : the_post(); ?>

				       	

                <div class="col-md-3">

                    
                    <a class="search-link" href="<?php the_permalink() ?>">
                        <div class="news-img">

                            <?php the_post_thumbnail('medium'); ?>

                        </div>

                        <div class="news-text">

                            <h5 class="font600 orange">

                                    <?php the_title();?>

                            </h5>
                           
                            </a>


                        </div>

                </div>

                   

                   <?php endwhile;    
                   ?>
                   </div>
                   <?php
					else :
                        echo '
                        <div class="no-content"> 
                            <h3>Ooopss, looks like nothing matches your result.</h3>
                        </div>';
                    endif; 

					 wp_reset_postdata();  // Don't forget to add this

					?>

               


            

        

    </div>

</section>



<?php get_footer(); ?>