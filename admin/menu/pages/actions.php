<?php
/**
 * 
 * Actions Page Callback
 */
function adline_actions_page() {

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