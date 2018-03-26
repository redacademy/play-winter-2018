<?php
/**
 *
 * @package Integrate_Play_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<header class="header-banner">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="content-container">
						<div class="play-banner"><?php the_post_thumbnail( 'full' ); ?></div>
							
						<div class="play-excerpt">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<?php the_content(); ?>
						</div>
					</div>

			<?php endwhile; // End of the loop. ?>



			</header>

	
			<section class="circle-text-container">
				<a href="http://play.van.cp.academy.red/the-science-of-play/" class="btn science-circle">
					<h3 class="science-circle-title">Science of Play</h3>
					<p class="science-circle-content">Discover how play works</p>
				</a>

				<a href="http://play.van.cp.academy.red/praise/" class="btn saying-circle">
					<h3 class="saying-circle-title ">What People Are Saying</h3>
					<p class="saying-circle-content">Find out what people are saying about us</p>
				</a>

				<a href="http://play.van.cp.academy.red/services/" class="btn services-circle">
					<h3 class="services-circle-title ">Services</h3>
					<p class="services-circle-content">Explore how we can best serve your business needs</p>
				</a>
			</section>


		<div class="main-carousel">
				<?php
					$fields = CFS()->get( 'quotes_loop' );
					foreach ( $fields as $field ) {
						$frontPageQuotes = $field['front_page_quotes'];
						$frontPageAuthor = $field['front_page_author'];
						$frontPageCompany = $field['front_page_company'];
				?>

			<div class="carousel-cell">
				<div class="carousel-primary-text">
					<i class="fas fa-quote-left"></i>
					<p class="quote-text"><?php echo $frontPageQuotes?></p> 
				</div>

				<div class= "carousel-secondary-text">
					<p class="flickity-author-text"><?php echo $frontPageAuthor?></p>
					<p><?php echo "," ?></p>
					<p class="flickity-company-text"><?php echo $frontPageCompany?></p>
				</div>
			</div>

		
				<?php
					}
				?>
		</div>


			<div class="happy-clients-container">
				<h1>Happy Clients</h1>
			

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