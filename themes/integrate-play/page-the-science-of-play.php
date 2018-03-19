<?php
/**
 * The template for displaying the Science of Play page.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>		
			
			<div class="science-block science-block-1"><?php echo CFS()->get('science_content_block_1');?>	</div>
			<div class="science-block science-block-2"><?php echo CFS()->get('science_content_block_2');?>	</div>
			<div class="science-block science-block-3"><?php echo CFS()->get('science_content_block_3');?>	</div>

		</main><!-- #main -->

		<div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>

	</div><!-- #primary -->

	
<?php get_footer(); ?>