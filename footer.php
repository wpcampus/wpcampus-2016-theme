<?php
global $sidebar_id;

// Get directory.
$stylesheet_dir = get_stylesheet_directory_uri();

				?>
				</div><!-- .wpc-content -->
			</div><!-- .columns -->
			<?php

			// Print the sidebar.
			if ( $sidebar_id && is_active_sidebar( $sidebar_id ) ) :

				?>
				<div class="large-3 columns">
					<div class="wpc-sidebar">
						<?php dynamic_sidebar( $sidebar_id ); ?>
					</div>
				</div>
				<?php

			endif;

			?>
		</div> <!-- .row -->
	</div> <!-- #wpc-content -->
</div> <!-- #wpc-main -->
<div id="wpc-mailing-list">
	<div class="row">
		<div class="large-8 large-centered columns">
			<h2><?php printf( __( 'Subscribe to %s', 'wpcampus' ), 'WPCampus' ); ?></h2>
			<p><?php printf( __( 'Enter your email address to receive notifications about %s.', 'wpcampus' ), 'WPCampus' ); ?></p>
			<?php echo do_shortcode( '[gravityform id="4" title="false" description="false" ajax="false"]' ); ?>
		</div>
	</div>
</div>
<div id="wpc-footer">
	<div class="row">
		<div class="small-12 columns">
			<a class="wpc-logo" href="https://wpcampus.org/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/wpcampus-logo-tagline.svg" alt="<?php printf( __( '%1$s: Where %2$s Meets Higher Education', 'wpcampus' ), 'WPCampus', 'WordPress' ); ?>" /></a>
			<?php

			// Print the footer menu.
			wp_nav_menu( array(
				'theme_location'    => 'footer',
				'container'         => false,
				'menu_id'           => 'wpc-footer-menu',
				'menu_class'        => 'wpc-footer-menu',
				'fallback_cb'       => false,
			));

			?>
			<p><strong>WPCampus is a community of networking, resources, and events for those using WordPress in the world of higher education.</strong><br />If you are not a member of the WPCampus community, we'd love for you to <a href="https://wpcampus.org/get-involved/">get involved</a>.</p>
			<p class="disclaimer">This site is powered by <a href="https://wordpress.org/">WordPress</a>. You can view, and contribute to, the theme on <a href="https://github.com/wpcampus/wpcampus-2016-theme">GitHub</a>.<br />WPCampus events are not WordCamps and are not affiliated with the WordPress Foundation.</p>
			<p class="icons">
				<a href="https://conferencia.io/events/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/conferencia-mic.png" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'conferencia' ); ?>" /></a>
				<a href="http://lanyrd.com/2016/wpcampus-conference/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/lanyrd-black.png" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Lanyrd' ); ?>" /></a>
				<a href="https://twitter.com/wpcampusorg/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/twitter-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Twitter' ); ?>" /></a>
				<a href="https://www.facebook.com/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/facebook-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'Facebook' ); ?>" /></a>
				<a href="https://www.youtube.com/wpcampusorg"><img src="<?php echo $stylesheet_dir; ?>/assets/images/youtube-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'YouTube' ); ?>" /></a>
				<a href="https://github.com/wpcampus/"><img src="<?php echo $stylesheet_dir; ?>/assets/images/github-black.svg" alt="<?php printf( __( 'Follow %1$s on %2$s', 'wpcampus' ), 'WPCampus', 'GitHub' ); ?>" /></a>
			</p>
			<p class="copyright">&copy; <?php echo date( 'Y' ); ?> WPCampus</p>
		</div>
	</div>
</div> <!-- #wpcampus-footer -->
<?php

wp_footer();

?>
</body>
</html>
