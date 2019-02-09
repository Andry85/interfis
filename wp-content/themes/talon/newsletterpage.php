<?php
/*
Template Name: Newsletter Page
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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) : ?>
				<div class="entry-thumb">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('talon-blog-image'); ?></a>
				</div>
				<?php endif; ?>	

				<div class="post-content">
					<header class="entry-header">
						<?php
						
						the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );

						if ( 'post' === get_post_type() && get_theme_mod( 'hide_meta_index' ) != 1) : ?>
						<div class="entry-meta">
							<?php talon_posted_on(); ?>
						</div><!-- .entry-meta -->
						<?php
						endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php
							$subcategories = get_categories('&child_of=3&order=DESC&hide_empty'); // List subcategories of category '3' (even the ones with no posts in them)
							echo '<ul class="years-list">';
							foreach ($subcategories as $subcategory) {
							  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
							}
							echo '</ul>';
						?>
					</div><!-- .entry-content -->
				</div>
			</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php
get_footer();
