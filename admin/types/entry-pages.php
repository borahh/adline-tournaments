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
        'menu_icon'          => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjU0MS45MTFweCIgaGVpZ2h0PSI1NDEuOTExcHgiIHZpZXdCb3g9IjAgMCA1NDEuOTExIDU0MS45MTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDU0MS45MTEgNTQxLjkxMTsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZD0iTTUzMy4xMyw0NjcuODI2aC00Ny40NTFWNzQuMDkxaDQ3LjQ1MWM0LjYwNCwwLDguMzM0LTMuNzM1LDguMzM0LTguMzM0YzAtNC42MDctMy43MjktOC4zMzctOC4zMzQtOC4zMzdoLTQ5LjA2NVY4LjMzNA0KCQljMC00LjU5OS0zLjczNS04LjMzNC04LjMzNC04LjMzNGMtNC42MSwwLTguMzM0LDMuNzM2LTguMzM0LDguMzM0djQ5LjA4SDc0LjUyOVY4LjMzNEM3NC41MjksMy43MzYsNzAuNzk2LDAsNjYuMTk1LDANCgkJYy00LjYxLDAtOC4zMzQsMy43MzYtOC4zMzQsOC4zMzR2NDkuMDhIOC43ODFjLTQuNjA3LDAtOC4zMzQsMy43My04LjMzNCw4LjMzN2MwLDQuNTk5LDMuNzI3LDguMzM0LDguMzM0LDguMzM0aDQ5LjA4djM5My43NA0KCQlIOC43ODFjLTQuNjA3LDAtOC4zMzQsMy43MzUtOC4zMzQsOC4zMzRjMCw0LjYxLDMuNzI3LDguMzM0LDguMzM0LDguMzM0aDQ5LjA4djQ5LjA4M2MwLDQuNTk5LDMuNzI0LDguMzM0LDguMzM0LDguMzM0DQoJCWM0LjYwMiwwLDguMzM0LTMuNzM1LDguMzM0LTguMzM0di00OC4zMzloMzkyLjg2OHY0OC4zMzljMCw0LjU5OSwzLjcyNCw4LjMzNCw4LjMzNCw4LjMzNGM0LjU5OSwwLDguMzM0LTMuNzM1LDguMzM0LTguMzM0DQoJCXYtNDkuMDgzaDQ5LjA2NWM0LjYwNCwwLDguMzM0LTMuNzI0LDguMzM0LTguMzM0QzU0MS40NjQsNDcxLjU2MSw1MzcuNzM1LDQ2Ny44MjYsNTMzLjEzLDQ2Ny44MjZ6IE0yMDEuMzg2LDQ2OC4yMDRINzQuNTI5DQoJCVYzNDAuNDEzaDEyNi44NTdWNDY4LjIwNHogTTIwMS4zODYsMzM0Ljg1N0g3NC41MjlWMjA3LjQzNWgxMjYuODU3VjMzNC44NTd6IE0yMDEuMzg2LDIwMS41MDRINzQuNTI5Vjc0LjA5MWgxMjYuODU3VjIwMS41MDR6DQoJCSBNMzM0LjczNiw0NjguMjA0SDIwNi45NDJWMzQwLjQxM2gxMjcuNzk0VjQ2OC4yMDR6IE0zMzQuNzM2LDMzNC44NTdIMjA2Ljk0MlYyMDcuNDM1aDEyNy43OTRWMzM0Ljg1N3ogTTMzNC43MzYsMjAxLjUwNEgyMDYuOTQyDQoJCVY3NC4wOTFoMTI3Ljc5NFYyMDEuNTA0eiBNNDY4LjA4Myw0NjguMjA0SDM0MC4yOTJWMzQwLjQxM2gxMjcuNzkxVjQ2OC4yMDR6IE00NjguMDgzLDMzNC44NTdIMzQwLjI5MlYyMDcuNDM1aDEyNy43OTFWMzM0Ljg1N3oNCgkJIE00NjguMDgzLDIwMS41MDRIMzQwLjI5MlY3NC4wOTFoMTI3Ljc5MVYyMDEuNTA0eiBNMzIzLjQxMSwzMjMuNDE0SDIxOC41MDNWMjE4LjVoMTA0LjkwN1YzMjMuNDE0eiIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=',
        'rewrite'            => array( 'slug' => 'entry-pages' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'category' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'entry-page', $args );
});
