<?php
/*
Template Name: Page Builder
*/

get_header(); ?>
<div class="row">
	<div id="primary" class="content-area fullwidth">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
