<?php

// Description for social media
$desc = 'WPCampus 2016 is the inaugural conference for the WPCampus community, a gathering of web professionals, educators and people dedicated to the confluence of WordPress in higher education. WPCampus is excited to partner with The University of South-Florida Sarasota-Manatee in order to provide an experience both affordable and relevant for higher education professionals.';

// URL for the tagboard
$tweets_tagboard = 'https://tagboard.com/wpcampus/300756';

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="twitter:description" content="<?php echo $desc; ?>" />
	<meta property="og:description" content="<?php echo $desc; ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<a href="#wpc-main" id="skip-to-content"><?php _e( 'Skip to Content', 'wpcampus' ); ?></a>
	
	<div id="wpcampus-2016-main-menu">
		<div class="toggle-main-menu">
			<div class="toggle-icon">
				<div class="bar one"></div>
				<div class="bar two"></div>
				<div class="bar three"></div>
			</div>
			<div class="open-menu-label">Menu</div>
			<div class="close-menu-label">Close</div>
		</div>
		<ul class="menu">
			<li<?php echo is_front_page() ? ' class="current"': null; ?>><a href="/">Home</a></li>
			<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="/about/">About</a></li>
			<li<?php echo is_page( 'watch' ) ? ' class="current"': null; ?>><a href="/watch/">Watch</a></li>
			<li<?php echo ( is_page( 'schedule' ) || is_singular( 'schedule' ) ) ? ' class="current"': null; ?>><a href="/schedule/">Schedule</a></li>
			<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/">Map</a></li>
			<li<?php echo is_page( 'attendees' ) ? ' class="current"': null; ?>><a href="/attendees/">Attendees</a></li>
			<li class="has-submenu<?php echo ( is_page( 'venue' ) || is_page( 'hotels' ) || is_page( 'transportation' ) ) ? ' current': null; ?>">
				<a href="/venue/">Venue</a>
				<ul class="submenu">
					<li<?php echo is_page( 'hotels' ) ? ' class="current"': null; ?>><a href="/venue/hotels/">Hotels</a></li>
					<li<?php echo is_page( 'transportation' ) ? ' class="current"': null; ?>><a href="/venue/transportation/">Transportation</a></li>
				</ul>
			</li>
			<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="/sponsors/">Sponsors</a></li>
			<li><a href="https://wpcampus.org/get-involved/">Join Our Community</a></li>
			<li><a href="<?php echo $tweets_tagboard; ?>">Tweets</a></li>
			<li><a href="https://goo.gl/photos/8FyEvaZg7zwj2ZTN6">Photos</a></li>
			<li<?php echo is_page( 'thank-you' ) ? ' class="current"': null; ?>><a href="/thank-you/">Thank You</a></li>
			<li<?php echo is_page( 'wifi' ) ? ' class="current"': null; ?>><a href="/wifi/">Wifi</a></li>
			<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="/contact/">Contact Us</a></li>
		</ul>
	</div>
					
	<div id="wpc-header">
		<div class="row">
			<div class="large-12 columns">
				<div class="banner-inside">
					
					<div id="wpc-header-left">
						<div class="wpc-banner">
							<ul class="menu">
								<li><a href="https://wpcampus.org/get-involved/">Community</a></li>
								<li><a href="<?php echo $tweets_tagboard; ?>">Tweets</a></li>
								<li><a href="https://goo.gl/photos/8FyEvaZg7zwj2ZTN6">Photos</a></li>
							</ul>
						</div>
						<div class="wpc-header-menu">
							<ul class="menu">
								<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="/about/">About</a></li>
								<li<?php echo is_page( 'watch' ) ? ' class="current"': null; ?>><a href="/watch/">Watch</a></li>
								<li<?php echo ( is_page( 'schedule' ) || is_singular( 'schedule' ) ) ? ' class="current"': null; ?>><a href="/schedule/">Schedule</a></li>
							</ul>
						</div>
					</div>
					
					<div class="wpc-logo">
						<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wpcampus-logo-tagline-info-white.svg" alt="WPCampus: Where WordPress Meets Higher Education on July 15-16 in Sarasota, Florida" /></a>
					</div>
					
					<div id="wpc-header-right">
						<div class="wpc-banner">
							<ul class="menu">
								<li<?php echo is_page( 'thank-you' ) ? ' class="current"': null; ?>><a href="/thank-you/">Thanks</a></li>
								<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/">Map</a></li>
								<li<?php echo is_page( 'wifi' ) ? ' class="current"': null; ?>><a href="/wifi/">Wifi</a></li>
								<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="/contact/">Contact</a></li>
							</ul>
						</div>
						<div class="wpc-header-menu">
							<ul class="menu">
								<li<?php echo is_page( 'attendees' ) ? ' class="current"': null; ?>><a href="/attendees/">Attendees</a></li>
								<li class="has-submenu<?php echo ( is_page( 'venue' ) || is_page( 'hotels' ) || is_page( 'transportation' ) ) ? ' current': null; ?>">
									<a href="/venue/">Venue</a>
									<ul class="submenu">
										<li<?php echo is_page( 'hotels' ) ? ' class="current"': null; ?>><a href="/venue/hotels/">Hotels</a></li>
										<li<?php echo is_page( 'transportation' ) ? ' class="current"': null; ?>><a href="/venue/transportation/">Transportation</a></li>
										<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/">Map</a></li>
									</ul>
								</li>
								<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="/sponsors/">Sponsors</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
