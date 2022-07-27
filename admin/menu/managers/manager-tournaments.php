<?php

/**
 * 
 * Tournament Manager
 * 
 */
?>
<!--begin::Tables Widget 10-->
<div class="card mb-5 mb-xl-8" style="max-width: 100%">
    <!--begin::Header-->
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Tournaments</span>
        </h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="border-0">
                        <th class="p-0"></th>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-200px"></th>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-100px text-end"></th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    
                    <?php
                    $args = array(
                        'post_type' => 'tournament',
                        'post_status' => array( 'publish', 'draft' ),
                        'posts_per_page' => -1
                    );
                    $query = new WP_Query( $args );

                    if ( ! empty( $query->posts ) ) {
                        foreach ( $query->posts as $post ) {

                    
                    ?>
    
                    <tr>
                        <td class="text-start">
                            <a href="<?php echo 'post.php?post=' . $post->ID . '&action=edit' ?>" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6 outline-none"><?php echo get_the_title($post->ID); ?></a>
                        </td>
                        <td class="text-muted fw-semibold text-start"><?php echo get_field('date_and_time', $post->ID); ?></td>
                        <td class="text-start">
                        <?php if( $post->post_status == 'publish') {

                            ?>
                            <span class="badge badge-light-success">Published</span>
                            <?php

                         } else {

                            ?>
                            <span class="badge badge-light-warning">Draft</span>
                            <?php

                         } ?>
                        </td>
                        <td class="text-start">
                        <button type="submit" form="<?php echo 'form-delete_tournament-' . $post->ID ;?>" class="btn btn-xs btn-icon btn-light btn-active-light-danger toggle h-25px w-25px">
                                <span class="svg-icon svg-icon-muted">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.30001 16.5 8.50001 16.5C8.70001 16.5 9.00002 16.4 9.20002 16.2L12 13.4L10.6 12Z" fill="currentColor"></path>
                                        <path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.20001 7.79999C8.80001 7.39999 8.19999 7.39999 7.79999 7.79999C7.39999 8.19999 7.39999 8.80001 7.79999 9.20001L10.6 12L7.79999 14.8C7.39999 15.2 7.39999 15.8 7.79999 16.2C7.99999 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9.00001 16.4 9.20001 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                        </button>

                        <!--begin::Form-->
                        <form id="<?php echo 'form-delete_tournament-' . $post->ID ;?>" class="form" method="POST" action="admin.php?page=actions.php" autocomplete="off">							
                                    <!--begin::Input-->
                                    <input type="hidden" name="delete_tournament" value="<?php echo $post->ID; ?>"  />
                                    <!--end::Input-->
                        </form>		           
                        <!--end::Form-->
                        </td>
                    </tr>
                    
    
    
                            <?php }
                    } else {
                        echo '<span> No Tournaments Found </span>';
                    }
                    ?>
                
                    
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
<!--end::Tables Widget 10-->