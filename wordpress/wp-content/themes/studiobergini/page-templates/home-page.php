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

$selected_projects = get_field('selected_projects');

get_header();
?>

<? if($selected_projects): ?>

    <? foreach($selected_projects as $post): ?>
      <? setup_postdata($post); ?>
        <a href="<? the_permalink(); ?>"><?php the_title(); ?></a>
    <? endforeach; ?>

    <? wp_reset_postdata(); ?>
<?php endif; ?>

<? get_footer(); ?>