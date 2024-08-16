<?php

/**
 * Title: Post
 * Slug: bluegravity/post
 * Categories: post
 * Block Types: core/template-part/post
 */

$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$post_id = url_to_postid($url);
?>

<div class="post-page">

  <div class="post-title-container">

    <img class="post-image" src="
    <?php
    if (has_post_thumbnail($post_id))
      echo get_the_post_thumbnail_url($post_id);
    else
      echo get_site_url() . '/wp-content/themes/bluegravity/assets/images/default-post-image.jpg';
    ?>
    ">

    <!-- wp:post-featured-image {"className": "post-image"} /-->

    <!-- wp:post-title {"className": "post-title"} /-->
  </div>

  <div class="post-content-container">
    <div class="post-content">
      <!-- wp:post-content {"lock":{"move":false,"remove":true},"align":"full","layout":{"type":"constrained"}} /-->
    </div>
  </div>
</div>