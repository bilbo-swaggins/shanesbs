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

				<section class="row products">

					<div class="col-sm-6 col-md-4 product-item">
						<img src="<?php bloginfo('template_directory'); ?>/images/magic.png" alt="Magic the Gathering Products" class="img-responsive margin-bottom">

						<ul>
						<?php
                $args = array(
                    'post_type' => 'products',
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'order' => 'DESC',
										'tax_query' => array(
											array(
												'taxonomy' => 'products_categories',
												'field' => 'slug',
												'terms' => array('magic'),
												'include_children' => false
											)
										)
									);
								 $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/yugioh.png" alt="Yugioh Trading Cards" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('yugioh'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/vanguard.png" alt="Vanguard Trading Cards" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('vanguard'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/pokemon.png" alt="Pokemon Trading Cards" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('pokemon'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/sports.png" alt="Sports Cards and Collectables" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('sports'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/bgs.png" alt="Board Games" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('bg'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>
					<div class="col-sm-6 col-md-4">
						<img src="<?php bloginfo('template_directory'); ?>/images/gs.png" alt="Gaming Supplies" class="img-responsive margin-bottom">
						<ul>
							<?php
									$args = array(
											'post_type' => 'products',
											'posts_per_page' => 10,
											'orderby' => 'date',
											'order' => 'DESC',
											'tax_query' => array(
												array(
													'taxonomy' => 'products_categories',
													'field' => 'slug',
													'terms' => array('gs'),
													'include_children' => false
												)
											)
										);
									$loop = new WP_Query( $args );
									while ( $loop->have_posts() ) : $loop->the_post(); ?>
													<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>

						</ul>
					</div>

				</section>
				<!-- End Product Row -->
			</div> <!-- end #content -->

<?php get_footer(); ?>
