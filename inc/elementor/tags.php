<?php

/**
 * Register new dynamic tag group
 *
 * @since 1.0.0
 * @param \Elementor\Core\DynamicTags\Manager $dynamic_tags_manager Elementor dynamic tags manager.
 * @return void
 */

add_action( 'elementor/dynamic_tags/register', function( $dynamic_tags_manager ) {

	$dynamic_tags_manager->register_group(
		'tournaments',
		[
			'title' => esc_html__( 'Tournaments', 'adline-tournaments' )
		]
	);

} );


/**
 * Register Dynamic Tags.
 *
 * Include dynamic tag file and register tag class.
 *
 * @since 1.0.0
 * @param \Elementor\Core\DynamicTags\Manager $dynamic_tags_manager Elementor dynamic tags manager.
 * @return void
 */

add_action( 'elementor/dynamic_tags/register', function ( $dynamic_tags_manager ) {

	require_once( BORAHH_ADL_TOURNAMENTS_DIR_TAGS . 'tags/rules.php' );

	$dynamic_tags_manager->register( new \Elementor_Dynamic_Tag_Rules );

} );