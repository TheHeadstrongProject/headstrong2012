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

<header class="header">
	<div class="header__sm">
	  <div id="social-media" class="social-media">
	  	<a
				data-ga-action="clicked on social media"
				data-ga-category="facebook"
				data-ga-label="header"
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
				data-ga-label="header"
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
				data-ga-label="header"
		   	href="https://www.instagram.com/getheadstrong/"
		   	class="social-media__link ga-track"
		   	target="_blank"
		   	title="The Headstrong Project Instagram"
		   >
				<i class="fa fa-instagram"></i>
			</a>
	 	</div>
 	</div>

	<nav id="header__navbar" class="navbar navbar-default" data-spy="affix" data-offset-top="35">
	  <div class="header__nav">
	  	<a
				class="header__logo-link ga-track"
				data-ga-action="clicked on nav"
				data-ga-category="home"
				data-ga-label="header"
				href="/"
				title="The Headstrong Project"
			>
				<img
					alt="The Headstrong Project"
					class="header__logo"
					src="<?php bloginfo('template_url'); ?>/img/HeadstrongLogo-Tagline.svg"
				/>
			</a>

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
	        <li>
		        <a
		        	class="ga-track"
							data-ga-action="clicked on nav"
		      		data-ga-category="get-help"
		      		data-ga-label="header"
	    				href="/get-help/"
    				>
	    				Get help
	  				</a>
  				</li>
	        <li>
	        	<a
	        		class="ga-track"
							data-ga-action="clicked on nav"
		      		data-ga-category="get-involved"
		      		data-ga-label="header"
	        		href="/get-involved/"
        		>
        			Offer support
      			</a>
    			</li>
	        <li>
	        	<a
	        		class="ga-track"
							data-ga-action="clicked on nav"
		      		data-ga-category="donate"
		      		data-ga-label="header"
	        		href="/about-us/news/"
        		>
        			News
      			</a>
    			</li>
	        <li class="dropdown">
	        	<a
							aria-expanded="false"
							aria-haspopup="true"
							class="dropdown-toggle ga-track"
							data-ga-action="clicked on nav"
							data-ga-category="about-us"
							data-ga-label="header"
							data-toggle="dropdown"
							href="/about-us"
							role="button"
        		>
        			About us <span class="caret"></span>
        		</a>
	        	<ul class="dropdown-menu">
							<!--li><a href="/about-us/stories/">Stories</a></li-->
							<li>
								<a
									class="dropdown-toggle ga-track"
									data-ga-action="clicked on nav"
		      				data-ga-category="meet-the-team"
		      				data-ga-label="header"
									href="/about-us/meet-the-team/"
								>
									Meet the team
								</a>
							</li>
							<li>
								<a
									class="dropdown-toggle ga-track"
									data-ga-action="clicked on nav"
		      				data-ga-category="contact-us"
		      				data-ga-label="header"
									href="/about-us/contact-us/"
								>
									Contact us
								</a>
							</li>
							<li>
								<a
									class="dropdown-toggle ga-track"
									data-ga-action="clicked on nav"
		      				data-ga-category="privacy-policy"
		      				data-ga-label="header"
									href="/about-us/privacy-policy/"
								>
									Privacy
								</a>
							</li>
	        	</ul>

	        </li>
	        <li class="donateLink">
	        	<a
	        		id="header__donate-link"
		        	class="header__donate-link ga-track"
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
