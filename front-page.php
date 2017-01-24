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

$blog_url = get_bloginfo( 'url' );

?>
<div id="wpc-home-hero">
	<div id="wpc-notification">
		<p><a href="<?php echo $blog_url; ?>/2016/07/conference-survey/">A huge thank you + the WPCampus 2016 conference survey</a></p>
	</div> <!-- #wpc-notification -->
</div>
<div id="wpc-main">
	<div id="wpc-content">
		<div class="row">
			<?php

			// Print the sidebar
			if ( is_active_sidebar( 'home-sidebar' ) ) :

				?>
				<div class="large-9 columns">
					<div class="wpc-content">

						<div class="callout primary">A <a href="https://2016.wpcampus.org/thank-you/">BIG THANK YOU</a> to all involved for helping make the inaugural WPCampus conference a success!</div>

						<h2>What Is WPCampus?</h2>
						<p>A two-day event with <a href="<?php echo $blog_url; ?>/schedule/">38 sessions from 41 speakers</a> covering a variety of topics, all dedicated to the confluence of WordPress in higher education.</p>

						<p>The inaugural WPCampus conference took place July 15-16 at <a href="http://usfsm.edu/">The University of South Florida Sarasota-Manatee</a> in beautiful Sarasota, Florida.</p>
						
						<h2>Who Was There?</h2>
						<p>Members of the higher education and WordPress communities from all over the United States and Canada. WPCampus events are open to faculty, staff, students, and even professionals outside full time higher education.</p>
						
						<p><a href="<?php echo $blog_url; ?>/attendees/">Over 60 institutions</a> were represented from the United States and Canada.</p>

						<div class="callout primary" style="text-align:center;">
							<h2>WPCampus Session Recordings Available</h2>
							<p><strong>All WPCampus sessions were recorded and will be archived on our website.</strong> We have started uploading them to the website so be sure to <a href="/schedule/" style="color:#003366;"><strong>visit the WPCampus schedule</strong></a> to check them out.</p>
						</div>

						<div class="callout secondary" style="text-align:center;">
							<h2>Will Your Campus Be WPCampus 2017?</h2>
							<p><strong><a href="https://wpcampus.org/apply-to-host/">Our hosting application</a> will open Monday, August 22, 2016 and close Friday, October 28, 2016</strong></p>
							<p>The WPCampus planning team is already hard at work preparing for next year's conference. If you would like your campus to be considered for 2017, please start rounding up any questions you might have and begin&nbsp;talking to campus administrators.</p>
						</div>
						<?php

						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();

								?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<header class="entry-header">
										<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' );?>
									</header><!-- .entry-header -->
									<?php

									the_excerpt( sprintf(
										'Continue reading<span class="screen-reader-text"> "%s"</span>',
										get_the_title()
									) );

									?>
								</article>
								<?php

							endwhile;
						endif;

						?>
					</div>
				</div>
				<div class="large-3 columns">
					<div class="wpc-sidebar">
						<?php dynamic_sidebar( 'home-sidebar' ); ?>
					</div>
				</div>

			else :

				?>
				<div class="large-12 columns">
					<div class="wpc-content">
						<?php

						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();

								?>
								<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

									<header class="entry-header">
										<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' );?>
									</header><!-- .entry-header -->
									<?php

									the_excerpt( sprintf(
										'Continue reading<span class="screen-reader-text"> "%s"</span>',
										get_the_title()
									));

									?>
								</article>
								<?php

							endwhile;
						endif;

						?>
					</div>
				</div>
				<?php

			endif;

			?>
		</div> <!-- .row -->
	</div> <!-- #wpc-content -->

</div> <!-- #wpc-main -->
<?php

get_footer();
