jQuery(document).ready(function($) {
	
	// Get the header and main menu
	var $header = jQuery( '#wpc-header' );
	var $main_menu = jQuery( '#wpcampus-2016-main-menu' );
	
	// Add listener to all elements who have the class to toggle the main menu
	jQuery( '.toggle-main-menu' ).on( 'touchstart click', function( $event ) {

		// Stop stuff from happening
		$event.stopPropagation();
		$event.preventDefault();
		
		// If header isn't open, open it
		if ( ! $header.hasClass( 'open-menu' ) ) {

			$header.addClass( 'open-menu' );
			$main_menu.slideDown( 400 );
			
		} else {

			$header.removeClass( 'open-menu' );
			$main_menu.slideUp( 400 );
			
		}
		
	});
	
});