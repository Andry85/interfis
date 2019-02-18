<?php
/**
 * The home template file.
 *
 * @package Talon
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area col-md-8 <?php echo esc_attr(talon_blog_layout()); ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="posts-layout">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
				<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

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
	</div><!-- #primary -->

<?php 
	if ( talon_blog_layout() == 'list' ) {
		get_sidebar();
	}
?>
</div>
<?php get_footer(); ?>
