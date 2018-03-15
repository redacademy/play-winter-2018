<?php
/**
	* Template Name: Front-Page */
 /*
 /* @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
    <header class="front-page-hero">
    </header>

  <div class="content-container">
    <h1>bring your team together</h1>
    <button class="btn purple">Contact Us</button>
  </div>
    <!-- May not need next 7 lines of code -->
		<!-- <?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
          <!-- <h1 class="page-title screen-reader-text"><?php single_post_title(); ?>
        </header>
      <?php endif; ?> -->

		<div class="happy-clients">
			<?php
						$fields = CFS()->get( 'companies' );
			foreach ( $fields as $field ) {
					$companyLogos = $field['company_logo'];
					?> <img src="<?php echo $companyLogos?>">
					<?php
			}
			?>
		</div>

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