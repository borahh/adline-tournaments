<?php

/**
 * Register Manage Tournaments Admin Menu Page
 */
add_action( 'admin_menu', function() {
	remove_submenu_page( 'woocommerce', 'edit.php?post_type=shop_order' ); 

    add_menu_page( 
        __( 'Tournaments', 'adline-tournaments' ),
        'Tournaments',
        'manage_options',
        'manage_tournaments',
        'adline_manage_tournaments_page',
        'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIHdpZHRoPSI1MTJweCIgaGVpZ2h0PSI1MTJweCIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTI7IiB2ZXJzaW9uPSIxLjEiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJfeDM4XzhfeDJDX19Bd2FyZF94MkNfX0N1cF94MkNfX1Ryb3BoeV94MkNfX0NhbmFkYSI+PGc+PHBhdGggZD0iTTI1MywyMTYuNzQxYzMzLjA4NCwwLDYwLTI2LjkxNiw2MC02MFYxMTdIMTkzdjM5Ljc0MUMxOTMsMTg5LjgyNSwyMTkuOTE2LDIxNi43NDEsMjUzLDIxNi43NDF6Ii8+PHBhdGggZD0iTTY4LjIyNywzMjYuNzQxYzguMjcxLDAsMTUtNi43MjksMTUtMTVzLTYuNzI5LTE1LTE1LTE1cy0xNSw2LjcyOS0xNSwxNVM1OS45NTYsMzI2Ljc0MSw2OC4yMjcsMzI2Ljc0MXoiLz48cGF0aCBkPSJNMzgzLjIyNywyNTYuNzQxYzAsMTEuMDI4LDguOTcyLDIwLDIwLDIwczIwLTguOTcyLDIwLTIwYzAtMTEuMDI3LTguOTcyLTIwLTIwLTIwUzM4My4yMjcsMjQ1LjcxNCwzODMuMjI3LDI1Ni43NDF6Ii8+PHBhdGggZD0iTTEyNC42NzEsMTcxLjM0N2M3LjUyOSw5Ljc5MSwyMC4zMzUsMTUuMzA1LDI5Ljc1NCwxOC4yMTFjMS45MzUsMC41OTcsMy4zMTksMi4yOTYsMy41MDUsNC4zMTMgICAgYzIuMDQxLDIyLjE0OCw5LjEwOSw0MS4wMjYsMjAuNDQxLDU0LjYxNmMxMi43NzMsMTUuMzgzLDI5LjY3MywyNi4zOTMsNDguODc5LDMxLjg5YzEuNzYyLDAuNTA0LDMuMTA3LDEuODg2LDMuNTA1LDMuNjc1ICAgIGMyLjYwNCwxMS43MTcsMi40MjEsMjMuOTY0LTAuNTYxLDM3LjIwMkMyMjguMDQyLDMzMS4zNiwyMjMuMjQ5LDM0MiwyMTguMjM2LDM1Mmg3MC4xMTRjLTUuMDE2LTExLTguMTAxLTIyLjQyNS05Ljg4OC0zMC4yNDUgICAgYy0yLjk3OS0xMy4yNzEtMy4yMDItMjUuNTEyLTAuNjg4LTM3LjYxM2MwLjM3Ni0xLjgwOSwxLjcxOC0zLjMxNSwzLjQ4OS0zLjgzNGMxOS4xNzItNS42MTgsMzYuMDAzLTE2Ljc4MSw0OC42NzQtMzIuMjM1ICAgIGMxMC43MjYtMTMuMDA5LDE2LjY4LTMwLjIyLDE4Ljc0Ni01NC4xNDhjMC4xNzQtMi4wMTcsMS41NDctMy43MzYsMy40NzgtNC4zNDVjMTMuNjMtNC4yOTgsMjUuMjE1LTExLjQxLDMwLjk5MS0xOS4wMTggICAgYzcuNDQ1LTkuNzQxLDExLjM1NS0yMS4zNDcsMTEuMzE3LTMzLjU2OWwtMC4zMjUtNzAuMjQzTDM2Myw2Ni44NDh2NzQuODk0YzAsMi43NjItMi4yMzgsNS01LDVzLTUtMi4yMzgtNS01di03OS44NiAgICBsLTAuMDYyLTI1LjQ1OUwxNTMsMzcuMDM1djI0LjY4OGMwLDAuMzMsMCwwLjY1NywwLDAuOTc3djc5LjA0MWMwLDIuNzYyLTIuMjM5LDUtNSw1cy01LTIuMjM4LTUtNVY2Ni43NThsLTMwLjE3LDAuMDk5ICAgIGwwLjI2OSw3MS4wMDlDMTEzLjEzNiwxNTAuMDg3LDExNy4xNzUsMTYxLjY2NCwxMjQuNjcxLDE3MS4zNDd6IE0xOTEuMDUxLDY3aDEyNC4zNTJjMi43NjIsMCw1LDIuMjM5LDUsNWMwLDIuNzYyLTIuMjM4LDUtNSw1ICAgIEgxOTEuMDUxYy0yLjc2MSwwLTUtMi4yMzgtNS01QzE4Ni4wNTEsNjkuMjM5LDE4OC4yOSw2NywxOTEuMDUxLDY3eiBNMTgzLDExMS43NDFjMC0yLjc2MSwyLjQ2NS00Ljc0MSw1LjIyNy00Ljc0MWgxMzAgICAgYzIuNzYyLDAsNC43NzMsMS45OCw0Ljc3Myw0Ljc0MXY0NWMwLDM4LjU5OS0zMS40MDIsNzAtNzAsNzBjLTM4LjU5OCwwLTcwLTMxLjQwMS03MC03MFYxMTEuNzQxeiIvPjxwb2x5Z29uIHBvaW50cz0iMjEwLjE4MiwzNjIgMTQ4LDM2MiAxNDgsNDI3IDM1OCw0MjcgMzU4LDM2MiAyOTYuMjcxLDM2MiAgICIvPjxwYXRoIGQ9Ik00NTMuNzczLDQ2NkgzODN2LTI5aC0xOS43N0gxNDMuMjIzSDEyM3YyOUg2MS41ODZjLTIuNzYxLDAtNSwyLjIzOC01LDVzMi4yMzksNSw1LDVoMzkyLjE4N2MyLjc2MiwwLDUtMi4yMzgsNS01ICAgIFM0NTYuNTM1LDQ2Niw0NTMuNzczLDQ2NnoiLz48L2c+PC9nPjxnIGlkPSJMYXllcl8xIi8+PC9zdmc+',
        6
    );

    add_submenu_page(
        'manage_tournaments',
        'Tickets',
        'Tickets',
        'manage_options',
        'tickets',
        'adline_tickets_page',
    );

    
    add_submenu_page(
        'manage_tournaments',
        'Create Tournament',
        'Create Tournament',
        'manage_options',
        'post-new.php?post_type=tournament',
    );

    add_submenu_page(
        'manage_tournaments',
        'Manage Categories',
        'Manage Categories',
        'manage_options',
        'edit-tags.php?taxonomy=tournament-category&post_type=tournament',
    );
	
    add_submenu_page(
        'manage_tournaments',
        'Orders',
        'Orders',
        'manage_options',
        'edit.php?post_type=shop_order',
    );

	add_submenu_page(
        'tickets',
        'Actions',
        'Actions',
        'manage_options',
        'actions',
        'adline_actions_page',
    );
    
}, 999 );

 
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


 
/**
 * Callback for Manage Tournaments page
 */
function adline_manage_tournaments_page(){
    ?>

    <!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-row justify-content-center flex-wrap me-3">
										<!--begin::Svg Icon -->
                                        <span class="me-5 svg-icon svg-icon-muted svg-icon-2hx">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"/>
												<path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor"/>
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-1 flex-column justify-content-center my-0">Tournaments</h1>
										<!--end::Title-->
										
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center justify-content-between gap-10">
										
										<!--begin::Primary button-->
										<a href="post-new.php?post_type=tournament" class="btn btn-sm fw-bold btn-primary">Create Tournament</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 20-->
											<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url(<?php echo BORAHH_ADL_TOURNAMENTS_DIR_MEDIA . 'patterns/vector-1.png'; ?>)">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
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
																<a href="#" class="menu-link px-3">New Tournament</a>
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
											<!--end::Card widget 20-->
											<!--begin::Card widget 7-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Amount-->
														<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2"><?php echo wp_count_terms(array('taxonomy' => 'tournament-category')) ;?></span>
														<!--end::Amount-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Categories</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-2hx svg-icon-gray-300 me-n1">
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
																<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#create-category">New Category</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#categories" class="menu-link px-3" data-kt-scroll-toggle>Manage Categories</a>
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
														<path d="M16.0077 19.2901L12.9293 17.5311C12.3487 17.1993 11.6407 17.1796 11.0426 17.4787L6.89443 19.5528C5.56462 20.2177 4 19.2507 4 17.7639V5C4 3.89543 4.89543 3 6 3H17C18.1046 3 19 3.89543 19 5V17.5536C19 19.0893 17.341 20.052 16.0077 19.2901Z" fill="currentColor"/>
													</svg>
												</span>
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 7-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
											<!--begin::Card widget 17-->
											<div class="card card-flush h-md-50 mb-5 mb-xl-10" >
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<div class="card-title d-flex flex-column">
														<!--begin::Info-->
														<div class="d-flex align-items-center">
															<!--begin::Currency-->
															<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
															<!--end::Currency-->
															<!--begin::Amount-->
															<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
															<!--end::Amount-->
															<!--begin::Badge-->
															<span class="badge badge-light-success fs-base">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->2.2%</span>
															<!--end::Badge-->
														</div>
														<!--end::Info-->
														<!--begin::Subtitle-->
														<span class="text-gray-400 pt-1 fw-semibold fs-6">Sales in This Month</span>
														<!--end::Subtitle-->
													</div>
													<!--end::Title-->
												</div>
												<!--end::Header-->
												<!--begin::Card body-->
												<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
													<!--begin::Chart-->
													<div class="d-flex flex-center me-5 pt-2">
														<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11">
															<span></span>
															<canvas height="70" width="70"></canvas>
														</div>
													</div>
													<!--end::Chart-->
													<!--begin::Labels-->
													<div class="d-flex flex-column content-justify-center flex-row-fluid">
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">Today</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center my-3">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">This Month</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
														<!--begin::Label-->
														<div class="d-flex fw-semibold align-items-center">
															<!--begin::Bullet-->
															<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
															<!--end::Bullet-->
															<!--begin::Label-->
															<div class="text-gray-500 flex-grow-1 me-4">This Year</div>
															<!--end::Label-->
															<!--begin::Stats-->
															<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
															<!--end::Stats-->
														</div>
														<!--end::Label-->
													</div>
													<!--end::Labels-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card widget 17-->
											<!--begin::List widget 26-->
											<div class="card card-flush h-lg-50">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<!--begin::Title-->
													<h3 class="card-title text-gray-800 fw-bold">Actions</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
															<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
															<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
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
																<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">More Actions</div>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu separator-->
															<div class="separator mb-3 opacity-75"></div>
															<!--end::Menu separator-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">See Orders</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Manage Categories</a>
															</div>
															<!--end::Menu item-->
															
															
														</div>
														<!--end::Menu 2-->
														<!--end::Menu-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-5">
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">New Category</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">New Tournament</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-3"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Section-->
														<a href="#" class="text-primary fw-semibold fs-6 me-2">Manage Entries</a>
														<!--end::Section-->
														<!--begin::Action-->
														<button type="button" class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</button>
														<!--end::Action-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::LIst widget 26-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xxl-6">
											<!--begin::Engage widget 10-->
											<div class="card card-flush h-md-100" style="max-width: 100%;">
												<!--begin::Body-->
												<div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url(<?php echo BORAHH_ADL_TOURNAMENTS_DIR_MEDIA . 'stock/900x600/42.png'; ?>)">
													<!--begin::Wrapper-->
													<div class="mb-10">
														<!--begin::Title-->
														<div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
														<span class="me-2">Manage Categories, Tickets and
														<br />
														<span class="position-relative d-inline-block text-danger">
															<a href="../../demo1/dist/pages/user-profile/overview.html" class="text-danger opacity-75-hover">Tournaments</a>
															<!--begin::Separator-->
															<span class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
															<!--end::Separator-->
														</span></span>From Here</div>
														<!--end::Title-->
														
													</div>
													<!--begin::Wrapper-->
													<!--begin::Illustration-->
													<img class="mx-auto h-150px h-lg-200px theme-light-show" src="<?php echo BORAHH_ADL_TOURNAMENTS_DIR_MEDIA . 'illustrations/misc/upgrade.svg';?> " alt="" />
													<!--end::Illustration-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Engage widget 10-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
										<div id="categories" class="col-xl-4">
											<!--begin::Category widget 1-->
											<!--begin::Table Widget 4-->
											<div class="card card-flush h-xl-100" style="max-width: 100%">
												<!--begin::Card header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Categories</span>
													</h3>
													<!--end::Title-->
													
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-3" >
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-100px">Title</th>														
																<th class="text-end"></th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<tr class="d-none">
																
															</tr>

															<?php 
															$term_query = new WP_Term_Query( array( 
																'taxonomy' => 'tournament-category', 
																'orderby'                => 'name',
																'order'                  => 'ASC',
																'hide_empty'             => false,
															) );
															
															if ( ! empty( $term_query->terms ) ) {
																foreach ( $term_query->terms as $term ) {
																	?>

																	<tr>
																		<td>
																			<a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary"><?php echo $term->name; ?></a>
																		</td>
																		<td class="text-end">
																		<button type="submit" form="<?php echo 'adlt_delete_category-' . $term->term_id ;?>" class="btn btn-xs btn-icon btn-light btn-active-light-danger toggle h-25px w-25px">
																			<span class="svg-icon svg-icon-muted">
																				<svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																					<path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="currentColor"/>
																					<path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"/>
																				</svg>
																			</span>
																		</button>
																		
																		
																		<!--begin::Form-->
																			<form id="<?php echo 'adlt_delete_category-' . $term->term_id ;?>" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">							
																					<!--begin::Input-->
																					<input type="hidden" name="delete" value="<?php echo $term->term_id; ?>"  />
																					<!--end::Input-->
																			</form>
																		<!--end::Form-->
																		</td>
																	</tr>


                                                                   <?php }
															} else {
																echo '<span> No Categories Found </span>';
															}
															?>


															
															
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 4-->
											<!--end::Category widget 1-->
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div id="tournaments" class="col-xl-8">
											<!--begin::Table Widget 4-->
											<div class="card card-flush h-xl-100" style="max-width: 100%">
												<!--begin::Card header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">All Tournaments</span>
													</h3>
													<!--end::Title-->
													<!--begin::Actions-->
													<div class="card-toolbar">
														<!--begin::Filters-->
														<div class="d-flex flex-stack flex-wrap gap-4">
															<!--begin::Destination-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-gray-400 fs-7 me-2">Cateogry</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="a">Category A</option>
																	<option value="b">Category A</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Destination-->
															<!--begin::Status-->
															<div class="d-flex align-items-center fw-bold">
																<!--begin::Label-->
																<div class="text-gray-400 fs-7 me-2">Status</div>
																<!--end::Label-->
																<!--begin::Select-->
																<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
																	<option></option>
																	<option value="Show All" selected="selected">Show All</option>
																	<option value="Shipped">Shipped</option>
																	<option value="Confirmed">Confirmed</option>
																	<option value="Rejected">Rejected</option>
																	<option value="Pending">Pending</option>
																</select>
																<!--end::Select-->
															</div>
															<!--end::Status-->
															<!--begin::Search-->
															<div class="position-relative my-1">
																<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
																<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																		<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
															</div>
															<!--end::Search-->
														</div>
														<!--begin::Filters-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-2">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
														<!--begin::Table head-->
														<thead>
															<!--begin::Table row-->
															<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
																<th class="min-w-100px">Title</th>
																<th class="text-end min-w-100px">Created</th>
																<th class="text-end min-w-125px">Customer</th>
																<th class="text-end min-w-100px">Total</th>
																<th class="text-end min-w-100px">Profit</th>
																<th class="text-end min-w-50px">Status</th>
																<th class="text-end"></th>
															</tr>
															<!--end::Table row-->
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<tr data-kt-table-widget-4="subtable_template" class="d-none">
																
															</tr>
															<tr>
																<td>
																	<a href="../../demo1/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
																</td>
																<td class="text-end">7 min ago</td>
																<td class="text-end">
																	<a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
																</td>
																<td class="text-end">$630.00</td>
																<td class="text-end">
																	<span class="text-gray-800 fw-bolder">$86.70</span>
																</td>
																<td class="text-end">
																	<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
																</td>
																<td class="text-end">
																	<button type="button" class="btn btn-xs btn-icon btn-light btn-active-light-danger toggle h-25px w-25px">
																		<span class="svg-icon svg-icon-muted">
																			<svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																				<path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="currentColor"/>
																				<path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"/>
																			</svg>
																		</span>
																	</button>
																</td>
															</tr>
															
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Table Widget 4-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						
					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		<!--start::Modals-->
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
		<!--end::Modals-->

<?php
}

function adline_tickets_page() {}
