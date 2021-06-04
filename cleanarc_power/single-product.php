<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); global $product; ?>
	<?php //var_dump($product); ?>
	<div class="productWrapper">
		<div class="container">
			<div class="mainRowContainer">
				<div class="row">
					<div class="col-md-6">
						<div class="sliderCOntainerProductSingle">
							<div class="slideInnerContainer">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								<?php $product_id = $product->get_id(); $product = new WC_product($product_id); $attachment_ids = $product->get_gallery_image_ids();
								foreach( $attachment_ids as $attachment_id ) { ?>
									<img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>">
								<?php } ?>
							</div>
						</div>
						<div class="sliderThumbnails">
							<div class="slideInnerThumbnail">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>">
								<?php $product_id = $product->get_id(); $product = new WC_product($product_id); $attachment_ids = $product->get_gallery_image_ids();
								foreach( $attachment_ids as $attachment_id ) { ?>
									<img src="<?php echo $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>">
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="contentCOntainerSingleProduc">
							<div class="getCats">
								<?php echo $product->get_categories(); ?>
							</div>
							<div class="nameContainerProduct">
								<h2><?php echo the_title(); ?></h2>
							</div>
							<div class="priceHtml">
								<?php echo $product->get_price_html(); ?>
							</div>
							<div class="shortDescription">
								<?php echo $product->get_short_description(); ?>
							</div>
							<hr>
							<div class="quantitys">
								<?php if ( $product->is_in_stock() ) : ?>
									<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
									<span class="quantityWrapper">Quantity:	</span>
									<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
										<?php do_action( 'woocommerce_before_add_to_cart_button' ); 
										do_action( 'woocommerce_before_add_to_cart_quantity' );
										woocommerce_quantity_input(
											array(
												'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
												'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
											'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok. 
										)
										);
										do_action( 'woocommerce_after_add_to_cart_quantity' ); ?>
										<div class="addtoCartBUtton">
											<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt">
												<?php echo esc_html( $product->single_add_to_cart_text() ); ?>
											</button>
										</div>
										<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
									</form>
									<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
								<?php endif; ?>
							</div>
							<div class="wishlistContainer">
								<?php echo do_shortcode('[yith_wcwl_add_to_wishlist]'); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tabsContaienrDescriptionAndReview">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="reveiws-tab" data-toggle="tab" href="#reveiws" role="tab" aria-controls="reveiws" aria-selected="false">reveiws</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
							<?php echo $product->get_description(); ?>
						</div>
						<div class="tab-pane fade" id="reveiws" role="tabpanel" aria-labelledby="reveiws-tab">
							<div id="reviews">
								<div id="comments">
									<h2><?php
									if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' && ( $count = $product->get_rating_count() ) )
										printf( _n( '%s review for %s', '%s reviews for %s', $count, 'woocommerce' ), $count, get_the_title() );
									else
										_e( 'Reviews', 'woocommerce' );
									?></h2>
									<?php 
									global $product;
									$id = $product->get_id();

									echo do_shortcode( '[product_reviews id="' . $id . '"]');
									?>
								</div>

								<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->id ) ) : ?>

								<div id="review_form_wrapper">
									<div id="review_form">
										<?php
										$commenter = wp_get_current_commenter();

										$comment_form = array(
											'title_reply'          => have_comments() ? __( 'Add a review', 'woocommerce' ) : __( 'Be the first to review', 'woocommerce' ) . ' &ldquo;' . get_the_title() . '&rdquo;',
											'title_reply_to'       => __( 'Leave a Reply to %s', 'woocommerce' ),
											'comment_notes_before' => '',
											'comment_notes_after'  => '',
											'fields'               => array(
												'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name', 'woocommerce' ) . ' <span class="required">*</span></label> ' .
												'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" /></p>',
												'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email', 'woocommerce' ) . ' <span class="required">*</span></label> ' .
												'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" /></p>',
											),
											'label_submit'  => __( 'Submit', 'woocommerce' ),
											'logged_in_as'  => '',
											'comment_field' => ''
										);

										if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
											$comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . __( 'Your Rating', 'woocommerce' ) .'</label><select name="rating" id="rating">
											<option value="">' . __( 'Rate&hellip;', 'woocommerce' ) . '</option>
											<option value="5">' . __( 'Perfect', 'woocommerce' ) . '</option>
											<option value="4">' . __( 'Good', 'woocommerce' ) . '</option>
											<option value="3">' . __( 'Average', 'woocommerce' ) . '</option>
											<option value="2">' . __( 'Not that bad', 'woocommerce' ) . '</option>
											<option value="1">' . __( 'Very Poor', 'woocommerce' ) . '</option>
											</select></p>';
										}

										$comment_form['comment_field'] .= '<p class="comment-form-comment"><label for="comment">' . __( 'Your Review', 'woocommerce' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';

										comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
										?>
									</div>
								</div>

								<?php else : ?>

									<p class="woocommerce-verification-required"><?php _e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>

								<?php endif; ?>

								<div class="clear"></div>
							</div>
						</div>
					</div>
					<hr>
				</div>
			</div>
		</div>
	<?php endwhile; ?>

	<div class="relatedProdyct">
		<div class="container">
			<br>
			<br>
			<h2 class="text-center">Related Products</h2>
			<br>
			<br>
			<div class="row">
				<?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); $loop = new WP_Query( $args );  while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="col-md-3">
					<div class="productWrapperRealted">
						<div class="imagecContainer">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
						</div>
						<div class="contentCOntainerRelatedProduct">
							<div class="titleCOntianer">
								<?php the_title();  ?>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; wp_reset_postdata();  ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>