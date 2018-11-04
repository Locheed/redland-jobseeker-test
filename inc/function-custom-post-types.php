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

  function team_post_type() {

   // Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Team Profiles',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);

	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-groups',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );