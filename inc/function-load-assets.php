<?php
  // Load style files
  function load_style_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
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
  wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600', false );
  }
  add_action( 'wp_enqueue_scripts', 'google_fonts' );

 // Load js script for cookie displaying
 function cookie_script() {
    wp_enqueue_script( 'my_theme_script', get_template_directory_uri() . '/assets/js/custom.min.js', true );
  }
  add_action ( 'wp_enqueue_scripts', 'cookie_script');