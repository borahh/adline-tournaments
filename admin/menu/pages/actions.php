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
}

?>