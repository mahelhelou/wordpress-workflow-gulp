<?php

/**
 * Package Name features
 *
 * @package Package_Name
 */

function package_name_features() {
  /**
   * 1. Title tag
   * 2. Post thumbnail (Featured image)
   */

  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'package_name_features' );