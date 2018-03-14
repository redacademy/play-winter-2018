<?php
/**
 * The front page template file.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
    <header class="front-page-hero">
      <h1 class="hero-text">bring your team together</h1>
    </header>



    <!-- May not need next 7 lines of code -->
		<!-- <?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
          <!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?>
        </header>
      <?php endif; ?> -->
      


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>