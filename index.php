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
			<div id="wpc-content">
				<div class="row"><?php

					// Print the sidebar
					if ( is_active_sidebar( 'main-sidebar' ) ) {

						?><div class="large-9 columns"><?php
							the_content();
						?></div>
						<div class="large-3 columns">
							<div class="wpc-sidebar"><?php
								dynamic_sidebar( 'main-sidebar' );
								?><div class="widget twitter-timeline">
									<a class="twitter-timeline" href="https://twitter.com/wpcampusorg" data-widget-id="696496685959090176">Tweets by @wpcampusorg</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
								</div>
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