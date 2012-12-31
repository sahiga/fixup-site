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
				<h1><?php the_title(); ?></h1>
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
// Query for browse-connect-fix section
$query4 = new WP_Query( 'pagename=flowchart' );
while ( $query4->have_posts() ) : $query4->the_post(); ?>
	<section id="flowchart">
		<div class="container">
			<?php the_content(); ?>
		</div><!--/.container-->
	</section><!--/#flowchart-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php
// Query for problem-solution section
$query5 = new WP_Query( 'pagename=solution' );
while ( $query5->have_posts() ) : $query5->the_post(); ?>
	<section id="solution">
		<div class="container">
			<?php the_content(); ?>
		</div><!--/.container-->
	</section><!--/#solution-->
<?php endwhile; wp_reset_query(); wp_reset_postdata(); ?>

<?php get_footer(); ?>