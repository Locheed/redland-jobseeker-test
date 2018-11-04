<?php

/*
@package redlandtheme

  *******************
    ADMIN PAGE
  *******************
*/

function redland_add_admin_page() {
  // Create Redland Themes Admin page
  add_menu_page( 'Redland Theme Options', 'Redland', 'manage_options', 'redland-theme', 'redland_theme_create_page',
    'dashicons-admin-generic', 110);

  // Create Redland Themes Sub Admin page
  add_submenu_page('redland-theme', 'Redland Theme Options', 'Settings', 'manage_options', 'redland-theme', 'redland_theme_create_page');
  add_submenu_page('redland-theme', 'Redland Other Settings', 'Other', 'manage_options', 'redland-theme-other', 'redland_theme_settings_page');

  // Activate custom settings. Nesting inside a function to have a safety measure to skip this if admin page is not created properly.
  add_action('admin_init', 'redland_custom_settings');
}
add_action('admin_menu', 'redland_add_admin_page');

function redland_custom_settings(){
  register_setting('redland-settings-group', 'hero_text');
  register_setting('redland-settings-group', 'hero_desc');
  register_setting('redland-settings-group', 'sec_hero_text');
  register_setting('redland-settings-group', 'sec_hero_desc');
  add_settings_section('redland-hero-options', 'Hero Section Options', 'redland_hero_options', 'redland-theme');
  add_settings_field('hero-name', 'Hero Text', 'redland_hero_name', 'redland-theme', 'redland-hero-options');
  add_settings_field('hero-desc', 'Hero Description', 'redland_hero_desc', 'redland-theme', 'redland-hero-options');
  add_settings_field('secondary-hero-name', 'Secondary Hero Text', 'redland_sec_hero_name', 'redland-theme', 'redland-hero-options');
  add_settings_field('secondary-hero-desc', 'Secondary Hero Description', 'redland_sec_hero_desc', 'redland-theme', 'redland-hero-options');
}

function redland_hero_name() {
  $herotext = esc_attr( get_option('hero_text'));
  echo '<input type="text" name="hero_text" value="'.$herotext.'" placeholder="Enter hero text" /><p class="description">This is the main hero text displayed on frontpage</p>';
}
function redland_hero_desc() {
  $herodesc = esc_attr( get_option('hero_desc'));
  echo '<input type="text" name="hero_desc" value="'.$herodesc.'" placeholder="Enter hero description" /><p class="description">This is the secondary hero text displayed on frontpage</p>';
}
function redland_sec_hero_name() {
  $secherotext = esc_attr( get_option('sec_hero_text'));
  echo '<input type="text" name="sec_hero_text" value="'.$secherotext.'" placeholder="Enter secondary hero text" /><p class="description">This is the bottom hero text displayed on frontpage</p>';
}
function redland_sec_hero_desc() {
  $secherodesc = esc_attr( get_option('sec_hero_desc'));
  echo '<input type="text" name="sec_hero_desc" value="'.$secherodesc.'" placeholder="Enter secondary hero description" /><p class="description">This is the bottom secondary hero text displayed on frontpage</p>';
}

function redland_hero_options() {
  echo 'customize hero image options';
}

function redland_theme_create_page() {
  require_once(get_template_directory() . '/inc/templates/redland-admin.php');
}

function redland_theme_settings_page() {
  echo '<h1>Other page</h1>';
}