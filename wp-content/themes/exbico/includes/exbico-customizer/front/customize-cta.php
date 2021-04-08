<?php 
$wp_customize->add_section( 'exbico_cta_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 4,
	'title'                 => __( 'Call to action', 'exbico' ),
	'description'           => __( 'Add call to action button to your website', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );

// CTA Section Enable / Disable
$wp_customize->add_setting( 'exbico_cta_enable',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_cta_enable',
  array(
    'label'         => esc_html__( 'Show Call to action', 'exbico' ),
    'section'       => 'exbico_cta_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

//	CTA Title
$wp_customize->add_setting( 'exbico_cta_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_cta_title', array(
    'label'                 =>  __( 'Type call to action title', 'exbico' ),
    'section'               => 'exbico_cta_section',
    'type'                  => 'text',
    'settings'              => 'exbico_cta_title',
) );

//	CTA Content
$wp_customize->add_setting( 'exbico_cta_content', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'exbico_cta_content', array(
    'label'                 =>  __( 'Type CTA content', 'exbico' ),
    'section'               => 'exbico_cta_section',
    'type'                  => 'text',
    'settings'              => 'exbico_cta_content',
) );

//	CTA Button Text
$wp_customize->add_setting( 'exbico_cta_button_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_cta_button_text', array(
    'label'                 =>  __( 'Type CTA button text ', 'exbico' ),
    'section'               => 'exbico_cta_section',
    'type'                  => 'text',
    'settings'              => 'exbico_cta_button_text',
) );

//	CTA Button Link
$wp_customize->add_setting( 'exbico_cta_button_link', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'esc_url_raw'
) );

$wp_customize->add_control( 'exbico_cta_button_link', array(
    'label'                 =>  __( 'Type CTA button link', 'exbico' ),
    'section'               => 'exbico_cta_section',
    'type'                  => 'url',
    'settings'              => 'exbico_cta_button_link',
) );

// Add Image
$wp_customize->add_setting('exbico_cta_image', array(
    'transport'         => 'refresh',
    'width'         => 1200,
    'height'         => 385,
	'sanitize_callback'     => 'exbico_sanitize_image'
));

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'exbico_cta_image', array(
    'label'             => __('Upload achivement image', 'exbico'),
    'section'           => 'exbico_cta_section',
    'settings'          => 'exbico_cta_image',
)));    