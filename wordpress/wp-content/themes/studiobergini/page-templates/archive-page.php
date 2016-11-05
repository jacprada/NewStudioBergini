<?php
/*
Template Name: Archive page
*/


/**
 * The template for the archive pages
 *
 * 
 * @package WordPress
 * @subpackage Yukon Collective - Studio Bergini
 * @since Yukon Collective - Studio Bergini 1.0
 */

get_header();

?>

<? if (have_posts()) : while (have_posts()) : the_post();?>
  
<main>

<h1>Hello World</h1>
  
</main>

<?endwhile; endif;?>

<? get_footer(); ?>