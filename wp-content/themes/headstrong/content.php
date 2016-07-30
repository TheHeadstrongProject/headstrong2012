<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<section class="simpleHeader">
	
		   
		   <div class="container">
		   
		   		<div class="row">
			   		
			   		
			   		<div class="col-xs-12 center-align-panel">
				   		
				   		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
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
						/* translators: %s: Name of current post */
						the_content( sprintf(
							__( 'Continue reading %s', 'twentyfifteen' ),
							the_title( '<span class="screen-reader-text">', '</span>', false )
						) );
			
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
							'separator'   => '<span class="screen-reader-text">, </span>',
						) );
					?>

				</div>
		    </div>
	 	</div>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
