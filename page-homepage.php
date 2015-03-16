<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">
				<div class="banner col-sm-12 clearfix">

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->

							<!-- Wrapper for slides -->

							<!-- <?php if( get_field('photo_slider')) : ?>
					<?php while( the_repeater_field('photo_slider')) :
						$image = get_sub_field('slider_image');
						$caption = get_sub_field('slider_caption');
						$align = get_sub_field('caption_align');
						$slide = wp_get_attachment_image_src( $image, $caption, 'photo_slider' );
						$alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
						?>
						<ul>
						<li class="item">
							<img src="<?php echo $slide[0]; ?>" alt="<?php echo $alt; ?>" />
							<h3 class="banner-caption <?php if( $align == "top left" ) { echo 'top-left'; } elseif( $align == "top right" ) { echo 'top-right'; } elseif( $align == "bottom left" ) { echo 'bottom-left'; } else { echo 'bottom-right'; }; ?>"><?php echo $caption; ?></h3>
						</li>
						</ul>
						<?php endwhile; ?>

				<?php endif; ?> -->
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
				<!-- End Slider -->
				<div id="main" class="col-sm-12 clearfix" role="main">


					<div id="info" class="col-lg-12 clearfix">

						<div class="col-sm-4 calendar-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/Calendar-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Calendar</h3>
							<p class="info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
								<div class="col-md-12 text-center">
									<button id="singlebutton" name="singlebutton" class="btn btn-primary">Calendar</button>
								</div>
							</div>

						<div class="col-sm-4 products-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/products-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Products</h3>
							<p class="info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
							<div class="col-md-12 text-center">
								<button id="singlebutton" name="singlebutton" class="btn btn-primary">Products</button>
							</div>
						</div>

						<div class="col-sm-4 calendar-info info-block">
							<img src="<?php bloginfo('template_directory'); ?>/images/calendar-icon.png" class="img-responsive center-block" alt="Shanes Big League Calendar"/>
							<h3 class="text-center">Contact</h3>
							<p class="info-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
							<div class="col-md-12 text-center">
								<button id="singlebutton" name="singlebutton" class="btn btn-primary">Contact</button>
							</div>
						</div>

					</div>
					<!-- End Info -->
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
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


						<section class="row post_content">

							<div class="col-sm-8">

								<?php the_content(); ?>

							</div>

							<?php get_sidebar('sidebar2'); // sidebar 2 ?>

						</section> <!-- end article header -->


					</article> <!-- end article -->

					<?php
						// No comments on homepage
						//comments_template();
					?>

					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<?php //get_sidebar(); // sidebar 1 ?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
