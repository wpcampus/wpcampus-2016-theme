<?php

get_header();

// Set sidebar id
$sidebar_id = is_page( 'sponsors' ) ? 'sponsors-sidebar' : 'main-sidebar';

// @TODO decrease size of hero image since height decreased
if ( have_posts() ):
	while ( have_posts() ):
		the_post();

		?><div id="wpc-main-hero">
			<div class="wpc-page-title">
				<div class="row">
					<div class="large-12 columns">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div id="wpc-main"><?php

			/* <div id="wpc-notification"><?php
				// Don't include link on speakers page
				$include_link = ! is_page( 'speakers' );
				?><p><strong>The <?php echo $include_link ? '<a href="' . get_bloginfo('url') . '/speakers/">call for speakers is open</a>' : 'call for speakers is open'; ?> and will close at 12 midnight PST on March 21, 2016.</strong></p>
			</div> <!-- #wpc-notification --> */

			?><div id="wpc-content">

				<div class="row"><?php

					// Print the sidebar
					if ( is_active_sidebar( $sidebar_id ) ) {

						?><div class="large-9 columns">
							<div class="wpc-content"><?php
								the_content();
							?></div>
						</div>
						<div class="large-3 columns">
							<div class="wpc-sidebar">
								<?php dynamic_sidebar( $sidebar_id ); ?>
							</div>
						</div><?php

					}

					else {

						?><div class="large-12 columns">
							<div class="wpc-content"><?php
								the_content();
							?></div>
						</div><?php

					}

				?></div>
			</div> <!-- #wpc-content -->
		</div> <!-- #wpc-main --><?php

	endwhile;
endif;

get_footer();