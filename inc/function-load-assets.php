<?php
  // Load style files
  function load_style_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css');
  }
  add_action('wp_enqueue_scripts', 'load_style_files');

  function load_admin_style_files($hook) {

    if ('toplevel_page_redland-theme' != $hook) {
      return;
    }
      wp_register_style('redland_admin', get_template_directory_uri() . '/assets/css/redland.admin.css', array(), '1.0.0', 'all');
      wp_enqueue_style('redland_admin');
  }
  add_action('admin_enqueue_scripts', 'load_admin_style_files');

  // Load navigation menu script
  function redland_features() {
    register_nav_menu('headerMenu', 'Header Menu');
  }
  add_action('after_setup_theme', 'redland_features');

  // Load Google Fonts
  function google_fonts() {
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600|Raleway:400,600', false );
  }
  add_action( 'wp_enqueue_scripts', 'google_fonts' );

 // Load js script for cookie displaying
 function cookie_script() {
    wp_enqueue_script( 'my_theme_script', get_template_directory_uri() . '/assets/js/custom.min.js', true );
  }
  add_action ( 'wp_enqueue_scripts', 'cookie_script');

// Load React library and bundles for reference page. First check that template is correct before loading.
$tmp = get_page_template_slug(12);
if ( 'template-parts/references.php' == $tmp ) {
  add_action ( 'wp_enqueue_scripts', 'enqueue_react');
  }
function enqueue_react() {
  wp_enqueue_script( 'babel', 'https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js', array(), false, false );
  wp_enqueue_script( 'react-js', 'https://unpkg.com/react@16/umd/react.production.min.js', array('babel'), false, false );
  wp_enqueue_script( 'reactdom-js', 'https://unpkg.com/react-dom@16/umd/react-dom.production.min.js', array('babel'), false, false );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/react/build/static/js/main.a5450961.js', array('react-js', 'reactdom-js', 'babel'), '1.0', true );
  wp_enqueue_style( 'react_style', get_template_directory_uri() . '/react/build/static/css/main.b95d0a3b.css');
}
