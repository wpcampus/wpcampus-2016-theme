<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>

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