<?php

// Add the custom columns to the book post type:
add_filter( 'manage_tournament_posts_columns', 'set_custom_edit_tournament_columns' );
function set_custom_edit_tournament_columns($columns) {
    unset( $columns['date'] );
    $columns['entry_page'] = __( 'Entry Page', 'adline-tournaments' );
    $columns['product_ticket'] = __( 'Product', 'adline-tournaments' );
    $columns['date'] = __( 'Date', 'adline-tournaments' );

    return $columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_tournament_posts_custom_column' , 'custom_tournament_column', 10, 2 );
function custom_tournament_column( $column, $post_id ) {
    switch ( $column ) {

        case 'entry_page' :
            $postObjId = get_field( 'adlt_product' , $post_id, true ); 
            $title = get_the_title($postObjId);
            $editLink = get_edit_post_link($postObjId);

            echo '<a href="' . $editLink . '">' . $title . '</a>';
            break;

        case 'product_ticket' :
            $postObjId = get_field( 'adlt_ep' , $post_id, true ); 
            $title = get_the_title($postObjId);
            $editLink = get_edit_post_link($postObjId);

            echo '<a href="' . $editLink . '">' . $title . '</a>';
            break;

    }
}