<?php
/**
 * Template Name: Headstrong Get in touch page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>

<?php get_header(); ?>
	<div class="getintouch-page">
		<?php while (have_posts()) : the_post(); ?>
			<section id="get-help__hero-form-box" class="overlapHeroBanner contactFormBanner">
				<div class="overlapHeroBannerImage" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
				</div>
				<div class="mobile-bg dark">
					&nbsp;
				</div>
				<div class="wrapper banner-body">
					<div class="container">
			   		<div class="row">
				   		<div class="col-xs-12 col-md-10 col-md-offset-1 banner-text-header">
		   			   <?php echo get_post_meta($post->ID, 'banner_text', true); ?>
				   		</div>
			   		</div>

			   		<div class="row">
				   		<div class="col-xs-12 col-md-10 col-md-offset-1 banner-text-header">
					   		<div class="get-help__form-box">
									<?php get_template_part('get-help-form'); ?>
				   			</div>
			   			</div>
		   			</div>
					</div>
				</div>
			</section>

			<div class="wrapper padded-panel extra-padded-panel">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-10 col-lg-offset-1">
							<p>Getting help shouldn’t be difficult. At Headstrong, we offer completely free and confidential treatment for post 9/11 combat veterans in New York City, Southern California (San Diego and Riverside Counties), and Houston, Texas.
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-2 col-lg-offset-1 hidden-xs">
							<img class="alignnone size-full wp-image-121" src="http://getheadstrong.org/wp-content/uploads/2016/03/weill-cornell.png" alt="weill-cornell" width="148" height="89" />
						</div>

						<div class="col-xs-12 col-sm-10 col-lg-8">
							<p>Our program was created by leading experts of trauma therapy at <span class="s1">Weill Cornell Medicine </span><span style="line-height: 1.5;">and you will work with world class clinicians of trauma therapy to develop treatment that is designed specifically for you.</span>
							</p>
							<p>For more information about the program and to enroll, please fill out the form.
							</p>
						</div>
					</div>

					<div class="row padded-panel">
						<div class="col-xs-12 col-sm-push-6 col-sm-6 col-md-push-7 col-md-5 treatment-centers-panel">
							<h2>Our treatment centers</h2>
							<h3>New York</h3>
							<p>New York</p>
							<h3>California</h3>
							<p>Temecula<br />
							Encinitas<br />
							Poway<br />
							La Mesa<br />
							San Diego<br />
							Coronado Island, Coronado
							</p>
							<h3>Texas</h3>
							<p>Houston </p>
						</div>

						<div class="col-xs-12 col-sm-6 col-sm-pull-6 col-md-7 col-md-pull-5 treatment-centers-map-panel">
							<div id="centers-map">
								<div class="marker" data-lat="40.7591625" data-lng="-73.98837800000001">
									<h4>West 45th Street</h4>
									<p class="address">West 45th Street, Manhattan, New York, NY, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="40.76199860000001" data-lng="-73.96569269999998">
									<h4>East 60th Street</h4>
									<p class="address">East 60th Street, New York, NY, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="40.7636234" data-lng="-73.9636868">
									<h4>East 63rd Street</h4>
									<p class="address">East 63rd Street, New York, NY, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="33.4936391" data-lng="-117.14836479999997">
									<h4>Temecula</h4>
									<p class="address">Temecula, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="32.6809697" data-lng="-117.1783208">
									<h4>Coronado Island</h4>
									<p class="address">Coronado Island, Coronado, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="32.7678287" data-lng="-117.02308390000002">
									<h4>La Mesa</h4>
									<p class="address">La Mesa, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="32.715738" data-lng="-117.16108380000003">
									<h4>San Diego</h4>
									<p class="address">San Diego, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="32.9628232" data-lng="-117.03586459999997">
									<h4>Poway</h4>
									<p class="address">Poway, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="33.0369867" data-lng="-117.29198180000003">
									<h4>Encinitas</h4>
									<p class="address">Encinitas, CA, United States</p>
									<p> </p>
								</div>

								<div class="marker" data-lat="29.7604" data-lng="-95.3698">
									<h4>Houston</h4>
									<p class="address">Houston, TX, United States</p>
									<p> </p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<script type="text/javascript">


function new_map( $el ) {

    // var
    var $markers = $el.find('.marker');

    // vars
    var args = {
        minZoom     : 3,
        center        : new google.maps.LatLng(0, 0),
        mapTypeId    : google.maps.MapTypeId.ROADMAP
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
        position    : latlng,
        map            : map,
        icon: 'http://getheadstrong.org/wp-content/themes/headstrong-project/images/GetHeadstrongMarker.png'
    });

    // add to array
    map.markers.push( marker );

    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content        : $marker.html()
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

var map = null;



function initMap() {

    // create map
    map = new_map( jQuery("#centers-map") );

};



                      </script>

		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>
