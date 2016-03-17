<?php

get_header();

?><div id="wpc-home-hero">
	<div id="wpc-notification">
		<p><strong>The <a href="<?php echo get_bloginfo('url'); ?>/speakers/">call for speakers is open</a> and will close at 12 midnight PST on March 21, 2016.</strong></p>
	</div> <!-- #wpc-notification -->
</div>
<div id="wpc-main">
	<div id="wpc-content">
		<div class="row"><?php

			// Print the sidebar
			if ( is_active_sidebar( 'home-sidebar' ) ) {

				?><div class="large-9 columns">
					<div class="wpc-content"><?php

						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );

							endwhile;
						endif;

					?></div>
				</div>
				<div class="large-3 columns">
					<div class="wpc-sidebar">
						<?php dynamic_sidebar( 'home-sidebar' ); ?>
					</div>
				</div><?php

			} else {

				?><div class="large-12 columns">
					<div class="wpc-content"><?php
						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );

							endwhile;
						endif;
					?></div>
				</div><?php

			}

		?></div>
	</div> <!-- #wpc-content -->

</div> <!-- #wpc-main --><?php

get_footer();