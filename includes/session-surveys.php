<?php

// Filter the feedback URL
add_filter( 'conf_sch_feedback_url', function( $feedback_url, $object ) {

	// If a session, define the URL
	$event_types = wp_get_object_terms( $object['id'], 'event_types', array( 'fields' => 'slugs' ) );
	if ( ! empty( $event_types ) && in_array( 'session', $event_types ) ) {
		return add_query_arg( 'session', $object['id'], get_bloginfo( 'url' ) . '/session-survey/' );
	}

	return $feedback_url;
}, 100, 2 );

// Populate the session info
add_filter( 'gform_pre_render', 'wpcampus_2016_session_survey_populate' );
add_filter( 'gform_pre_validation', 'wpcampus_2016_session_survey_populate' );
add_filter( 'gform_admin_pre_render', 'wpcampus_2016_session_survey_populate' );
add_filter( 'gform_pre_submission_filter', 'wpcampus_2016_session_survey_populate' );
function wpcampus_2016_session_survey_populate( $form ) {

	// Only populating drop down for form id 9
	if ( 9 != $form['id'] ) {
		return $form;
	}

	// Get the post
	$session_id = ! empty( $_GET['session'] ) ? $_GET['session'] : '';
	if ( ! $session_id ) {
		return $form;
	}

	// Get session information
	$session_post = get_post( $session_id );
	if ( ! $session_post ) {
		return $form;
	}

	// Loop through the fields
	foreach ( $form['fields'] as &$field ) {

		switch ( $field->inputName ) {

			case 'sessiontitle':

				// Set title
				$field->defaultValue = get_the_title( $session_id );

				break;

			case 'speakername':

				$event_speaker_ids = get_post_meta( $session_id, 'conf_sch_event_speaker', false );
				if ( $event_speaker_ids ) {

					// Get speakers info
					$speakers = array();
					foreach ( $event_speaker_ids as $speaker_id ) {
						$speakers[] = get_the_title( $speaker_id );
					}

					// Set speakers
					$field->defaultValue = implode( ', ', $speakers );

				}

				break;

		}
	}

	return $form;
}
