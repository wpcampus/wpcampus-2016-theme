(function( $ ) {
	'use strict';

	// Will hold the template
	var $wpc_ls_templ = false;

	// Will hold the schedule
	var $wpc_ls_container = null;

	// When the document is ready...
	$(document).ready(function() {

		// Set the schedule container
		$wpc_ls_container = $( '#wpcampus-2016-livestream' );

		// Get the templates
		var $wpc_ls_templ_content = $('#wpcampus-2016-livestream-template').html();
		if ( $wpc_ls_templ_content !== undefined && $wpc_ls_templ_content ) {

			// Parse the template
			$wpc_ls_templ = Handlebars.compile( $wpc_ls_templ_content );

			// Render the livestream
			render_wpc_livestream();

		}

	});

	///// FUNCTIONS /////

	// Get/update the livestream
	function render_wpc_livestream() {

		// Get the livestream information
		$.ajax( {
			url: wpc_ls.wp_api_route + 'schedule',
			success: function( $schedule_items ) {

				// Build the HTML
				var $livestream_html = '';

				// Go through each item
				$.each( $schedule_items, function( $index, $item ) {

					// Must have a URL
					if ( $item.session_livestream_url !== null ) {

						// Render the templates
						$livestream_html += $wpc_ls_templ( $item );

					}

				});

				// Add a header
				if ( ! $livestream_html ) {
					$livestream_html = '<p><em>There are no active livestreams.</em></p>';
				}

				$wpc_ls_container.html( $livestream_html );

			}
		} );

	}

})( jQuery );