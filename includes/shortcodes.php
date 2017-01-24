<?php

// We have to remove the default shortcode filter
remove_filter( 'the_content', 'do_shortcode', 11 ); // AFTER wpautop()

// Strips extra space around and within shortcodes
add_filter( 'the_content', function( $content ) {

	// Clean it
	$content = strtr( $content, array( "\n[" => '[', "]\n" => ']', '<p>[' => '[', ']</p>' => ']', ']<br>' => ']', ']<br />' => ']' ) );

	// Return the content
	return do_shortcode( $content );

}, 11 );

// Include columns in content
add_shortcode( 'columns', function( $args, $content = null ) {

	// Make sure there's content to wrap
	if ( ! $content ) {
		return null;
	}

	// Process for more levels of shortcode, wrap in row and return
	return '<div class="row">' . do_shortcode( $content ) . '</div>';

});

// Include columns in content.
function wpc_2016_col_shortcode( $args, $content = null ) {

	// Make sure there's content to wrap
	if ( ! $content ) {
		return null;
	}

	// Process args
	$defaults = array(
		'small'     => '12',
		'medium'    => false,
		'large'     => false,
	);
	$args = wp_parse_args( $args, $defaults );

	// Setup column classes
	$column_classes = array();

	foreach ( array( 'small', 'medium', 'large' ) as $size ) {

		// If a value was passed, make sure its a number
		if ( isset( $args[ $size ] ) && ! is_numeric( $args[ $size ] ) && ! is_int( $args[ $size ] ) ) {
			continue;
		}

		// Add the class
		$column_classes[] = $size . '-' . $args[ $size ];

	}

	return '<div class="' . implode( ' ', $column_classes ) . ' columns">' . do_shortcode( $content ) . '</div>';
}
add_shortcode( 'col', 'wpc_2016_col_shortcode' );
