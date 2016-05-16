jQuery(document).ready(function($) {
	
	// Get the main menu
	var $main_menu = jQuery( '#wpcampus-2016-main-menu' );
	
	// Add listener to all elements who have the class to toggle the main menu
	jQuery( '.toggle-main-menu' ).on( 'touchstart click', function( $event ) {

		// Stop stuff from happening
		$event.stopPropagation();
		$event.preventDefault();
		
		// If main menu isn't open, open it
		if ( ! $main_menu.hasClass( 'open-menu' ) ) {

			$main_menu.addClass( 'open-menu' );
			$main_menu.find( '.menu' ).slideDown( 400 );
			
		} else {

			$main_menu.removeClass( 'open-menu' );
			$main_menu.find( '.menu' ).slideUp( 400 );
			
		}
		
	});
	
});