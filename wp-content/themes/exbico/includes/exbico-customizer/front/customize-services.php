<?php 
$wp_customize->add_section( 'exbico_services_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 2,
	'title'                 => __( 'Our Services', 'exbico' ),
	'description'           => __( 'Services section', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );

// Service Section Enable / Disable
$wp_customize->add_setting( 'exbico_service_enable',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_service_enable',
  array(
    'label'         => esc_html__( 'Show Services Section', 'exbico' ),
    'section'       => 'exbico_services_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Service Section Title
$wp_customize->add_setting( 'exbico_service_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_service_top_title', array(
    'label'                 =>  __( 'Service section top badge', 'exbico' ),
    'section'               => 'exbico_services_section',
    'type'                  => 'text',
    'settings'              => 'exbico_service_top_title',
) );

$wp_customize->add_setting( 'exbico_service_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_service_title', array(
    'label'                 =>  __( 'Service section title', 'exbico' ),
    'section'               => 'exbico_services_section',
    'type'                  => 'text',
    'settings'              => 'exbico_service_title',
) );

$wp_customize->add_setting( 'exbico_service_content', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_service_content', array(
    'label'                 =>  __( 'Service section description', 'exbico' ),
    'section'               => 'exbico_services_section',
    'type'                  => 'text',
    'settings'              => 'exbico_service_content',
) );

$wp_customize->add_setting( 'exbico_service_content', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'wp_filter_nohtml_kses'
) );

$wp_customize->add_control( 'exbico_service_content', array(
    'label'                 =>  __( 'Type Section Description', 'exbico' ),
    'section'               => 'exbico_services_section',
    'type'                  => 'text',
    'settings'              => 'exbico_service_content',
) );



// Services Customizer
$exbico_service_array = array(
	'1'=>'fa-handshake-o',
	'2'=>'fa-money',
	'3'=>'fa-lightbulb-o',
);
foreach ($exbico_service_array as $exbico_key => $exbico_service) {

$wp_customize->add_setting( 'exbico_service_page_'.$exbico_key, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'exbico_sanitize_dropdown_pages'
) );

$wp_customize->add_control( 'exbico_service_page_'.$exbico_key, array(
   	 /* translators: %s: Label */ 
    'label'                 => sprintf( __( 'Select page  %1$s', 'exbico' ), $exbico_key),
    'section'               => 'exbico_services_section',
    'type'                  => 'dropdown-pages',
    'settings'              => 'exbico_service_page_'.$exbico_key,
) );

$wp_customize->add_setting( 'exbico_service_icon_'.$exbico_key, array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_service_icon_'.$exbico_key, array(
	 /* translators: %s: Label */ 
    'label'                 => sprintf( __( 'Type icon %1$s', 'exbico' ), $exbico_key),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'exbico' ), $exbico_service,'<a href="'.esc_url('http://fontawesome.io/icons/').'">','</a>'),
    'section'               => 'exbico_services_section',
    'type'                  => 'text',
    'settings' => 'exbico_service_icon_'.$exbico_key,
) );
}