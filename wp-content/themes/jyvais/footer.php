<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		 <?php get_template_part( 'parts/mailbox' ); ?>
		<div id="footer-container">
			<footer id="footer">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</footer>
		</div>



<?php wp_footer(); ?>
</body>
</html>
