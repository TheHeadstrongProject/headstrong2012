<?php
/**
 * The template used for displaying stories content
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>


<section class="storyBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'story_banner', true)); ?>)">
	   
	   <div class="wrapper">
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 col-md-6 col-lg-3 col-lg-offset-1 banner-header">
				   		
				   		
				   		<?php the_title( '<h1>', '</h1>' ); ?>

				   		
			   		</div>
			   		
			   		
		   		</div>
		   
		   </div>
		   
	   </div>
	   
   </section>   

  

<div class="wrapper padded-panel extra-padded-panel">
	   
	<div class="container">
	
	    <div class="row">
	
			<div class="col-xs-12 col-lg-10 col-lg-offset-1" id="page-<?php the_ID(); ?>" >
					
					<?php the_content(); ?>
					
			</div>
		   		
	    </div>
	    
		   
	</div>

</div>


	<div class="wrapper read-more-stories">
	   
	   	<div class="container">
		    <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1 read-more-stories">
					
					<h2 class="reduced">Read their stories too</h2>
			    
<?php

$args = array(
    'post__not_in' => array(get_the_ID()),
    'post_type' => 'stories',
    'posts_per_page' => 3
);
	
$stories = new WP_Query($args);
		
	if ($stories->have_posts()) : while ($stories->have_posts()) : $stories->the_post(); 
?>			    
			   
			  					
					<div class="col-xs-12 col-sm-4">
					
					<div class="story-link" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'story_banner', true)); ?>)">
						<h3><?php the_title(); ?></h3>
						<a href="<?php the_permalink(); ?>" class="blockLink"><?php the_title(); ?></a>
					</div>

				</div> 
			    
			    
<?php

 endwhile; endif; 

?>		
		    </div>
	   	</div>
</div>
</div>
	


<?php echo get_post_meta($post->ID, 'page_scripts', true); ?>   
