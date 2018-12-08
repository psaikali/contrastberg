<?php
/**
 * Plugin Name: Contrast'berg
 * Description: Visible metaboxes for the block editor.
 * Author: Pierre Saïkali
 * Author URI: https://saika.li
 * Text Domain: contrastberg
 * Domain Path: /languages/
 * Version: 1.0.0
 */

namespace Contrastberg;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define plugin constants
 */
define( 'CONTRASTBERG_VERSION', '1.0.0' );

function inject_admin_styles($hook) {
	if ( ! in_array( $hook, [ 'post-new.php', 'post.php' ], true ) ) {
		return;
	}

	wp_enqueue_style( 'contrastberg', plugins_url( 'contrastberg.css', __FILE__ ), [], CONTRASTBERG_VERSION );
}
add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\\inject_admin_styles' );
