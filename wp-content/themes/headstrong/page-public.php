<?php
/**
 * Template Name: Headstrong Public events page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header();

//Public events
$args = array(
	'post_type' => 'events',
	'posts_per_page' => -1,
	'orderby' => 'meta_value_num',
	'meta_key' => 'date',
	'order' => 'ASC',

	'meta_query' => array (
		array (
			'key' => 'event_type',
			'value' => 'public'
		)
	)
);

$public = new WP_Query($args);




?>

	<div class="eventslisting-page">
		<?php
// Start the loop.
while ( have_posts() ) : the_post();




?>	<section class="simpleHeader">
	
		   
	   <div class="container">
	   
	   		<div class="row">
		   		
		   		
		   		<div class="col-xs-12 center-align-panel">
			   		
			   		<?php the_title( '<h1>', '</h1>' ); ?>
			   		
		   		</div>
		   		
		   		
	   		</div>
	   		
	   
	   </div>
	   
   
</section>   
<?php if($post->post_content=="") : ?>
<div class="wrapper padded-panel">
	   
	<div class="container">
	
	    <div class="row">
	
			<div class="col-xs-12 col-lg-10 col-lg-offset-1" id="page-<?php the_ID(); ?>" >
					
					<?php the_content(); ?>
					
			</div>
		   		
	    </div>
	    		   
	</div>

</div>
<?php endif; ?>

   <div class="events-listing">

	   <?php if ($public->have_posts()) {  ?>
	   <div class="wrapper padded-panel events-panel public-events">

	<div class="container">

	    <div class="row">

			<div class="col-xs-12 col-lg-10 col-lg-offset-1">



				<?php while ($public->have_posts()) : $public->the_post(); ?>

				<div class="event">

					<div class="row">

<?php if ( has_post_thumbnail() ) { ?>

								<div class="col-xs-12 col-sm-4">
									<a href="<?php the_permalink(); ?>">
										<div class="img-cropper">
									<?php
			the_post_thumbnail(array(760, 760),array('class' => 'img-responsive'));
	


	?></div>
									</a>

								</div>
								
								

								<div class="col-xs-12 col-sm-8"> <?php } else { ?>
								<div class="col-xs-12"><?php } ?>

									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

									<div class="excerpt"><?php the_excerpt(); ?></div>



								</div>

							</div>



				</div>

				<?php endwhile; ?>

			</div>
	    </div>
	</div>
	   </div>
	   <?php } ?>

<?php endwhile; ?>

<div class="social-media-panel">
	
	<div class="wrapper padded-panel events-panel">

		<div class="container">
	
		    <div class="row">
	
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">
					
					<h2 class="reduced">Connect on social media</h2>
					
					<div class="sm-block sm-block-lg">
				   <a href="https://www.facebook.com/HeadstrongProject/" class="sm-button facebook-button">Facebook</a>
				   <a href="https://twitter.com/getheadstrongg" class="sm-button twitter-button">Twitter</a>
				   <a href="https://plus.google.com/+GetheadstrongOrg" class="sm-button google-button">Google+</a>
				   </div>
				</div>
	    	</div>
		</div>
	  </div>
	   
</div>


	</div>

<?php get_footer(); ?>
