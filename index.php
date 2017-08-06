<?php

get_header();

// Print breadcrumbs.
echo $breadcrumbs_html;

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		// Print title with content for blog posts.
		if ( is_single() ) :
			?><h1><?php the_title(); ?></h1><?php
		endif;

		the_content();

	endwhile;
endif;

get_footer();
