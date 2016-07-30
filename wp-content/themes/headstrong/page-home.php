<?php
/**
 * Template Name: Headstrong Home page
 *
*/

get_header(); 

		
		
		// Start the loop.
		while ( have_posts() ) : the_post();

?>


<section class="standardHeroBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
	   
	   <?php echo get_post_meta($post->ID, 'banner_text', true); ?>	   
   </section>   
   
   <div class="problems-bar">
	   
	   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12">
	
			   		<?php echo get_post_meta($post->ID, 'problems_bar', true); ?>
					
					</div>
		   		</div>
	   </div>
   </div>
   
   <div class="wrapper bg-lightblue padded-panel">
	   
	   <div class="container">
		   <div class="row">
		   <div class="col-xs-12 col-md-8 col-md-offset-2 center-align-panel">
			   <h2><?php echo get_post_meta($post->ID, 'panel_1_title', true); ?></h2>
			   
			   <?php echo get_post_meta($post->ID, 'panel_1_content', true); ?>
			   
		   </div>
		   </div>
		   
	   </div>
	   
   </div>
   
   <!--div class="wrapper bg-lightblue padded-panel ">
	   
	   <div class="container">
		    <div class="row">
		   <div class="col-xs-12 center-align-panel">
		   		<h2>Stories</h2>
		   		
		   </div>
		    </div>
		    
		     <div class="row">
		   <div class="col-xs-6 col-md-4 center-align-panel">
			   
			   <blockquote class="quoteImage">
				   
				   <img src="http://placehold.it/500x382" class="img-responsive" alt="placeholder" />
				   
				   <p class="quote equal-height" data-heightGroup="hpQuotes">‘I never thought we’d have date night again’</p>
				   <p class="quotee">Danny, Iraq 2011</p>
				   
			   </blockquote>
		   		
		   		
		   </div>

		   <div class="col-xs-6 col-md-4 center-align-panel">
			   
			   <blockquote class="quoteImage">
				   
				   <img src="http://placehold.it/500x382" class="img-responsive" alt="placeholder" />
				   
				   <p class="quote equal-height" data-heightGroup="hpQuotes">‘Headstrong proved hidden wounds can be healed’’</p>
				   <p class="quotee">Laura, Iraq 2010</p>
				   
			   </blockquote>
		   		
		   		
		   </div>


		   <div class="col-xs-6 col-md-4 center-align-panel">
			   
			   <blockquote class="quoteImage">
				   
				   <img src="http://placehold.it/500x382" class="img-responsive" alt="placeholder" />
				   
				   <p class="quote equal-height" data-heightGroup="hpQuotes">‘I’m finally home’</p>
				   <p class="quotee">Jeff, Afganistan 2013</p>
				   
			   </blockquote>
		   		
		   		
		   </div>

		   
		     </div>
	   </div>

	</div-->
	
	 <div class="wrapper padded-panel">
	   
	   <div class="container">
		   <div class="row">
		   <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-align-panel">
			   <h2><?php echo get_post_meta($post->ID, 'donate_panel_title', true); ?></h2>
			   
			   <?php echo get_post_meta($post->ID, 'donate_panel_content', true); ?>
			   
		   </div>
		   </div>
		   
		   <div class="donate-flags">
   
   <div class="row">
   	<div class="col-xs-12 col-md-10 col-md-offset-1 center-align-panel">
	   	<h3 class="prominent">Donate now and help us provide the outstanding treatment they deserve.</h3>			   
   	</div>
   </div>
		   
		   <?php get_template_part( 'content', 'donatepanel' ); ?>
		   </div>
		   
	   </div>
	   
   </div>


	
	<?php		
		// End the loop.
		endwhile;
		?>


<?php 
	get_footer();
?>
