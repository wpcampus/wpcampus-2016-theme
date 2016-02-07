<?php

get_header();

?><div id="wpc-main-hero"></div>
<div id="wpc-main"><?php

	if ( have_posts() ):
		while ( have_posts() ):
			the_post();

			?><div class="wpc-page-title">
				<div class="row">
					<div class="large-12 columns">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>

			<div id="wpc-content">
				<div class="row">
					<div class="large-12 columns"><?php
						the_content();
					?></div>
				</div>
			</div> <!-- #wpc-content --><?php

		endwhile;
	endif;

?></div> <!-- #wpc-main --><?php

get_footer();