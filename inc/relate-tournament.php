<?php

// Prevent empty tournaments to publish
add_filter( 'wp_insert_post_data' , function( $data , $postarr ) {
  
    if( empty($data['post_title']) ) {
        wp_die( __('Error: No title was set. <a href="post-new.php?post_type=tournament"> Back </a>') );
    }
    return $data;
}, '99', 2 );


// On Creation of a new tournament
add_action('transition_post_status', function( $new_status, $old_status, $post ) {
  if ( $new_status == 'publish' && $old_status != 'publish' && $post->post_type === 'tournament' ) {
     
      $productID = get_field( 'woo_ticket_id', $post_id );
  
      if($productID == 0) {
        $term = wp_insert_term(
          'Woo Ticket #' . $post->ID,   // the term 
          'product_cat', // the taxonomy
        );

        $form = wp_insert_post( array(
            'post_type' => 'wpforms',
            'post_title' => get_the_title($post->ID) . ' Entry Form',
            'post_status' => 'publish'
        ));
        
        $sc = '[wpforms id="' . $form . '"]';

        
        $entryID = wp_insert_post( array(
            'post_type' => 'entry-page',
            'post_title' => get_the_title($post->ID),
            'post_content' => $sc,
            'post_status' => 'publish'
        ));

        $leaderboardID = wp_insert_post( array(
            'post_type' => 'leaderboard',
            'post_title' => get_the_title($post->ID),
            'post_status' => 'publish'
        ));


        $termSlug = get_term_by('id', $term['term_id'], 'product_cat')->slug;
        $regID = wp_insert_post( array(
            'post_type' => 'reg-page',
            'post_title' => "Choose Tickets",
            'post_name' => get_the_title($post->ID),
            // 'post_content' => '[woo-multi-cart link="false" cats="' . $term['term_id'] . '"]' ,
            'post_content' => '[product_table quantities="false" category="' . $termSlug . '"]' ,
            'post_status' => 'publish'
        ));

       update_field('entry_id', $entryID, $post_id);
       update_field('reg_id', $regID, $post_id);
       update_field('leaderboard_id', $leaderboardID, $post_id);
       update_field('woo_ticket_id', $term['term_id'], $post_id);
       update_field('form_id', $form, $post_id);
  
      }
  }
}, 10, 3 );