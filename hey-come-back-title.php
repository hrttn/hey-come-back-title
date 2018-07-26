<?php
/**
 * Plugin Name: Hey Come Back! Title
 * Plugin URI:   https://www.wpelk.com/plugins/hey-come-back-title/
 * Description: Bring your users back by changing the title of your page when they leave the tab.
 * Version: 1.0.0
 * Author: WP Elk
 * Author URI:   https://www.wpelk.com/
 * License:      GPL3
 * License URI:  https://www.gnu.org/licenses/gpl-3.0.en.html
 * Text Domain:  hey-come-back-title
 *
 * @package    WPElk
 * @subpackage HeyComeBack
 * @author     WP Elk <hugo@hugorettien.com>
 * @link       https://www.wpelk.com
 */

namespace WPElk\HeyComeBack;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( __NAMESPACE__ . '\DIR_PATH', plugin_dir_url( __FILE__ ) );

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );

function enqueue_scripts() {
    wp_register_script(
        'hey-come-back-title',
        DIR_PATH . 'assets/js/bundle.min.js',
        array( 'jquery' ),
        false,
        true
    );
	wp_enqueue_script('hey-come-back-title');
}
