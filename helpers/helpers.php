<?php

function adlt_create_update_product_variation( $product_id, $variation_data ){

    if(isset($variation_data['variation_id'])) {

      $variation_id = $variation_data['variation_id'];

    } else {

      // if the variation doesn't exist then create it

      // Get the Variable product object (parent)
      $product = wc_get_product($product_id);

      var_dump($product);

      $variation_post = array(
          'post_title'  => 'TITLE',
          'post_name'   => 'product-'.$product_id.'-variation',
          'post_status' => 'publish',
          'post_parent' => $product_id,
          'post_type'   => 'product_variation',
      );

    //   // Creating the product variation
    //   $variation_id = wp_insert_post( $variation_post );

    }

    // ...

}