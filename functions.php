<?php
/**
 * Package Name functions and definitions
 *
 * @package Package Name
 */

if ( ! defined( 'THEME_VERSION' ) ) {
	define( 'THEME_VERSION', '1.0.0' );
}

require get_theme_file_path( 'inc/enqueue.php' );
require get_theme_file_path( 'inc/features.php' );
require get_theme_file_path( 'inc/post-types.php' );