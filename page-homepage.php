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
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<img src="<?php bloginfo('template_directory'); ?>/images/GtrialSD1.jpg" alt="Vanguard Gtrial Starter Decks">
									<!-- <div class="carousel-caption">
										...
									</div> -->
								</div>

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

					<div class="row new-products">

						<div class="col-sm-6 col-md-4 first-product margin-bottom">
							<div class="product">
								<img src="<?php bloginfo('template_directory'); ?>/images/fate-thumb.png" alt="Magic the gathering Fate Reforged" class="img-responsive center-block" />
								<div class="product-caption">
									<a href="#">This is the caption</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-4 margin-bottom">
							<div class="product">
								<img src="<?php bloginfo('template_directory'); ?>/images/yugioh-1-thumb.png" alt="Magic the gathering Fate Reforged" class="img-responsive center-block" />
								<div class="product-caption">
									<a href="#">This is the caption</a>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-sm-6 col-md-4 margin-bottom">
							<div class="product">
								<img src="<?php bloginfo('template_directory'); ?>/images/vanguard-1-thumb.png" alt="Magic the gathering Fate Reforged" class="img-responsive center-block" />
								<div class="product-caption">
									<a href="#">This is the caption</a>
								</div>
							</div>
						</div>
					</div>
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
