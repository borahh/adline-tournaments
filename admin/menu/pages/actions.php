<?php
/**
 * 
 * Actions Page Callback
 */
function adline_actions_page() {
// Ticket Create Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $term_id = $_POST["term_id"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];

    $img = get_field( 'adlt_ticket_icon', 'options');

    if($term_id && $name &&  $price && $stock) {
        
        $product = new WC_Product_Simple();

        // Name and image would be enough
        $product->set_name( $name );
        $product->set_image_id( $img );
        $product->set_regular_price( $price );
        // $product->set_catalog_visibility( 'hidden' );

        $product->set_stock_status( 'instock' ); // 'instock', 'outofstock' or 'onbackorder'
        // Stock management at product level

        // Woo Tickets , ID = 58
        $product->set_category_ids( array($term_id, 58) );
        $product->set_manage_stock( true );
        $product->set_stock_quantity( $stock );

        // save the changes and go on
        $product->save();

        ?>
        <form id="redirectForm" class="form" method="POST" action="admin.php?page=tickets" autocomplete="off">
            <input type="hidden" name="term_id" value="<?php echo $term_id; ?>">
        </form>
        <script>
            document.getElementById("redirectForm").submit();
        </script>
        <?php

    }
    
}
// Category Create Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $term = $_POST["term"];
    $slug = $_POST["slug"];

    if($term && $slug) {
        $newTerm = wp_insert_term( $term, 'product_cat', array(
            'slug'   => $slug,
        ) );
        wp_redirect('admin.php?page=manage_tournaments');

    }
    
}

// Update Create Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $term_id = $_POST["update_term_id"];
    $term = $_POST["update_term"];
    $slug = $_POST["update_slug"];

    if($term_id && $term && $slug) {
        $update = wp_update_term( $term_id, 'tournament-category', array(
            'name' => $term,
            'slug' => $slug
        ) );
        wp_redirect('admin.php?page=manage_tournaments');

    }
    
}
            
// Category Delete Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete = $_POST["delete"];

    if($delete) {
            wp_delete_term($delete, 'tournament-category');
            wp_redirect('admin.php?page=manage_tournaments');
    }
    
}
// Tournament Delete Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete_tournament = $_POST["delete_tournament"];

    if($delete_tournament) {
            wp_delete_post($delete_tournament, true);
            wp_redirect('admin.php?page=manage_tournaments');
    }
    
}
// Ticket Delete Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete_ticket = $_POST["delete_ticket"];

    if($delete_ticket) {
            wp_delete_post($delete_ticket, true);
            wp_redirect('admin.php?page=manage_tournaments');
    }
    
}
}

?>