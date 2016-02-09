<?php

get_header();

?><div id="wpc-home-hero">
    <style>
    <?php 
    if ( 0 < count( strlen( ( $background_image_id = get_theme_mod( 'homepage_hero_image' ) ) ) ) ) { 
        $img_src = wp_get_attachment_image_url( $background_image_id );
        $img_srcset = wp_get_attachment_image_srcset( $background_image_id );
        
        $sizes = array_map(
            function ($substr) {
                return explode(' ', trim($substr));
            }, 
            explode(',', $img_srcset)
        );
        for ($i = 0; $i < sizeof($sizes); $i++) {
            if($i == 0){
                ?>
                @media (max-width: <?php echo str_replace("w", "px", $sizes[$i][1]); ?> ) { #wpc-home-hero:after{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                <?php

            } else if ($i == sizeof($sizes)-1 ) {
                ?>
                @media (min-width: <?php echo str_replace("w", "px", $sizes[$i-1][1]); ?> ) { #wpc-home-hero:after{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                <?php
                
            } else {
                ?>
                @media (min-width: <?php echo str_replace("w", "px", $sizes[$i-1][1]); ?> ) and (max-width: <?php echo str_replace("w", "px", $sizes[$i][1]); ?> ) { #wpc-home-hero:after{ background-image: url(<?php echo $sizes[$i][0]; ?>); } }
                <?php                
            }
        }      
    }
    ?>
    </style>
	<div id="wpc-notification">
		<p><strong>The <a href="<?php echo get_bloginfo('url'); ?>/speakers/">call for speakers is open</a> and will close at 12 midnight EST on March 21, 2016.</strong></p>
	</div> <!-- #wpc-notification -->
</div>
<div id="wpc-main">
	<div id="wpc-content">
		<div class="row"><?php

			// Print the sidebar
			if ( is_active_sidebar( 'home-sidebar' ) ) {

				?><div class="large-9 columns">
					<div class="wpc-content"><?php

						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );

							endwhile;
						endif;

					?></div>
				</div>
				<div class="large-3 columns">
					<div class="wpc-sidebar">
						<?php dynamic_sidebar( 'home-sidebar' ); ?>
					</div>
				</div><?php

			} else {

				?><div class="large-12 columns">
					<div class="wpc-content"><?php
						if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								get_template_part( 'content', get_post_format() );

							endwhile;
						endif;
					?></div>
				</div><?php

			}

		?></div>
	</div> <!-- #wpc-content -->

</div> <!-- #wpc-main --><?php

get_footer();