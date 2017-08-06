<?php

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		// Set the post ID.
		$speaker_id = get_the_ID();

		// Get the speaker meta.
		$speaker_position = get_post_meta( $speaker_id, 'conf_sch_speaker_position', true );
		$speaker_company = get_post_meta( $speaker_id, 'conf_sch_speaker_company', true );

		// Get the speaker social media.
		$speaker_twitter = get_post_meta( $speaker_id, 'conf_sch_speaker_twitter', true );
		$speaker_linkedin = get_post_meta( $speaker_id, 'conf_sch_speaker_linkedin', true );

		?>
		<article id="post-<?php echo $speaker_id; ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' );?>
			</header><!-- .entry-header -->
			<?php

			// Get the featured image.
			$post_thumbnail_id = get_post_thumbnail_id( $speaker_id );
			$featured_image = $post_thumbnail_id > 0 ? wp_get_attachment_image_src( $post_thumbnail_id, 'thumbnail' ) : '';
			if ( ! empty( $featured_image[0] ) ) :
				?><img class="article-thumbnail" src="<?php echo $featured_image[0]; ?>" /><?php
			endif;

			?>
			<div class="article-speaker">
				<?php

				// Print speaker meta.
				if ( $speaker_position || $speaker_company ) :

					?>
					<div class="article-speaker-meta">
						<?php

						// Print the speaker position.
						if ( $speaker_position ) :
							?><span class="speaker-position"><?php echo $speaker_position; ?></span><?php
						endif;

						// Print the speaker company.
						if ( $speaker_company ) :

							if ( $speaker_position ) {
								echo ', ';
							}

							// Add the company URL.
							$speaker_company_url = get_post_meta( $speaker_id, 'speaker_company_url', true );
							if ( $speaker_company_url ) {
								$speaker_company = '<a href="' . $speaker_company_url . '">' . $speaker_company . '</a>';
							}

							?><span class="speaker-company"><?php echo $speaker_company; ?></span><?php
						endif;

						?>
					</div>
					<?php

				endif;

				if ( $speaker_twitter || $speaker_linkedin ) :

					?>
					<ul class="article-speaker-social-media">
						<?php

						foreach ( array( 'twitter', 'linkedin' ) as $social ) :

							// Build social media URL and label.
							$social_url = '';
							$social_label = '';

							if ( 'twitter' == $social ) {
								if ( $speaker_twitter ) {
									$social_url   = "https://twitter.com/{$speaker_twitter}";
									$social_label = '@' . str_replace( '@', '', $speaker_twitter );
								}
							} elseif ( 'linkedin' == $social ) {
								if ( $speaker_linkedin ) {
									$social_url   = $speaker_linkedin;
									$social_label = 'LinkedIn';
								}
							}

							if ( $social_label ) :

								?>
								<li class="social-media <?php echo $social; ?>"><a href="<?php echo $social_url; ?>"><i class="conf-sch-icon conf-sch-icon-<?php echo $social; ?>"></i> <span class="icon-label"><?php echo $social_label; ?></span></a></li>
								<?php
							endif;
						endforeach;

						?>
					</ul>
					<?php
				endif;

				?>
			</div>
			<?php

			the_content();

			// Print the speaker's events.
			if ( class_exists( 'Conference_Schedule_Speaker' ) ) :

				// Get speaker.
				$speaker = new Conference_Schedule_Speaker( $speaker_id );

				// Get the events
				$events = $speaker->get_events();
				if ( ! empty( $events ) ) :

					// Build events with links.
					$event_links = array();

					foreach ( $events as $event ) {
						$event_links[] = '<a href="' . get_permalink( $event->ID ) . '">' . $event->post_title . '</a>';
					}

					// Print events, separated by comma.
					?>
					<div class="article-speaker-sessions">
						<span class="article-speaker-session-label"><?php echo _n( 'Session:', 'Sessions:', count( $event_links ), 'wpcampus' ); ?></span>
						<span class="article-speaker-session-events"><?php echo implode( ',', $event_links ); ?></span>
					</div>
					<?php

				endif;
			endif;

			?>
		</article>
		<?php
	endwhile;
endif;

get_footer();
