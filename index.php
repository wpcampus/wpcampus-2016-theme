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
				<div class="row">
					<div class="large-12 columns"><?php
						the_content();
					?></div>
				</div>
			</div> <!-- #wpc-content -->
		</div> <!-- #wpc-main --><?php

	endwhile;
endif;

get_footer();