<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header"><?php
		the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' );
	?></header><!-- .entry-header --><?php

	the_content( sprintf(
		'Continue reading<span class="screen-reader-text"> "%s"</span>',
		get_the_title()
	) );

?></article>