<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/carouFredSel.js" type="text/javascript"></script>

<script type="text/javascript">
			$(function() {

				var $c = $('#carousel'),
					$w = $(window);

				$c.carouFredSel({
					width: "variable",
					align: false,
					items: { width: "variable" },
					scroll: {
						duration: 60000,
						timeoutDuration: 0,
						easing: 'linear',
						pauseOnHover: 'immediate'
					}
				});
				$w.bind('resize.example', function() {
					var nw = $w.width();
					if (nw < 990) {
						nw = 990;
					}
					$c.width(nw * 3);
					$c.parent().width(nw);
				}).trigger('resize.example');
			});
		</script>		
		
		<script>
		$('#testimonials ul li').click( function() { alert('alert'); });
		</script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="content-container">

			<hgroup>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a></h1>
			</hgroup>

			<nav id="top-left-nav">
				<ul>
					<li class="social" id="facebook"><a target="_blank" href="https://www.facebook.com/HeadstrongProject"></a></li>
					<li class="social" id="twitter"><a target="_blank" href="https://twitter.com/getheadstrongg"></a></li>
					<li class="social" id="googleplus"><a target="_blank" href="https://plus.google.com/115909260285389105473"></a></li>
					<li class="social" id="mail"><a target="_blank" href="mailto:iamheadstrong@getheadstrong.org"></a></li>
					<li><a href="/category/news-and-events/">News & Events</a></li>
				</ul>
			</nav>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<h3 class="menu-toggle"></h3>
				<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<div id="main" class="wrapper">