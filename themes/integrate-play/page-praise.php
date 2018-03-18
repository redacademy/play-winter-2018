<?php
/**
 * The template for displaying the Praise Page.
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
									<?php echo CFS()->get('test_author');?>
								</p>

								<p class="client-company">
									<?php echo CFS()->get('test_company');?>
								</p>
							</div>
						<?php endforeach;
						wp_reset_postdata(); ?>
					
				<?php endif?>
			</div> <!-- Testimonial Posts-->
		<?php echo CFS()->get('contact_form');?>	
	</div><!-- #primary -->

<?php get_footer(); ?>


<!-- delete the code below once Praise page is fully functional -->

			<!-- <div class="client-quotes">
			<?php
					$fields = CFS()->get( 'client_quotes' );
					foreach ( $fields as $field ) {
							$quote = $field['quote'];
							$name = $field['client_name'];
							$company = $field['client_company'];?> 
							<div class="single-quote">
								<p class="quote"><?php echo $quote ?></p>
								<p class="client-name"><?php echo $name ?></p>
								<p class="client-company"><?php echo $company ?></p>
							</div>
							<?php
					}
					?>
			</div> -->