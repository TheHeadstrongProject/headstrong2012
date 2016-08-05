<?php
/**
 * Template Name: Headstrong Home page
 *
*/
?>

<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
	<section class="homepage__above-the-fold">
		<div class="homepage__panel-container">
		  <div class="homepage__panel">
		    <div class="homepage__panel-content">
		      <h1 class="homepage__panel-title">
		      	We've got your back.
		      </h1>
		      <p class="homepage__p">
		      	We provide veterans of Iraq and Afghanistan with free mental health care that works.
		      </p>
		      <a
		      	class="homepage__cta ga-track"
		      	data-ga-action="clicked on cta"
		      	data-ga-category="get-help"
		      	data-ga-label="homepage above-the-fold"
		      	href="/get-help"
		      >
		      	Get Help
		      </a>
		    </div>
		  </div>
	  </div>

	  <div class="homepage__panel-container homepage__panel-container--secondary">
		  <div class="homepage__panel homepage__panel--secondary">
		    <div class="homepage__panel-content homepage__panel-content--secondary">
		      <h2 class="homepage__panel-title homepage__panel-title--secondary">Our veterans need us.</h2>
		      <p class="homepage__p">
		      	With your support, we can extend our proven program to reach more veterans in need.
		      </p>
		      <a
		      	class="homepage__cta ga-track"
		      	data-ga-action="clicked on cta"
		      	data-ga-category="donate"
		      	data-ga-label="homepage above-the-fold"
		      	href="/donate"
		      >
		      	Donate Now
		      </a>
		    </div>
		  </div>
	</section>

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
