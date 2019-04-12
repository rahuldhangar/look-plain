<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package plain_theme
 */

?>
</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="container">
<div class="row">
	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area col-lg-3 col-md-12" role="complementary">
	<?php dynamic_sidebar( 'footer-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area col-lg-3 col-md-12" role="complementary">
	<?php dynamic_sidebar( 'footer-2' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area col-lg-3 col-md-12" role="complementary">
	<?php dynamic_sidebar( 'footer-3' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area col-lg-3 col-md-12" role="complementary">
	<?php dynamic_sidebar( 'footer-4' ); ?>
	</div><!-- #primary-sidebar -->
</div>
</div>

	<?php endif; ?>
		<div class="max-size">
			<div class="design-credit">
				<div class="site-info">
				<?php echo '<p><a target="_blank" href="http://naveenkharwar.com/domo/look-plain/">Look Plain</a> '.__('Proudly powered by','look-plain').' WordPress</p>'; ?>
				</div><!-- .site-info -->
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- .conatiner -->

<?php wp_footer(); ?>

</body>
</html>
