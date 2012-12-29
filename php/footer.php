	<footer>
		<div class="container">
			<?php the_date('Y', '<p>&copy;', 'FixUp. All rights reserved.</p>'); ?>
			<ul>
				<li><a class="home" href="<?php echo home_url(); ?>">Home</a></li>
				<li><a class="blog" href="<?php echo get_template_directory_uri() ?>/blog">Blog</a></li>
				<li><a class="about" href="<?php echo get_template_directory_uri() ?>/about">About</a></li>
				<li><a href="http://api.tryfixup.com/fixers">Fixers: Join Us</a></li>
				<li><a class="terms" href="<?php echo get_template_directory_uri() ?>/terms">Terms & Privacy</a></li>
			</ul>
		</div><!--/.container-->
	</footer>


<?php wp_footer(); ?>
	</body>
</html>
