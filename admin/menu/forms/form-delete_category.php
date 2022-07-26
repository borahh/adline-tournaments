<?php

/**
 * 
 * Used to Create Tournament Category
 * 
 * Used In: manager-categories.php
 * 
 */

 ?>

<form id="<?php echo 'adlt_delete_category-' . $term->term_id ;?>" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">							
        <!--begin::Input-->
        <input type="hidden" name="delete" value="<?php echo $term->term_id; ?>"  />
        <!--end::Input-->
</form>