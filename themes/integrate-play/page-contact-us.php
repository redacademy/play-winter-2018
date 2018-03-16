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

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
				
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>
			<div class="social-icons">
				<a href="https://twitter.com/KirstenatPlay" target="_blank" class="icon-frame"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/explore/locations/160361740973203/integrate-play-solutions/" target="_blank" class="icon-frame"><i class="fa fa-instagram"></i></a>
				<a href="https://www.facebook.com/IntegratePlaySolutions/" target="_blank" class="icon-frame"><i class="fa fa-facebook-f"></i></a>
				<a href="https://www.linkedin.com/in/kirsten-anderson-910a7314/" target="_blank" class="icon-frame"><i class="fa fa-linkedin"></i></a>
			</div>
		</main><!-- #main -->

		<?php echo CFS()->get('contact_form');?>

	</div><!-- #primary -->

<?php get_footer(); ?>