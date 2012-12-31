<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_uri(); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
			<header>
				<div class="header-container">
					<a href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri() ?>/img/logo-fixup.png" alt="FixUp Logo" /></a>
					<a href="https://itunes.apple.com/us/app/fixup/id554846760?mt=8"><img id="store" src="<?php echo get_template_directory_uri() ?>/img/logo-app-store.png" alt="Available on the App Store" /></a>
				</div><!--/.container-->
			</header>