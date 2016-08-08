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
		<div class="donate__logo-container">
			<div class="donate__logo">
				<a
					class="ga-track"
					data-ga-action="clicked on nav"
					data-ga-category="home"
					data-ga-label="header"
					href="/"
					title="The Headstrong Project"
				>
					<img src="<?php bloginfo('template_url'); ?>/img/headstrong-logo.svg" class="img-responsive" alt="The Headstrong Project" />
				</a>
			</div>
		</div>
	</div>
</header>

<?php while (have_posts()):the_post(); ?>
	<div class="donate js-donate">
		<div class="donate__bg"></div>
		<div class="donate__card-container">
		<div class="donate__card">
			<div class="donate__header">
				<div class="donate__title">
					Support our veterans
				</div>
			</div>

			<div class="donate__progress-indicator">
				<div class="donate__progress donate__progress--active donate__progress--1"></div>
				<div class="donate__progress donate__progress--2"></div>
				<div class="donate__progress donate__progress--3"></div>
			</div>

			<div class="donate__card-content">
				<form
					action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
					class="donate-form"
					id="js-donate-form"
					method="POST"
				>
					<input type=hidden name="oid" value="00D37000000JqjL">
					<input id="donate-form__ret-url" type=hidden name="retURL" value="https://www.classy.org/checkout/donation?cid=8919">
					<input id="js-donate-form__recurring" class="donate-form__recurring" name="00N370000064aad" type="checkbox" value="1" />

					<div id="donate-form__stage-one-time-1" class="donate-form__stage">
						<div class="donate-form__stage-copy">
							Your donation helps save lives
						</div>

						<div class="donate-form__stage-content">
							<div class="container">
								<div class="row">
									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="one-time 10"
											data-value="10"
											type="button"
										>
											$10
										</button>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="one-time 20"
											data-value="20"
											type="button"
										>
											$20
										</button>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="one-time 1\30"
											data-value="30"
											type="button"
										>
											$30
										</button>
									</div>
								</div>
							</div>

							<div class="donate-form__group">
								<label class="donate-form__label" for="donate-form__amount">Other amount ($):</label>
								<input class="donate-form__input" id="donate-form__amount" name="00N370000064aaY" size="20" type="text" value=""/>
							</div>

							<div class="donate__card-footer">
								<button
									id="js-donate-form__next-1"
									class="donate-form__next ga-track"
									data-ga-action="clicked on next"
									data-ga-category="donate"
									data-ga-label="one-time stage-1"
									type="button"
								>
									Next
								</button>
							</div>
						</div>
					</div>

					<div id="donate-form__stage-2" class="donate-form__stage">
						<div class="donate-form__stage-copy">
							Personal information
						</div>

						<div class="donate-form__stage-content">
							<div class="donate-form__group donate-form__group--left">
								<label class="donate-form__label" for="first_name">First Name</label>
								<input class="donate-form__input" id="first_name" maxlength="40" name="first_name" size="20" type="text" />
							</div>

							<div class="donate-form__group donate-form__group--left">
								<label class="donate-form__label" for="last_name">Last Name</label>
								<input class="donate-form__input" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
							</div>

							<div class="donate-form__group donate-form__group--left">
								<label class="donate-form__label" for="email">Email</label>
								<input class="donate-form__input" id="email" maxlength="80" name="email" size="20" type="text" />
							</div>

							<div class="donate-form__group donate-form__group--left">
								<label class="donate-form__label" for="phone">Phone</label>
								<input class="donate-form__input" id="phone" maxlength="40" name="phone" size="20" type="phone" />
							</div>

							<div class="donate__card-footer">
								<button
									id="js-donate-form__submit"
									class="donate-form__next ga-track"
									data-ga-action="clicked on next"
									data-ga-category="donate"
									data-ga-label="stage-2"
									type="submit"
								>
									Next
								</button>
							</div>
						</div>
					</div>

					<div id="donate-form__stage-recurring-1" class="donate-form__stage">
						<div class="donate-form__stage-copy">
							Become a Headstrong member today.
							<br>
							<br>
							Your sustained commitment will ensure we can treat veterans cost-free every month.
						</div>

						<div class="donate-form__stage-content">
							<div class="container">
								<div class="row">
									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring 10"
											data-value="10"
											type="button"
										>
											$10
										</button>
										<div class="donate-form__recurring-rank">
											Private
										</div>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring"
											data-value="25"
											type="button"
										>
											$25
										</button>
                    <div class="donate-form__recurring-rank">
											Corporal
										</div>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring 50"
											data-value="50"
											type="button"
										>
											$50
										</button>
										<div class="donate-form__recurring-rank">
											Sergeant
										</div>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring 100"
											data-value="100"
											type="button"
										>
											$100
										</button>
										<div class="donate-form__recurring-rank">
											Captain
										</div>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring 200"
											data-value="200"
											type="button"
										>
											$200
										</button>
										<div class="donate-form__recurring-rank">
											Colonel
										</div>
									</div>

									<div class="col-xs-4">
										<button
											class="donate-form__amount-btn ga-track"
											data-ga-action="clicked on amount"
											data-ga-category="donate"
											data-ga-label="recurring 400"
											data-value="400"
											type="button"
										>
											$400
										</button>
										<div class="donate-form__recurring-rank">
											General
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
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
	<div class="copyright">
    <p>All photos copyright &copy; <?php echo date("Y"); ?> DVIDSHUB and made available under a Attribution 2.0 Generic license</p>
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
