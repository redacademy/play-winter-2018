<?php
/**
 * The template for displaying the Contact Us Page.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="bubbles small yellow bubble-1"></div>			
			<div class="bubbles medium yellow bubble-2"></div>
			<div class="bubbles medium yellow bubble-3"></div>
			<div class="bubbles large orange bubble-4"></div>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
				
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

			<?php echo CFS()->get('social_media');?>
		</main><!-- #main -->

		<div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>

	</div><!-- #primary -->

<?php get_footer(); ?>