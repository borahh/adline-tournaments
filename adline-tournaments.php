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

// Define assets/media path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_MEDIA' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_MEDIA', plugin_dir_url( __FILE__ ) . 'assets/media/' );
}

// Define assets/css path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_CSS' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_CSS', plugin_dir_url( __FILE__ ) . 'assets/css/' );
}

// Define assets/js path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_JS' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_JS', plugin_dir_url( __FILE__ ) . 'assets/js/' );
}

// Define admin path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_ADMIN' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_ADMIN', plugin_dir_path( __FILE__ ) . 'admin/' );
}


// Define admin path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_INC' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_INC', plugin_dir_path( __FILE__ ) . 'inc/' );
}

// Define admin path
if ( ! defined( 'BORAHH_ADL_TOURNAMENTS_DIR_TAGS' ) ) {
	define( 'BORAHH_ADL_TOURNAMENTS_DIR_TAGS', plugin_dir_path( __FILE__ ) . 'inc/elementor/' );
}


include BORAHH_ADL_TOURNAMENTS_DIR . 'helpers/helpers.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'admin.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_INC . 'inc.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_INC . 'shortcodes/ticket-list.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_INC . 'shortcodes/register.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_TAGS . 'tags.php';    


/**
 * Enqueue a script in the WordPress admin on edit.php.
 *
 */
add_action( 'admin_enqueue_scripts', function() {
	$currentScreen = get_current_screen();
	$post_type = $currentScreen->post_type;
	$action = $currentScreen->action;

    wp_enqueue_style( 'adl_admin', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'admin.css', NULL, '1.0' );
	if ( $_GET['page'] == 'manage_tournaments' || $_GET['page'] == 'tickets') {
		wp_enqueue_style( 'bundle', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'style.bundle.css', NULL, '1.0' );
		wp_enqueue_style( 'overrides', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'overrides.css', NULL, '1.0' );
		wp_enqueue_style( 'plugin', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'plugins.bundle.css', NULL, '1.0' );
		wp_enqueue_script( 'plugin', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'plugins.bundle.js', NULL, '1.0' );
		wp_enqueue_script( 'bundle', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'scripts.bundle.js', NULL, '1.0' );
		wp_enqueue_script( 'dtb', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'datatables.bundle.js', NULL, '1.0' );
		wp_enqueue_script( 'custom_widget', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'widgets.js', NULL, '1.0' );
		wp_enqueue_script( 'widgets', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'widgets.bundle.js', NULL, '1.0' );
		// wp_enqueue_script( 'forms', BORAHH_ADL_TOURNAMENTS_DIR_JS . 'forms.js', NULL, '1.0' );

	}
	if ( $post_type == 'tournament' || $_GET['page'] == 'update-category.php') {
		wp_enqueue_style( 'create-tournament', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'create-tournament.css', NULL, '1.0' );
		wp_enqueue_style( 'bundle', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'style.bundle.css', NULL, '1.0' );
		wp_enqueue_style( 'overrides', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'overrides.css', NULL, '1.0' );
		wp_enqueue_style( 'plugin', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'plugins.bundle.css', NULL, '1.0' );

	}
} );

add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'frontend-tournament', BORAHH_ADL_TOURNAMENTS_DIR_CSS . 'frontend.css', NULL, '1.0' );
} );
require_once(ABSPATH . 'wp-admin/includes/screen.php');



// add_action( 'current_screen', 'wpdocs_this_screen' );
 
/**
 * Run code on the admin widgets page
 */
// function wpdocs_this_screen() {
//     $currentScreen = get_current_screen();
//     print_r($currentScreen);
// }

// add_action( 'current_screen', 'wpdocs_this_screen' );
 
/**
 * Run code on the admin widgets page
 */
// function wpdocs_this_screen() {
//     $product = new WC_Product_Variable(917);

// 	echo '<pre>';
//     print_r($product);
// 	echo '</pre>';
// }

