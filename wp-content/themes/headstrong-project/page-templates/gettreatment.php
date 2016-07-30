<?php
/**
 * Template Name: Get Treatment
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

<style type="text/css">

.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript">
(function($) {

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	// vars
	var args = {
		minZoom     : 3,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};
	
	// create map	        	
	var map = new google.maps.Map( $el[0], args);
	
	// add a markers reference
	map.markers = [];
	
	
	// add markers
	$markers.each(function(){
		
    	add_marker( $(this), map );
		
	});
	
	
	// center map
	center_map( map );
	
	
	// return
	return map;


}


function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map,
		icon: 'http://headstrong2012.staging.wpengine.com/wp-content/themes/headstrong-project/images/GetHeadstrongMarker.png'
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds(
	);

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
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

		<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #secondary -->
		
	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>

				<?php if( have_rows('addresses') ): ?>
					<div class="acf-map">
						<?php while ( have_rows('addresses') ) : the_row(); 

							$location = get_sub_field('location');

							?>
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
								<h4><?php the_sub_field('title'); ?></h4>
								<p class="address"><?php echo $location['address']; ?></p>
								<p><?php the_sub_field('description'); ?></p>
							</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>

				<?php the_field('after_map'); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	</div>

<?php get_footer(); ?>