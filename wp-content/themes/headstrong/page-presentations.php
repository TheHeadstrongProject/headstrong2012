<?php
/**
 * The template for displaying presentations log in
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 *  Template Name: Presentations page
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header(); ?>

	<section class="sludge-content-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'presentations' );

			
		// End the loop.
		endwhile;
		?>

	</section>

<?php get_footer(); ?>
