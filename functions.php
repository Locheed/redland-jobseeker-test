<?php
  /* Import functions from inc folder */
  require get_template_directory() . '/inc/function-custom-post-types.php';
  require get_template_directory() . '/inc/function-load-assets.php';
  require get_template_directory() . '/inc/function-admin.php';
  require get_template_directory() . '/inc/function-register-routes.php';

  // Enable post-thumbnails
  add_theme_support( 'post-thumbnails' );

  // Exclude folders for exporting
  add_filter('ai1wm_exclude_content_from_export', function($exclude_filters) {
  $exclude_filters[] = 'node_modules';
  return $exclude_filters;
});
