<?php
/**
 * @package UltimateTeam
 */
/*
/*
Plugin Name: Ultimate Team Member
Plugin URI: https://wordpress.org/plugins/ultimate-team-member/
Description: The best super Team Members for Wordpress site. Choose different customisable Team Member layouts we created just for your needs. Ultimate Team Member display team members faster and simpler and beautifully with minimal setting and configuration possible.
Author: wpcodestar
Author URI:http://wpcodestar.pressnews24.com/
License: GPL2
Version: 1.0.1
Requires at least: 3.8
Tested up to:      4.9.8
*/

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
// Define wp get specific user for plugin
require_once( ABSPATH . '/wp-includes/pluggable.php' );

// Vendor Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

//The code that runs during plugin activation
function activate_utm_plugin() {
	Inc\Base\Activate::activate();
}

register_activation_hook( __FILE__, 'activate_utm_plugin' );


//The code that runs during plugin deactivation
function deactivate_utm_plugin() {
	Inc\Base\Deactivate::deactivate();
}

register_deactivation_hook( __FILE__, 'deactivate_utm_plugin' );


// Register ALL Services
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}