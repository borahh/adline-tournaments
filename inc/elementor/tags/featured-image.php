<?php

/**
 * Elementor Dynamic Tag - Featured Imagge
 *
 * Elementor dynamic tag that returns a Featured Imagge.
 *
 * @since 1.0.0
 */
class Elementor_Dynamic_Tag_Featured_Image extends \Elementor\Core\DynamicTags\Tag {

	/**
	 * Get dynamic tag name.
	 *
	 * Retrieve the name of the Featured Imagge tag.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Dynamic tag name.
	 */
	public function get_name() {
		return 'tournament-featured-img';
	}

	/**
	 * Get dynamic tag title.
	 *
	 * Returns the title of the Featured Imagge tag.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Dynamic tag title.
	 */
	public function get_title() {
		return esc_html__( 'Featured Imagge', 'adline-tournaments' );
	}

	/**
	 * Get dynamic tag groups.
	 *
	 * Retrieve the list of groups the Featured Imagge tag belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Dynamic tag groups.
	 */
	public function get_group() {
		return [ 'tournaments' ];
	}

	/**
	 * Get dynamic tag categories.
	 *
	 * Retrieve the list of categories the Featured Imagge tag belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Dynamic tag categories.
	 */
	public function get_categories() {
		return [ \Elementor\Modules\DynamicTags\Module::IMAGE_CATEGORY ];
	}

	/**
	 * Render tag output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return void
	 */
	public function render() {
		global $post;
		echo get_field('featured_image', $post->ID);
	}

}