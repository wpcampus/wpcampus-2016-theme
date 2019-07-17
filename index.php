<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		// Print title with content for blog posts.
		if ( is_single() ) :
			?>
			<h1><?php the_title(); ?></h1>
			<?php
		endif;

		the_content();

	endwhile;
endif;

do_action( 'wpc_add_after_content' );

get_footer();
