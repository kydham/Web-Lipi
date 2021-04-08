<?php 
// Global Customize Option
$wp_customize->add_section( 'exbico_theme_global', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'Theme Global', 'exbico' ),
	'description'           => __( 'Theme Global Settings', 'exbico' ),
	'panel'                 => 'exbico_theme_settings'
) );

$wp_customize->add_setting( 'exbico_topbar_enable',
  array(
    'default'           => false,
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_topbar_enable',
  array(
    'label'         => esc_html__( 'Enable topbar?', 'exbico' ),
    'section'       => 'exbico_theme_global',
    'type'          => 'checkbox',
  )
);

// Header Address
$exbico_contact_arrays =  array('1'=>'fa-phone', '2'=>'fa-envelope', '3'=>'fa-map-marker',);
foreach($exbico_contact_arrays as $exbico_key => $exbico_address){

$wp_customize->add_setting( 'exbico_topbar_icon_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

$wp_customize->add_control( 'exbico_topbar_icon_'.$exbico_key, array(
	/* translators: %s: Label */ 
    'label'                 =>   sprintf( __( 'Type contact icon %s', 'exbico' ), $exbico_key ),
    /* translators: %s: Description */ 
    'description'           => sprintf( __( 'Use icon: Eg: %1$s. %2$s See more here %3$s', 'exbico' ), $exbico_address,'<a href="'.esc_url('http://fontawesome.io/icons/').'">','</a>'),
    'section'               => 'exbico_theme_global',
    'type'                  => 'text',
    'settings' => 'exbico_topbar_icon_'.$exbico_key,
) );	

$wp_customize->add_setting( 'exbico_topbar_contact_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

$wp_customize->add_control( 'exbico_topbar_contact_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'Type contact info %s', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_theme_global',
    'type'                  => 'text',
    'settings' => 'exbico_topbar_contact_'.$exbico_key,
) );


$wp_customize->add_setting( 'exbico_topbar_contact_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

$wp_customize->add_control( 'exbico_topbar_contact_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'Type contact info %s', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_theme_global',
    'type'                  => 'text',
    'settings' => 'exbico_topbar_contact_'.$exbico_key,
) );

}

// Default Post Expert
$wp_customize->add_setting( 'exbico_post_excerpt', array(
    'capability'            => 'edit_theme_options',
    'default'               => 22,
    'sanitize_callback'     => 'absint'
) );

$wp_customize->add_control( 'exbico_post_excerpt', array(
    'label'                 =>  __( 'Post Excerpt Limit', 'exbico' ),
	'description'            => __( 'Customize post excerpt limit, global limit is : 22', 'exbico' ),
    'section'               => 'exbico_theme_global',
    'settings'              => 'exbico_post_excerpt',
    'type'                  => 'text',
) );
