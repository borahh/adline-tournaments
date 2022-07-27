<?php

/**
 * 
 * Contains Tournament Widget
 * 
 */
?>

<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url(<?php echo BORAHH_ADL_TOURNAMENTS_DIR_MEDIA . 'patterns/vector-1.png'; ?>)">
    <!--begin::Header-->
    <div class="card-header pt-5">
        <!--begin::Title-->
        <div class="card-title d-flex flex-column">
            <!--begin::Amount-->
            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2"><?php echo wp_count_posts('tournament')->publish; ?></span>
            <!--end::Amount-->
            <!--begin::Subtitle-->
            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Tournaments</span>
            <!--end::Subtitle-->
            

        </div>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-white btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-2hx svg-icon-white me-n1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
                        <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                        <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                        <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--begin::Menu 2-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Actions</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="post-new.php?post_type=tournament" class="menu-link px-3">New Tournament</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#tournaments" class="menu-link px-3" data-kt-scroll-toggle>Manage Tournaments</a>
                </div>
                <!--end::Menu item-->
                
                
            </div>
            <!--end::Menu 2-->
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Card body-->
    <div class="card-body d-flex flex-column justify-content-end pe-0">
    <span class="svg-icon svg-icon-muted svg-icon-5hx">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor"/>
            <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor"/>
            <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor"/>
            <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor"/>
        </svg>
    </span>
    </div>
    <!--end::Card body-->
</div>