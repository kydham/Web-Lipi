<?php 
$wp_customize->add_section( 'exbico_blog_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 6,
	'title'                 => __( 'Latest Blog', 'exbico' ),
	'description'           => __( 'Recent Published Blog.', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );

// Enable Slider Section
$wp_customize->add_setting( 'exbico_blog_enable',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_blog_enable',
  array(
    'label'         => esc_html__( 'Show Latest Blog', 'exbico' ),
    'section'       => 'exbico_blog_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Service Section Title
$wp_customize->add_setting( 'exbico_blog_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_blog_top_title', array(
    'label'                 =>  __( 'Blog section top badge', 'exbico' ),
    'section'               => 'exbico_blog_section',
    'type'                  => 'text',
    'settings'              => 'exbico_blog_top_title',
) );

$wp_customize->add_setting( 'exbico_blog_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_blog_title', array(
    'label'                 =>  __( 'Blog section title', 'exbico' ),
    'section'               => 'exbico_blog_section',
    'type'                  => 'text',
    'settings'              => 'exbico_blog_title',
) );

$wp_customize->add_setting( 'exbico_blog_content', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_blog_content', array(
    'label'                 =>  __( 'Blog section description', 'exbico' ),
    'section'               => 'exbico_blog_section',
    'type'                  => 'text',
    'settings'              => 'exbico_blog_content',
) );

//	Blog Categories
$wp_customize->add_setting('exbico_blog_category_id',array(
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'exbico_sanitize_category',
	'default' =>  '1',
   )
);
$wp_customize->add_control(new exbico_Customize_Dropdown_Taxonomies_Control($wp_customize,'exbico_blog_category_id',
    array(
        'label' => __('Select category for Blog','exbico'),
        'section' => 'exbico_blog_section',
        'settings' => 'exbico_blog_category_id',
        'type'=> 'dropdown-taxonomies',
    )
));