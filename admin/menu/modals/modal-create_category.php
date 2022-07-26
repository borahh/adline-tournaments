<?php

/**
 * 
 * Create Category Modal
 * 
 */
?>
<div class="modal fade" tabindex="-1" id="create-category" style="margin-top:100px;">
    <div class="modal-dialog">
        <div class="modal-content position-absolute">
            <div class="modal-header">
                <h5 class="modal-title">Create New Category</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $term = $_POST["term"];
                    $slug = $_POST["slug"];

                    if($term && $slug) {
                        $newTerm = wp_insert_term( $term, 'tournament-category', array(
                            'slug'   => $slug,
                        ) );
                    }
                    
                }
            ?>

            <div class="modal-body">
                <!--begin::Form-->
                <form id="adlt_create_category" class="form" method="POST" action="admin.php?page=manage_tournaments" autocomplete="off">
                    <!--begin::Input group-->
                    <div class="fv-row mb-10">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Title</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="term" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., Bow Hunting" value="" required />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mt-5 mb-2">Slug</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <input type="text" name="slug" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., bow-hunting" value="" required />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                </form>
                <!--end::Form-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <!--begin::Actions-->
                <button form="adlt_create_category" type="submit" class="btn btn-primary">
                        <span class="indicator-label">
                            Create Category
                        </span>
                </button>
                <!--end::Actions-->
            </div>
        </div>
    </div>
</div>