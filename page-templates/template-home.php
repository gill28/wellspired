<?php

/**
 * Template Name: Template Home
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */
get_header();
?>

<div class="jumbotron img-fluid banner d-flex align-items-center justify-items-center flex-wrap" style="background-image: url(<?php the_field('hero_image'); ?>)">
	<div class="hero-container--box col-lg-4 m-auto text-center">
		<div class="hero-container--box__content">
			<div class="hero-container--box__content-title">
				<h2 class="ff-frank"><?php the_field('hero_title'); ?></h2>
			</div>
			<div class="hero-container--box__content-text">
				<p><?php the_field('hero_content'); ?></p>
			</div>
		</div>
		<div class="hero-container--box__button mt-5">
			<a href="#" class="btn-pink">Schedule a call</a>
		</div>
	</div>
</div>

<div class="quote-sec p-5">
	<div class="container">
		<div class="row p-5 position-relative">
			<div class="quote-sec--content d-flex justify-content-center align-items-center m-auto">
				<p class="border-top border-bottom p-5 col-lg-9"><?php the_field('question_statement'); ?></p>
			</div>
			<div class="media position-absolute quote-mark col-lg-1">
				<img src="<?php echo get_template_directory_uri() . "/src/img/home/question-mark.png" ?>" alt="question mark image">
			</div>
		</div>

	</div>
</div>

<div class="value-sec m-5">
	<div class="container ">
		<div class="row">
			<div class="col-lg-6">
				<div class="left-content position-relative d-flex">
					<div class="left-content--img col-lg-2 p-0 d-flex align-self-baseline">
						<img src="<?php echo get_template_directory_uri() . "/src/img/home/ampersand.png" ?>" alt="">
					</div>
					<div class="value-container col-lg-9">
						<div>
							<h3><?php the_field('value_title'); ?></h3>
							<p><?php the_field('value_content'); ?></p>
						</div>
						<div>
							<a class="btn-solid-blue" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 plan-section">
				<ul>
					<li class="card-container">
						<div class="card-img">
							<img src="<?php echo get_template_directory_uri() . "/src/img/home/number-illo-1.png" ?>" alt="">
						</div>
						<div class="card-content">
							<?php the_field('first_card'); ?>
						</div>
					</li>
					<li class="card-container">
						<div class="card-img">
							<img src="<?php echo get_template_directory_uri() . "/src/img/home/number-illo-2.png" ?>" alt="">
						</div>
						<div class="card-content">
							<?php the_field('second_card'); ?>
						</div>
					</li>
					<li class="card-container">
						<div class="card-img">
							<img src="<?php echo get_template_directory_uri() . "/src/img/home/number-illo-3.png" ?>" alt="">
						</div>
						<div class="card-content">
							<?php the_field('third_card'); ?>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="section-container-which p-5" style="background-image: url(<?php the_field('guide_background_image'); ?>);">
	<div class="container p-5">
		<div class="row">
			<div class="section-container">
				<div class="section-container--content">
					<h3 class="ff-frank"><?php the_field('guide_title'); ?></h3>
					<span><?php the_field('guide_subtitle'); ?></span>
				</div>
				<div class="section-container--cards d-flex">
					<div class="container-card card-one m-2 text-center" style="background-image: url(<?php the_field('guide_one_background'); ?>">
						<h4 class="w-100"><?php the_field('guide_first_card'); ?></h4>
					</div>
					<div class="container-card card-two m-2 text-center" style="background-image: url(<?php the_field('guide_two_background'); ?>">
						<h4><?php the_field('guide_second_card'); ?></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="service-section p-5">
	<div class="container">
		<div class="row">
			<div class="service-container col-lg-10 m-auto">
				<div class="service-title text-center">
					<h2 class="ff-frank"><?php the_field('service_title'); ?></h2>
					<p><?php the_field('service_content'); ?></p>
				</div>
			</div>
			<div class="w-100">
				<div class="col-lg-12 service-images">
					<?php
					$featured_posts = get_field('service_images');
					if ($featured_posts) : ?>
						<ul class="d-flex flex-wrap">
							<?php foreach ($featured_posts as $post) :
									// Setup this post for WP functions (variable must be named $post).
									setup_postdata($post); ?>
								<li class="col-4 mt-3">
									<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
								</li>
							<?php endforeach; ?>
						</ul>
						<?php
							// Reset the global post object so that the rest of the page works correctly.
							wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>
