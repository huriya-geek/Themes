<?php
	// Header Section
	
	$wp_customize->add_section('advance_fitness_gym_pro_top_bar_section',array(
		'title'	=> __('Top Bar','advance-fitness-gym-pro'),
		'description'	=> __('Top Bar Settings','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_bgcolor_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_bgcolor_settings',
      array(
      'label' => __('Top Bar Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_topbar_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_topbar_bgcolor', array(
		'label' => __('Top Bar Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_top_bar_section',
		'settings' => 'advance_fitness_gym_pro_topbar_bgcolor',
	)));
	
	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_top_bar_contact_number', array(
	    'selector' => '#site_top .top_bar .container-fluid',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_top_bar_contact_number',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_contact_number_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_contact_number_settings',
      array(
      'label' => __('Contact Number Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_contact_number',array(
		'label'	=> '',
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_email_address_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_email_address_settings',
      array(
      'label' => __('Email Address Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_email_address',array(
		'label'	=> __('Add Email Id Here','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_register_link_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_register_link_settings',
      array(
      'label' => __('Register Link Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_register_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_register_title',array(
		'label'	=> __('Add Register Title Here','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_register_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_register_title_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_register_title_link',array(
		'label'	=> __('Add Register Link Here','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_register_title_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_login_link_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_login_link_settings',
      array(
      'label' => __('Login Link Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_login_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_login_title',array(
		'label'	=> __('Add Login Title Here','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_login_title',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('advance_fitness_gym_pro_top_bar_login_title_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_top_bar_login_title_link',array(
		'label'	=> __('Add Login Title Link Here','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_top_bar_section',
		'setting'	=> 'advance_fitness_gym_pro_top_bar_login_title_link',
		'type'		=> 'text'
	));	

	$wp_customize->add_setting('advance_fitness_gym_pro_topbar_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_topbar_bgimage',array(
        'label' => __('Background Image ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_top_bar_section',
        'settings' => 'advance_fitness_gym_pro_topbar_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_top_bar_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_top_bar_color_fonts_settings',
      array(
      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_top_bar_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_contact_details_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_details_color', array(
		'label' => __('Contact Details Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_top_bar_section',
		'settings' => 'advance_fitness_gym_pro_contact_details_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_contact_details_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_contact_details_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_top_bar_section',
	    'label'    => __('Contact Details Font family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_contact_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_icon_color', array(
		'label' => __('Contact Details Icon Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_top_bar_section',
		'settings' => 'advance_fitness_gym_pro_contact_icon_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_social_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_social_icon_color', array(
		'label' => __('Social Icon Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_top_bar_section',
		'settings' => 'advance_fitness_gym_pro_social_icon_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_register_login_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_register_login_color', array(
		'label' => __('Register & Login Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_top_bar_section',
		'settings' => 'advance_fitness_gym_pro_register_login_color',
	)));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_headermenu_color', array(
	    'selector' => '#header .container .menubar',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_headermenu_color',
  	));
  	
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
	$wp_customize->add_setting( 'advance_fitness_gym_pro_header_menuhovercolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_header_menuhovercolor', array(
		'label' => __('Menu Item Hover Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_header_menuhovercolor',
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

	$wp_customize->add_setting( 'advance_fitness_gym_pro_dropdownbg_itemcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_dropdownbg_itemcolor', array(
		'label' => __('Menu DropDown Item Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_header_section',
		'settings' => 'advance_fitness_gym_pro_dropdownbg_itemcolor',
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