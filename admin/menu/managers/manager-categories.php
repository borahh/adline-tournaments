<?php

/**
 * 
 * Category Manager
 * 
 */
?>
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