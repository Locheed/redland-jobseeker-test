<?php

  function load_style_files() {
    wp_enqueue_style('main_style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'load_style_files');

  function redlab_features() {
    register_nav_menu('headerMenu', 'Header Menu');
  }
  add_action('after_setup_theme', 'redlab_features');


?>