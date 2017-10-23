<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://porosh.biz
 * @since             1.0.0
 * @package           Wprong_Testimonial_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Wprong Testimonial Slider
 * Plugin URI:        http://www.wprong.com/testimonial
 * Description:       WPRONG Testimonial slider with shortcode button give you ability to show your client testimonial in your web page. 
 * Version:           1.0.0
 * Author:            Porosh Ahammed
 * Author URI:        http://porosh.biz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wprong-testimonial-plugin
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wprong-testimonial-plugin-activator.php
 */
function activate_wprong_testimonial_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wprong-testimonial-plugin-activator.php';
	Wprong_Testimonial_Plugin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wprong-testimonial-plugin-deactivator.php
 */
function deactivate_wprong_testimonial_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wprong-testimonial-plugin-deactivator.php';
	Wprong_Testimonial_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wprong_testimonial_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wprong_testimonial_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wprong-testimonial-plugin.php';
 

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wprong_testimonial_plugin() {

	$plugin = new Wprong_Testimonial_Plugin();
	$plugin->run();

}
run_wprong_testimonial_plugin();



