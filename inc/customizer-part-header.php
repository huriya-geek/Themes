<?php
	// Header Section

	$wp_customize->add_section('advance_fitness_gym_pro_header_section',array(
		'title'	=> __('Header','advance-fitness-gym-pro'),
		'description'	=> __('Header Settings','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_main_title_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_main_title_color_fonts_settings',
      array(
      'label' => __('Header Main Title Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_header_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_header_title_color', array(
		'label' => __('Header Main title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_header_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_header_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_header_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_header_section',
	    'label'    => __('Header Main title Font family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_background_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_background_settings',
      array(
      'label' => __('Header Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_headerhomebg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_headerhomebg_color', array(
		'label' => __('Header Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_headerhomebg_color',
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_menu_item_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_menu_item_color_fonts_settings',
      array(
      'label' => __('Menu Item Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	// This is Header Menu Color picker setting
	$wp_customize->add_setting( 'advance_fitness_gym_pro_headermenu_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_headermenu_color', array(
		'label' => __('Menu Item Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_headermenu_color',
	)));
	//This is Header Menu FontFamily picker setting
	$wp_customize->add_setting('advance_fitness_gym_pro_headermenu_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	 ));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_headermenu_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_header_section',
	    'label'    => __( 'Menu Item Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_menu_item_hover_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_menu_item_hover_color_fonts_settings',
      array(
      'label' => __('Menu Item Hover Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_header_menuhovercolor',
	)));
	
	$wp_customize->add_setting( 'advance_pet_care_pro_header_menu_dropdown_background_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_menu_dropdown_background_settings',
      array(
      'label' => __('Menu Dropdown Background Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	// This is Nav Dropdown Background Color picker setting
	$wp_customize->add_setting( 'advance_fitness_gym_pro_dropdownbg_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_dropdownbg_color', array(
		'label' => __('Menu DropDown Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_dropdownbg_color',
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_dropdown_menu_item_color_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_dropdown_menu_item_color_settings',
      array(
      'label' => __('Menu Dropdown Item Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_dropdownbg_itemcolor',
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_dropdown_menu_item_hovercolor_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_dropdown_menu_item_hovercolor_settings',
      array(
      'label' => __('Menu Dropdown Item Hover Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_dropdownbg_item_hovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_dropdownbg_item_hovercolor', array(
		'label' => __('Menu DropDown Item Hover Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_dropdownbg_item_hovercolor',
	)));
	
	$wp_customize->add_setting( 'advance_pet_care_pro_header_responsive_menu_background_color_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_responsive_menu_background_color_settings',
      array(
      'label' => __('Responsive Menu Background Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	//In Responsive
	$wp_customize->add_setting( 'advance_fitness_gym_pro_dropdownbg_responsivecolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_dropdownbg_responsivecolor', array(
		'label' => __('Responsive Menu Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_dropdownbg_responsivecolor',
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_header_responsive_menu_item_color_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_header_responsive_menu_item_color_settings',
      array(
      'label' => __('Responsive Menu Item Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_header_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_headermenu_responsive_item_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_headermenu_responsive_item_color', array(
		'label' => __('Responsive Menu item Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_headermenu_responsive_item_color',
	)));
?>