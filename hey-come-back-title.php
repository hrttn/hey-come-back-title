<?php
/**
 * Plugin Name: Hey Come Back! Title
 * Description: Bring your users back by changing the title of your page when they leave the tab.
 * Version: 1.0.0
 * Author: WP Elk
 *
 * @package    WPElk
 * @subpackage HeyComeBack
 * @author     WP Elk <hugo@hugorettien.com>
 * @link       https://wpelk.com
 */

namespace WPElk\HeyComeBack;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( __NAMESPACE__ . '\DIR_PATH', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );

/**
 * Enqueue the necessary script to the page.
 *
 * @return void
 */
function enqueue_scripts() {
	wp_enqueue_script(
		'please-come-back-title',
		DIR_PATH . 'assets/js/hey-come-back-title.js',
		array( 'jquery' ),
		false,
		true
	);
}
