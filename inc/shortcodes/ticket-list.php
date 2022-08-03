<?php

add_shortcode( 'ticket-list', function( $atts ) {
    $atts = shortcode_atts(
        array(
            'q' => 'no foo',
        ), $atts, 'ticket-list' );

                $the_query = new WP_Query( array(
                    'post_type' => 'product',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'product_cat',
                            'field' => 'id',
                            'terms' => $atts['q'],
                        )
                    ),
                ));

                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        ?>
                        <a href="<?php echo esc_url( get_permalink(get_the_ID()) ); ?>"><?php esc_html_e( the_title(), 'textdomain' ); ?></a>

                        <?php
                    }

                } else {
                    return "No Tickets available";
                }
 
});

