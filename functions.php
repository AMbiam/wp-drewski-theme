<?php
/*
	WordPress Hooks for Supported.
*/
add_theme_support( 'post-thumbnails' ); 



/* Custom Attributes */
/*Customize sections*/
function theme_customizer( $wp_customize ) {
	// add new section
	$wp_customize->add_section( 'custom_theme_colors', array(
		'title' => __( 'Theme Colors', 'olympus' ),
		'priority' => 100,
	) );

	// add color picker setting
	$wp_customize->add_setting( 'primary_color', array(
		'default' => '#ff0000'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
		'label' => 'Primary Color',
		'section' => 'custom_theme_colors',
		'settings' => 'primary_color',
	) ) );

	$wp_customize->add_setting( 'secondary_color', array(
		'default' => '#0000ff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(
		'label' => 'Secondary Color',
		'section' => 'custom_theme_colors',
		'settings' => 'secondary_color',
	) ) );

	$wp_customize->add_setting( 'accent_color', array(
		'default' => '#00ff00'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'accent_color', array(
		'label' => 'Accent Color',
		'section' => 'custom_theme_colors',
		'settings' => 'accent_color',
	) ) );

	$wp_customize->add_setting( 'primary_text_color', array(
		'default' => '#0000ff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_text_color', array(
		'label' => 'Primary Text Color',
		'section' => 'custom_theme_colors',
		'settings' => 'primary_text_color',
	) ) );

	$wp_customize->add_setting( 'secondary_text_color', array(
		'default' => '#0000ff'
	) );

	// add color picker control
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_text_color', array(
		'label' => 'Secondary Text Color',
		'section' => 'custom_theme_colors',
		'settings' => 'secondary_text_color',
	) ) );
}
add_action( 'customize_register', 'theme_customizer' );


/*Menu Options*/
function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Primary Menu' ),
      'secondary-menu' => __( 'Secondary Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );