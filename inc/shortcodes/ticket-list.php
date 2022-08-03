<?php

function wpdocs_bartag_func( $atts ) {
    $atts = shortcode_atts(
        array(
            'ID' => 'no foo',
        ), $atts, 'bartag' );
 
    return 'bartag: ' . esc_html( $atts['foo'] );
}
add_shortcode( 'ticket-list', 'wpdocs_bartag_func' );

// add_shortcode( 'ticket-list', function( $atts = '' ) {
//     $atts = shortcode_atts( array(
//         'ID' => 0,
//     ), $atts );
 
    
//         echo $atts['ID'];
//         $the_query = new WP_Query( array(
//             'post_type' => 'product',
//             'tax_query' => array(
//                 array (
//                     'taxonomy' => 'product_cat',
//                     'field' => 'id',
//                     'terms' => $atts['ID'],
//                 )
//             ),
//         ));

//         if ( $the_query->have_posts() ) {
//             while ( $the_query->have_posts() ) {
//                 $the_query->the_post();
//                 echo the_title();

//             }

//         } else {
//             return "No Tickets available";
//         }
// } );
