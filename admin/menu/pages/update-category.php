<?php

function adline_update_category_page() {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $update = $_POST["update"];
        $term = get_term( $update, 'tournament-category' );

        ?>

        <form id="form-update_category" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mb-2">Title</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="hidden" name="update_term_id" value="<?php echo $update; ?>" />
                <!--end::Input-->

                <!--begin::Input-->
                <input type="text" name="update_term" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., Bow Hunting" value="<?php echo $term->name;?>" required />
                <!--end::Input-->

                <!--begin::Label-->
                <label class="required fw-semibold fs-6 mt-5 mb-2">Slug</label>
                <!--end::Label-->

                <!--begin::Input-->
                <input type="text" name="update_slug" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., bow-hunting" value="<?php echo $term->slug;?>" required />

                <input type="submit" value="Update" />
                <!--end::Input-->
            </div>
            <!--end::Input group-->

        </form>


        <?php
    } else {
        wp_redirect('admin.php?page=manage_tournaments');
    }
}