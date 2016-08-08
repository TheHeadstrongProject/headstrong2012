<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h4><a href="/get-help">Get in touch</a></h4>
				  	<ul>
							<li><a href="/get-help">Get help</a></li>
							<li><a href="/about-us/contact-us/">Contact us</a></li>
							<li><a href="/about-us/privacy-policy/">Privacy policy</a></li>
						</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<h4><a href="/get-involved">Get involved</a></h4>
						<ul>
							<li><a href="/get-involved/upcoming-public-events/">Upcoming public events</a></li>
						  <li><a href="/get-involved/crowd-funding-campaigns/">Crowd funding campaigns</a></li>
						  <li><a href="/get-involved/corporate-giving/">Corporate giving</a></li>
						</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<h4><a href="/about-us">About us</a></h4>
						<ul>
							<li><a href="/about-us/meet-the-team/">Meet the team</a></li>
							<!--li><a href="#">Survivor stories</a></li-->
							<li><a href="/about-us/news/">News</a></li>
						</ul>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">
						<div id="social-media" class="social-media">
							<a
								data-ga-action="clicked on social media"
								data-ga-category="facebook"
								data-ga-label="footer"
						   	href="https://www.facebook.com/HeadstrongProject/"
						   	class="social-media__link ga-track"
						   	target="_blank"
						   	title="The Headstrong Project Facebook"
						   >
								<i class="fa fa-facebook"></i>
							</a>

							<a
								data-ga-action="clicked on social media"
								data-ga-category="twitter"
								data-ga-label="footer"
						   	href="https://twitter.com/HeadstrongProj/"
						   	class="social-media__link ga-track"
						   	target="_blank"
						   	title="The Headstrong Project Twitter"
						   >
								<i class="fa fa-twitter"></i>
							</a>

							<a
								data-ga-action="clicked on social media"
								data-ga-category="instagram"
								data-ga-label="footer"
						   	href="https://www.instagram.com/getheadstrong/"
						   	class="social-media__link ga-track"
						   	target="_blank"
						   	title="The Headstrong Project Instagram"
						  >
								<i class="fa fa-instagram"></i>
							</a>
				   	</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 copyright">
				<p>All photos copyright &copy; <?php echo date("Y"); ?> DVIDSHUB and made available under a Attribution 2.0 Generic license</p>
	    </div>
		</div>
	</div>
</footer>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-source/headstrong.1470633185.js"></script>

<?php wp_footer(); ?>
<script>

jQuery(document).ready(function(){
   if (typeof initMap == 'function')
	{
   var s = document.createElement("script");
   s.type = "text/javascript";
   s.src  = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDgGd7TYjvNRiHwMC7i4SuEP1P5YkWSrBA&callback=initMap";

   jQuery("head").append(s);
   }
});



</script>
</body>
</html>
