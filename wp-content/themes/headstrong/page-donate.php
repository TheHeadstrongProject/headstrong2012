<?php
/**
 * Template Name: Headstrong Donate page
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

	<div class="donate-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			
			
			
?>	<section class="overlapHeroBanner">
	   
	   <div class="overlapHeroBannerImage" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
		   
	   </div>
	   <div class="mobile-bg dark">
		   &nbsp;
	   </div>
	   <div class="wrapper banner-body">
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 banner-text-header">
				   		
				   			   <?php echo get_post_meta($post->ID, 'banner_text', true); ?>	   
				   		
			   		</div>
			   		
			   		
		   		</div>
		   		
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 inset-box">
				   		
				   		<div class="donate-flags">
			   
			 			   
			   		   <?php get_template_part( 'content', 'donatepanel' ); ?>
			   
					    <?php echo get_post_meta($post->ID, 'text_below_donate_options', true); ?>
			   
		   </div>				   		
			   		</div>
			   		
			   		
		   		</div>
		   
		   </div>
		   
	   
   </section>  


<div class="wrapper bg-lightblue padded-panel extra-padded-panel">
	   
    <?php echo get_post_meta($post->ID, 'panel_1', true); ?>

</div>

<div class="wrapper padded-panel ">
	   
    <?php echo get_post_meta($post->ID, 'panel_2', true); ?>

</div>

<div class="wrapper photo-panel padded-panel">
	 	<div class="photo-panel-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'panel_3_background', true)); ?>)">&nbsp;</div>
	   
    <?php echo get_post_meta($post->ID, 'panel_3', true); ?>

</div>
   
   
					
			
<?php			
			

			
		// End the loop.
		endwhile;
		?>
		
		

		
		

	</div>

<?php get_footer(); ?>
