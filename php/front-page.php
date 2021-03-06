<?php
/*
 This is the front page template.
 */
 
get_header(); 

// Query for hero section
$query1 = new WP_Query( 'pagename=hero' );
while ( $query1->have_posts() ) : $query1->the_post(); ?>
	<section id="hero">
		<div class="container">
			<div class="short">
				<?php the_content(); ?>
			</div><!--/.short-->
		</div><!--/.container-->
	</section><!--/#hero-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php 
// Query for video section
$query2 = new WP_Query( 'pagename=watch' );
while ( $query2->have_posts() ) : $query2->the_post(); ?>
	<section id="watch">
		<div class="container">
			<?php the_content(); ?>
		</div><!--/.container-->
	</section><!--/#watch-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php
// Query for three points section
$query3 = new WP_Query( 'pagename=points' );
while ( $query3->have_posts() ) : $query3->the_post(); ?>
	<section id="points">
		<div class="container">
			<?php the_content(); ?>
		</div><!--/.container-->
	</section><!--/#points-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php
// Query for grid section
$query4 = new WP_Query( 'pagename=grid' );
while ( $query4->have_posts() ) : $query4->the_post(); ?>
<section id="grid">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<div id="grid-container">
			<?php the_content(); ?>
		</div><!--/#grid-container-->
	</div><!--/.container-->
</section><!--/#grid-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php get_footer(); ?>