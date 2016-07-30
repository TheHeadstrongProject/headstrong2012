<?php
/**
 * Template Name: Donate and Support
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
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-6' ); ?>
		</div><!-- #secondary -->


	</div>

<?php get_footer(); ?>