<?php 
// Exbico Breadcrumb
$wp_customize->add_section( 'exbico_theme_bread', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 3,
	'title'                 => esc_html__( 'Breadcrumb', 'exbico' ),
	'description'           => esc_html__( 'Breadcrumb Settings.', 'exbico' ),
	'panel'                 => 'exbico_theme_settings'
) );


// Enable Page Breadcrumb Settings
$wp_customize->add_setting( 'exbico_page_breadcrumb',
  array(
    'default'           => true,
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_page_breadcrumb',
  array(
    'label'         => esc_html__( 'Show Page Breadcrumb Settings', 'exbico' ),
    'section'       => 'exbico_theme_bread',
    'type'          => 'checkbox',
  )
);


// Enable Search Page Breadcrumb Settings
$wp_customize->add_setting( 'exbico_search_breadcrumb',
  array(
    'default'           => true,
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_search_breadcrumb',
  array(
    'label'         => esc_html__( 'Show Search Breadcrumb Settings', 'exbico' ),
    'section'       => 'exbico_theme_bread',
    'type'          => 'checkbox',
  )
);


// Enable Blog Archive Breadcrumb Settings
$wp_customize->add_setting( 'exbico_blog_ac_breadcrumb',
  array(
    'default'           => true,
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_blog_ac_breadcrumb',
  array(
    'label'         => esc_html__( 'Show Blog Archive Breadcrumb Settings', 'exbico' ),
    'section'       => 'exbico_theme_bread',
    'type'          => 'checkbox',
  )
);

// Enable Blog Single Breadcrumb Settings
$wp_customize->add_setting( 'exbico_blog_single_breadcrumb',
  array(
    'default'           => true,
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_blog_single_breadcrumb',
  array(
    'label'         => esc_html__( 'Show Blog Single Breadcrumb Settings', 'exbico' ),
    'section'       => 'exbico_theme_bread',
    'type'          => 'checkbox',
  )
);