<?php
/**
 * Template Name: Connect Page Template
 *
 *	Yet another custom page; this time for connect, including
 *	1. Twitter
 *	2. Facebook
 *	3. Email
 * 
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="connect-item">
				<a href="https://twitter.com/clincolnmusic">
					<img id="twitter" src="/wp-content/uploads/custom/connect/twitter.png"> @clincolnmusic
				</a>
			</div>
			<div class="connect-item">
				<a href="https://www.facebook.com/pages/Chris-Lincoln-Music/233753673324702">
					<img id="facebook" src="/wp-content/uploads/custom/connect/facebook.png"> Chris Lincoln Music
				</a>
			</div>
			<div class="connect-item">
				<a href="mailto:chris@chrislincolnmusic.com">
					<img id="email" src="/wp-content/uploads/custom/connect/email.png"> chris@chrislincolnmusic.com
				</a>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar( 'front' ); ?>
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<img id="footer" src="/wp-includes/images/custom/footer.jpg">
		</div>
	</footer>