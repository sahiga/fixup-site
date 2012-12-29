<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<!--Display post-->
<article class="post">
	<div class="container">
		<div class="post-main">
			<h2 class="post-title"><?php the_title(); ?></h2>
			<p class="post-meta"><time datetime="<?php the_time( 'm-d-Y' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php get_the_author(); ?> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>
			<div class="entry">
<?php the_content(); ?>
			</div><!--/.entry-->
			<div class="author">
				<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h3>About <?php echo get_the_author() ; ?></h3>
				<?php the_author_meta( 'description' ); ?>
			</div><!--/.author-->
<?php endif; ?>

	<hr />

<!--Display comments-->
			<div class="comments">
<?php comments_template( '', true ); ?>
			</div><!--/.comments-->
		</div><!--/.post-main-->
	</div><!--/.container-->
</article><!--/.post-->

<!--Display comment and share icons-->
<div class="comment-icons">
	<p class="count"><?php comments_number( '0', '1', '%' ); ?></p>
	<hr />
	<a href="#"><img src="<?php get_template_directory_uri() . 'img/blog-twitter.png' ?>" class="social" alt="Share on Twitter" /></a>
	<a href="#"><img src="<?php get_template_directory_uri() . 'img/blog-facebook.png' ?>" class="social" alt="Share on Facebook" /></a>
	<a href="#"><img src="<?php get_template_directory_uri() . 'img/blog-google.png' ?>" class="social" alt="Share on Google+" /></a>	
</div><!--/.comment-icons-->
	

<?php endwhile; ?>

<?php get_footer(); ?>