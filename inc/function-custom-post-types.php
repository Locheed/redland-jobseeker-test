<?php

/* This custom post type function would be better to keep in plugins or mu-plugins folder
  if someone would change the theme. For this Redland test it is easier to keep in the theme folder. */
  function redland_post_types() {
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
  add_action('init', 'redland_post_types');