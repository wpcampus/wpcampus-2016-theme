jQuery(document).ready(function($) {
	
	// Get the iframe element
	var $iframe = jQuery( '.wpcampus-2016-iframe' );

	// Adjust iframe on init and resize
	wpcampus_2016_iframe_resize();
	jQuery( window ).resize(function() {
	    wpcampus_2016_iframe_resize();
    });

    // Adjust iframe height to fill the screen
    function wpcampus_2016_iframe_resize() {
    	var $iframe_height = jQuery(window).height() - $iframe.offset().top - 40;
    	$iframe.height( $iframe_height );
    }
	
});