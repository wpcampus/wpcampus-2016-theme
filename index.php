<?php

get_header();

// Set sidebar id
$sidebar_id = is_page( 'sponsors' ) ? 'sponsors-sidebar' : 'main-sidebar';

// @TODO decrease size of hero image since height decreased
if ( have_posts() ):
	while ( have_posts() ):
		the_post();

		?><div id="wpc-main-hero">
            <style>
            <?php 
            $header = get_custom_header();
            if ( $header->url != '') {
                $img_src = wp_get_attachment_image_url( $header->attachment_id );
                $img_srcset = wp_get_attachment_image_srcset( $header->attachment_id );
                
                $sizes = array_map(
                    function ($substr) {
                        return explode(' ', trim($substr));
                    }, 
                    explode(',', $img_srcset)
                );
                for ($i = 0; $i < sizeof($sizes); $i++) {
                    if($i == 0){
                        ?>
                        @media (max-width: <?php echo str_replace("w", "px", $sizes[$i][1]); ?> ) { #wpc-main-hero{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                        <?php

                    } else if ($i == sizeof($sizes)-1 ) {
                        ?>
                        @media (min-width: <?php echo str_replace("w", "px", $sizes[$i-1][1]); ?> ) { #wpc-main-hero{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                        <?php
                        
                    } else {
                        ?>
                        @media (min-width: <?php echo str_replace("w", "px", $sizes[$i-1][1]); ?> ) and (max-width: <?php echo str_replace("w", "px", $sizes[$i][1]); ?> ) { #wpc-main-hero{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                        <?php                
                    }
                }      
            }
            ?>
            </style>            
            <div class="wpc-page-title">
				<div class="row">
					<div class="large-12 columns">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
		<div id="wpc-main">

			<div id="wpc-notification"><?php
				// Don't include link on speakers page
				$include_link = ! is_page( 'speakers' );
				?><p><strong>The <?php echo $include_link ? '<a href="' . get_bloginfo('url') . '/speakers/">call for speakers is open</a>' : 'call for speakers is open'; ?> and will close at 12 midnight EST on March 21, 2016.</strong></p>
			</div> <!-- #wpc-notification -->

			<div id="wpc-content">

				<div class="row"><?php

					// Print the sidebar
					if ( is_active_sidebar( $sidebar_id ) ) {

						?><div class="large-9 columns">
							<div class="wpc-content"><?php
								the_content();
							?></div>
						</div>
						<div class="large-3 columns">
							<div class="wpc-sidebar">
								<?php dynamic_sidebar( $sidebar_id ); ?>
							</div>
						</div><?php

					}

					else {

						?><div class="large-12 columns">
							<div class="wpc-content"><?php
								the_content();
							?></div>
						</div><?php

					}

				?></div>
			</div> <!-- #wpc-content -->
		</div> <!-- #wpc-main --><?php

	endwhile;
endif;

get_footer();