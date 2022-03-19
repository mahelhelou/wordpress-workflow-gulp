<?php

/**
 * Package Name post types
 *
 * @package Package_Name
 */

function package_name_post_types() {
  // Service post type
  /*
  register_post_type( 'service', [
    'show_in_rest'    => true,
    'supports'        => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
    'rewrite'         => [ 'slug' => 'services' ],
    'has_archive'     => true,
    'public'          => true,
    'taxonomies'      => [ 'post_tag', 'category' ],
    'labels'          => [
      'name'          => __( 'Services' ),
      'add_new_item'  => __( 'Add New Service' ),
      'edit_item'     => __( 'Edit Service' ),
      'all_items'     => __( 'All Services' ),
      'singular_name' => __( 'Service' ),
      'view_item'     => __( 'View Service' )
    ],
   'menu_icon'         => 'dashicons-table-col-before'
  ] );
  */

}

add_action( 'init', 'package_name_post_types' );