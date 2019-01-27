<?php
/*
Template Name: Newsletter Page
*/
?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
		$subcategories = get_categories('&child_of=3&order=DESC&hide_empty'); // List subcategories of category '3' (even the ones with no posts in them)
		echo '<ul>';
		foreach ($subcategories as $subcategory) {
		  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
		}
		echo '</ul>';
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();
