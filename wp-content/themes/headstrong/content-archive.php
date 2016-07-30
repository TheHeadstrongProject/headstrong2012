<?php
/**
* The template used for displaying team content
*
* @package WordPress
* @subpackage Headstrong
* @since Headstrong 1.0
*/
?>

<div class="news-story-summary">

	<div class="row">

		<div class="col-xs-12 col-sm-4">
			<a href="<?php the_permalink(); ?>">
				<div class="img-cropper">
			<?php	
			if ( has_post_thumbnail() ) {
				the_post_thumbnail(array(760, 760),array('class' => 'img-responsive'));
		 	} 
		 
		 
		 ?></div>
			</a>
			
		</div>
		
		<div class="col-xs-12 col-sm-8">
			
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="date"><?php echo get_post_time('F j, Y'); ?> </p>
			<div class="excerpt">
			<?php the_excerpt(); ?>
			</div>
			<p><a href="<?php the_permalink(); ?>">Read more&hellip;</a></p>
		
		
		</div>
	
	</div>
</div>
