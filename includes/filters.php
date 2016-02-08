<?php

// Set the tabindex to 0 for accessibility
add_filter( 'gform_tabindex', 'wpcampus_2016_filter_gform_tabindex', 10, 2 );
function wpcampus_2016_filter_gform_tabindex( $tabindex, $form ) {
	return 0;
}