<?php

/**
 * 
 * Used to Create Tournament Category
 * 
 * Used In: modal-create_category.php
 * 
 */

 ?>

<form id="adlt_create_category" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">
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