<?php

function adlt_user_bought_ticket($product_ids)
{
    $product_ids= array ('2258','2253','2242');//for testing
    global $woocommerce;
    $user_id = get_current_user_id();
    $current_user= wp_get_current_user();
    $customer_email = $current_user->email;


    foreach($product_ids as $item):
        if ( wc_customer_bought_product( $customer_email, $user_id, $item) )
           return true;
    endforeach; 

    return false;
}