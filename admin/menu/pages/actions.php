<?php
/**
 * 
 * Actions Page Callback
 */
function adline_actions_page() {
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
            
// Category Delete Form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $delete = $_POST["delete"];

    if($delete) {
            wp_delete_term($delete, 'tournament-category');
            wp_redirect('admin.php?page=manage_tournaments');
    }
    
}
}

?>