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

get_header(); ?>

	<div class="getintouch-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();




?>	   <section class="overlapHeroBanner contactFormBanner">


		   <div class="overlapHeroBannerImage" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">

		   </div>
		   <div class="mobile-bg dark">
			   &nbsp;
		   </div>
		   <div class="wrapper banner-body">

			   <div class="container">

			   		<div class="row">


				   		<div class="col-xs-12 col-lg-10 col-lg-offset-1 banner-text-header">

				   			   <?php echo get_post_meta($post->ID, 'banner_text', true); ?>

				   		</div>


			   		</div>

			   		<div class="row">


				   		<div class="col-xs-12 col-lg-10 col-lg-offset-1  inset-form">

				   			<div class="contact-form">
					   		 <?php //the_content(); ?>

					   			<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">

<input type=hidden name="oid" value="00D37000000JqjL">
<input type=hidden name="retURL" value="http://getheadstrong.org">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
<!--  these lines if you wish to test in debug mode.                          -->
<!--  <input type="hidden" name="debug" value=1>                              -->
<!--  <input type="hidden" name="debugEmail"                                  -->
<!--  value="maureen@nexgenconsultants.com">                                  -->
<!--  ----------------------------------------------------------------------  -->

<!-- <input type="hidden" name="debug" value=1>
<input type="hidden" name="debugEmail" value="maureen@nexgenconsultants.com">
 -->
<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" /><br>

<label for="last_name">Last Name</label><input  id="last_name" maxlength="80" name="last_name" size="20" type="text" /><br>

<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" /><br>

<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" /><br>

<label for="city">City</label><input  id="city" maxlength="40" name="city" size="20" type="text" /><br>

<label for="state">State/Province</label><input  id="state" maxlength="20" name="state" size="20" type="text" /><br>

Did you serve in Iraq or Afganistan?:<select  id="00N370000060fw7" name="00N370000060fw7" title="Did you serve in Iraq or Afganistan?"><option value="">--None--</option><option value="Yes">Yes</option>
<option value="No">No</option>
</select><br>

Branch of Service:<input  id="00N370000060fwC" maxlength="30" name="00N370000060fwC" size="20" type="text" /><br>

Message:<textarea  id="00N370000060fwH" name="00N370000060fwH" rows="3" type="text" wrap="soft"></textarea><br>

<input type="submit" name="submit">

</form>


				   			</div>

					   	</div>


			   		</div>


		   		</div>

		   </div>


   </section>


<div class="wrapper padded-panel extra-padded-panel">
<?php echo get_post_meta($post->ID, 'get_in_touch_form', true); ?>


</div>

 <?php echo get_post_meta($post->ID, 'page_scripts', true); ?>



<?php



		// End the loop.
		endwhile;
		?>






	</div>

<?php get_footer(); ?>
