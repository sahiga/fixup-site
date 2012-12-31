<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

		<article class="post">
			<div class="container">
<?php if ( have_posts() ): ?>
<h1 class="post-title"><a href="#"><?php echo single_cat_title( 'FixUp Company ', false ); ?></h1>
<?php while ( have_posts() ) : the_post(); ?>
				<div class="post-main">
					<h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class="post-meta"><time datetime="<?php the_time( 'm-d-Y' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php get_the_author(); ?> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>
					<div class="entry">
<?php the_content(); ?>
					</div><!--/.entry-->
					<hr />
				</div><!--/.post-main-->
<?php endwhile; ?>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( 'FixUp Company ', false ); ?></h2>
<?php endif; ?>


<!--Display comment and share icons-->
<div class="comment-icons">
	<p class="count"><?php comments_number( '0', '1', '%' ); ?></p>
	<hr />
	<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/blog-twitter.png" class="social" alt="Share on Twitter" /></a>
	<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/blog-facebook.png" class="social" alt="Share on Facebook" /></a>
	<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/blog-google.png" class="social" alt="Share on Google+" /></a>	
</div><!--/.comment-icons-->


			</div><!--/.container-->
		</article><!--/.post-->

<?php get_footer(); ?>