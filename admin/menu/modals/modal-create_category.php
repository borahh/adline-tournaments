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
            <div class="modal-body">
                <!--begin::Form-->
                <?php adl_get_admin_form('form-create_category'); ?>		           
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