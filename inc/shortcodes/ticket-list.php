<?php

add_shortcode( 'ticket-list', function( $a ) {
    $a = shortcode_atts( array(
        'ID' => 0,
    ), $a, 'ticket-list' );
 
    
        $the_query = new WP_Query( array(
            'post_type' => 'product',
            'tax_query' => array(
                array (
                    'taxonomy' => 'product_cat',
                    'field' => 'id',
                    'terms' => $a['ID'],
                )
            ),
        ));

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo the_title();

            }

        } else {
            return "No Tickets available";
        }
} );
