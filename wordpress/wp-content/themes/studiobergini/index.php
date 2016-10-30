<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Yukon Collective - Studio Bergini
 * @since Yukon Collective - Studio Bergini 1.0
 */

$project_title    = get_field('project_title');
$project_client   = get_field('project_client');
$project_type     = get_field('project_type');
$project_gallery  = get_field('project_gallery');

get_header(); ?>

<? if (have_posts()) : while (have_posts()) : the_post();?>
  
<main>
  <?= $project_title ?>
  <?= $project_client ?>
  <?= $project_type ?>

  <? while ( have_rows('project_content') ) : the_row();?>
    <?= get_sub_field('content_column') ?>
  <? endwhile;?>

  <ul>
    <? foreach($project_gallery as $project_image): ?>
      <li>
         <img src="<?php echo $project_image['sizes']['thumbnail']; ?>" alt="<?php echo $project_image['alt']; ?>" />
     </li>
   <? endforeach; ?>
 </ul>

</main>

<?endwhile; endif;?>

<?php get_footer(); ?>
