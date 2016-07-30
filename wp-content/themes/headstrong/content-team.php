<?php
/**
 * The template used for displaying team content
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>


<section class="simpleHeader">
	
		   
	   <div class="container">
	   
	   		<div class="row">
		   		
		   		
		   		<div class="col-xs-12 center-align-panel">
			   		
			   		<?php the_title( '<h1>', '</h1>' ); ?>
			   		
		   		</div>
		   		
		   		
	   		</div>
	   		
	   
	   </div>
	   
   
</section>   



<div class="wrapper padded-panel extra-padded-panel">
	   
	   	<div class="container">
		    <div class="row">
			    
			   <?php if ( has_post_thumbnail() ) { ?>

				<div class="col-xs-12 col-sm-9 col-sm-push-3 col-md-8 col-md-push-4 col-lg-7 col-lg-push-4 body-text">
					<?php } else { ?>
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
				<?php } ?>
				
					<?php $jobTitle = get_post_meta($post->ID, 'job_title', true) ? get_post_meta($post->ID, 'job_title', true) : ''; ?>
					
					<?php if ($jobTitle) { ?>
					<h2 class="reduce"><?php echo $jobTitle; ?></h2>
					<?php } ?>
					
					<?php the_content(); ?>

		   		</div>
		   		
		   		<?php if ( has_post_thumbnail() ) { ?>
		   		<div class="col-xs-12 col-sm-3 col-sm-pull-9 col-md-4 col-md-pull-8 col-lg-3 col-lg-pull-6">
			   		<div class="team-thumb">
			   		<?php
					 the_post_thumbnail('large');
					 ?>
			   		</div>
			   		
		   		</div>
		   		<?php } ?>
		   		
		    </div>   
		    
		     
		   
		    
		    
		</div>

	</div>

 

		


<?php echo get_post_meta($post->ID, 'page_scripts', true); ?>   
