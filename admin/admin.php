<?php

include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/menu.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'types/tournaments.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'types/entry-pages.php';    
// include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'types/woo.php';    
// include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'columns/tournaments.php';    
include BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'fields/tournaments.php';    



/**
 * Admin Widget
 */
function adl_get_admin_widget( $template ) {
	return include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/widgets/' . $template . '.php');
}
/**
 * Admin Manager
 */
function adl_get_admin_manager( $template ) {
	return include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/managers/' . $template . '.php');
}
/**
 * Admin Modals
 */
function adl_get_admin_modal( $template ) {
	return include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/modals/' . $template . '.php');
}
/**
 * Admin Forms
 */
function adl_get_admin_form( $template ) {
	return include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/forms/' . $template . '.php');
}

/**
 * 
 * Remove notices from admin page
 * 
 */
add_action('in_admin_header', function() {
    $my_current_screen = get_current_screen();
    if ( $_GET['page'] == 'manage_tournaments' || $_GET['page'] == 'create-tournament' || $_GET['page'] == 'update-category.php' || $_GET['page'] == 'tickets' || $my_current_screen->id == 'tournament') {
        remove_all_actions( 'user_admin_notices' );
        remove_all_actions( 'admin_notices' );
    }
}, 99);


/**
 * Redirect specific admin page
 */

// add_action('current_screen', function() {
//     $my_current_screen = get_current_screen();
//     if (isset($my_current_screen->base) && $my_current_screen->base == 'edit' && $my_current_screen->id == 'edit-tournament') {
//         wp_redirect('admin.php?page=manage_tournaments');
//         exit();
//     }
// });

