<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bwap.ch
 * @since             2.0.0
 * @package           Sphinge
 *
 * @wordpress-plugin
 * Plugin Name:       Sphinge
 * Plugin URI:        https://sphinge.io/
 * Description:       Allows your website to send data to your Sphinge server
 * Version:           2.1.0
 * Author:            Team @ BWAP
 * Author URI:        https://bwap.ch
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sphinge
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sphinge-activator.php
 */
function activate_sphinge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sphinge-activator.php';
	Sphinge_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sphinge-deactivator.php
 */
function deactivate_sphinge() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sphinge-deactivator.php';
	Sphinge_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sphinge' );
register_deactivation_hook( __FILE__, 'deactivate_sphinge' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sphinge.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_sphinge() {

	$plugin = new Sphinge();
	$plugin->run();

}
run_sphinge();
