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

<div class="jumbotron" style="background-image: url(<?php the_field('hero_image'); ?>)">
    <div class="hero-container--box">
        <div class="hero-container--box__content">
            <div class="hero-container--box__content-title">
                <h2><?php the_field('hero_title'); ?></h2>
            </div>
            <div class="hero-container--box__content-text">
                <p><?php the_field('hero_content'); ?></p>
            </div>
        </div>
        <div class=" h-full w-full bg-gray-400 hero-container--box__button">
            <a href="#" class="btn-pink">Schedule a call</a>
        </div>
    </div>
</div>


<?php
get_footer();
?>
