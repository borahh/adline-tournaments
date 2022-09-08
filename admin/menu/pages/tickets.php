<?php
function adline_tickets_page() {
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
										<div class="col-xl-4">

                                        <div class="card card-flush h-xl-100" style="max-width: 100%">
                                            <!--begin::Card header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">New Ticket</span>
                                                </h3>
                                                <!--end::Title-->
                                                
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-2">
                                                    <?php
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        $term_id = $_POST["term_id"];
                                                    }
                                                    ?>
                                                    <form id="form-create_ticket" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-10">
                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mb-2">Name</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="text" name="name" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., Starter Ticket" value="" required />
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mt-5 mb-2">Price</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="text" name="price" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., 120" value="" required />
                                                            <!--end::Input-->

                                                            <!--begin::Label-->
                                                            <label class="required fw-semibold fs-6 mt-5 mb-2">Stock</label>
                                                            <!--end::Label-->

                                                            <!--begin::Input-->
                                                            <input type="text" name="stock" class="form-control form-control-solid mb-5 mb-lg-0 p-2" placeholder="e.g., 120" value="" required />
                                                            <!--end::Input-->

                                                            <input type="hidden" name="term_id" value="<?php echo $term_id; ?>">
                                                            <input type="submit" class="mt-5 btn btn-primary" value="Create">
                                                        </div>
                                                        <!--end::Input group-->

                                                    </form>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                       
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-8">

                                            <div class="card mb-5 mb-xl-8 w-100 mw-100" style="max-width: 100%; background-color: unset;">
                                                <!--begin::Header-->
                                                <div class="card-header border-0 pt-5 px-0">
                                                    <h3 class="card-title align-items-start flex-column">
                                                        <span class="card-label fw-bold fs-3 mb-1">Manage Tickets</span>
                                                    </h3>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="card-body pt-3 px-0 w-100 mw-100">
                                                <?php
                                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                        $term_id = $_POST["term_id"];
                        
                                                        if(!$term_id) {
                                                            wp_redirect('admin.php?page=manage_tournaments');
                                                        }
                                                        

                                                        $the_query = new WP_Query( array(
                                                            'post_type' => 'product',
                                                            'tax_query' => array(
                                                                array (
                                                                    'taxonomy' => 'product_cat',
                                                                    'field' => 'id',
                                                                    'terms' => $term_id,
                                                                )
                                                            ),
                                                        ) );
            
                                                        if ( $the_query->have_posts() ) {
                                                            while ( $the_query->have_posts() ) {
                                                                $the_query->the_post();
                                                                $product = wc_get_product( get_the_ID() );
                                                                ?>

                                                                    <div class="card w-100 mw-100 card-xxl-stretch mb-5 mb-xl-8 theme-dark-bg-body" style="background-color: #F7D9E3">
                                                                        <!--begin::Body-->
                                                                        <div class="card-body d-flex flex-column">
                                                                            <!--begin::Wrapper-->
                                                                            <div class="d-flex flex-column mb-7">
                                                                                <!--begin::Title-->
                                                                                <a href="#" class="text-dark text-hover-primary fw-bold fs-3"><?php echo the_title(); ?></a>
                                                                                <!--end::Title-->

                                                                                <button type="submit" form="<?php echo 'form-delete_ticket-' . get_the_ID() ;?>" class="btn btn-xs btn-icon btn-light btn-active-light-danger toggle h-25px w-25px">
                                                                                        <span class="svg-icon svg-icon-muted">
                                                                                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="currentColor"></path>
                                                                                                <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"></path>
                                                                                            </svg>
                                                                                        </span>
                                                                                </button>

                                                                                <!--begin::Form-->
                                                                                <form id="<?php echo 'form-delete_ticket-' . get_the_ID() ;?>" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">							
                                                                                            <!--begin::Input-->
                                                                                            <input type="hidden" name="delete_ticket" value="<?php echo get_the_ID(); ?>"  />
                                                                                            <!--end::Input-->
                                                                                </form>		           
                                                                                <!--end::Form-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                            <!--begin::Row-->
                                                                            <div class="row g-0">
                                                                                <!--begin::Col-->
                                                                                <div class="col-lg-6">
                                                                                    <div class="d-flex align-items-center mb-9 me-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40px me-3">
                                                                                            <div class="symbol-label bg-light">
                                                                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs043.svg-->
                                                                                                <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path opacity="0.3" d="M22 8H8L12 4H19C19.6 4 20.2 4.39999 20.5 4.89999L22 8ZM3.5 19.1C3.8 19.7 4.4 20 5 20H12L16 16H2L3.5 19.1ZM19.1 20.5C19.7 20.2 20 19.6 20 19V12L16 8V22L19.1 20.5ZM4.9 3.5C4.3 3.8 4 4.4 4 5V12L8 16V2L4.9 3.5Z" fill="currentColor"></path>
                                                                                                        <path d="M22 8L20 12L16 8H22ZM8 16L4 12L2 16H8ZM16 16L12 20L16 22V16ZM8 8L12 4L8 2V8Z" fill="currentColor"></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <!--end::Svg Icon-->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                        <!--begin::Title-->
                                                                                        <div>
                                                                                            <div class="fs-5 text-dark fw-bold lh-1"><?php echo $product->get_stock_quantity();?></div>
                                                                                            <div class="fs-7 text-gray-600 fw-bold">Stock Quantity</div>
                                                                                        </div>
                                                                                        <!--end::Title-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Col-->
                                                                                <!--begin::Col-->
                                                                                <div class="col-lg-6">
                                                                                    <div class="d-flex align-items-center mb-9 ms-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40px me-3">
                                                                                            <div class="symbol-label bg-light">
                                                                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs046.svg-->
                                                                                                <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                                        <path d="M8 22C7.4 22 7 21.6 7 21V9C7 8.4 7.4 8 8 8C8.6 8 9 8.4 9 9V21C9 21.6 8.6 22 8 22Z" fill="currentColor"></path>
                                                                                                        <path opacity="0.3" d="M4 15C3.4 15 3 14.6 3 14V6C3 5.4 3.4 5 4 5C4.6 5 5 5.4 5 6V14C5 14.6 4.6 15 4 15ZM13 19V3C13 2.4 12.6 2 12 2C11.4 2 11 2.4 11 3V19C11 19.6 11.4 20 12 20C12.6 20 13 19.6 13 19ZM17 16V5C17 4.4 16.6 4 16 4C15.4 4 15 4.4 15 5V16C15 16.6 15.4 17 16 17C16.6 17 17 16.6 17 16ZM21 18V10C21 9.4 20.6 9 20 9C19.4 9 19 9.4 19 10V18C19 18.6 19.4 19 20 19C20.6 19 21 18.6 21 18Z" fill="currentColor"></path>
                                                                                                    </svg>
                                                                                                </span>
                                                                                                <!--end::Svg Icon-->
                                                                                            </div>
                                                                                        </div>
                                                                                        <!--end::Symbol-->
                                                                                        <!--begin::Title-->
                                                                                        <div>
                                                                                            <div class="fs-5 text-dark fw-bold lh-1"><?php echo $product->get_price_html(); ?></div>
                                                                                            <div class="fs-7 text-gray-600 fw-bold">Price Range</div>
                                                                                        </div>
                                                                                        <!--end::Title-->
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Col-->
                                                                            </div>
                                                                            <!--end::Row-->
                                                                        </div>
                                                                    </div>
                                                                  

                                                                <?php
                                                            }
                                                        } else {
                                                            echo "No Tickets Found";
                                                        }
                                                        
                                                        wp_reset_postdata();
                                                    } else {
                                                        wp_redirect('admin.php?page=manage_tournaments');

                                                    }

                                                ?>
                                                </div>
                                                <!--begin::Body-->
                                            </div>
                                        
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
		<?php adl_get_admin_modal('modal-create_category'); ?>		
		<!--end::Modals-->



    <?php
}
