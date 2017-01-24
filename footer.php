<?php

// Get URL
$blog_url = get_bloginfo( 'url' );

// Get directory
$stylesheet_dir = get_stylesheet_directory_uri();

?><div id="wpc-mailing-list">
	<div class="row">
		<div class="large-8 large-centered columns">
			<h2><?php printf( __( 'Subscribe to %s', 'wpcampus-2016' ), 'WPCampus' ); ?></h2>
			<p><?php printf( __( 'Enter your email address to receive notifications about %s.', 'wpcampus-2016' ), 'WPCampus' ); ?></p>
			<?php echo do_shortcode( '[gravityform id="4" title="false" description="false" ajax="false"]' ); ?>
		</div>
	</div>
</div>

<div id="wpc-footer">
	<div class="row">
		<div class="small-12 columns">
			<a class="wpc-logo" href="https://wpcampus.org/"><img src="<?php echo $stylesheet_dir; ?>/images/wpcampus-logo-tagline.svg" alt="<?php printf( __( '%1$s: Where %2$s Meets Higher Education', 'wpcampus-2016' ), 'WPCampus', 'WordPress' ); ?>" /></a>
			<ul class="wpc-footer-menu" role="navigation">
				<li><a href="<?php echo $blog_url; ?>/donate/"><?php _e( 'Donate', 'wpcampus-2016' ); ?></a></li>
				<li><a href="<?php echo $blog_url; ?>/code-of-conduct/"><?php _e( 'Code of Conduct', 'wpcampus-2016' ); ?></a></li>
				<li><a href="<?php echo $blog_url; ?>/thank-you/"><?php _e( 'Thank You', 'wpcampus-2016' ); ?></a></li>
				<li><a href="<?php echo $blog_url; ?>/contact/"><?php _e( 'Contact Us', 'wpcampus-2016' ); ?></a></li>
			</ul>
			<p><strong>WPCampus is a <a href="https://wpcampus.org" title="Learn more about the WPCampus community">community</a> and conference for those using WordPress in the world of higher education.</strong><br />If you'd like to get involved, <a href="https://wpcampus.org/">visit the WPCampus website</a> for more information.<br />
			<span class="github-message">This site is powered by <a href="https://wordpress.org/">WordPress</a>. You can view, and contribute to, the theme on <a href="https://github.com/wpcampus/wpcampus-2016-theme">GitHub</a>.</span></p>
			<p class="icons">
				<a href="https://conferencia.io/events/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/images/conferencia-mic.png" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'conferencia' ); ?>" /></a>
				<a href="http://lanyrd.com/2016/wpcampus-conference/"><img src="<?php echo $stylesheet_dir; ?>/images/lanyrd-black.png" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'Lanyrd' ); ?>" /></a>
				<a href="https://twitter.com/wpcampusorg/"><img src="<?php echo $stylesheet_dir; ?>/images/twitter-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'Twitter' ); ?>" /></a>
				<a href="https://www.facebook.com/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/images/facebook-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'Facebook' ); ?>" /></a>
				<a href="https://www.youtube.com/wpcampusorg"><img src="<?php echo $stylesheet_dir; ?>/images/youtube-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'YouTube' ); ?>" /></a>
				<a href="https://github.com/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/images/github-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus-2016' ), 'WPCampus', 'GitHub' ); ?>" /></a>
			</p>
		</div>
	</div>
</div> <!-- #wpcampus-footer -->

<?php wp_footer(); ?>

</body>
</html>