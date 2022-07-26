<?php

/**
 * 
 * Tournament Manager
 * 
 */
?>
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