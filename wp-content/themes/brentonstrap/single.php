<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package plainbootstrapbybrenton
 */

get_header(); ?>

			<div class="col-md-9"><!-- Main Content Area -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>

					<?php the_post_navigation(); ?>

				<?php endwhile; // End of the loop. ?>

			</div>

			<div class="col-md-3"><!-- Sidebar Area -->
				<?php get_sidebar(); ?>
			</div>

<?php get_footer(); ?>
