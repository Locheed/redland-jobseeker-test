<?php

  function load_style_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'load_style_files');

  function redland_features() {
    register_nav_menu('headerMenu', 'Header Menu');
  }
  add_action('after_setup_theme', 'redland_features');

  function google_fonts() {
 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,600', false );
 }
 add_action( 'wp_enqueue_scripts', 'google_fonts' );

 function cookie_script() {
    wp_enqueue_script( 'my_theme_script', get_template_directory_uri() . './script.js', true );
}
add_action ( 'wp_enqueue_scripts', 'cookie_script');


  /* This custom post type function would be better to keep in plugins or mu-plugins folder
  if someone would change the theme. For this Redlab test it is easier to keep in the theme folder. */
  function redlab_post_types() {
    register_post_type('address', array(
      'public' => true,
      'labels' => array(
        'name' => 'Address',
        'add_new_item' => 'Add New Address',
        'edit_item' => 'Edit Address',
        'all_items' => 'All Addresses'
      ),
      'menu_icon' => 'dashicons-location'
    ));
  }
  add_action('init', 'redlab_post_types');
?>