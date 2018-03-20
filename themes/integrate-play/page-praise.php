<?php
/**
 * The template for displaying the Praise Page.
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
			<div class="bubbles medium yellow bubble-1"></div>			
			<div class="bubbles large orange-x-light bubble-2"></div>
			<div class="bubbles large orange bubble-3"></div>
			<div class="bubbles medium yellow bubble-4"></div>
			<div class="bubbles xl orange bubble-5"></div>
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			

		</main><!-- #main -->
		<!-- insert testimonials -->
		<div class="testimonials">
				<?php
				// The Query
				$args = array(
					'post_type' => 'testimonials',
					'posts_per_page' => 5
				);
				$testimonial = get_posts( $args );

				// The Loop
				if ( ! empty ($testimonial) ) :?>

					
						<?php foreach ($testimonial as $post) : setup_postdata ($post); ?>
							<div class="single-quotes">

								<div class="full-quote">
									<?php the_content(); ?>
									<a href="" class="read-less">Show Less</a>
								</div>
									
								<div class="quote-excerpt">
									<?php the_excerpt(); ?>
								</div>	

								<p class="client-name">
									<?php echo CFS()->get('praise_client_name');?>
								</p>

								<p class="client-company">
									<?php echo CFS()->get('test_company');?>
								</p>
							</div>
						<?php endforeach;
						wp_reset_postdata(); ?>
					
				<?php endif?>
			</div> <!-- Testimonial Posts-->
			<div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>	
	</div><!-- #primary -->

<?php get_footer(); ?>


