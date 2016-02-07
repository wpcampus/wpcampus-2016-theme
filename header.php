<?php

// Get URL
$blog_url = get_bloginfo('url');

?><!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body>
	<a href="#wpc-main" id="skip-to-content">Skip to Content</a>

	<div id="wpc-banner">
		<div class="row">
			<div class="large-12 columns">
				<div class="banner-inside">
					<div class="menu left">
						<ul>
							<li><a href="<?php echo $blog_url; ?>/about/">About</a></li>
							<li><a href="<?php echo $blog_url; ?>/speakers/">Speakers</a></li>
							<li><a href="<?php echo $blog_url; ?>/schedule/">Schedule</a></li>
						</ul>
					</div>
					<div class="wpc-logo">
						<a href="<?php echo $blog_url; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wpcampus-logo-tagline-white.svg" alt="WPCampus: Where WordPress Meets Higher Education" /></a>
					</div>
					<div class="menu right">
						<ul>
							<li><a href="<?php echo $blog_url; ?>/location">Location</a></li>
							<li><a href="<?php echo $blog_url; ?>/sponsors">Sponsors</a></li>
							<li><a href="<?php echo $blog_url; ?>/contact/">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>