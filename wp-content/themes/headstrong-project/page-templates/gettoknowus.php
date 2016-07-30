<?php
/**
 * Template Name: Get To Know Us
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
<script>
$(function() {
	/* Show more links on Bio page */
	$('.showless').hide();
	$('.showmore').parent('div').children('p').hide();
	$('.bio-teaser').show();
	$('.showmore').click(function(){
		$(this).parent('div').children('p').children('.showless').show();
		$(this).parent('div').children('p').show();
		$(this).hide();
	});
	$('.showless').click(function(){
		$(this).parent('div').children('p').children('.showless').hide();
		$(this).parent('div').children('p').hide();
		$(this).parent('div').children('p:first-child').show();
		$(this).parent('div').children('p:first-child').children('.showmore').show();
	});

});
</script>

	<div class="header-image">
		<?php
		$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>
		<div id="header-image" style="background-image: url('<?php echo $url; ?>')">
		<div id="header-container">
			<h1 id="page-title-on-pic">
				<?php echo get_post_meta($post->ID, 'page_title', true); ?>
			</h1>
		</div>
	</div>
			
	<div class="content-container">

	<div id="primary" class="site-content">
		<div id="content" role="main" class="entry-content">

			<?php
			if( have_rows('the_team') ):
				echo '<h2>The Team</h2>';
			    while ( have_rows('the_team') ) : the_row();
			    	echo '<div class="bio">';
			        echo '<strong>' . get_sub_field('name') . '</strong>';
					$image = get_sub_field('photo');
					if( !empty($image) ):
						$size = 'bio-photo';
						$thumb = $image['sizes'][ $size ]; ?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif;			        echo '<div class="bio-teaser">' . get_sub_field('bio_teaser') . '</div>';
			        echo '<a class="showmore">Show more</a>';
			        echo get_sub_field('remainder_of_bio');
			        echo '</div>';
			    endwhile;
			else :
			endif;
			?>

			<?php
			if( have_rows('board_members') ):
				echo '<h2>Board Members</h2>';
			    while ( have_rows('board_members') ) : the_row();
			    	echo '<div class="bio">';
			        echo '<strong>' . get_sub_field('name') . '</strong>';
					$image = get_sub_field('photo');
					if( !empty($image) ):
						$size = 'bio-photo';
						$thumb = $image['sizes'][ $size ]; ?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif;
			        echo '<div class="bio-teaser">' . get_sub_field('bio_teaser') . '</div>';
			        echo '<a class="showmore">Show more</a>';
			        echo get_sub_field('remainder_of_bio');
			      	echo '</div>';  
			    endwhile;
			else :
			endif;
			?>

			<?php
			if( have_rows('clinicians') ):
				echo '<h2>Clinicians</h2>';
			    while ( have_rows('clinicians') ) : the_row();
			    	echo '<div class="bio">';
			        echo '<strong>' . get_sub_field('name') . '</strong>';
					$image = get_sub_field('photo');
					if( !empty($image) ):
						$size = 'bio-photo';
						$thumb = $image['sizes'][ $size ]; ?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif;			        echo '<div class="bio-teaser">' . get_sub_field('bio_teaser') . '</div>';
			        echo '<a class="showmore">Show more</a>';
			        echo get_sub_field('remainder_of_bio');
			        echo '</div>';
			    endwhile;
			else :
			endif;
			?>


			<?php
			if( have_rows('interns') ):
				echo '<h2>Interns</h2>';
			    while ( have_rows('interns') ) : the_row();
			    	echo '<div class="bio">';
			        echo '<strong>' . get_sub_field('name') . '</strong>';
					$image = get_sub_field('photo');
					if( !empty($image) ):
						$size = 'bio-photo';
						$thumb = $image['sizes'][ $size ]; ?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php endif;			        echo '<div class="bio-teaser">' . get_sub_field('bio_teaser') . '</div>';
			        echo '<a class="showmore">Show more</a>';
			        echo get_sub_field('remainder_of_bio');
			        echo '</div>';
			    endwhile;
			else :
			endif;
			?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- #secondary -->


	</div>

<?php get_footer(); ?>