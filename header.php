<?php
global $sidebar_id;

// Description for social media.
$desc = 'WPCampus 2016 is the inaugural conference for the WPCampus community, a gathering of web professionals, educators and people dedicated to the confluence of WordPress in higher education. WPCampus is excited to partner with The University of South-Florida Sarasota-Manatee in order to provide an experience both affordable and relevant for higher education professionals.';

// URL for the tagboard.
$tweets_tagboard = 'https://tagboard.com/wpcampus/300756';

// Are we viewing the map page?
$is_map_template = is_page_template( 'template-map.php' );

// Do we want the main element to be full width?
$main_full_width = false;

// Set sidebar ID.
$sidebar_id = '';

if ( is_front_page() ) {
	$sidebar_id = 'home-sidebar';
} else if ( $is_map_template ) {
	$sidebar_id = '';
	$main_full_width = true;
} else {
	$sidebar_id = is_page( 'sponsors' ) ? 'sponsors-sidebar' : 'main-sidebar';
}

// Build classes for main element.
$wpc_main_classes = array();

// If we want to be full width for main, add a class
if ( $main_full_width ) {
	$wpc_main_classes[] = 'full-width-main';
}

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
			<div class="open-menu-label"><?php _e( 'Menu', 'wpcampus' ); ?></div>
			<div class="close-menu-label"><?php _e( 'Close', 'wpcampus' ); ?></div>
		</div>
		<ul class="menu">
			<li<?php echo is_front_page() ? ' class="current"': null; ?>><a href="/"><?php _e( 'Home', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="/about/"><?php _e( 'About', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'watch' ) ? ' class="current"': null; ?>><a href="/watch/"><?php _e( 'Watch', 'wpcampus' ); ?></a></li>
			<li<?php echo ( is_page( 'schedule' ) || is_singular( 'schedule' ) ) ? ' class="current"': null; ?>><a href="/schedule/"><?php _e( 'Schedule', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/"><?php _e( 'Map', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'attendees' ) ? ' class="current"': null; ?>><a href="/attendees/"><?php _e( 'Attendees', 'wpcampus' ); ?></a></li>
			<li class="has-submenu<?php echo ( is_page( 'venue' ) || is_page( 'hotels' ) || is_page( 'transportation' ) ) ? ' current': null; ?>">
				<a href="/venue/"><?php _e( 'Venue', 'wpcampus' ); ?></a>
				<ul class="submenu">
					<li<?php echo is_page( 'hotels' ) ? ' class="current"': null; ?>><a href="/venue/hotels/"><?php _e( 'Hotels', 'wpcampus' ); ?></a></li>
					<li<?php echo is_page( 'transportation' ) ? ' class="current"': null; ?>><a href="/venue/transportation/"><?php _e( 'Transportation', 'wpcampus' ); ?></a></li>
				</ul>
			</li>
			<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="/sponsors/"><?php _e( 'Sponsors', 'wpcampus' ); ?></a></li>
			<li><a href="https://wpcampus.org/get-involved/"><?php _e( 'Join Our Community', 'wpcampus' ); ?></a></li>
			<li><a href="<?php echo $tweets_tagboard; ?>"><?php _e( 'Tweets', 'wpcampus' ); ?></a></li>
			<li><a href="https://goo.gl/photos/8FyEvaZg7zwj2ZTN6"><?php _e( 'Photos', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'thank-you' ) ? ' class="current"': null; ?>><a href="/thank-you/"><?php _e( 'Thank You', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'wifi' ) ? ' class="current"': null; ?>><a href="/wifi/"><?php _e( 'Wifi', 'wpcampus' ); ?></a></li>
			<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="/contact/"><?php _e( 'Contact Us', 'wpcampus' ); ?></a></li>
		</ul>
	</div>
	<div id="wpc-header">
		<div class="row">
			<div class="large-12 columns">
				<div class="banner-inside">
					<div id="wpc-header-left">
						<div class="wpc-banner">
							<ul class="menu">
								<li><a href="https://wpcampus.org/get-involved/"><?php _e( 'Community', 'wpcampus' ); ?></a></li>
								<li><a href="<?php echo $tweets_tagboard; ?>"><?php _e( 'Tweets', 'wpcampus' ); ?></a></li>
								<li><a href="https://goo.gl/photos/8FyEvaZg7zwj2ZTN6"><?php _e( 'Photos', 'wpcampus' ); ?></a></li>
							</ul>
						</div>
						<div class="wpc-header-menu">
							<ul class="menu">
								<li<?php echo is_page( 'about' ) ? ' class="current"': null; ?>><a href="/about/"><?php _e( 'About', 'wpcampus' ); ?></a></li>
								<li<?php echo is_page( 'watch' ) ? ' class="current"': null; ?>><a href="/watch/"><?php _e( 'Watch', 'wpcampus' ); ?></a></li>
								<li<?php echo ( is_page( 'schedule' ) || is_singular( 'schedule' ) ) ? ' class="current"': null; ?>><a href="/schedule/"><?php _e( 'Schedule', 'wpcampus' ); ?></a></li>
							</ul>
						</div>
					</div>
					<div class="wpc-logo">
						<a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wpcampus-logo-tagline-info-white.svg" alt="<?php printf( __( '%1$s: Where %2$s Meets Higher Education on July 15-16 in Sarasota, Florida', 'wpcampus' ), 'WPCampus', 'WordPress' ); ?>" /></a>
					</div>
					<div id="wpc-header-right">
						<div class="wpc-banner">
							<ul class="menu">
								<li<?php echo is_page( 'thank-you' ) ? ' class="current"': null; ?>><a href="/thank-you/"><?php _e( 'Thanks', 'wpcampus' ); ?></a></li>
								<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/"><?php _e( 'Map', 'wpcampus' ); ?></a></li>
								<li<?php echo is_page( 'wifi' ) ? ' class="current"': null; ?>><a href="/wifi/"><?php _e( 'Wifi', 'wpcampus' ); ?></a></li>
								<li<?php echo is_page( 'contact' ) ? ' class="current"': null; ?>><a href="/contact/"><?php _e( 'Contact', 'wpcampus' ); ?></a></li>
							</ul>
						</div>
						<div class="wpc-header-menu">
							<ul class="menu">
								<li<?php echo is_page( 'attendees' ) ? ' class="current"': null; ?>><a href="/attendees/"><?php _e( 'Attendees', 'wpcampus' ); ?></a></li>
								<li class="has-submenu<?php echo ( is_page( 'venue' ) || is_page( 'hotels' ) || is_page( 'transportation' ) ) ? ' current': null; ?>">
									<a href="/venue/"><?php _e( 'Venue', 'wpcampus' ); ?></a>
									<ul class="submenu">
										<li<?php echo is_page( 'hotels' ) ? ' class="current"': null; ?>><a href="/venue/hotels/"><?php _e( 'Hotels', 'wpcampus' ); ?></a></li>
										<li<?php echo is_page( 'transportation' ) ? ' class="current"': null; ?>><a href="/venue/transportation/"><?php _e( 'Transportation', 'wpcampus' ); ?></a></li>
										<li<?php echo is_page( 'map' ) ? ' class="current"': null; ?>><a href="/map/"><?php _e( 'Map', 'wpcampus' ); ?></a></li>
									</ul>
								</li>
								<li<?php echo is_page( 'sponsors' ) ? ' class="current"': null; ?>><a href="/sponsors/"><?php _e( 'Sponsors', 'wpcampus' ); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php

	// @TODO decrease size of hero image since height decreased?

	if ( is_front_page() ) :
		?>
		<div id="wpc-home-hero"></div>
		<?php
	else :
		?>
		<div id="wpc-main-hero">
			<div class="wpc-page-title">
				<div class="row">
					<div class="large-12 columns">
						<h1><?php

							// Do not print title with content for blog posts.
							if ( is_singular( 'post' ) ) {
								printf( __( '%s 2016 Blog', 'wpcampus' ), 'WPCampus' );
							} elseif ( is_singular( 'schedule' ) ) {
								_e( 'Schedule', 'wpcampus' );
							} else {
								the_title();
							}

						?></h1>
					</div>
				</div>
			</div>
		</div>
		<?php
	endif;

	?>
	<div id="wpc-main"<?php echo ! empty( $wpc_main_classes ) ? ' class="full-width-main"' : ''; ?>>
		<?php

		/*<div id="wpc-notification"><?php
			// Don't include link on speakers page
			$include_link = ! is_page( 'speakers' );
			?><p><strong>The <?php echo $include_link ? '<a href="/speakers/">call for speakers is open</a>' : 'call for speakers is open'; ?> and will close at 12 midnight PST on March 21, 2016.</strong></p>
		</div>*/

		?>
		<div id="wpc-content">
			<div class="row">
				<?php

				// Get breadcrumbs.
				$breadcrumbs_html = wpcampus_get_breadcrumbs_html();

				// Setup the sidebar.
				$content_columns = $sidebar_id && is_active_sidebar( $sidebar_id ) ? 9 : 12;

				?>
				<div class="large-<?php echo $content_columns; ?> columns">
					<div class="wpc-content">
