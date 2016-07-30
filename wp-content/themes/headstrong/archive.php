<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area archive">

		<?php if ( have_posts() ) : ?>
		
			<section class="simpleHeader">
	
		   
			   <div class="container">
			   
			   		<div class="row">
				   		
				   		
				   		<div class="col-xs-12 center-align-panel">
					   		
					   		<?php the_archive_title( '<h1>', '</h1>' ); 
					   		the_archive_description( '<div class="taxonomy-description">', '</div>' );
					   		?>
				   		</div>
				   		
				   		
			   		</div>
			   		
			   
			   </div>
			   
		   
		</section>   

 <div class="wrapper padded-panel extra-padded-panel">
	 	
	 	<div class="container">
		    <div class="row">
				<div class="col-xs-12 col-lg-10 col-lg-offset-1">


			
			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content-archive', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( '« Newer Entries', 'headstrong' ),
				'next_text'          => __( 'Older Entries »', 'headstrong' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
				</div></div></div></div>
		</div><!-- .site-main -->

<?php get_footer(); ?>
