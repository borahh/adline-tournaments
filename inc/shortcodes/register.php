<?php

add_action('template_redirect', 'specific_logged_in_redirect');
function specific_logged_in_redirect() {
    if ( is_page('registration') && is_user_logged_in() ) {
        wp_redirect( get_permalink( get_option('woocommerce_myaccount_page_id')) );
        exit();
    }

    // If it a specific post-type
    if ( is_single() && 'reg-page' == get_post_type() && !is_user_logged_in() ) {
      wp_redirect( get_permalink( get_option('woocommerce_myaccount_page_id')) );
      exit(); 
    }
}
   
add_shortcode( 'wc_reg_form', 'adl_register' );
    
function adl_register() {
   if ( is_admin() ) return;

   
   if ( is_user_logged_in() ) return;
   
   ob_start();
 
   // NOTE: THE FOLLOWING <FORM></FORM> IS COPIED FROM woocommerce\templates\myaccount\form-login.php
   // IF WOOCOMMERCE RELEASES AN UPDATE TO THAT TEMPLATE, YOU MUST CHANGE THIS ACCORDINGLY
 
   do_action( 'woocommerce_before_customer_login_form' );
 
   ?>
      <form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
 
         <?php do_action( 'woocommerce_register_form_start' ); ?>
 
         <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
 
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
               <label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
               <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
            </p>
 
         <?php endif; ?>
 
         <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="billing_first_name"><?php esc_html_e( 'First Name', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_first_name" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_first_name" id="billing_first_name" value="<?php echo ( ! empty( $_POST['billing_first_name'] ) ) ? esc_attr( wp_unslash( $_POST['billing_first_name'] ) ) : ''; ?>" />
            
            <label for="billing_last_name"><?php esc_html_e( 'Last Name', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_last_name" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_last_name" id="billing_last_name" value="<?php echo ( ! empty( $_POST['billing_last_name'] ) ) ? esc_attr( wp_unslash( $_POST['billing_last_name'] ) ) : ''; ?>" />
           
            <label for="billing_street"><?php esc_html_e( 'Street Address', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_street" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_street" id="billing_street" value="<?php echo ( ! empty( $_POST['billing_street'] ) ) ? esc_attr( wp_unslash( $_POST['billing_street'] ) ) : ''; ?>" />
  
            <label for="billing_suite"><?php esc_html_e( 'Suite/Appartment', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_suite" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_suite" id="billing_suite" value="<?php echo ( ! empty( $_POST['billing_suite'] ) ) ? esc_attr( wp_unslash( $_POST['billing_suite'] ) ) : ''; ?>" />
  
            <label for="billing_city"><?php esc_html_e( 'City', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_city" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_city" id="billing_city" value="<?php echo ( ! empty( $_POST['billing_city'] ) ) ? esc_attr( wp_unslash( $_POST['billing_city'] ) ) : ''; ?>" />
            
            
            <label for="billing_state"><?php esc_html_e( 'State', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_state" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_state" id="billing_state" value="<?php echo ( ! empty( $_POST['billing_state'] ) ) ? esc_attr( wp_unslash( $_POST['billing_state'] ) ) : ''; ?>" />
            
            
            
            <label for="billing_zip"><?php esc_html_e( 'ZIP Code', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="billing_zip" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_zip" id="billing_zip" value="<?php echo ( ! empty( $_POST['billing_zip'] ) ) ? esc_attr( wp_unslash( $_POST['billing_zip'] ) ) : ''; ?>" />
            
            
         </p>
         <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
            <label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
         </p>
 
         <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
 
            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
               <label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
               <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
            </p>
 
         <?php else : ?>
 
            <p><?php esc_html_e( 'A password will be sent to your email address.', 'woocommerce' ); ?></p>
 
         <?php endif; ?>
 
         <?php do_action( 'woocommerce_register_form' ); ?>
 
         <p class="woocommerce-FormRow form-row">
            <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
         </p>
 
         <?php do_action( 'woocommerce_register_form_end' ); ?>
 
      </form>
 
   <?php
     
   return ob_get_clean();
}



/**
* register fields Validating.
*/
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
   if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {
          $validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {
          $validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_street'] ) && empty( $_POST['billing_street'] ) ) {
          $validation_errors->add( 'billing_street_error', __( '<strong>Error</strong>: Street is required!.', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_suite'] ) && empty( $_POST['billing_suite'] ) ) {
          $validation_errors->add( 'billing_suite_error', __( '<strong>Error</strong>: Suite / Appartment is required!.', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_city'] ) && empty( $_POST['billing_city'] ) ) {
          $validation_errors->add( 'billing_city_error', __( '<strong>Error</strong>: City is required!.', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_state'] ) && empty( $_POST['billing_state'] ) ) {
          $validation_errors->add( 'billing_state_error', __( '<strong>Error</strong>: State is required!.', 'woocommerce' ) );
   }
   if ( isset( $_POST['billing_zip'] ) && empty( $_POST['billing_zip'] ) ) {
          $validation_errors->add( 'billing_zip_error', __( '<strong>Error</strong>: ZIP Code is required!.', 'woocommerce' ) );
   }
      return $validation_errors;
}
add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );


/**
* Below code save extra fields.
*/
function wooc_save_extra_register_fields( $customer_id ) {
   if ( isset( $_POST['billing_phone'] ) ) {
                // Phone input filed which is used in WooCommerce
                update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );
         }
     if ( isset( $_POST['billing_first_name'] ) ) {
            //First name field which is by default
            update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
            // First name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );
     }
     if ( isset( $_POST['billing_last_name'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );
     }
     if ( isset( $_POST['billing_street'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'street', sanitize_text_field( $_POST['billing_street'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_street', sanitize_text_field( $_POST['billing_street'] ) );
     }
     if ( isset( $_POST['billing_suite'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'suite', sanitize_text_field( $_POST['billing_suite'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_suite', sanitize_text_field( $_POST['billing_suite'] ) );
     }
     if ( isset( $_POST['billing_city'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'city', sanitize_text_field( $_POST['billing_city'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );
     }
     if ( isset( $_POST['billing_city'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'city', sanitize_text_field( $_POST['billing_city'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );
     }
     if ( isset( $_POST['billing_zip'] ) ) {
            // Last name field which is by default
            update_user_meta( $customer_id, 'zip', sanitize_text_field( $_POST['billing_zip'] ) );
            // Last name field which is used in WooCommerce
            update_user_meta( $customer_id, 'billing_zip', sanitize_text_field( $_POST['billing_zip'] ) );
     }
}
add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );