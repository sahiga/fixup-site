<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when there is no home.php file 
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

<!--Display front page layout-->
<?php if ( is_front_page() ) {
<?php query_posts('pagename=hero'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section id="hero">
	<div class="container">
		<div class="short">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div><!--/.short-->
	</div><!--/.container-->
</section><!--/#hero-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=watch'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="watch">
	<div class="container">
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#watch-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=points'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="points">
	<div class="container">
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#points-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=flowchart'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="flowchart">
	<div class="container">
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#flowchart-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=solution'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="solution">
	<div class="container">
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#solution-->	
<?php endwhile; wp_reset_query(); ?>

} 

<!--Display about page layout-->
elseif ( is_page( 'about' ) || '21' == $post->post_parent ) {
<?php query_posts('pagename=summary'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="summary">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#summary-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=grid'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="grid">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<div id="grid-container">
			<?php the_content(); ?>
		</div><!--/#grid-container-->
	</div><!--/.container-->
</section><!--/#grid-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=contact'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="contact">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#contact-->
<?php endwhile; wp_reset_query(); ?>

<?php query_posts('pagename=faq'); if ( have_posts() ) : while ( have_posts() ) : the_posts(); ?>
<section id="faq">
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#faq-->
<?php endwhile; wp_reset_query(); ?>

}

<!--Default to full page layout-->
else {
<section id="full">
	<div class="container">
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
	</div><!--/.container-->
</section><!--/#full-->
} ?>

<?php get_footer(); ?>