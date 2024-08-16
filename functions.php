<?php
if (!function_exists('register_custom_blocks')) {
  function register_custom_blocks() {
    register_block_type(dirname(__FILE__) . '/src/blocks/hero-block/build/block.json');
    register_block_type(dirname(__FILE__) . '/src/blocks/post-list/build/block.json');
    register_block_type(dirname(__FILE__) . '/src/blocks/simple-cta/build/block.json');
    register_block_type(dirname(__FILE__) . '/src/blocks/socials-menu/build/block.json');
  }
}
add_action('init', 'register_custom_blocks');


if (!function_exists('register_styles')) {
  function register_styles() {
    wp_register_style('custom_font', '//fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap');
    wp_enqueue_style('custom_font');

    wp_enqueue_style('contact_form_styles', get_template_directory_uri() . '/assets/contact-form.css');
    wp_enqueue_style('footer_styles', get_template_directory_uri() . '/assets/footer.css');
    wp_enqueue_style('global_styles', get_template_directory_uri() . '/assets/styles.css');
    wp_enqueue_style('header_styles', get_template_directory_uri() . '/assets/header.css');
    wp_enqueue_style('post_styles', get_template_directory_uri() . '/assets/post.css');
  }
}
add_action('init', 'register_styles');


function mytheme_custom_excerpt_length() {
  return 15;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length');
