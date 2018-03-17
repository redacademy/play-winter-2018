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

	<div class="main-carousel">
		<?php 
			$quotes = CFS()->get('client_quotes');
			foreach ( $quotes as $quote ) {
			echo $quote['quote'];
			}
		?>
	</div>


	<div class="content-container">
		<h1>Happy Clients</h1>
	</div>
		<div class="happy-clients">
		<?php
			$fields = CFS()->get( 'companies' );
			foreach ( $fields as $field ) {
				$companyLogos = $field['company_logo'];
				?><img src="<?php echo $companyLogos?>">
				<?php
			}
		?>
		</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>