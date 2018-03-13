<?php
/**
 * The template for displaying the footer.
 *
 * @package Integrate_Play_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav id="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>

				<div class="social-media">
					<i class="fa fa-linkedin"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-instagram"></i>
					<i class="fa fa-facebook-f"></i>
				</div>

				<div class="site-info">
					<h2 class="footer__company">Integrate Play Solutions</h2>
					<h3 class="footer__contact">Vancouver, BC, Canada</h3>
					<h3 class="footer__number">604-773-2546</h3>
				</div><!-- .site-info -->	

				</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>
