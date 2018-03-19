<?php
/**
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<header class="header-banner">
				<section class="front-page-hero">
				</section>

				<div class="content-container">
					<h1>bring your team together</h1>
					<button class="btn purple">Contact Us</button>
				<div class="play-exerpt">
					<p>Integrate Play serves businesses by providing tried solutions to problems in communication, collaboration, and innovation through organized Play.</p>
				</div>
				</div>
			</header>

	
	<section class="circle-text-container">
		<div class="btn science-circle">
			<p>SCIENCE of PLAY</p>
		</div>

		<div class="btn saying-circle">
			<p>WHAT PEOPLE are SAYING</p>
		</div>

		<div class="btn services-circle">
			<p>SERVICES</p>
		</div>
	</section>


	<div class="main-carousel">
		<div class="carousel-cell">...</div>
  	<div class="carousel-cell">...</div>
  	<div class="carousel-cell">...</div>
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