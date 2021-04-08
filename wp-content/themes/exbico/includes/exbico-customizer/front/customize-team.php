<?php 
$wp_customize->add_section( 'exbico_team_section', array(
	'capability'            => 'edit_theme_options',
	'priority'              => 3,
	'title'                 => __( 'Our Team', 'exbico' ),
	'description'           => __( 'Team Section', 'exbico' ),
	'panel'                 => 'exbico_front_option'
) );

// Team Section Enable / Disable
$wp_customize->add_setting( 'exbico_team_enable',
  array(
    'default'           => '',
    'sanitize_callback'     => 'exbico_sanitize_checkbox'
  )
);

$wp_customize->add_control( 'exbico_team_enable',
  array(
    'label'         => esc_html__( 'Show Team Slider', 'exbico' ),
    'section'       => 'exbico_team_section',
    'type'          => 'checkbox',
    'priority'      => 1,
  )
);

// Service Section Title
$wp_customize->add_setting( 'exbico_team_top_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_team_top_title', array(
    'label'                 =>  __( 'Team section top badge', 'exbico' ),
    'section'               => 'exbico_team_section',
    'type'                  => 'text',
    'settings'              => 'exbico_team_top_title',
) );

$wp_customize->add_setting( 'exbico_team_title', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_team_title', array(
    'label'                 =>  __( 'Team section title', 'exbico' ),
    'section'               => 'exbico_team_section',
    'type'                  => 'text',
    'settings'              => 'exbico_team_title',
) );

$wp_customize->add_setting( 'exbico_team_content', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_team_content', array(
    'label'                 =>  __( 'Team section description', 'exbico' ),
    'section'               => 'exbico_team_section',
    'type'                  => 'text',
    'settings'              => 'exbico_team_content',
) );


$wp_customize->add_setting( 'exbico_team_icon', array(
    'capability'            => 'edit_theme_options',
    'default'               => '',
    'sanitize_callback'     => 'sanitize_text_field'
) );

$wp_customize->add_control( 'exbico_team_icon', array(
    'label'                 =>  __( 'Use Team Social Icon', 'exbico' ),
    'section'               => 'exbico_team_section',
    'type'                  => 'text',
	/* translators: %s: Description */ 
    'description'           => sprintf( __( 'For team icon,  You can use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'exbico' ), $exbico_service,'<a href="'.esc_url('http://fontawesome.io/icons/').'">','</a>'),
    'settings'              => 'exbico_team_icon',
) );

for ($i=1;$i<=4;$i++) {
	$wp_customize->add_setting( 'exbico_team_page_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'exbico_sanitize_dropdown_pages'
	) );


	$wp_customize->add_control( 'exbico_team_page_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Select page for team %s', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'dropdown-pages',
	    'settings'              => 'exbico_team_page_'.$i,
	) );
	
	// Team position
	$wp_customize->add_setting( 'exbico_team_position_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_team_position_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team position %s', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_team_position_'.$i,
	) );
	
	$wp_customize->add_control( 'exbico_team_positions_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Icon', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
		'description'           => sprintf( __( 'Use font awesome icon: Eg: %1$s. %2$s See more here %3$s', 'exbico' ), $exbico_service,'<a href="'.esc_url('http://fontawesome.io/icons/').'">','</a>'),
	    'settings' => 'exbico_team_positions_'.$i,
	) );
	
	// Team Social Icon 1
	$wp_customize->add_setting( 'exbico_ts_icon_1_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_icon_1_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Icon 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_ts_icon_1_'.$i,
	) );
	// Team Social Icon Link 1
	$wp_customize->add_setting( 'exbico_ts_link_1_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
		'sanitize_callback' => 'esc_url',
	) );

	$wp_customize->add_control( 'exbico_ts_link_1_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Link 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'url',
	    'settings' => 'exbico_ts_link_1_'.$i,
	) );
	
	// Team Social Icon 2
	$wp_customize->add_setting( 'exbico_ts_icon_2_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_icon_2_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Icon 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_ts_icon_2_'.$i,
	) );
	// Team Social Icon Link 2
	$wp_customize->add_setting( 'exbico_ts_link_2_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_link_2_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Link 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'url',
	    'settings' => 'exbico_ts_link_2_'.$i,
	) );
	
	// Team Social Icon 3
	$wp_customize->add_setting( 'exbico_ts_icon_3_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_icon_3_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Icon 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_ts_icon_3_'.$i,
	) );
	// Team Social Icon Link 3
	$wp_customize->add_setting( 'exbico_ts_link_3_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_link_3_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Link 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'url',
	    'settings' => 'exbico_ts_link_3_'.$i,
	) );
	
	// Team Social Icon 4
	$wp_customize->add_setting( 'exbico_ts_icon_4_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_icon_4_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Icon 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'text',
	    'settings' => 'exbico_ts_icon_4_'.$i,
	) );
	// Team Social Icon Link 4
	$wp_customize->add_setting( 'exbico_ts_link_4_'.$i, array(
	    'capability'            => 'edit_theme_options',
	    'default'               => '',
	    'sanitize_callback'     => 'sanitize_text_field'
	) );

	$wp_customize->add_control( 'exbico_ts_link_4_'.$i, array(
		/* translators: %s: Description */ 
	    'label'                 =>  sprintf( __( 'Team Social Link 1', 'exbico' ), $i ),
	    'section'               => 'exbico_team_section',
	    'type'                  => 'url',
	    'settings' => 'exbico_ts_link_4_'.$i,
	) );
	
	
}