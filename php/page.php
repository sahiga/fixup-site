<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */

get_header();

// Display about page layout
if ( is_page( 'about' ) || '21' == $post->post_parent ):
	// Query for summary section
	$query6 = new WP_Query( 'pagename=summary' );
	while ( $query6->have_posts() ) : $query6->the_post(); ?>
		<section id="summary">
			<div class="container">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!--/.container-->
		</section><!--/#summary-->
	<?php endwhile; wp_reset_query(); wp_reset_postdata();

	// Query for grid
	$query7 = new WP_Query( 'pagename=grid' );
	while ( $query7->have_posts() ) : $query7->the_post(); ?>
		<section id="grid">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<div id="grid-container">
					<?php the_content(); ?>
				</div><!--/#grid-container-->
			</div><!--/.container-->
		</section><!--/#grid-->
	<?php endwhile; wp_reset_query(); wp_reset_postdata();

	// Query for contact section
	$query8 = new WP_Query( 'pagename=contact' );
	while ( $query8->have_posts() ) : $query8->the_post(); ?>
		<section id="contact">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!--/.container-->
		</section><!--/#contact-->
	<?php endwhile; wp_reset_query(); wp_reset_postdata();

	// Query for FAQ section
	$query9 = new WP_Query( 'pagename=faq' );
	while ( $query9->have_posts() ) : $query9->the_post(); ?>
		<section id="faq">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!--/.container-->
		</section><!--/#faq-->
	<?php endwhile; wp_reset_query(); wp_reset_postdata();


// Default to full page layout
else:
	while ( have_posts() ) : the_post(); ?>
		<section id="full">
			<div class="container">
				<?php the_content(); ?>
			</div><!--/.container-->
		</section><!--/#full-->
<?php endwhile; endif; ?>

<?php get_footer(); ?>