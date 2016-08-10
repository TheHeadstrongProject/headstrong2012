<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/favicon.png" />
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
	 <title><?php wp_title(); ?></title>
	<!-- Bootstrap -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/styles.024.css" rel="stylesheet">
	<!-- <link href="<?php bloginfo('template_url'); ?>/css/styles.css" rel="stylesheet"> -->

	<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

	<![endif]-->


	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
		       filter: none;
	    }
	  </style>
	<![endif]-->

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,600italic,700,700italic,400italic,300,300italic' rel='stylesheet' type='text/css'>




</head>

<body <?php body_class(); ?>>
	<?php include_once('templates/layout/analytics.php') ?>

	<?php
		if (!is_page('donate'))
			get_template_part('navigation');
	?>

	<?php get_template_part('hony-cta'); ?>
