<?php
/**
 * The template used for displaying stories content
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
	
			<div class="col-xs-12" id="page-<?php the_ID(); ?>" >
					
					<?php the_content(); ?>
					
			</div>
		   		
	    </div>
	    
	    <?php echo get_post_meta($post->ID, 'content_after_body', true); ?>   
		   
	</div>

</div>

	


<?php echo get_post_meta($post->ID, 'page_scripts', true); ?>   
