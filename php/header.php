<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="apple-itunes-app" content="app-id=554846760" />
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<link rel="stylesheet" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.ico"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
			<header>
				<div id="header-container">
					<div id="jump-menu"><a href="#fnav" id="jump-link">Learn more »</a></div>
					<nav>
						<a href="http://www.tryfixup.com"><img id="logo" src="<?php echo get_template_directory_uri() ?>/img/logo-fixup.png" alt="FixUp Logo" /></a>
						<a href="https://itunes.apple.com/us/app/fixup/id554846760?mt=8"><img id="store" src="<?php echo get_template_directory_uri() ?>/img/logo-app-store.png" alt="Available on the App Store" /></a>
						<ul id="hnav">
							<li><a class="blog" href="/category/blog">Blog</a></li>
							<li><a class="about" href="/about">About</a></li>
							<li><a href="http://api.tryfixup.com/fixers">Fixers: Join Us</a></li>
						</ul><!--/#hnav-->
					</nav>
				</div><!--/#header-container-->
			</header>