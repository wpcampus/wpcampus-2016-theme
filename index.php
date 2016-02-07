<?php

get_header();

?><div id="wpc-content">
	<div class="row">
		<div class="large-12 columns"><?php

			if ( have_posts() ):
				while ( have_posts() ):
					the_post();

					the_content();

				endwhile;
			endif;

		?></div>
	</div>
</div> <!-- #wpc-content --><?php

get_footer();