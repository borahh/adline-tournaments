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
    $child_price = $_POST["child_price"];
    $adult_price = $_POST["adult_price"];
    $stock = $_POST["stock"];

    $img = get_field( 'adlt_ticket_icon', 'options');

    if($term_id && $name &&  $child_price && $adult_price && $stock) {
        // Creating a variable product
        $product = new WC_Product_Variable();

        // Name and image would be enough
        $product->set_name( $name );
        $product->set_image_id( $img );


        // one available for variation attribute
        $attribute = new WC_Product_Attribute();
        $attribute->set_name( 'Age' );
        $attribute->set_options( array( 'Child', 'Adult' ) );
        $attribute->set_position( 0 );
        $attribute->set_visible( fasle );
        $attribute->set_variation( true ); // here it is
            
        $product->set_attributes( array( $attribute ) );

        $product->set_stock_status( 'instock' ); // 'instock', 'outofstock' or 'onbackorder'
        // Stock management at product level
        $product->set_category_ids( array($term_id) );
        $product->set_manage_stock( true );
        $product->set_stock_quantity( $stock );

        // save the changes and go on
        $product->save();

        // now we need two variations for Magical and Non-magical Wizard hat
        $variation = new WC_Product_Variation();
        $variation->set_parent_id( $product->get_id() );
        $variation->set_attributes( array( 'age' => 'Child' ) );
        $variation->set_regular_price( $child_price ); // yep, magic hat is quite expensive
        $variation->save();

        $variation = new WC_Product_Variation();
        $variation->set_parent_id( $product->get_id() );
        $variation->set_attributes( array( 'age' => 'Adult' ) );
        $variation->set_regular_price( $adult_price );
        $variation->save();

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
        $newTerm = wp_insert_term( $term, 'tournament-category', array(
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