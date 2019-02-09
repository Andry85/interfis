<?php
/*
Template Name: Home Page
*/
?>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

			<div class="map-wrap">
				<div class="map-wrap__contacts">
					<p>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<span class="map-wrap__row">7-10 Chandos Street<br> London<br> W1G 9DG</span>
					</p>
					<p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<span class="map-wrap__row">+44 (0) 20 3368 6968</span>
					</p>
					<p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<span class="map-wrap__row"><a href="mailto:info@interfis.com">info@interfis.com</a></span>
					</p>
				</div>
				<iframe class="map" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.14724791049957278%2C51.51702690819879%2C-0.14370739459991458%2C51.51855243135835&amp;layer=mapnik"></iframe>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
