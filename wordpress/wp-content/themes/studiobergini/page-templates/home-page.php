<?php
/*
Template Name: Home page
*/


/**
 * The template for the home pages
 *
 * 
 * @package WordPress
 * @subpackage Yukon Collective - Studio Bergini
 * @since Yukon Collective - Studio Bergini 1.0
 */


get_header();
?>

<h1>Hello World</h1>

<? if (have_posts()) : while (have_posts()) : the_post();?>
	
<main>


</main>

<?endwhile; endif;?>

<?php get_footer(); ?>