<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Yukon Collective - Studio Bergini
 * @since Yukon Collective - Studio Bergini 1.0
 */

$project_id             = $post->post_name;
$project_number         = $key + 1;
$project_title          = get_field('project_title');
$project_client         = get_field('project_client');
$project_type           = get_field('project_type');
$project_gallery        = get_field('project_gallery');
$project_content_first  = get_field('project_content_first_column');
$project_content_second = get_field('project_content_second_column');
$project_content_third  = get_field('project_content_third_column');

get_header(); ?>

<!--   Single Project Section -->
<!--   Anchor Link (To Modify Change Id) -->
<span class="anchor" id="<?= $project_id ?>"></span>
<section class="project continuous-true" id="project-<?= $project_number ?>">
  <div class="project-container">
    <!--   Image Information (Mobile) -->
    <div class="project-top"><h4 class="image-info"></h4></div>
    <div class="project-left">
      <!--  First Paragraph (Add Text Here, Use <br> For New Line) -->
      <p class="text-left"><?= $project_content_first ?></p>
      <!--  Read More Button (Full Size) -->
      <p class="text-toggle-more"><br><a class="toggle-text toggle-more" href="#">(more)</a></p>
    </div>
    <div class="project-right">
      <!--  Project Images Slider (Add Images Here, Use Alt For Image Description) -->
      <div class="my-slider">
        <ul>
          <? foreach($project_gallery as $key=>$project_image): ?>
            <li><img src="<?php echo $project_image['sizes']['thumbnail']; ?>" alt="<?php echo $project_image['alt']; ?>" data-num="<?= $key + 1 ?>"></li>
          <? endforeach; ?>
        </ul>
      </div>
      <!--  Empty Container Set As Background For Black Slider Effect -->
      <div class="slider-background"></div>
      <!--  Second Paragraph (Add Text Here, Use <br> For New Line) -->
      <p class="text-center"><?= $project_content_second ?></p>
      <!--  Third Paragraph (Add Text Here, Use <br> For New Line) -->
      <p class="text-right"><?= $project_content_third ?></p>
      <!--  Read Less Button (Full Size) -->
      <p class="text-toggle-less"><br><a class="toggle-text toggle-less" href="#">(less)</a></p>
    </div>
    <div class="project-bottom">
      <!--  Project Information, Add Text Here -->
      <h1 class="work-title"><?= $project_title ?></h1>
      <h2 class="work-detail"><?= $project_client ?></h2>
      <h3 class="work-type"><?= $project_type ?></h3>
      <!--  Read Less Button (Mobile) -->
      <h6 class="toggle-text-mobile read-more-mobile">(more)</h6>
    </div>
    <!--  Project Text Container For Mobile (Text Is Added Automatically From Paragraphs) -->
    <div class="project-mobile"></div>
  </div>
</section>


<?php get_footer(); ?>
