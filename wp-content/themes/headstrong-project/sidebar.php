<?php
/**
 * The sidebar containing the main widget area
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<div id="secondary" class="widget-area" role="complementary">
			<?php
			
			if (is_page('5')) {
				dynamic_sidebar( 'sidebar-2' );
			} else {
				dynamic_sidebar( 'sidebar-1' );
			}
			  ?>
		</div><!-- #secondary -->

	<?php endif; ?>