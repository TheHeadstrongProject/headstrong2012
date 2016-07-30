<?php
/**
 * Template Name: Member listing page
 *
*/

get_header(); ?>

	<section class="sludge-content-page">	
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'memberlisting' );

			
		// End the loop.
		endwhile;
		?>

	</section>

<?php get_footer(); ?>
