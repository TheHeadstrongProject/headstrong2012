<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="header-image">
	<?php
	$url = wp_get_attachment_url( get_post_thumbnail_id(468) );
	?>
	<div id="header-image" style="background-image: url('<?php echo $url; ?>')">
	<div id="header-container">
		<h1 id="page-title-on-pic">
			Testimonials
		</h1>
	</div>
</div>

<div class="content-container">
	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the post format-specific template for the content. If you want to
				 * this in a child theme then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

		<div id="secondary" class="widget-area" role="complementary">
<?php
	if (is_category(5)) { dynamic_sidebar( 'sidebar-4' ); }
	if (is_category(6)) { dynamic_sidebar( 'sidebar-5' ); }
?>
</div>
</div>
<?php get_footer(); ?>