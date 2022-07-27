<?php
/**
 * Create taxonomies
 *
 */

add_action( 'init', function() {
    // Add new taxonomy
    $labels = array(
        'name'              => _x( 'Wo Tickets', 'taxonomy general name', 'adline-tournaments' ),
        'singular_name'     => _x( 'Woo Ticket', 'taxonomy singular name', 'adline-tournaments' ),
        'search_items'      => __( 'Search Wo Tickets', 'adline-tournaments' ),
        'all_items'         => __( 'All Wo Tickets', 'adline-tournaments' ),
        'parent_item'       => __( 'Parent Woo Ticket', 'adline-tournaments' ),
        'parent_item_colon' => __( 'Parent Woo Ticket:', 'adline-tournaments' ),
        'edit_item'         => __( 'Edit Woo Ticket', 'adline-tournaments' ),
        'update_item'       => __( 'Update Woo Ticket', 'adline-tournaments' ),
        'add_new_item'      => __( 'Add New Woo Ticket', 'adline-tournaments' ),
        'new_item_name'     => __( 'New Woo Ticket Name', 'adline-tournaments' ),
        'menu_name'         => __( 'Woo Ticket', 'adline-tournaments' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'       => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'woo-ticket' ),

    );
 
    register_taxonomy( 'woo-ticket', array( 'product' ), $args );
}, 0 );