<?php
// Boilerplate code to register custom rest route /wp-json/sections/v1/references/
function sections_endpoint( $request_data ) {
  $args = array(
    'post_type' => 'reference',
    'posts_per_page'=>-1,
    'numberposts'=>-1
);
  $posts = get_posts($args);
  foreach ($posts as $key => $post) {
    $posts[$key]->acf = get_fields($post->ID);
  }
  return $posts;
}
add_action( 'rest_api_init', function () {
  register_rest_route( 'sections/v1', '/references/', array(
    'methods' => 'GET',
    'callback' => 'sections_endpoint'
));
});