<?php

// Tweak the excerpt length
add_filter( 'excerpt_length', function( $excerpt_length ) {
	return 60;
});

// Tweak the excerpt more
add_filter( 'excerpt_more', function( $excerpt_more ) {
	return ' &hellip;';
});

get_header();

?><div id="wpc-home-hero"><?php
	/* <div id="wpc-notification">
		<p><strong>The <a href="<?php echo get_bloginfo('url'); ?>/speakers/">call for speakers is open</a> and will close at 12 midnight PST on March 21, 2016.</strong></p>
	</div> <!-- #wpc-notification --> */
?></div>
<div id="wpc-main">
	<div id="wpc-content">
		<div class="row"><?php

			// Print the sidebar
			if ( is_active_sidebar( 'home-sidebar' ) ) {

				?><div class="large-9 columns">
					<div class="wpc-content">

						<div class="callout primary">As WPCampus week is finally upon us, ticket sales are now closed. If you're unable to join us in person, you can <a href="https://tagboard.com/wpcampus/300756">follow along on Twitter at #WPCampus</a>. It also looks like we'll have a live stream during the event! We will be sure to spread the word when official. Hope to see you soon!</div>

						<h2>What Is WPCampus?</h2>
						<p>A two-day event with <a href="https://2016.wpcampus.org/schedule/">38 sessions from 41 speakers</a> covering a variety of topics, all dedicated to the confluence of WordPress in higher education.</p>
						
						<p><strong>Not to mention the endless networking opportunities!</strong> Meeting other web professionals from around the country can be invaluable and can provide you with a team of like-minded colleagues and experts to collaborate and consult with long into the future.</p>
						
						<h2>Who Will Be There?</h2>
						<p>Members of the higher education and WordPress communities from all over the United States and Canada. Our event is open to faculty, staff, students, and even professionals outside full time higher education.</p>
						
						<p>At this time, <a href="https://2016.wpcampus.org/attendees/">over 60 institutions</a> will be represented.</p>

						<?php if ( have_posts() ) :
							while ( have_posts() ) :
								the_post(); ?>
							
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<header class="entry-header">
										<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' );?>
									</header><!-- .entry-header -->
								
									<?php the_excerpt( sprintf(
										'Continue reading<span class="screen-reader-text"> "%s"</span>',
										get_the_title()
									) ); ?>
								
								</article>
	
							<?php endwhile;
						endif; ?>

					</div>
				</div>
				<div class="large-3 columns">
					<div class="wpc-sidebar">
						<?php dynamic_sidebar( 'home-sidebar' ); ?>
					</div>
				</div>

			<?php } else { ?>

				<div class="large-12 columns">
					<div class="wpc-content">
						
						<?php if ( have_posts() ) :
							while ( have_posts() ) :
								the_post(); ?>
								
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<header class="entry-header">
										<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' );?>
									</header><!-- .entry-header -->
								
									<?php the_excerpt( sprintf(
										'Continue reading<span class="screen-reader-text"> "%s"</span>',
										get_the_title()
									) ); ?>
								
								</article>
									
							<?php endwhile;
						endif; ?>
						
					</div>
				</div>

			<?php }

		?></div>
	</div> <!-- #wpc-content -->

</div> <!-- #wpc-main --><?php

get_footer();