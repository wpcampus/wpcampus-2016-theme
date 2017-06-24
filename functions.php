<?php

// Include files.
require_once( STYLESHEETPATH . '/includes/filters.php' );
require_once( STYLESHEETPATH . '/includes/shortcodes.php' );

/**
 * Sets up theme defaults and registers
 * support for various WordPress features.
 *
 * @since 1.0.0
 */
function wpcampus_2016_theme_setup() {

	// Make theme available for translation
	load_theme_textdomain( 'wpcampus', get_stylesheet_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );

	// Switch default core markup for search form, comment form, and comments to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	// Register menu locations.
	register_nav_menus( array(
		'footer' => __( 'Footer Menu', 'wpcampus' ),
	));
}
add_action( 'after_setup_theme', 'wpcampus_2016_theme_setup' );

// Register sidebars
function wpcampus_2016_register_sidebars() {

	// Register home sidebar
	register_sidebar( array(
		'name'			=> 'Home Sidebar',
		'id'			=> 'home-sidebar',
		'description' 	=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	));

	// Register main sidebar
	register_sidebar( array(
		'name'			=> 'Main Sidebar',
		'id'			=> 'main-sidebar',
		'description' 	=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	));

	// Register sponsors sidebar
	register_sidebar( array(
		'name'			=> 'Sponsors Sidebar',
		'id'			=> 'sponsors-sidebar',
		'description' 	=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="sidebar-title">',
		'after_title'   => '</h2>',
	));

}
add_action( 'widgets_init', 'wpcampus_2016_register_sidebars' );

// Enqueues scripts and styles
function wpcampus_2016_enqueue_scripts() {

	$theme_dir = get_template_directory();
	$theme_dir_uri = get_stylesheet_directory_uri();

	// Load Fonts
	wp_enqueue_style( 'wpcampus-2016-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:600,400,300' );

	// Add our theme stylesheet
	wp_enqueue_style( 'wpcampus-2016', $theme_dir_uri . '/assets/css/styles.css', array( 'wpcampus-2016-fonts' ), filemtime( $theme_dir . '/assets/css/styles.css' ) );

	// Add our theme script
	wp_enqueue_script( 'wpcampus-2016', $theme_dir_uri . '/assets/js/wpcampus-2016.min.js', array( 'jquery' ), filemtime( $theme_dir . '/assets/js/wpcampus-2016.min.js' ) );

	// Add our home styles
	if ( is_front_page() ) {
		wp_enqueue_style( 'wpcampus-2016-home', $theme_dir_uri . '/assets/css/home.css', array( 'wpcampus-2016' ), filemtime( $theme_dir . '/assets/css/home.css' ) );
	}

	// Add our iframe script
	if ( is_page_template( 'template-map.php' ) ) {
		wp_enqueue_script( 'wpcampus-2016-iframe', $theme_dir_uri . '/assets/js/wpcampus-2016-iframe.min.js', array( 'jquery' ), filemtime( $theme_dir . '/assets/js/wpcampus-2016-iframe.min.js' ) );
	}

	// Register handlebars
	wp_register_script( 'handlebars', '//cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.5/handlebars.min.js' );

	// Get the API route
	$wp_rest_api_route = function_exists( 'rest_get_url_prefix' ) ? rest_get_url_prefix() : '';
	if ( ! empty( $wp_rest_api_route ) ) {
		$wp_rest_api_route = "/{$wp_rest_api_route}/wp/v2/";
	}

	// For the livestream page
	if ( is_page_template( 'template-livestream.php' ) ) {

		// Enqueue the schedule script
		wp_enqueue_script( 'wpcampus-2016-livestream', $theme_dir_uri . '/assets/js/wpcampus-2016-livestream.min.js', array(
			'jquery',
			'handlebars',
		), false, true );

		// Pass some data
		wp_localize_script( 'wpcampus-2016-livestream', 'wpc_ls', array(
			'wp_api_route'  => $wp_rest_api_route,
		));

	}
}
add_action( 'wp_enqueue_scripts', 'wpcampus_2016_enqueue_scripts', 20 );

// Load favicons
function wpcampus_2016_add_favicons() {

	// Set the images folder.
	$favicons_folder = get_stylesheet_directory_uri() . '/assets/images/favicons/';

	?>
	<link rel="shortcut icon" href="<?php echo $favicons_folder; ?>wpcampus-favicon-60.png"/>
	<link rel="apple-touch-icon" href="<?php echo $favicons_folder; ?>wpcampus-favicon-60.png"/>
	<?php

	// Set the image sizes
	$image_sizes = array( 57, 72, 76, 114, 120, 144, 152 );

	// Print favicons
	foreach ( $image_sizes as $size ) :

		?>
		<link rel="apple-touch-icon" sizes="<?php echo "{$size}x{$size}"; ?>" href="<?php echo $favicons_folder; ?>wpcampus-favicon-<?php echo $size; ?>.png"/>
		<?php

	endforeach;

}
add_action( 'wp_head', 'wpcampus_2016_add_favicons' );
add_action( 'admin_head', 'wpcampus_2016_add_favicons' );
add_action( 'login_head', 'wpcampus_2016_add_favicons' );

// Get the post type archive title
function wpcampus_get_post_type_archive_title( $post_type = '' ) {

	// Make sure we have a post type.
	if ( ! $post_type ) {
		$post_type = get_query_var( 'post_type' );
	}

	// Get post type archive title
	if ( $post_type ) {

		// Make sure its not an array
		if ( is_array( $post_type ) ) {
			$post_type = reset( $post_type );
		}

		// Get the post type data
		if ( $post_type_obj = get_post_type_object( $post_type ) ) {

			// Get the title
			$title = apply_filters( 'post_type_archive_title', $post_type_obj->labels->name, $post_type );

			// Return the title
			return apply_filters( 'wpcampus_post_type_archive_title', $title, $post_type );

		}
	}

	return null;
}

// Get breadcrumbs
function wpcampus_get_breadcrumbs_html() {

	// Build array of breadcrumbs
	$breadcrumbs = array();

	// Not for front page
	if ( is_front_page() ) {
		return false;
	}

	// Get post type
	$post_type = get_query_var( 'post_type' );

	// Make sure its not an array
	if ( is_array( $post_type ) ) {
		$post_type = reset( $post_type );
	}

	// Add home
	$breadcrumbs[] = array(
		'url'   => get_bloginfo( 'url' ),
		'label' => __( 'Home', 'wpcampus' ),
	);

	// Add archive(s)
	if ( is_archive() ) {

		// Add the archive breadcrumb
		if ( is_post_type_archive() ) {

			// Get the info
			$post_type_archive_link = get_post_type_archive_link( $post_type );
			$post_type_archive_title = wpcampus_get_post_type_archive_title( $post_type );

			// Add the breadcrumb
			if ( $post_type_archive_link && $post_type_archive_title ) {
				$breadcrumbs[] = array(
					'url' 	=> $post_type_archive_link,
					'label' => $post_type_archive_title,
				);
			}
		}
	} else {

		// Add links to archive
		if ( is_singular() ) {

			// Get the information
			$post_type_archive_link = get_post_type_archive_link( $post_type );
			$post_type_archive_title = wpcampus_get_post_type_archive_title( $post_type );

			if ( $post_type_archive_link ) {
				$breadcrumbs[] = array(
					'url'	=> $post_type_archive_link,
					'label'	=> $post_type_archive_title,
				);
			}
		}

		// Print info for the current post
		$post = get_queried_object();
		if ( $post && is_a( $post, 'WP_Post' ) ) {

			// Get ancestors
			$post_ancestors = isset( $post ) ? get_post_ancestors( $post->ID ) : array();

			// Add the ancestors
			foreach ( $post_ancestors as $post_ancestor_id ) {

				// Add ancestor
				$breadcrumbs[] = array(
					'ID' 	=> $post_ancestor_id,
					'url' 	=> get_permalink( $post_ancestor_id ),
					'label' => get_the_title( $post_ancestor_id ),
				);

			}

			// Add current page - if not home page
			if ( isset( $post ) ) {
				$breadcrumbs['current'] = array(
					'ID'	=> $post->ID,
					'url'	=> get_permalink( $post ),
					'label'	=> get_the_title( $post->ID ),
				);
			}
		}
	}

	// Filter the breadcrumbs
	$breadcrumbs = apply_filters( 'wpcampus_2016_breadcrumbs', $breadcrumbs );

	// Build breadcrumbs HTML
	$breadcrumbs_html = null;

	foreach ( $breadcrumbs as $crumb_key => $crumb ) {

		// Make sure we have what we need
		if ( empty( $crumb['label'] ) ) {
			continue;
		}

		// If no string crumb key, set as ancestor
		if ( ! $crumb_key || is_numeric( $crumb_key ) ) {
			$crumb_key = 'ancestor';
		}

		// Setup classes
		$crumb_classes = array( $crumb_key );

		// Add if current
		if ( isset( $crumb['current'] ) && $crumb['current'] ) {
			$crumb_classes[] = 'current';
		}

		$breadcrumbs_html .= '<li role="menuitem"' . ( ! empty( $crumb_classes ) ? ' class="' . implode( ' ', $crumb_classes ) . '"' : null ) . '>';

		// Add URL and label
		if ( ! empty( $crumb['url'] ) ) {
			$breadcrumbs_html .= '<a href="' . $crumb['url'] . '"' . ( ! empty( $crumb['title'] ) ? ' title="' . $crumb['title'] . '"' : null ) . '>' . $crumb['label'] . '</a>';
		} else {
			$breadcrumbs_html .= $crumb['label'];
		}

		$breadcrumbs_html .= '</li>';

	}

	// Wrap them in nav
	$breadcrumbs_html = '<div class="breadcrumbs-wrapper"><nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">' . $breadcrumbs_html . '</nav></div>';

	//  We change up the variable so it doesn't interfere with global variable
	return $breadcrumbs_html;
}
