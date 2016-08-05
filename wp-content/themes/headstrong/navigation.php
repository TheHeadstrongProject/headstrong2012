<?php
/**
 * The template for displaying the nav
 *
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>
 <header>

	   <div class="container">

		   <div class="row">

			   <div class="col-xs-5 col-sm-4 col-md-3 mainLogo" data-spy="affix" data-offset-top="55">
				   <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/headstrong-logo.svg" class="img-responsive" alt="The Headstrong Project" /></a>
			   </div>

			   <div class="col-xs-7 col-sm-8 col-md-9 social-media">

				   <div class="sm-block">
				   <a href="https://www.facebook.com/HeadstrongProject/" class="sm-button facebook-button">Facebook</a>
				   <a href="https://twitter.com/getheadstrongg" class="sm-button twitter-button">Twitter</a>
				   <a href="https://plus.google.com/+GetheadstrongOrg" class="sm-button google-button">Google+</a>
				   <a href="mailto:iamheadstrong@getheadstrong.org" class="sm-button email-button">Email</a>
				   </div>

			   </div>

		   </div>

	   </div>




		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="40">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/get-help/">Get help</a></li>
		        <li><a href="/get-involved/">Get involved</a></li>
		        <li class="dropdown"><a href="/about-us" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>

		        <ul class="dropdown-menu">
					<!--li><a href="/about-us/stories/">Stories</a></li-->
					<li><a href="/about-us/news/">News</a></li>
					<li><a href="/about-us/contact-us/">Contact us</a></li>
					<li><a href="/about-us/privacy-policy/">Privacy</a></li>
		        </ul>

		        </li>
		        <li><a href="/about-us/meet-the-team/">Meet the team</a></li>
		        <li class="donateLink">
		        	<a
			        	class="ga-track"
		        		data-ga-action="clicked on nav"
		        		data-ga-category="donate"
		        		data-ga-label="header"
		        		href="/donate"
		        	>
		        		Donate
		        	</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>





   </header>
