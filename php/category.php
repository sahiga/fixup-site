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

<?php if ( have_posts() ): ?>
<h1>Company Blog <?php echo single_cat_title( '', false ); ?></h2>
<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article class="post">
			<div class="container">
				<div class="post-main">
					<h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class="post-meta"><time datetime="<?php the_time( 'm-d-Y' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php get_the_author(); ?> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></p>
					<div class="entry">
<?php the_content(); ?>
					</div><!--/.entry-->
					<hr />
				</div><!--/.post-main-->
			</div><!--/.container-->
		</article><!--/.post-->
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>

<?php get_footer(); ?>