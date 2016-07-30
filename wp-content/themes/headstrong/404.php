<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header(); ?>
<div class="error-404 not-found">
	<section class="simpleHeader">
	
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 center-align-panel">
				   		
				   			<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'headstrong' ); ?></h1>

			   		</div>
			   		
			   		
		   		</div>
		   		
		   
		   </div>
		   
	   
   </section>   
   
    <div class="wrapper padded-panel extra-padded-panel">
	 	
	 	<div class="container">
		    <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					
					<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location.', 'headstrong' ); ?></p>

				</div><!-- .page-content -->


				</div>
		    </div>
	 	</div>
	</div><!-- .entry-content -->
</div>




<?php get_footer(); ?>
