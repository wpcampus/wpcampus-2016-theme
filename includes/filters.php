<?php

// Set the tabindex to 0 for accessibility
add_filter( 'gform_tabindex', 'wpcampus_2016_filter_gform_tabindex', 10, 2 );
function wpcampus_2016_filter_gform_tabindex( $tabindex, $form ) {
	return 0;
}

// Filter the breadcrumbs
add_filter( 'wpcampus_2016_breadcrumbs', function( $breadcrumbs ) {
	global $post;

	// If schedule page, we need to add link to schedule
	if ( is_singular( 'schedule' ) ) {

		// Copy to new crumbs
		$new_crumbs = array();

		foreach( $breadcrumbs as $crumb_key => $crumb ) {

			// If crumb is equal to page...
			if ( $post->ID == $crumb[ 'ID' ] ) {

				// Get schedule page
				if ( $schedule_page = get_page_by_path( 'schedule' ) ) {

					// Add schedule and then add crumb
					$new_crumbs[] = array(
						'ID' => $schedule_page->ID,
						'url' => get_permalink( $schedule_page->ID ),
  						'label' => get_the_title( $schedule_page->ID )
					);

				}

			}

			// Add current crumb to the mix
			$new_crumbs[ $crumb_key ] = $crumb;

		}

		return $new_crumbs;
	}

	return $breadcrumbs;
});