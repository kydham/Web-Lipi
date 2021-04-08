<?php 
$wp_customize->add_section( 'exbico_achivements_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 5,
	'title'                 => __( 'Our Achivements', 'exbico' ),
	'description'           => __( 'Our Achivements section', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );

// Enable Achivement Section
$wp_customize->add_setting( 'exbico_achivements_enable',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_achivements_enable',
  array(
    'label'         => esc_html__( 'Show Achivement Section', 'exbico' ),
    'section'       => 'exbico_achivements_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Counter Foreach
$exbico_counter_icon_arrays =  array(
	'1'=>'fa-tasks', '2'=>'fa-support', '3'=>'fa-handshake-o', '4'=>'fa-coffee'	
);
foreach($exbico_counter_icon_arrays as $exbico_key => $exbico_counter_icon){

$wp_customize->add_setting( 'exbico_achive_icon_value_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_achive_icon_value_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'How to use Icon', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_achivements_section',
    'type'                  => 'text', 
	'description'           => sprintf( __( 'For team icon,  You can use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'exbico' ), $exbico_service,'<a href="'.esc_url('http://fontawesome.io/icons/').'">','</a>'),
    'settings' => 'exbico_achive_icon_value_'.$exbico_key,
) );


$wp_customize->add_setting( 'exbico_counter_icon_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_counter_icon_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'Type Achivement Icon %s', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_achivements_section',
    'type'                  => 'text',
    'settings' => 'exbico_counter_icon_'.$exbico_key,
) );

$wp_customize->add_setting( 'exbico_counter_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
) );
$wp_customize->add_control( 'exbico_counter_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'Achivement number %s', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_achivements_section',
    'type'                  => 'text',
    'settings' => 'exbico_counter_'.$exbico_key,
) );

$wp_customize->add_setting( 'exbico_counter_field_'.$exbico_key, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_counter_field_'.$exbico_key, array(
	/* translators: %s: Description */ 
    'label'                 =>   sprintf( __( 'Achivement value %s', 'exbico' ), $exbico_key ),
    'section'               => 'exbico_achivements_section',
    'type'                  => 'text',
    'settings' => 'exbico_counter_field_'.$exbico_key,
) );

}