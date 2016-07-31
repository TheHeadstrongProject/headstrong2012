<?php
/**
 * Template Name: Headstrong Home page
 *
*/
?>

<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="homepage__above-the-fold">
	  <div class="homepage__panel">
	    <div class="homepage__panel-content">
	      <h1 class="homepage__panel-title">We've got your back.</h1>
	      <p class="homepage__p">We provide free, confidential mental health support <i>that works,</i> for veterans of Iraq and Afghanistan.</p>
	      <button class="homepage__button">Get Help</button>
	    </div>
	  </div>

	  <div class="homepage__panel homepage__panel--secondary">
	    <div class="homepage__panel-content homepage__panel-content--secondary">
	      <h2 class="homepage__panel-title homepage__panel-title--secondary">Our Veterans need us.</h2>
	      <p class="homepage__p">With your support, we can extend our proven program to reach more veterans in need.</p>
	      <button class="homepage__button">Donate Now</button>
	    </div>
	  </div>
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
