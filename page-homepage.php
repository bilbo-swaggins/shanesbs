<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">
				<div class="banner col-sm-12 clearfix">

						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<!-- Start Slider -->
										<?php if(get_field('home_page_banner')); ?>
										<?php while(the_repeater_field('home_page_banner')) :
											$image = get_sub_field('slider_image');
											$caption = get_sub_field('slider_caption');
											$slide = wp_get_attachment_image_src( $image, $caption, 'home_page_banner');
											$alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
											$active = get_sub_field('active');
										?>
										<div class="item <?php if($active == 1){echo 'active';}; ?>">
											<img src="<?php echo $slide[0]; ?>" alt="<?php echo $alt; ?>">
											<div class="carousel-caption">
												<?php echo $caption; ?>
											</div>
										</div>
									<?php endwhile; ?>

									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>

						</div>

				</div>

				<!-- End Slider -->
				<div id="main" class="col-sm-12 clearfix" role="main">

					<Section id="info" class="row">

						<div class="col-sm-4 calendar-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/Calendar-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Calendar</h3>
							<p class="info-text">
							<?php

								$pageCalendar = get_page_by_title('Calendar');
								echo $pageCalendar->post_excerpt;

							?>

							</p>
								<div class="col-md-12 text-center">
									<a  href="<?php echo get_page_link($pageCalendar); ?>" id="singlebutton" name="singlebutton" class="btn btn-primary">Calendar</a>
								</div>
							</div>

						<div class="col-sm-4 products-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/products-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Products</h3>
							<p class="info-text">
							<?php

								$pageProducts = get_page_by_title('Products');
								echo $pageProducts->post_excerpt;

							?>
							</p>
							<div class="col-md-12 text-center">
								<a href="<?php echo get_page_link($pageProducts);?>" id="singlebutton" name="singlebutton" class="btn btn-primary">Products</a>
							</div>
						</div>

						<div class="col-sm-4 calendar-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/open-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Store Details</h3>
							<p class="info-text">
							Hours: <br/>
							Monday-Friday: 11-7 <br />
							Saturday-Sunday: 10-6 <br />
							<br />
							Phone: (425) 277-3717

							</p>
						</div>

					</section>
					<!-- End Info -->
					<section class="row">
					<h2>New Products</h2>
										<?php
				          	$args = array(
								            'post_type' => 'products',
								            'posts_per_page' => 3,
								            'orderby' => 'date',
								            'order' => 'DESC'

										);
										$loop = new WP_Query( $args );
										$i = 0;
										while ( $loop->have_posts() ) : $loop->the_post(); $i++;
										?>

										<div class="col-sm-6 col-md-4 margin-bottom">
											<div class="product">
												<?php echo get_the_post_thumbnail( $post->ID, 'medium', array( 'class' => 'img-responsive center-block' ) ); ?>
												<div class="product-caption">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												</div>
											</div>
										</div>
										<?php if($i==2){echo '<div class="clearfix visible-sm-block"></div>';}; ?>
										<?php endwhile; ?>
					<!-- End New Products -->
				</section>



				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
