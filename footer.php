<?php

// Get URL
$blog_url = get_bloginfo( 'url' );

// Get directory
$stylesheet_dir = get_stylesheet_directory_uri();

?><div id="wpc-mailing-list">
	<div class="row">
		<div class="large-8 large-centered columns">
			<h2>Subscribe to WPCampus 2016 News</h2>
			<p>Enter your email address to receive notifications about WPCampus 2016.</p>
			<?php echo do_shortcode( '[gravityform id="4" title="false" description="false" ajax="false"]' ); ?>
		</div>
	</div>
</div>

<div id="wpc-footer">
	<div class="row">
		<div class="small-12 columns">
			<a class="wpc-logo" href="https://wpcampus.org/"><img src="<?php echo $stylesheet_dir; ?>/images/wpcampus-logo-tagline.svg" alt="WPCampus: Where WordPress Meets Higher Education" /></a>
			<ul class="wpc-footer-menu" role="navigation">
				<li><a href="<?php echo $blog_url; ?>/donate/">Donate</a></li>
				<li><a href="<?php echo $blog_url; ?>/code-of-conduct/">Code of Conduct</a></li>
				<li><a href="<?php echo $blog_url; ?>/thank-you/">Thank You</a></li>
				<li><a href="<?php echo $blog_url; ?>/contact/">Contact Us</a></li>
			</ul>
			<p><strong>WPCampus is a <a href="https://wpcampus.org" title="Learn more about the WPCampus community">community</a> and conference for those using WordPress in the world of higher education.</strong><br />If you'd like to get involved, <a href="https://wpcampus.org/">visit the WPCampus website</a> for more information.<br />
			<span class="github-message">This site is powered by <a href="https://wordpress.org/">WordPress</a>. You can view, and contribute to, the theme on <a href="https://github.com/wpcampus/wpcampus-2016-theme">GitHub</a>.</span></p>
			<p class="icons">
				<a href="https://conferencia.io/events/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/images/conferencia-mic.png" alt="Follow WPCampus on conferencia" /></a>
				<a href="http://lanyrd.com/2016/wpcampus-conference/"><img src="<?php echo $stylesheet_dir; ?>/images/lanyrd-black.png" alt="Follow WPCampus on Lanyrd" /></a>
				<a href="https://twitter.com/wpcampusorg/"><img src="<?php echo $stylesheet_dir; ?>/images/twitter-black.svg" alt="Follow WPCampus on Twitter" /></a>
				<a href="https://github.com/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/images/github-black.svg" alt="Follow WPCampus on GitHub" /></a>
			</p>
		</div>
	</div>
</div> <!-- #wpcampus-footer -->

<?php wp_footer(); ?>

</body>
</html>