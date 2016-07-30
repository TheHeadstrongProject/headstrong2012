<?php
/**
 * Template Name: Headstrong About us page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header(); ?>

	<div class="about-us-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			
			
			
?>	

<section class="aboutBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
	   <div class="mobile-bg dark">
		   &nbsp;
	   </div>

	   <div class="wrapper">
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 col-md-6 col-lg-offset-1 banner-header">
				   		
				   		<h1><?php the_title(); ?></h1>
				   		<?php echo get_post_meta($post->ID, 'banner_text', true); ?>	   

				   		
			   		</div>
			   		
			   		
		   		</div>
		   
		   </div>
		   
	   </div>
	   
   </section>   



 <div class="wrapper padded-panel">
	   
	   <div class="container">
		   <div class="row">
		   <div class="col-xs-12 col-md-10 col-md-offset-1 large-body-text">			   
			  <?php the_content(); ?>
			  
		   </div>
		   </div>
	   </div>
   </div>

	</div>
<?php			
			

			
		// End the loop.
		endwhile;
		?>
		
<?php get_footer(); ?>
