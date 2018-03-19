<?php
/**
 * The template for displaying the footer.
 *
 * @package Integrate_Play_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<nav id="foot-navigation" class="footer-nav">
						<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
				</nav>

				<div class="social-media">
					<i class="fab fa-linkedin-in"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-facebook-f"></i>
				</div>

				<div class="site-info">
					<p class="footer__company">Integrate Play <strong class="secondary-text">Solutions</strong></p>
					<p class="footer__contact">Vancouver, BC, Canada</p>
					<p class="footer__number">604-773-2546</p>
				</div>

				</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php get_sidebar(); ?>
		<?php wp_footer(); ?>

	</body>
</html>
