<?php 
// Footer Settings
$wp_customize->add_section( 'exbico_footer_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 2,
	'title'                 => __( 'Footer Settings', 'exbico' ),
	'description'           => __( 'Footer Settings', 'exbico' ),
	'panel'                 => 'exbico_theme_settings'
) );

//	Footer Settings
$wp_customize->add_setting( 'exbico_footer_copyright_text', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_footer_copyright_text', array(
    'label'                 =>  __( 'Copyright text', 'exbico' ),
    'section'               => 'exbico_footer_section',
    'type'                  => 'text',
    'settings'              => 'exbico_footer_copyright_text',
) );