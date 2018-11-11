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

// Load React library and bundles for reference page. First check that template is correct before loading.
$tmp = get_page_template_slug(12);
if ( 'template-parts/references.php' == $tmp ) {
  add_action ( 'wp_enqueue_scripts', 'enqueue_react');
  }
function enqueue_react() {
  wp_enqueue_script( 'babel', 'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js', array(), false, false );
  wp_enqueue_script( 'react-js', 'https://unpkg.com/react@16/umd/react.production.min.js', array('babel'), false, false );
  wp_enqueue_script( 'reactdom-js', 'https://unpkg.com/react-dom@16/umd/react-dom.development.js', array('babel'), false, false );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/react/build/static/js/main.26a7064d.js', array('react-js', 'reactdom-js', 'babel'), '1.0', false );
  wp_enqueue_style( 'react_style', get_template_directory_uri() . '/react/build/static/css/main.b95d0a3b.css');
}