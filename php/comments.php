<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to starkers_comment() which is
 * located in the functions.php file.
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
	<p>This post is password protected. Enter the password to view any comments</p>
</div>

	<?php
			/* Stop the rest of comments.php from being processed,
			 * but don't kill the script entirely -- we still have
			 * to fully load the template.
			 */
			return;
		endif;
	?>
	
	
	<div class="comment-icons">
		<p class="count"><?php comments_number(); ?></a>
		<hr />
		<a href="#"><img src="img/blog-twitter.png" class="social" alt="Share on Twitter" /></a>
		<a href="http://www.facebook.com/sharer.php?u=http://tryfixup.com"><img src="img/blog-facebook.png" class="social" alt="Share on Facebook" /></a>
		<a href="#"><img src="img/blog-google.png" class="social" alt="Share on Google+" /></a>
	</div><!--/.comment-icons-->

	<?php if ( have_comments() ) : ?>
	
	<ol>
		<?php wp_list_comments( array( 'callback' => 'starkers_comment' ) ); ?>
	</ol>

	<?php
		/* If there are no comments and comments are closed, let's leave a little note, shall we?
		 * But we don't want the note on pages or post types that do not support comments.
		 */
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	
	<p>Comments are closed</p>
	
	<?php endif; ?>

	<?php comment_form(); ?>

</div><!-- #comments -->
