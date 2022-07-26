<?php

/**
 * 
 * When a NEW Tournament is added, create a new Wocommerce product(Ticket) and Entry Form
 */
add_action( 'save_post', function( $post_id, $post, $update ) {
    
    // Keys
    $key_ticket = 'adlt_tournament_ticket';
    
    // Only want to set if this is a new post!
    if ( $update ){
        return;
    }
     
    // Only set for post_type = post!
    if ( 'tournament' !== $post->post_type ) {
        return;
    }
     
    if( get_post_meta($post_id, $key_ticket, true) == false) {
        $new = array(
            'post_title' => 'Our new post',
            'post_content' => 'This is the content of our new post.',
            'post_status' => 'publish'
        );
        $prod_id = wp_insert_post( $new );
    
        if( $prod_id ){
            add_post_meta( $post_id, $key_ticket, $prod_id );
        } else {
            echo "Something went wrong, try again.";
        }
    }
}, 10,3 );
 
