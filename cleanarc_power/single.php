<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="singleBlog">
		<div class="container">
			<div class="title">
				<?php the_title(); ?>
			</div>
			<div class="metaDat">
				<span> <i class="fa fa-user"></i><?php echo get_the_author(); ?></span>
				<span> <i class="fa fa-clock"></i><?php echo get_the_date(); ?></span>
			</div>
			<div class="contentCOntainersingleBlog">
				<?php the_content(); ?>
			</div>
			<div class="bottomSingleBlogPost">
				<div class="postedByandShare">
					<p>posted by <?php echo get_the_author(); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>