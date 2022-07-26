<?php

// Prevent empty tournaments to publish
add_filter( 'wp_insert_post_data' , function( $data , $postarr ) {
  
    if( empty($data['post_title']) ) {
        wp_die( __('Error: No title was set. <a href="post-new.php?post_type=tournament"> Back </a>') );
    }
    return $data;
}, '99', 2 );


// On Creation of a new tournament
function so_post_40744782( $new_status, $old_status, $post ) {
    if ( $new_status == 'publish' && $old_status != 'publish' && $post->post_type === 'tournament' ) {
       
        $productID = get_field( 'product_id', $post_id );
    
        if($productID == 0) {
            $newProductID = wp_insert_post( array(
                'post_title' => 'Ticket #' . $post->ID,
                'post_type' => 'product',
                'post_status' => 'publish',
            ));
            
            $product = new WC_Product_Variable($newProductID);
            $product->set_catalog_visibility('hidden');
            $product->save();
            
            update_field('product_id', $newProductID, $post_id);
    
        }

        // The variation data
$variation_data =  array(
    'attributes' => array(
        'size'  => 'M',
        'color' => 'Green',
    ),
    'sku'           => '',
    'regular_price' => '22.00',
    'sale_price'    => '1',
    'stock_qty'     => 1,
);

// check if variation exists
$meta_query = array();
foreach ($variation_data['attributes'] as $key => $value) {
  $meta_query[] = array(
    'key' => 'attribute_pa_' . $key,
    'value' => $value
  );
}

$variation_post = get_posts(array(
  'post_type' => 'product_variation',
  'numberposts' => 1,
  'post_parent'   => $parent_id,
  'meta_query' =>  $meta_query
));

if($variation_post) {
  $variation_data['variation_id'] = $variation_post[0]->ID;
}

adlt_create_update_product_variation( $product_id, $variation_data );

    }
}
add_action('transition_post_status', 'so_post_40744782', 10, 3 );



