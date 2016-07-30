<?php
/**
 * Template Name: Get Informed
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>
	
	<div class="header-image">
		<div class="content-container">
			<div id="about-treatment">
				Our Treatment is:
				<ul>
					<li>Cost-Free</li>
					<li>Bureaucracy-Free</li>
					<li>Confidential</li>
				</ul>
			</div>
		</div>
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
			<?php dynamic_sidebar( 'sidebar-7' ); ?>
		</div><!-- #secondary -->


	</div>

<?php get_footer(); ?>