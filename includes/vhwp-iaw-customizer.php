<?php

function vhwp_iaw_customize_registers( $wp_customize ) {

	if ( !get_option ( 'vhwp_iaw_image1' )){
		add_option ( 'vhwp_iaw_image1' );
	}

	$wp_customize->add_panel( 'vhwp_iaw_main_panel', array(
	  'title' => __( 'Image Anywhere', 'vhwp-iaw' ),
	  'priority' => 160,
	  ) );

	$wp_customize->add_section( 'vhwp_iaw_image_section' , array(
		'title'    		=> __( 'Image settings', 'vhwp-iaw' ),
		'priority' 		=> 10,
		'panel'			=> 'vhwp_iaw_main_panel',
	  ) );

	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_image' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'esc_url_raw',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'vhwp_iaw_image', array(
		'label'				=> __( 'Select an image', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_image',
	) ) );

	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_top_percentage' , array(
		'default'			=> '20',
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_iaw_top_percentage', array(
		'label'				=> __( 'Distance to TOP  (%)', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_top_percentage',
		'type'				=> 'option',
	) ) );

	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_left_percentage' , array(
		'default'			=> '20',
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_iaw_left_percentage', array(
		'label'				=> __( 'Distance to LEFT  (%)', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_left_percentage',
		'type'				=> 'option',
	) ) );


	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_image_width' , array(
		'default'			=> '100',
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_iaw_image_width', array(
		'label'				=> __( 'Image Width  (px)', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_image_width',
		'type'				=> 'option',
	) ) );

	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_image_height' , array(
		'default'			=> '100',
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_iaw_image_height', array(
		'label'				=> __( 'Image Height  (px)', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_image_height',
		'type'				=> 'option',
	) ) );

	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_image_url' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vhwp_iaw_image_url', array(
		'label'				=> __( 'Link URL', 'vhwp-iaw' ),
		'section'			=> 'vhwp_iaw_image_section',
		'settings'			=> 'vhwp_iaw_image_url',
		'type'				=> 'option',
	) ) );


	/**
	 * 
	 */
	$wp_customize->add_setting( 'vhwp_iaw_image_position' , array(
		'transport'			=> 'refresh',
		'sanitize_callback'	=> 'sanitize_text_field',
		'type'				=> 'option',
	) );

	$wp_customize->add_control( 'vhwp_iaw_image_position', array(
		'label'				=> __( 'Image position', 'vhwp-iaw' ),
		'type'    			=> 'select',
	    'section' 			=> 'vhwp_iaw_image_section',
	    'choices'    		=> array(
	        		'fixed' => 'fixed',
	        		'absolute' => 'absolute',
	        		),
	) );
}

add_action ( 'customize_register', 'vhwp_iaw_customize_registers' );
