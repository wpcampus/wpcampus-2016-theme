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
	<?php

	// Print network footer.
	if ( function_exists( 'wpcampus_print_network_footer' ) ) {
		wpcampus_print_network_footer();
	}

	wp_footer();

	?>
</body>
</html>
