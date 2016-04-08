<?php

// Get URL
$blog_url = get_bloginfo('url');

// Description for social media
$desc = 'WPCampus 2016 is the inaugural conference for the WPCampus community, a gathering of web professionals, educators and people dedicated to the confluence of WordPress in higher education. WPCampus is excited to partner with The University of South-Florida Sarasota-Manatee in order to provide an experience both affordable and relevant for higher education professionals.';

?><!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="twitter:description" content="<?php echo $desc; ?>" />
	<meta property="og:description" content="<?php echo $desc; ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a href="#wpc-main" id="skip-to-content">Skip to Content</a>

	<div id="wpc-banner">
		<?php /*<div class="row">
			<div class="large-12 columns">
				<div class="menu right">
					<ul>
						<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/contact/">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>*/ ?>
	</div>
	<div id="wpc-header">
		<div class="row">
			<div class="large-12 columns">
				<div class="banner-inside">

					<div id="wpcampus-2016-main-menu-wrapper">
						<div class="toggle-main-menu">
							<div class="toggle-icon">
								<div class="bar one"></div>
								<div class="bar two"></div>
								<div class="bar three"></div>
							</div>
							<div class="open-menu-label">Menu</div>
							<div class="close-menu-label">Close</div>
						</div>
						<div id="wpcampus-2016-main-menu" class="menu">
							<ul>
								<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/about/">About</a></li>
								<li<?php echo is_page( 'speakers' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/speakers/">Speakers</a></li>
								<li<?php echo is_page( 'schedule' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/schedule/">Schedule</a></li>
								<li class="has-submenu<?php echo ( is_page( 'location' ) || is_page( 'hotels' ) ) ? ' current': null; ?>">
									<a href="<?php echo $blog_url; ?>/location">Location</a>
									<ul class="submenu">
										<li><a href="<?php echo $blog_url; ?>/location/hotels/">Hotels</a></li>
									</ul>
								</li>
								<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/sponsors">Sponsors</a></li>
								<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/contact/">Contact</a></li>
							</ul>
						</div>
					</div>

					<div class="menu left">
						<ul>
							<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/about/">About</a></li>
							<li<?php echo is_page( 'speakers' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/speakers/">Speakers</a></li>
							<li<?php echo is_page( 'schedule' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/schedule/">Schedule</a></li>
						</ul>
					</div>

					<div class="wpc-logo">
						<a href="<?php echo $blog_url; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wpcampus-logo-tagline-info-white.svg" alt="WPCampus: Where WordPress Meets Higher Education on July 15-16 in Sarasota, Florida" /></a>
					</div>
					<div class="menu right">
						<ul>
							<li class="has-submenu<?php echo ( is_page( 'location' ) || is_page( 'hotels' ) ) ? ' current': null; ?>">
								<a href="<?php echo $blog_url; ?>/location">Location</a>
								<ul class="submenu">
									<li><a href="<?php echo $blog_url; ?>/location/hotels/">Hotels</a></li>
								</ul>
							</li>
							<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/sponsors">Sponsors</a></li>
							<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="<?php echo $blog_url; ?>/contact/">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>