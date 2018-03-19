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

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>	
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>		
			
			<div class="science-block science-block-1">
				<div class="science-cfs-container"><?php echo CFS()->get('science_content_block_1');?>	</div>
			</div>

			<div class="science-block science-block-2">
				<div class="science-cfs-container"><?php echo CFS()->get('science_content_block_2');?>	</div>
			</div>

			<div class="science-block science-block-3">
				<div class="science-cfs-container"><?php echo CFS()->get('science_content_block_3');?>	</div>
			</div>

		</main><!-- #main -->

		<div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>

	</div><!-- #primary -->

	
<?php get_footer(); ?>