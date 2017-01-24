<?php

// Filter the session video html.
function wpcampus_2016_filter_session_video_html( $video_html, $video_url, $post_id ) {

	// If a USFSM video, then return an iframe
	if ( preg_match( '/mediasite\.usfsm\.edu/i', $video_url ) ) {

		// Define video HTML
		$video_html = '<iframe src="' . $video_url . '"></iframe>';

		// Designate videos group together with times
		$grouped_videos = array(
			'146' => '00:28',
			'286' => '14:35',
			'177' => '30:15',
			'198' => '1:02:40',
			'133' => '2:01:40',
		);

		// Add message for Saturday afternoon videos
		if ( array_key_exists( $post_id, $grouped_videos ) ) {
			$video_html = '<p><em>With our apologies, due to circumstances outside our control, all sessions from Saturday afternoon in the auditorium are grouped together into one video. We are trying to get this sorted out.</em></p><p><em><strong>In the meantime, skip to minute ' . $grouped_videos[ $post_id ] . ' in this video to view this session.</strong></em></p>' . $video_html;
		}
	}

	return $video_html;
}
add_filter( 'conf_schedule_session_video_html', 'wpcampus_2016_filter_session_video_html', 100, 3 );

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

		if ( ! empty( $breadcrumbs ) ) {
			foreach ( $breadcrumbs as $crumb_key => $crumb ) {

				// If crumb is equal to page...
				if ( ! empty( $crumb['ID'] ) && $crumb['ID'] == $post->ID ) {

					// Get schedule page
					if ( $schedule_page = get_page_by_path( 'schedule' ) ) {

						// Add schedule and then add crumb
						$new_crumbs[] = array(
							'ID'    => $schedule_page->ID,
							'url'   => get_permalink( $schedule_page->ID ),
							'label' => get_the_title( $schedule_page->ID ),
						);
					}
				}

				// Add current crumb to the mix
				$new_crumbs[ $crumb_key ] = $crumb;

			}
		}

		return $new_crumbs;
	}

	return $breadcrumbs;
});
