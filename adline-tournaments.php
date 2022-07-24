<?php
/*
Plugin Name: Adline Tournaments 
Version: 0.9.9
Author: Himanshu Borah
Author URI: https://webcreatives.io/
License: GPLv2 or later
Text Domain: adline-tournaments
*/

// Define theme dir path.
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR', plugin_dir_path( __FILE__ ) );
}

// Define assets/css path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_CSS' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_CSS', plugin_dir_url( __FILE__ ) . 'assets/css/' );
}

// Define admin path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_ADMIN' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_ADMIN', plugin_dir_path( __FILE__ ) . 'admin/' );
}


include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'admin.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'fields.php';    


/**
 * Enqueue a script in the WordPress admin on edit.php.
 *
 */
add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 'adl_admin', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'admin.css', NULL, '1.0' );
} );