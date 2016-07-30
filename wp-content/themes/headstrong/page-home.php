<?php
/**
 * Template Name: Headstrong Home page
 *
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="standardHeroBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">
		<?php echo get_post_meta($post->ID, 'banner_text', true); ?>
	</section>

	<div class="problems-bar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php echo get_post_meta($post->ID, 'problems_bar', true); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper bg-lightblue padded-panel">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2 center-align-panel">
					<h2>
						<?php echo get_post_meta($post->ID, 'panel_1_title', true); ?>
					</h2>

					<?php echo get_post_meta($post->ID, 'panel_1_content', true); ?>
			   </div>
				</div>
			</div>
		</div>

		<div class="wrapper padded-panel">
		 	<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2 center-align-panel">
					<h2>
						<?php echo get_post_meta($post->ID, 'donate_panel_title', true); ?>
					</h2>

					<?php echo get_post_meta($post->ID, 'donate_panel_content', true); ?>
				</div>
			</div>

			<div class="donate-flags">
				<div class="row">
					<div class="col-xs-12 col-md-10 col-md-offset-1 center-align-panel">
						<h3 class="prominent">
							Donate now and help us provide the outstanding treatment they deserve.
						</h3>
					</div>
				</div>

				<?php get_template_part( 'content', 'donatepanel' ); ?>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
