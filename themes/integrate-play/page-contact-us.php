<?php
/**
 * The template for displaying the Contact Us Page.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
				
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

			<?php echo CFS()->get('social_media');?>
		</main><!-- #main -->

		<?php echo CFS()->get('contact_form');?>

	</div><!-- #primary -->

<?php get_footer(); ?>