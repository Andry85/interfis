<?php
/*
Template Name: Articles
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

			if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
			elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
			else { $paged = 1; }

		while ( have_posts() ) : the_post();

			
						
			 $related = new WP_Query( array(
			    'order' => 'ASC',
			    'orderby' => 'title',
			    'posts_per_page' => 3,
			    'paged'          => $paged,
			    'category__in' => array( 4 ),
    			'category__not_in' => array(3),
			) );
		    while ( $related->have_posts() ) :
		        $related->the_post();

		        get_template_part( 'template-parts/content');
				
		    endwhile;


		    the_post_navigation();
		    // Вернуть $post в исходное значение
		    wp_reset_postdata();

			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>