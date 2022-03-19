<?php

/**
 * Package Name assets (Styles and scripts)
 *
 * @package Package_Name
 */

function package_name_assets() {
  // Load styles
  wp_enqueue_style( 'package-name-styles', get_template_directory_uri() . '/app/dist/style.css', [], THEME_VERSION );

  // Load scripts
  wp_enqueue_script( 'oktobly-scripts', get_template_directory_uri() . '/app/dist/bundle.js', [], THEME_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'package_name_assets' );