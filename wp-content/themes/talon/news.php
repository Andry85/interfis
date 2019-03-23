<?php
/*
Template Name: News
*/
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Talon
 */

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">

			<?php 
			  $temp = $wp_query; 
			  $wp_query = null; 
			  $wp_query = new WP_Query(); 
			  $wp_query->query('showposts=5&category=24'.'&paged='.$paged); 

			  while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>

			 <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

			<?php 
			  $wp_query = null; 
			  $wp_query = $temp;  // Reset
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php
get_footer();
