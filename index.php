<?php

get_header();

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
		<div id="wpc-main">

			<div id="wpc-notification">
				<p><strong>The <a href="<?php echo get_bloginfo('url'); ?>/speakers/">call for speakers is open</a> and will close at 12 midnight EST on March 21, 2016.</strong></p>
			</div> <!-- #wpc-notification -->

			<div id="wpc-content">

				<div class="row"><?php

					// Print the sidebar
					if ( is_active_sidebar( 'main-sidebar' ) ) {

						?><div class="large-9 columns"><?php
							the_content();
						?></div>
						<div class="large-3 columns">
							<div class="wpc-sidebar">
								<?php dynamic_sidebar( 'main-sidebar' ); ?>
							</div>
						</div><?php

					}

					else {

						?><div class="large-12 columns"><?php
							the_content();
						?></div><?php

					}

				?></div>
			</div> <!-- #wpc-content -->
		</div> <!-- #wpc-main --><?php

	endwhile;
endif;

get_footer();