jQuery(document).ready(function($) {
	
	// Get the map
	var $map = jQuery( '#wpcampus-2016-map' );

	// Adjust map on init and resize
	wpcampus_2016_map_resize();
	jQuery( window ).resize(function() {
	    wpcampus_2016_map_resize();
    });

    // Adjust map height to fill the screen
    function wpcampus_2016_map_resize() {
    	var $map_height = jQuery(window).height() - $map.offset().top - 40;
    	$map.height( $map_height );
    }
	
});