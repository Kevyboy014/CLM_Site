<?php
/**
 * Template Name: Custom Front Page
 *
 * Description: Basically the standard front page with a few minor tweaks :)
 *
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width: 50%">
		<img id="poster" style="width: 100%" src="wp-includes/images/custom/poster.jpg">
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<img id="footer" src="/wp-includes/images/custom/footer.jpg">
		</div>
	</footer>