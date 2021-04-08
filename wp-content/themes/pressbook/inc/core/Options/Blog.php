<?php // phpcs:ignore WordPress.Files.FileName.NotHyphenatedLowercase
/**
 * Customizer blog options service.
 *
 * @package PressBook
 */

namespace PressBook\Options;

use PressBook\Options;
use PressBook\CSSRules;

/**
 * Blog options service class.
 */
class Blog extends Options {
	/**
	 * Add blog options for theme customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function customize_register( $wp_customize ) {
		$this->sec_blog( $wp_customize );

		$this->set_archive_post_layout_lg( $wp_customize );
	}

	/**
	 * Section: Blog Options.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function sec_blog( $wp_customize ) {
		$wp_customize->add_section(
			'sec_blog',
			array(
				'title'       => esc_html__( 'Blog Options', 'pressbook' ),
				'description' => esc_html__( 'You can customize the blog options in here.', 'pressbook' ),
				'priority'    => 156,
			)
		);
	}

	/**
	 * Add setting: Archive Post Layout (Large-Screen Devices).
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	public function set_archive_post_layout_lg( $wp_customize ) {
		$wp_customize->add_setting(
			'set_archive_post_layout_lg',
			array(
				'default'           => self::get_archive_post_layout_lg( true ),
				'transport'         => 'refresh',
				'sanitize_callback' => array( Sanitizer::class, 'sanitize_select' ),
			)
		);

		$wp_customize->add_control(
			'set_archive_post_layout_lg',
			array(
				'section'     => 'sec_blog',
				'type'        => 'radio',
				'choices'     => array(
					'rows'    => esc_html__( 'Thumbnail-Content - Rows', 'pressbook' ),
					'columns' => esc_html__( 'Thumbnail-Content - Columns (Contain)', 'pressbook' ),
					'cover'   => esc_html__( 'Thumbnail-Content - Columns (Cover)', 'pressbook' ),
				),
				'label'       => esc_html__( 'Blog Archive Post Layout (Large-Screen Devices)', 'pressbook' ),
				'description' => esc_html__( 'Select the layout for the blog post in archive pages. Default: Thumbnail-Content - Columns (Cover)', 'pressbook' ),
			)
		);
	}

	/**
	 * Get setting: Archive Post Layout (Large-Screen Devices).
	 *
	 * @param bool $get_default Get default.
	 * @return string
	 */
	public static function get_archive_post_layout_lg( $get_default = false ) {
		$default = apply_filters( 'pressbook_default_archive_post_layout_lg', 'cover' );
		if ( $get_default ) {
			return $default;
		}

		return get_theme_mod( 'set_archive_post_layout_lg', $default );
	}
}
