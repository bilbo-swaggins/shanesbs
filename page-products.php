<?php
/*
Template Name: Products
*/
?>

<?php get_header(); ?>

			<div id="content" class="clearfix row">

				<div id="main" class="col col-lg-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						<header>

							<div class="page-header"><h1><?php the_title(); ?></h1></div>

						</header> <!-- end article header -->

						<section class="post_content">
							<?php the_content(); ?>

						</section> <!-- end article section -->


					</article> <!-- end article -->


					<?php endwhile; ?>

					<?php else : ?>

					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					</article>

					<?php endif; ?>

				</div> <!-- end #main -->

				<div class="row">
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/magic.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/yugioh.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/vanguard.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/pokemon.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/bgs.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/gs.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">
						<ul>
							<li><a href="#">Khans of Tarkir</a></li>
							<li><a href="#">Dragons of Tarkir</a></li>
							<li><a href="#">Fate Reforged</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
							<li><a href="#">Commander 2014</a></li>
						</ul>
					</div>

				</div> <!-- end products row -->
			</div> <!-- end #content -->

<?php get_footer(); ?>
