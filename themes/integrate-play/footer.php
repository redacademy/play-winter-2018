<?php
/**
 * The template for displaying the footer.
 *
 * @package Integrate_Play_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				
			<?php if ( is_active_sidebar( 'footer-sidebar') ) : ?>
	<?php dynamic_sidebar( 'footer-sidebar' ); ?>
	<?php endif; ?>
		</div><!-- #page -->

		</footer><!-- #colophon -->

	</body>

	<?php wp_footer(); ?>
</html>
