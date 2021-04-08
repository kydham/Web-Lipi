<?php 
$wp_customize->add_section( 'exbico_hero_slider_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 1,
	'title'                 => __( 'Hero Slider', 'exbico' ),
	'description'           => __( 'Hero slider section', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );


// Hero Section Enable / Disable
$wp_customize->add_setting( 'exbico_hero_slider',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_hero_slider',
  array(
    'label'         => esc_html__( 'Show Hero Slider', 'exbico' ),
    'section'       => 'exbico_hero_slider_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

for ($i=1;$i<=3;$i++) {
	$wp_customize->add_setting( 'exbico_slider_page_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'exbico_sanitize_dropdown_pages'
	) );


	$wp_customize->add_control( 'exbico_slider_page_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Select page for slider %s', 'exbico' ), $i ),
	    'section'               => 'exbico_hero_slider_section',
	    'type'                  => 'dropdown-pages',
	    'settings'              => 'exbico_slider_page_'.$i,
	) );
	
	$wp_customize->add_setting( 'exbico_slider_main_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'wp_filter_nohtml_kses'
	) );

	$wp_customize->add_control( 'exbico_slider_main_title_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider main heading %s', 'exbico' ), $i ),
	    'section'               => 'exbico_hero_slider_section',
	    'type'                  => 'textarea',
	    'description'           => sprintf( esc_html__( 'Type slider heading title, content you can add/edit from selected page content.', 'exbico' )),
	    'settings' => 'exbico_slider_main_title_'.$i,
	) );
	
	$wp_customize->add_setting( 'exbico_slider_button_title_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_slider_button_title_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider button text %s', 'exbico' ), $i ),
	    'section'               => 'exbico_hero_slider_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_slider_button_title_'.$i,
	) );
	
	$wp_customize->add_setting( 'exbico_slider_button_url_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'esc_url_raw'
	) );
 
	$wp_customize->add_control( 'exbico_slider_button_url_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Slider button URL  %s', 'exbico' ), $i ),
	    'section'               => 'exbico_hero_slider_section',
	    'type'                  => 'url',
	    'settings' => 'exbico_slider_button_url_'.$i,
	) );
	
}