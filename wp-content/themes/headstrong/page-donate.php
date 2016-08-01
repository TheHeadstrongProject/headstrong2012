<?php
	/**
	 * Template Name: Headstrong Donate page
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

<header>
	<div class="navbar navbar-fixed-top donate__navbar">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="donate__logo">
						<a href="/">
							<img src="<?php bloginfo('template_url'); ?>/img/headstrong-logo.svg" class="img-responsive" alt="The Headstrong Project" />
						</a>
					</div>
				</div>
			</div>
	</div>
 </header>

<?php while (have_posts()):the_post(); ?>
	<div class="donate">
		<div class="donate__bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8">
					<div class="donate__card">
						<div class="donate__header">
							<div class="donate__title">
								Make a donation
							</div>
							<p class="donate__header-p">
								Your support saves veterans' lives.
							</p>
						</div>

						<div id="donate__stage-1">
							<div class="row">
								<div class="col-xs-12 col-md-6">
									<div class="donate__panel">
										<div class="donate__progress">
											progress indicator
										</div>
										<div class="donate__option">
											One time donation
										</div>
										<div class="donate__stage">
											<div class="donate__stage-copy">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit
											</div>
											<div>$10</div>
											<div>$20</div>
											<div>$30</div>
											<div>Other field</div>
										</div>
										<div class="donate__next" data-target="2">
											<button>
												Next
											</button>
										</div>
									</div>
								</div>

								<div class="col-xs-12 col-md-6">
									<div class="donate__panel donate__panel--recurring">
										<div class="donate__option">
											Recurring
										</div>
										<div class="donate__stage">
											<div class="donate__stage-copy">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit
											</div>
											<div>Private - $10</div>
											<div>Corporal - $25</div>
											<div>Sergeant - $50</div>
											<div>Captain - $100</div>
											<div>Colonel - $200</div>
											<div>General - $400</div>
										</div>
										<div class="donate__next" data-target="2">
											<button>
												Next
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div id="donate__stage-2">
							<div class="row">
								<div class="col-xs-12 col-md-12">
									<div class="donate__panel">
										<div class="donate__next" data-target="1">
											<button>
												Back
											</button>
										</div>
										<div class="donate__progress">
											progress indicator
										</div>
										<div class="donate__option">
											One time donation or Recurring
										</div>
										<div class="donate__stage">
											<div class="donate__stage-copy">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit
											</div>
											<div>First Name*</div>
											<div>Last Name*</div>
											<div>Address*</div>
											<div>City*</div>
											<div>State*</div>
											<div>Zip*</div>
											<div>Email*</div>
											<div>Phone</div>
										</div>
										<div class="donate__next">
											<a href="https://www.stayclassy.org/checkout/donation?cid=8919&amount=10&recurring=1&first=Maya First&last=H Last&email=test@headstrong&street=100 Lorem Ave&city=Headstrong City&state=NY&zip=55555">
												<button>
													Next
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>


<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */
?>

<footer>

	   <div class="container">



			   <div class="row">

				    <div class="col-xs-12 copyright">

					    <p>All photos copyright &copy; <?php echo date("Y"); ?> DVIDSHUB and made available under a Attribution 2.0 Generic license</p>

				    </div>

			   </div>

	   </div>

   </footer>



 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap-min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js-source/headstrong.js"></script>

<?php wp_footer(); ?>

</body>
</html>
