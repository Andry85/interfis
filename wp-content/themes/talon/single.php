<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Talon
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );?> 

			<!-- the_post_navigation(); -->

			<nav class="navigation post-navigation" role="navigation">
				<div class="nav-links">
					<div class="nav-previous"><?php previous_post_link('%link', '%title', true); ?></div>
					<div class="nav-next"><?php next_post_link('%link', '%title', true); ?></div>
				</div>
			</nav>

		  
			

			

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php
if ( get_theme_mod('fullwidth_single', 0) != 1 ) :
	get_sidebar();
endif; ?>
</div>
<?php get_footer(); ?>
