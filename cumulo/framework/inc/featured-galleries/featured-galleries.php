<?php
/*
 * Plugin Name:       Featured Galleries
 * Plugin URI:        http://wordpress.org/plugins/featured-galleries/
 * Description:       WordPress ships with a Featured Image functionality. This adds a very similar functionality, but allows for full featured galleries with multiple images.
 * Version:           1.4.0
 * Author:            Andy Mercer
 * Author URI:        http://www.andymercer.net
 * Text Domain:       featured-galleries
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

define( 'FEATURED_GALLERIES_PATH', CMO_FRAMEWORK_PATH . '/inc/featured-galleries/' );
define( 'FEATURED_GALLERIES_URI', CMO_FRAMEWORK_URI . '/inc/featured-galleries/' );

require_once( FEATURED_GALLERIES_PATH . 'components/enqueuing.php' );
require_once( FEATURED_GALLERIES_PATH . 'components/metabox.php' );
require_once( FEATURED_GALLERIES_PATH . 'components/ajax-update.php' );
require_once( FEATURED_GALLERIES_PATH . 'components/readmethods.php' );

add_action( 'add_meta_boxes', 'fg_register_metabox' );
add_action( 'save_post', 'fg_save_perm_metadata', 1, 2 );
add_action( 'admin_enqueue_scripts', 'fg_enqueue_stuff' );
add_action( 'wp_ajax_fg_update_temp', 'fg_update_temp' );
