<?php


/**
 * Register Manage Tournaments Admin Menu Page
 */
add_action( 'admin_menu', function() {

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
        'Create Tournament',
        'Create Tournament',
        'manage_options',
        'post-new.php?post_type=tournament',
    );



	/**
	 * THIRD LEVEL MENUS -- HIDDEN
	 */

    add_submenu_page(
        'edit.php?post_type=shop_order',
        'Tickets',
        'Tickets',
        'manage_options',
        'tickets',
        'adline_tickets_page',
    );


	add_submenu_page(
        'tickets',
        'Actions',
        'Actions',
        'manage_options',
        'actions',
        'adline_actions_page',
    );
	add_submenu_page(
        'tickets',
        'Update Category',
        'Update Category',
        'manage_options',
        'update-category',
        'adline_update_category_page',
    );
	
    
}, 999 );


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tournament Settings',
		'menu_title'	=> 'Settings',
		'parent_slug'	=> 'manage_tournaments',
	));
	
}
// Include Tournament Page Cb
include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/pages/main.php');

// Include Actions Page Cb
/**
 * Used for actual form logic and validation
 */
include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/pages/actions.php');

// Include Update Data Page Cb
/**
 * Used for data updates
 */
include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/pages/update-category.php');

// Include Tickets Page Cb
/**
 * Used for data updates
 */
include( BORAHH_ADL_TOURNAMENTS_DIR_ADMIN . 'menu/pages/tickets.php');




 


