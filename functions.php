<?php
  /* Import functions from inc folder */
  require get_template_directory() . '/inc/function-custom-post-types.php';
  require get_template_directory() . '/inc/function-load-assets.php';
  require get_template_directory() . '/inc/function-admin.php';

  // Enable post-thumbnails
  add_theme_support( 'post-thumbnails' );