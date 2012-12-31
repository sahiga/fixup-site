<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	include_once ( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */
	remove_action( 'wp_head', 'wp_generator' );
	
	add_action( 'wp_enqueue_scripts', 'fixup_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonomies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */

	/* ========================================================================================================================
	
	Stylesheets and scripts
	======================================================================================================================== */
	
	
	/**
	 *	Add stylesheets and scripts
	 *
	 *	@return void
	 *	@author FixUp
	 */
	 
	function fixup_script_enqueuer() {
		// Register stylesheets
		// wp_register_style( 'main', get_stylesheet_uri(), '', '1.0', 'screen');
		wp_register_style( 'qtip2_style', get_template_directory_uri() . '/jquery.qtip.css', '', '2.0.0', 'screen' );
		
		// Replace default WordPress jQuery with Google-hosted jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', false, '1.8.3');

		// Register Masonry, qTip2, and custom JS
		wp_register_script( 'masonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array('jquery'), '1.06', true );
		wp_register_script( 'qtip2_script', get_template_directory_uri() . '/js/jquery.qtip.min.js', array('jquery'), '2.0.0', true);
		wp_register_script( 'custom', get_template_directory_uri() . '/js/fixup.js', array('jquery', 'masonry', 'qtip2_script'), '1.0', true );
		
		// Load main stylesheet for all pages
		// wp_enqueue_style( 'main' );
		
		// Load jQuery, Masonry, qTip2 (script & stylesheet), and custom JS for about page
		if ( is_page( 'about' ) || '21' == $post->post_parent ) {
			wp_enqueue_style( 'qtip2_style' );
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script( 'masonry' );
			wp_enqueue_script( 'qtip2_script');
			wp_enqueue_script( 'custom' );
		}
		
	}

	/* ========================================================================================================================
	
	Shortcodes
	
	======================================================================================================================== */
	

	

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}