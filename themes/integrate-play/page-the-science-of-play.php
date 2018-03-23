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


					<?php if ( has_post_thumbnail() ) : ?>
							<?php $p_img = get_the_post_thumbnail_url(  ); 
							?>
					<?php endif; ?>	

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
				style="background:url('<?php echo $p_img; ?>'), #F6C31E; background-size: auto 100%; background-position: right bottom; background-repeat: no-repeat; ">
				
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
				<div class="bubbles small yellow bubble-2"></div>
				<div class="bubbles medium yellow bubble-3"></div>
				<div class="bubbles medium orange-regular bubble-4"></div>
				<div class="bubbles large yellow bubble-1 "></div>
			</div>

			<div class="science-block science-block-2">
				<div class="science-cfs-container">
					<div class="science-right-float"><?php echo CFS()->get('science_content_block_2_right');?>	</div>
					<div class="science-left-float"><?php echo CFS()->get('science_content_block_2_left');?>	</div>
				</div>
				<div class="bubbles large purple-x-light  bubble-5"></div>
				<div class="bubbles xl purple-x-light bubble-6"></div>			
				<div class="bubbles medium purple-light bubble-7"></div>
				<div class="bubbles xl purple-light bubble-8"></div>
				<div class="bubbles xxl purple-regular bubble-9"></div>
			</div>

			<div class="science-block science-block-3">
				<div class="science-cfs-container">
					<?php echo CFS()->get('science_content_block_3');?>	
					<div class="bubbles large purple-regular bubble-10"></div>
					<div class="bubbles xl purple-x-light bubble-11"></div>
					<div class="bubbles xxl purple-regular bubble-12"></div>
				</div>
				
			</div>


			
			
			


		</main><!-- #main -->

		<div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>

	</div><!-- #primary -->

	
<?php get_footer(); ?>