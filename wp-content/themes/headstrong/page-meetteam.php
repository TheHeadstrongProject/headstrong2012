<?php
/**
 * Template Name: Headstrong Meet the team page
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

	<div class="meet-the-team-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			
			
			
?>	

<section class="storyBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
	   
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
		   <div class="col-xs-12 col-md-10 col-md-offset-1 center-align-panel">
			   
			  <?php the_content(); ?>
			  
		   </div>
		   </div>
	   </div>
   </div>



<div class="team-members">
	
	<?php

$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,
	'orderby' => 'meta_value_num',
	'meta_key' => 'order',
	'order' => 'ASC',
    
    'meta_query' => array (
	    array (
		  'key' => 'team_member_type',
		  'value' => 'team-member'
	    )
	  )
);

$team = new WP_Query($args);

if ($team->have_posts()) : while ($team->have_posts()) : $team->the_post(); 

$jobTitle = get_post_meta($post->ID, 'job_title', true) ? ', ' . get_post_meta($post->ID, 'job_title', true) : '';

?>	

<div class="wrapper bg-lightblue team-member-panel">
	    	<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-offset-1 col-lg-2 team-pic">
						<?php
							if ( has_post_thumbnail() ) {
							 the_post_thumbnail('medium');
							 } else {
								?><img src="<?php bloginfo('template_url'); ?>/img/unknown.png" alt="No picture" class="img-responsive"><?php
							 } ?>
		   			</div>
		   			<div class="col-xs-12 col-sm-9 col-md-7 col-lg-8 body-text">
			   
		   				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php echo $jobTitle; ?></a></h3>
		   				<div class="excerpt">
		   				<?php the_excerpt(); ?>
		   				</div>
		   			</div>
		   		</div>
	    	</div>
	   
   		</div>



<?php

 endwhile; endif; 

?>							
		   
	
</div>


<div class="wrapper padded-panel">
	   
	   <div class="container">
		   <div class="row">
		   <div class="col-xs-12 col-md-10 col-md-offset-1">
			   
			   <h2>Board Members</h2>
			   
			   
<?php
	
	$args = array(
    'post_type' => 'team',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
	'meta_key' => 'order',
	'order' => 'ASC',
    'meta_query' => array (
	    array (
		  'key' => 'team_member_type',
		  'value' => 'board-member',
	    )
	  )
);

$board = new WP_Query($args);

if ($board->have_posts()) : while ($board->have_posts()) : $board->the_post(); 

$jobTitle = get_post_meta($post->ID, 'job_title', true) ? ', ' . get_post_meta($post->ID, 'job_title', true) : '';
	
?>	

<div class="board-member">
				   
				   <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?><?php echo $jobTitle; ?></a></h3>
				   <div class="excerpt">
				  <?php the_excerpt(); ?>
				   </div>
				   
</div>



<?php

 endwhile; endif; 

?>									   
			   
		   </div>
		   </div>
	   </div>
   </div>
   
   
					
			
<?php			
			

			
		// End the loop.
		endwhile;
		?>
		
		

		
		

	</div>

<?php get_footer(); ?>
