<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */


get_header(); ?>

<script>
$(function() {
	
	$('#testimonials ul li').hover(
		function() {
			$('#testimonials ul li').removeClass('testimonialpopout');
			$(this).addClass('testimonialpopout');
		}, function() {
			$('#testimonials ul li').removeClass('testimonialpopout');
		}
	);


});
</script>


	<div id="homepage-section-1">
		<? if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( 'top-background-image' ); ?>
		<div id="hpsection1-overlays">
				<div id="homepagetopbox1">
					<div>
					<h1><? the_field('slider_header'); ?></h1>
					<p><? the_field('slider_text'); ?></p>
					<a href="<? the_field('slider_link'); ?>"><? the_field('slider_action'); ?></a>
					</div>
				</div>	
				<div id="homepagetopbox2">
					<div>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						endwhile; endif; ?>
					</div>
				</div>
		</div>
	
	</div>

		<div id="testimonials">
		<div class="content-container">
			<ul>
			<?php
			$catquery = new WP_Query( 'cat=5&posts_per_page=3' );
			while($catquery->have_posts()) : $catquery->the_post();
			?>
			<li><span></span><? the_content(); ?><a href="/get-informed/">Learn more</a></li>
			<?php endwhile; ?>
			</ul>
		</div>
		</div>


		<div id="logo-carousel">
			<div id="wrapper">
				<div id="fade1"></div>
				<div id="fade2"></div>
				<ul id="carousel">

					<?php while ( have_posts() ) : the_post(); ?>
					<?php
					if( have_rows('featured_logos') ):
					    while ( have_rows('featured_logos') ) : the_row();
							$image = get_sub_field('logo');
							$size = 'full';
							$width = $image['sizes'][ $size . '-width'];
							$height = $image['sizes'][ $size . '-height'];
					        echo '<li class="media-tag-list">';
					        echo '<img width="' . $width . '" height="' . '150' . '" src="' . $image['url'] . '" />';
					        echo '</li>';
					    endwhile;
					else :
					endif;
					?>
					<?php endwhile; // end of the loop. ?>

				</ul>
			</div>
		</div>
				
		<?
		if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '21' );
//		if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( 'homepage-slider' );
		?>	

		<div class="family-container">
		<div class="content-container">
		<div id="family">
			<div id="family-text">
				<h3><? the_field('third_box_title', 2); ?></h3>
				<p><? the_field('third_box_text', 2); ?></p>
				<a href="<? the_field('third_box_link', 2); ?>"><? the_field('third_box_link_title', 2); ?></a>
			</div>
			<div id="family-image">
				<img src="<? echo get_field('bottomrightpic', 2); ?>" />
			</div>
		</div>
		</div>
	</div>

<?php get_footer(); ?>