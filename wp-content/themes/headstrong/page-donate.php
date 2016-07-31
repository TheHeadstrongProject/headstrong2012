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
<?php while (have_posts()):the_post(); ?>
	<div class="donate">
		<div class="donate__bg"></div>
		<div class="donate__header">
			<div class="donate__title">
				Make a donation
			</div>
			<p class="donate__header-p">
				Your support saves veterans' lives.
			</p>
		</div>

		<div class="donate__one-time">
			One time donation
		</div>

		<div class="donate__recurring">
			Recurring
		</div>
	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
