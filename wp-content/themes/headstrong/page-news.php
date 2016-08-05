<?php
/**
 * Template Name: Headstrong News page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Headstrong
 * @since Headstrong 1.0
 */

get_header();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged
);

$news = new WP_Query($args);

?>

	<div class="newslisting-page">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();




?>	<section class="storyBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_meta($post->ID, 'banner_image', true)); ?>)">

	   <div class="wrapper">

		   <div class="container">

		   		<div class="row">


			   		<div class="col-xs-12 col-md-6 col-lg-3 col-lg-offset-1 banner-header">


				   		<?php the_title( '<h1>', '</h1>' ); ?>


			   		</div>


		   		</div>

		   </div>

	   </div>

   </section>

 <?php



		// End the loop.
		endwhile;
		?>

<div class="wrapper">

	<div class="container">

		<div class="row">

			<div class="col-xs-12 col-sm-8 col-sm-push-4 news-list body-text">

					<?php if ($news->have_posts()) : while ($news->have_posts()) : $news->the_post();  ?>

						<div class="news-story-summary">

							<div class="row">

								<div class="col-xs-12 col-sm-4">
									<a href="<?php the_permalink(); ?>">
										<div class="img-cropper">
									<?php
									if ( has_post_thumbnail() ) {
										the_post_thumbnail(array(760, 760),array('class' => 'img-responsive'));
								 	}


								 ?></div>
									</a>

								</div>

								<div class="col-xs-12 col-sm-8">

									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p class="date"><?php echo get_post_time('F j, Y'); ?> </p>
									<div class="excerpt">
									<?php the_excerpt(); ?>
									</div>


								</div>

							</div>
						</div>


					<?php



					 endwhile;

					 ?><div class="news-story-summary">

							<div class="row">

								<div class="col-xs-12">
									<nav>
									 <ul class="pager">
										 <li>
					<?php previous_posts_link('« Newer Entries', $news->max_num_pages); ?>
									</li>
									<li>
					<?php next_posts_link('Older Entries »', $news->max_num_pages); ?>
									</li>
									</ul>
									</nav>
					</div></div></div><?php

					 endif;

					?>
			</div>

			<div class="col-xs-12 col-sm-4 col-sm-pull-8 news-sidebar body-text">

				<div class="twitter-feed">
				<h2 class="reduced">@HeadstrongProj on Twitter</h2>
					<?php db_twitter_feed() ?>

				</div>

				<h2 class="reduced">Archive</h2>

				<?php $args = array(
					'type'            => 'monthly',
					'limit'           => '',
					'format'          => 'html',
					'before'          => '',
					'after'           => '',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC',
				    'post_type'     => 'post'
				);
				wp_get_archives( $args ); ?>



			</div>

		</div>

	</div>

</div>







	</div>

<?php get_footer(); ?>
