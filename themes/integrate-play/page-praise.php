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

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

			<div class="client-quotes">
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
			</div>

		</main><!-- #main -->
		<?php echo CFS()->get('contact_form');?>	
	</div><!-- #primary -->

<?php get_footer(); ?>
