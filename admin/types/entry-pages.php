<?php 

/**
 *  This file is used to register Custom Post type "TOURNAMENTS" and its custom TAXONOMIES
 **/

add_action( 'init', function() {
    $labels = array(
        'name'                  => _x( 'Entry Pages', 'Post type general name', 'adline-tournaments' ),
        'singular_name'         => _x( 'Entry Page', 'Post type singular name', 'adline-tournaments' ),
        'menu_name'             => _x( 'Entry Pages', 'Admin Menu text', 'adline-tournaments' ),
        'name_admin_bar'        => _x( 'Entry Page', 'Add New on Toolbar', 'adline-tournaments' ),
        'add_new'               => __( 'Add New', 'entry page' ),
        'add_new_item'          => __( 'Add New entry page', 'adline-tournaments' ),
        'new_item'              => __( 'New entry page', 'adline-tournaments' ),
        'edit_item'             => __( 'Edit entry page', 'adline-tournaments' ),
        'view_item'             => __( 'View entry page', 'adline-tournaments' ),
        'all_items'             => __( 'All entry pages', 'adline-tournaments' ),
        'search_items'          => __( 'Search entry pages', 'adline-tournaments' ),
        'parent_item_colon'     => __( 'Parent entry pages:', 'adline-tournaments' ),
        'not_found'             => __( 'No entry pages found.', 'adline-tournaments' ),
        'not_found_in_trash'    => __( 'No entry pages found in Trash.', 'adline-tournaments' ),
        'featured_image'        => _x( 'Entry Page Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'archives'              => _x( 'Entry Page archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'adline-tournaments' ),
        'insert_into_item'      => _x( 'Insert into entry page', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'adline-tournaments' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this entry page', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'adline-tournaments' ),
        'filter_items_list'     => _x( 'Filter entry pages list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'adline-tournaments' ),
        'items_list_navigation' => _x( 'Entry Pages list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'adline-tournaments' ),
        'items_list'            => _x( 'Entry Pages list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'adline-tournaments' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Entry Page custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => '/', 'with_front' => false ),
        'capability_type'    => 'page',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'entry-page', $args );
});
