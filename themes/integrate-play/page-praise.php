<?php
/**
 * The template for displaying all pages.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<?php echo CFS()->get('contact_form');?>	
	</div><!-- #primary -->

	<button id="mobile-btn" class="btn orange">Get Info Package</button>

<?php get_footer(); ?>
