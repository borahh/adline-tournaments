<?php 

/**
 *  This file is used to register Custom Post type "TOURNAMENTS" and its custom TAXONOMIES
 **/

add_action( 'init', function() {
    $labels = array(
        'name'                  => _x( 'Tournaments', 'Post type general name', 'adline-tournaments' ),
        'singular_name'         => _x( 'Tournament', 'Post type singular name', 'adline-tournaments' ),
        'menu_name'             => _x( 'Tournaments', 'Admin Menu text', 'adline-tournaments' ),
        'name_admin_bar'        => _x( 'Tournament', 'Add New on Toolbar', 'adline-tournaments' ),
        'add_new'               => __( 'Add New', 'tournament' ),
        'add_new_item'          => __( ' ', 'adline-tournaments' ),
        'new_item'              => __( 'New tournament', 'adline-tournaments' ),
        'edit_item'             => __( ' ', 'adline-tournaments' ),
        'view_item'             => __( 'View tournament', 'adline-tournaments' ),
        'all_items'             => __( 'All tournaments', 'adline-tournaments' ),
        'search_items'          => __( 'Search tournaments', 'adline-tournaments' ),
        'parent_item_colon'     => __( 'Parent tournaments:', 'adline-tournaments' ),
        'not_found'             => __( 'No tournaments found.', 'adline-tournaments' ),
        'not_found_in_trash'    => __( 'No tournaments found in Trash.', 'adline-tournaments' ),
        'featured_image'        => _x( 'Tournament Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'adline-tournaments' ),
        'archives'              => _x( 'Tournament archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'adline-tournaments' ),
        'insert_into_item'      => _x( 'Insert into tournament', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'adline-tournaments' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this tournament', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'adline-tournaments' ),
        'filter_items_list'     => _x( 'Filter tournaments list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'adline-tournaments' ),
        'items_list_navigation' => _x( 'Tournaments list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'adline-tournaments' ),
        'items_list'            => _x( 'Tournaments list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'adline-tournaments' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Tournament custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => false,
        'query_var'          => true,
        'menu_icon'          => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB2ZXJzaW9uPSIxLjEiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJfeDM4XzhfeDJDX19Bd2FyZF94MkNfX0N1cF94MkNfX1Ryb3BoeV94MkNfX0NhbmFkYSI+PGc+PHBhdGggZD0iTTI1MywyMTYuNzQxYzMzLjA4NCwwLDYwLTI2LjkxNiw2MC02MFYxMTdIMTkzdjM5Ljc0MUMxOTMsMTg5LjgyNSwyMTkuOTE2LDIxNi43NDEsMjUzLDIxNi43NDF6Ii8+PHBhdGggZD0iTTY4LjIyNywzMjYuNzQxYzguMjcxLDAsMTUtNi43MjksMTUtMTVzLTYuNzI5LTE1LTE1LTE1cy0xNSw2LjcyOS0xNSwxNVM1OS45NTYsMzI2Ljc0MSw2OC4yMjcsMzI2Ljc0MXoiLz48cGF0aCBkPSJNMzgzLjIyNywyNTYuNzQxYzAsMTEuMDI4LDguOTcyLDIwLDIwLDIwczIwLTguOTcyLDIwLTIwYzAtMTEuMDI3LTguOTcyLTIwLTIwLTIwUzM4My4yMjcsMjQ1LjcxNCwzODMuMjI3LDI1Ni43NDF6Ii8+PHBhdGggZD0iTTEyNC42NzEsMTcxLjM0N2M3LjUyOSw5Ljc5MSwyMC4zMzUsMTUuMzA1LDI5Ljc1NCwxOC4yMTFjMS45MzUsMC41OTcsMy4zMTksMi4yOTYsMy41MDUsNC4zMTMgICAgYzIuMDQxLDIyLjE0OCw5LjEwOSw0MS4wMjYsMjAuNDQxLDU0LjYxNmMxMi43NzMsMTUuMzgzLDI5LjY3MywyNi4zOTMsNDguODc5LDMxLjg5YzEuNzYyLDAuNTA0LDMuMTA3LDEuODg2LDMuNTA1LDMuNjc1ICAgIGMyLjYwNCwxMS43MTcsMi40MjEsMjMuOTY0LTAuNTYxLDM3LjIwMkMyMjguMDQyLDMzMS4zNiwyMjMuMjQ5LDM0MiwyMTguMjM2LDM1Mmg3MC4xMTRjLTUuMDE2LTExLTguMTAxLTIyLjQyNS05Ljg4OC0zMC4yNDUgICAgYy0yLjk3OS0xMy4yNzEtMy4yMDItMjUuNTEyLTAuNjg4LTM3LjYxM2MwLjM3Ni0xLjgwOSwxLjcxOC0zLjMxNSwzLjQ4OS0zLjgzNGMxOS4xNzItNS42MTgsMzYuMDAzLTE2Ljc4MSw0OC42NzQtMzIuMjM1ICAgIGMxMC43MjYtMTMuMDA5LDE2LjY4LTMwLjIyLDE4Ljc0Ni01NC4xNDhjMC4xNzQtMi4wMTcsMS41NDctMy43MzYsMy40NzgtNC4zNDVjMTMuNjMtNC4yOTgsMjUuMjE1LTExLjQxLDMwLjk5MS0xOS4wMTggICAgYzcuNDQ1LTkuNzQxLDExLjM1NS0yMS4zNDcsMTEuMzE3LTMzLjU2OWwtMC4zMjUtNzAuMjQzTDM2Myw2Ni44NDh2NzQuODk0YzAsMi43NjItMi4yMzgsNS01LDVzLTUtMi4yMzgtNS01di03OS44NiAgICBsLTAuMDYyLTI1LjQ1OUwxNTMsMzcuMDM1djI0LjY4OGMwLDAuMzMsMCwwLjY1NywwLDAuOTc3djc5LjA0MWMwLDIuNzYyLTIuMjM5LDUtNSw1cy01LTIuMjM4LTUtNVY2Ni43NThsLTMwLjE3LDAuMDk5ICAgIGwwLjI2OSw3MS4wMDlDMTEzLjEzNiwxNTAuMDg3LDExNy4xNzUsMTYxLjY2NCwxMjQuNjcxLDE3MS4zNDd6IE0xOTEuMDUxLDY3aDEyNC4zNTJjMi43NjIsMCw1LDIuMjM5LDUsNWMwLDIuNzYyLTIuMjM4LDUtNSw1ICAgIEgxOTEuMDUxYy0yLjc2MSwwLTUtMi4yMzgtNS01QzE4Ni4wNTEsNjkuMjM5LDE4OC4yOSw2NywxOTEuMDUxLDY3eiBNMTgzLDExMS43NDFjMC0yLjc2MSwyLjQ2NS00Ljc0MSw1LjIyNy00Ljc0MWgxMzAgICAgYzIuNzYyLDAsNC43NzMsMS45OCw0Ljc3Myw0Ljc0MXY0NWMwLDM4LjU5OS0zMS40MDIsNzAtNzAsNzBjLTM4LjU5OCwwLTcwLTMxLjQwMS03MC03MFYxMTEuNzQxeiIvPjxwb2x5Z29uIHBvaW50cz0iMjEwLjE4MiwzNjIgMTQ4LDM2MiAxNDgsNDI3IDM1OCw0MjcgMzU4LDM2MiAyOTYuMjcxLDM2MiAgICIvPjxwYXRoIGQ9Ik00NTMuNzczLDQ2NkgzODN2LTI5aC0xOS43N0gxNDMuMjIzSDEyM3YyOUg2MS41ODZjLTIuNzYxLDAtNSwyLjIzOC01LDVzMi4yMzksNSw1LDVoMzkyLjE4N2MyLjc2MiwwLDUtMi4yMzgsNS01ICAgIFM0NTYuNTM1LDQ2Niw0NTMuNzczLDQ2NnoiLz48L2c+PC9nPjxnIGlkPSJMYXllcl8xIi8+PC9zdmc+',
        'rewrite'            => array( 'slug' => 'tournaments' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title' ),
        'show_in_rest'       => true
    );
      
    register_post_type( 'tournament', $args );
});

/**
 * Update Messages
 */
add_filter( 'post_updated_messages', function( $messages ) {
    $post             = get_post();
    $post_type        = get_post_type( $post );
    $post_type_object = get_post_type_object( $post_type );
 
    if($post_type == 'tournament') {
        return $null;
    }
    
} );

/**
 * Create taxonomies
 *
 */

add_action( 'init', function() {
    // Add new taxonomy
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', 'adline-tournaments' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'adline-tournaments' ),
        'search_items'      => __( 'Search Categories', 'adline-tournaments' ),
        'all_items'         => __( 'All Categories', 'adline-tournaments' ),
        'parent_item'       => __( 'Parent Category', 'adline-tournaments' ),
        'parent_item_colon' => __( 'Parent Category:', 'adline-tournaments' ),
        'edit_item'         => __( 'Edit Category', 'adline-tournaments' ),
        'update_item'       => __( 'Update Category', 'adline-tournaments' ),
        'add_new_item'      => __( 'Add New Category', 'adline-tournaments' ),
        'new_item_name'     => __( 'New Category Name', 'adline-tournaments' ),
        'menu_name'         => __( 'Category', 'adline-tournaments' ),
    );
 
    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => false,
        'show_in_menu'       => false,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'tournament-category' ),

    );
 
    register_taxonomy( 'tournament-category', array( 'tournament' ), $args );
}, 0 );

// Remove Publish Metabox
add_action( 'admin_menu', function () {
    remove_meta_box( 'submitdiv', 'tournament', 'side' );
} );


// Create Tournament Window
add_action('edit_form_top', function() {
	$screen = get_current_screen();
	if( $screen->id=='tournament') {

        // First five div tags will be collapsed on edit_form_advanced
		?>
        <!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <!--begin::Toolbar container-->
                                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-row justify-content-center flex-wrap me-3" style="align-items: center;">
                                   
                                        <!--begin::Svg Icon -->
                                        <span class="me-5 svg-icon svg-icon-muted svg-icon-2hx">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                                <path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <?php if($screen->action=='add') { ?>
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex text-dark fw-bold fs-1 flex-column justify-content-center my-0">Create Tournament</h1>
                                        <!--end::Title-->
                                        <?php } else { ?>
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex text-dark fw-bold fs-1 flex-column justify-content-center my-0">Edit Tournament</h1>
                                        <!--end::Title-->
                                        <?php } ?>
                                             
                                    </div>
                                    <!--end::Page title-->
                                    
                                </div>
                                <!--end::Toolbar container-->
                            </div>
                            
                            
                            <!--start::Postuff container-->
                            <div style="padding-left: 30px;">

        <?php
	}
 }
);


add_action('edit_form_advanced', function() {
	$screen = get_current_screen();
	if($screen->post_type=='tournament' && $screen->id=='tournament') {
		?>


                      <input type="submit" name="save" id="publish" class="button button-primary button-large" value="Update">
                        <!--start::Postuff container-->
                        </div>


                        </div>
						<!--end::Content wrapper-->
						
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
        <?php
	}
 }
);


add_action('edit_form_after_title', function() {
	$screen = get_current_screen();
	if($screen->action !=='add' && $screen->id=='tournament') {

        global $post;
        $term_id=get_field('woo_ticket_id', $post->ID);
		?>
        
        <button form="form-sendto_ticket" class="btn btn-secondary btn-sm">
            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                    <path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor"/>
                </svg>
            </span>
        Manage Tickets
        </button>
        <form></form>
        <form id="form-sendto_ticket" class="form" method="POST" action="admin.php?page=tickets" autocomplete="off">
            <input type="hidden" name="term_id" value="<?php echo $term_id; ?>">
        </form>
        <?php
	}
 }
);

/**
 * Sync Post status with ACF field
 */
// run after ACF saves the $_POST['acf'] data
add_action('acf/save_post', function( $post_id ) {
    
    // Get the selected post status
    $value = get_field('status', $post_id);
    
    // Update current post
    $my_post = array(
      'ID'           => $post_id,
      'post_status'   => $value,
    );

    // Remove the action to avoid infinite loop
    remove_action('acf/save_post', 'my_acf_save_post', 20);
    
    // Update the post into the database
    wp_update_post( $my_post );
    
    // Add the action back
    add_action('acf/save_post', 'my_acf_save_post', 20);
    
}
, 20);


function prepare_acf_message_content( $field ) { 

    if ( is_admin() ) {

        global $post;
        $categoryID = get_field('woo_ticket_id', $post->ID);

        $orders = get_term_meta($categoryID, 'subscribed_users', true);
        
        
        $orderArr = explode(', ', $orders);
        
        
        if( $orders && $orderArr ) {

            $field['message'] = '<div class="card-body pt-2">';
            foreach( $orderArr as $orderID) {
                    $order = new WC_Order( $orderID );
                    $user = get_user_by( 'id', $order->get_user_id() );
                    $date = $order->get_date_created();

                    $field['message'] .= '                   
                    <div class="d-flex align-items-center">
                        <!--begin::Bullet-->
                        <span class="bullet bullet-vertical h-40px bg-success"></span>
                        <!--end::Bullet-->
                        
                        <!--begin::Description-->
                        <div class="flex-grow-1 ps-5">
                            <a href="post.php?post=' . $orderID . '&action=edit" class="text-gray-800 text-hover-primary fw-bold" style="font-size: 15px;">Order ID: #' . $orderID . '</a>
                            <span class="text-muted fw-semibold d-block" style="font-size: 13px;">' . $user->display_name . '</span>
                        </div>
                        <!--end::Description-->
                        <span class="text-muted fw-bold d-block">' . $date->date("F j, Y, g:i:s A T") . '</span>
                    </div>'; 
            }

            $field['message'] .= '</div>';



        } else {
            $field['message'] = "No Orders Found";

        }
        return $field ;


    }


}

add_filter('acf/prepare_field/key=field_62e437e397199', 'prepare_acf_message_content') ;


