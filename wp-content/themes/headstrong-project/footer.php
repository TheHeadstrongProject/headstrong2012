<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div id="footer">
			<div id="footer-menu">
				<div class="content-container">
					<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_class' => 'nav-menu' ) ); ?>
					<ul id="social">
						<li id="facebook"><a target="_blank" href="https://www.facebook.com/HeadstrongProject"></a></li>
						<li id="twitter"><a target="_blank" href="https://twitter.com/getheadstrongg"></a></li>
						<li id="googleplus"><a target="_blank" href="https://plus.google.com/115909260285389105473"></a></li>
						<li id="mail"><a target="_blank" href="mailto:iamheadstrong@getheadstrong.org"></a></li>
					</ul>
				</div>
			</div>
			<img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" widt="300" height="83" /><div><p style="font-size;10px">All photos copyright (c) 2015 <a href="https://www.flickr.com/photos/dvids/sets/" target="_blank">DVIDSHUB</a> and made available under a <a href="https://creativecommons.org/licenses/by/2.0/" target="_blank">Attribution 2.0 Generic license</a></p></div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>