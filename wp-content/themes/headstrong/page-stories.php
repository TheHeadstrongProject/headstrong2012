<?php
/**
 * Template Name: Headstrong Stories page
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

	<div class="storieslisting-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			
			
			
?>	<section class="simpleHeader">
	
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 col-md-10 col-md-offset-1 center-align-panel">
				   		
				   		<?php the_title( '<h1>', '</h1>' ); ?>
				   		
			   		</div>
			   		
			   		
		   		</div>
		   		
		   
		   </div>
		   
	   
   </section>   

					
			
<?php			
			

			
		// End the loop.
		endwhile;
		?>
		
		
<?php

$args = array(
    'post_type' => 'stories',
    'posts_per_page' => -1
);

$c = 0;
	
$stories = new WP_Query($args);
		
	if ($stories->have_posts()) : while ($stories->have_posts()) : $stories->the_post(); 
	
	if ($c % 2)
	{
		$side = 'left';
	} else {
		$side = 'right';
	}
	
?>			    
			 
			 
<div class="wrapper stories-wrapper text-on-<?php echo $side; ?>">
	   
	   <div class="story-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'story_banner', true)); ?>)"></div>
	   
	   <div class="story-background"></div>
	   
	   	<div class="container">
		    <div class="row">
				<div class="col-xs-12 col-md-6 <?php echo $side == 'right' ? 'col-md-offset-6' : ''; ?> story-text">
					<h2 class="reduced"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
		   		</div>
		   				   		
		    </div>   
		    
		</div>

	</div>
			 
			   			    
			    
<?php

$c++;

 endwhile; endif; 

?>		

		
		

	</div>

<?php get_footer(); ?>
