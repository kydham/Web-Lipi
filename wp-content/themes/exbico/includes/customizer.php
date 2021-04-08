<?php
/**
 * Exbico Theme Customizer
 *
 * @package exbico
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function exbico_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'exbico_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'exbico_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'exbico_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function exbico_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function exbico_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function exbico_customize_preview_js() {
	wp_enqueue_script( 'exbico-customizer', get_template_directory_uri() . '/resource/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'exbico_customize_preview_js' );


// Load customizer required panels

// Sanitize
require trailingslashit( get_template_directory() ) . '/includes/sanitize.php'; 


//  Exbico Theme Settings Customizer
add_action( 'customize_register', 'exbico_register_customizer_settings' );
function exbico_register_customizer_settings( $wp_customize ) {
$wp_customize->add_panel( 'exbico_theme_settings', array(
	'priority'               => 1,
	'capability'             => 'edit_theme_options',
	'title'                  => __( 'Exbico: Theme Settings', 'exbico' ),
	'description'            => __( 'Theme All Settings', 'exbico' ),
) );  

// Load Options
require_once trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/settings/customize-global.php';
require_once trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/settings/customize-footer.php';
require_once trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/settings/customize-breadcrumb.php';
}


//  Exbico Theme Settings Customizer Front
add_action( 'customize_register', 'exbico_register_customizer_front' );
function exbico_register_customizer_front( $wp_customize ) {
$wp_customize->add_panel( 'exbico_front_option', array(
	'priority'               => 2,
	'capability'             => 'edit_theme_options',
	'title'                  => __( 'Exbico: Front Page', 'exbico' ),
	'description'            => __( 'Exbico sections & theme options', 'exbico' ),
) );  

// Load Options
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-hero-slider.php';
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-services.php';
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-team.php';
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-blog.php';
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-cta.php';
require trailingslashit( get_template_directory() ) . '/includes/exbico-customizer/front/customize-achivement.php';
}