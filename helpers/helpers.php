<?php 

function adlt_update_subscriber($order_id, $items) {
  foreach ( $items as $item ) {
    $product_id = $item->get_product_id();
    $product = wc_get_product( $product_id );
    $categoryIDs = $product->get_category_ids();


    foreach ( $categoryIDs as $categoryID) {

      $category = get_term_by( 'id', $categoryID , 'product_cat' );
      $categoryName = $category->name;



      if( str_starts_with( $categoryName, 'Woo Ticket #')) {
        
            // echo get_current_user_id();
            $old_meta = get_term_meta($categoryID, 'subscribed_users', true);
          
            $arr = explode(", ", $old_meta);

            if( $old_meta && in_array( get_current_user(), $arr ) ) {
              $new_meta = $old_meta . ', ' . get_current_user_id();
              // echo $new_meta;
              update_term_meta($categoryID, 'subscribed_users', $new_meta);

            } else {
              // echo get_current_user_id();
              update_term_meta($categoryID, 'subscribed_users', $order_id);
            }
      } 

    }
    
  }
}


/**
 * 
 * Check Order
 */

add_action( 'woocommerce_thankyou', function ( $order_id ) {
  // $order_id = 1166;
  $order = new WC_Order( $order_id );
  $userID = $order->get_user_id();
  $items = $order->get_items();

  adlt_update_subscriber($order_id, $items);

  
}, 10, 1 );
