<?php 

/**
 *  This file is used to register Custom Post type "TOURNAMENTS" and its custom TAXONOMIES
 **/

add_action( 'init', function() {
    $labels = array(
        'name'                  => _x( 'Tournaments', 'Post type general name', 'adline-tournaments' ),
        'singular_name'         => _x( 'Tournament', 'Post type singular name', 'adline-tournaments' ),
        'menu_name'             => _x( 'Tournaments', 'Admin Menu text', 'adline-tournaments' ),
        'name_admin_bar'        => _x( 'Tournament', 'Add New on Toolbar', 'adline-tournaments' ),
        'add_new'               => __( 'Add New', 'tournament' ),
        'add_new_item'          => __( 'Add New tournament', 'adline-tournaments' ),
        'new_item'              => __( 'New tournament', 'adline-tournaments' ),
        'edit_item'             => __( 'Edit tournament', 'adline-tournaments' ),
        'view_item'             => __( 'View tournament', 'adline-tournaments' ),
        'all_items'             => __( 'All tournaments', 'adline-tournaments' ),
        'search_items'          => __( 'Search tournaments', 'adline-tournaments' ),
        'parent_item_colon'     => __( 'Parent tournaments:', 'adline-tournaments' ),
        'not_found'             => __( 'No tournaments found.', 'adline-tournaments' ),
        'not_found_in_trash'    => __( 'No tournaments found in Trash.', 'adline-tournaments' ),
        'featured_image'        => _x( 'Tournament Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'archives'              => _x( 'Tournament archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'adline-tournaments' ),
        'insert_into_item'      => _x( 'Insert into tournament', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'adline-tournaments' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this tournament', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'adline-tournaments' ),
        'filter_items_list'     => _x( 'Filter tournaments list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'adline-tournaments' ),
        'items_list_navigation' => _x( 'Tournaments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'adline-tournaments' ),
        'items_list'            => _x( 'Tournaments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'adline-tournaments' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Tournament custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'menu_icon'          => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB2ZXJzaW9uPSIxLjEiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJfeDM4XzhfeDJDX19Bd2FyZF94MkNfX0N1cF94MkNfX1Ryb3BoeV94MkNfX0NhbmFkYSI+PGc+PHBhdGggZD0iTTI1MywyMTYuNzQxYzMzLjA4NCwwLDYwLTI2LjkxNiw2MC02MFYxMTdIMTkzdjM5Ljc0MUMxOTMsMTg5LjgyNSwyMTkuOTE2LDIxNi43NDEsMjUzLDIxNi43NDF6Ii8+PHBhdGggZD0iTTY4LjIyNywzMjYuNzQxYzguMjcxLDAsMTUtNi43MjksMTUtMTVzLTYuNzI5LTE1LTE1LTE1cy0xNSw2LjcyOS0xNSwxNVM1OS45NTYsMzI2Ljc0MSw2OC4yMjcsMzI2Ljc0MXoiLz48cGF0aCBkPSJNMzgzLjIyNywyNTYuNzQxYzAsMTEuMDI4LDguOTcyLDIwLDIwLDIwczIwLTguOTcyLDIwLTIwYzAtMTEuMDI3LTguOTcyLTIwLTIwLTIwUzM4My4yMjcsMjQ1LjcxNCwzODMuMjI3LDI1Ni43NDF6Ii8+PHBhdGggZD0iTTEyNC42NzEsMTcxLjM0N2M3LjUyOSw5Ljc5MSwyMC4zMzUsMTUuMzA1LDI5Ljc1NCwxOC4yMTFjMS45MzUsMC41OTcsMy4zMTksMi4yOTYsMy41MDUsNC4zMTMgICAgYzIuMDQxLDIyLjE0OCw5LjEwOSw0MS4wMjYsMjAuNDQxLDU0LjYxNmMxMi43NzMsMTUuMzgzLDI5LjY3MywyNi4zOTMsNDguODc5LDMxLjg5YzEuNzYyLDAuNTA0LDMuMTA3LDEuODg2LDMuNTA1LDMuNjc1ICAgIGMyLjYwNCwxMS43MTcsMi40MjEsMjMuOTY0LTAuNTYxLDM3LjIwMkMyMjguMDQyLDMzMS4zNiwyMjMuMjQ5LDM0MiwyMTguMjM2LDM1Mmg3MC4xMTRjLTUuMDE2LTExLTguMTAxLTIyLjQyNS05Ljg4OC0zMC4yNDUgICAgYy0yLjk3OS0xMy4yNzEtMy4yMDItMjUuNTEyLTAuNjg4LTM3LjYxM2MwLjM3Ni0xLjgwOSwxLjcxOC0zLjMxNSwzLjQ4OS0zLjgzNGMxOS4xNzItNS42MTgsMzYuMDAzLTE2Ljc4MSw0OC42NzQtMzIuMjM1ICAgIGMxMC43MjYtMTMuMDA5LDE2LjY4LTMwLjIyLDE4Ljc0Ni01NC4xNDhjMC4xNzQtMi4wMTcsMS41NDctMy43MzYsMy40NzgtNC4zNDVjMTMuNjMtNC4yOTgsMjUuMjE1LTExLjQxLDMwLjk5MS0xOS4wMTggICAgYzcuNDQ1LTkuNzQxLDExLjM1NS0yMS4zNDcsMTEuMzE3LTMzLjU2OWwtMC4zMjUtNzAuMjQzTDM2Myw2Ni44NDh2NzQuODk0YzAsMi43NjItMi4yMzgsNS01LDVzLTUtMi4yMzgtNS01di03OS44NiAgICBsLTAuMDYyLTI1LjQ1OUwxNTMsMzcuMDM1djI0LjY4OGMwLDAuMzMsMCwwLjY1NywwLDAuOTc3djc5LjA0MWMwLDIuNzYyLTIuMjM5LDUtNSw1cy01LTIuMjM4LTUtNVY2Ni43NThsLTMwLjE3LDAuMDk5ICAgIGwwLjI2OSw3MS4wMDlDMTEzLjEzNiwxNTAuMDg3LDExNy4xNzUsMTYxLjY2NCwxMjQuNjcxLDE3MS4zNDd6IE0xOTEuMDUxLDY3aDEyNC4zNTJjMi43NjIsMCw1LDIuMjM5LDUsNWMwLDIuNzYyLTIuMjM4LDUtNSw1ICAgIEgxOTEuMDUxYy0yLjc2MSwwLTUtMi4yMzgtNS01QzE4Ni4wNTEsNjkuMjM5LDE4OC4yOSw2NywxOTEuMDUxLDY3eiBNMTgzLDExMS43NDFjMC0yLjc2MSwyLjQ2NS00Ljc0MSw1LjIyNy00Ljc0MWgxMzAgICAgYzIuNzYyLDAsNC43NzMsMS45OCw0Ljc3Myw0Ljc0MXY0NWMwLDM4LjU5OS0zMS40MDIsNzAtNzAsNzBjLTM4LjU5OCwwLTcwLTMxLjQwMS03MC03MFYxMTEuNzQxeiIvPjxwb2x5Z29uIHBvaW50cz0iMjEwLjE4MiwzNjIgMTQ4LDM2MiAxNDgsNDI3IDM1OCw0MjcgMzU4LDM2MiAyOTYuMjcxLDM2MiAgICIvPjxwYXRoIGQ9Ik00NTMuNzczLDQ2NkgzODN2LTI5aC0xOS43N0gxNDMuMjIzSDEyM3YyOUg2MS41ODZjLTIuNzYxLDAtNSwyLjIzOC01LDVzMi4yMzksNSw1LDVoMzkyLjE4N2MyLjc2MiwwLDUtMi4yMzgsNS01ICAgIFM0NTYuNTM1LDQ2Niw0NTMuNzczLDQ2NnoiLz48L2c+PC9nPjxnIGlkPSJMYXllcl8xIi8+PC9zdmc+',
        'rewrite'            => array( 'slug' => 'tournaments' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor' ),
        'show_in_rest'       => false
    );
      
    register_post_type( 'tournament', $args );
});

/**
 * Create taxonomies
 *
 */

add_action( 'init', function() {
    // Add new taxonomy
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', 'adline-tournaments' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'adline-tournaments' ),
        'search_items'      => __( 'Search Categories', 'adline-tournaments' ),
        'all_items'         => __( 'All Categories', 'adline-tournaments' ),
        'parent_item'       => __( 'Parent Category', 'adline-tournaments' ),
        'parent_item_colon' => __( 'Parent Category:', 'adline-tournaments' ),
        'edit_item'         => __( 'Edit Category', 'adline-tournaments' ),
        'update_item'       => __( 'Update Category', 'adline-tournaments' ),
        'add_new_item'      => __( 'Add New Category', 'adline-tournaments' ),
        'new_item_name'     => __( 'New Category Name', 'adline-tournaments' ),
        'menu_name'         => __( 'Category', 'adline-tournaments' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'       => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tournament-category' ),
    );
 
    register_taxonomy( 'tournament-category', array( 'tournament' ), $args );
}, 0 );