<?php
	 /* ----------------------------Exercise Section --------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_exercises_section',array(
		'title'	=> __('Exercise Section','advance-fitness-gym-pro'),
		'description'	=> __('Add Exercise Section details here','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_exercise_enable', array(
	    'selector' => '#exercise .exercise_outer',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_exercise_enable',
  	));

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_enable_disable_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_enable_disable_settings',
      array(
      'label' => __('Exercise Enable/Disable Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_exercise_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_exercise_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_exercises_section',
        'choices' => array(
            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_section_background_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_section_background_settings',
      array(
      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_exercise_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_exercise_bgcolor',array(
		'label' => __('Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_exercises_section',
		'settings' => 'advance_fitness_gym_pro_exercise_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_exercise_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_exercise_bgimage',array(
        'label' => __('Background image ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_exercises_section',
        'settings' => 'advance_fitness_gym_pro_exercise_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_exercise_loop',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_exercise_loop',
	   array(
	      'label' => esc_html__( 'Loop Sattings', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_exercises_section'
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_number_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_number_settings',
      array(
      'label' => __('Exercise Number Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_exercise_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_exercise_number',array(
		'label'	=> __('Number of Details to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_exercises_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_contents_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_contents_settings',
      array(
      'label' => __('Section Contents Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$countchoose =  get_theme_mod('advance_fitness_gym_pro_exercise_number');
	for($i=1; $i<=$countchoose; $i++) {
		$wp_customize->add_setting('advance_fitness_gym_pro_exercise_icon_image'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(
		    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_exercise_icon_image'.$i,array(
			    'label' => __('Title Icon Image','advance-fitness-gym-pro'),
			    'section' => 'advance_fitness_gym_pro_exercises_section',
			    'settings' => 'advance_fitness_gym_pro_exercise_icon_image'.$i
			)
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_exercise_sec_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_exercise_sec_icon'.$i,array(
			'label'	=> __('Add Icon Class Here','advance-fitness-gym-pro'),
			'description'	=> __('Add either Icon Image or Icon class, If you add both, Icon image has the highest priority.','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_exercises_section',
			'setting'	=> 'advance_fitness_gym_pro_exercise_sec_icon'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_exercise_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_exercise_title'.$i,array(
			'label'	=> __('Exercise Box Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_exercises_section',
			'setting'	=> 'advance_fitness_gym_pro_exercise_title'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_exercise_sec_details'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_exercise_sec_details'.$i,array(
			'label'	=> __('Exercise Box Text','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_exercises_section',
			'setting'	=> 'advance_fitness_gym_pro_exercise_sec_details'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_exercise_title_url'.$i,array(
				'default'	=> '',
				'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_exercise_title_url'.$i,array(
				'label'	=> __('Link','advance-fitness-gym-pro'),
				'section'	=> 'advance_fitness_gym_pro_exercises_section',
				'setting'	=> 'advance_fitness_gym_pro_exercise_title_url'.$i,
				'type'		=> 'url'
		));	
	}

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_box_background_color_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_box_background_color_settings',
      array(
      'label' => __('Exercise Box Background Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_exercise_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_exercise_box_bgcolor', array(
		'label' => __('Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_exercises_section',
		'settings' => 'advance_fitness_gym_pro_exercise_box_bgcolor',
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_exercise_section_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_exercise_section_color_fonts_settings',
      array(
      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_exercises_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_exercise_box_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_exercise_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_exercises_section',
		'settings' => 'advance_fitness_gym_pro_exercise_box_title_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_exercise_box_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_exercise_box_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_exercises_section',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_exercise_box_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_exercise_box_text_color', array(
		'label' => __('Box Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_exercises_section',
		'settings' => 'advance_fitness_gym_pro_exercise_box_text_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_exercise_box_text_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_exercise_box_text_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_exercises_section',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	/*------------------------------------ Welcome Section -------------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_welcome_section',array(
		'title'	=> __('Welcome Section','advance-fitness-gym-pro'),
		'description'	=> __('Add Welcome Section Details here.','advance-fitness-gym-pro'),
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_welcome_enable', array(
	    'selector' => '#welcome .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_welcome_enable',
  	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_enable_disable_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_enable_disable_settings',
      array(
      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_welcome_enable',
	    array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_welcome_enable',
	    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_welcome_section',
        'choices' => array(
        'Enable' => __('Enable', 'advance-fitness-gym-pro'),
        'Disable' => __('Disable', 'advance-fitness-gym-pro')
	    ),
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_bgcolor_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_bgcolor_settings',
      array(
      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_bgcolor', array(
		'label' => __('Section Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_bgcolor',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_welcome_bgimage',array(
        'label' => __('Section Background Image','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_welcome_section',
        'settings' => 'advance_fitness_gym_pro_welcome_bgimage'
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_image_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_image_settings',
      array(
      'label' => __('Left Side Image Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_welcome_image',array(
        'label' => __('Left Side Image','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_welcome_section',
        'settings' => 'advance_fitness_gym_pro_welcome_image'
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_main_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_main_title_settings',
      array(
      'label' => __('Section Main Title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_main_title',array(
		'label'	=> __('Section Main Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_main_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_title_settings',
      array(
      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_sub_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_sub_title_settings',
      array(
      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_title_second',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_title_second',array(
		'label'	=> __('Section Sub-title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_title_second',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_second_sub_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_second_sub_title_settings',
      array(
      'label' => __('Section Second Sub-title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_title_third',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_title_third',array(
		'label'	=> __('Section Second Sub-title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_title_third',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_contents_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_contents_settings',
      array(
      'label' => __('Section Contents Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_contents',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_contents',array(
		'label'	=> __('Section Contents','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_contents',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_read_more_button_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_read_more_button_settings',
      array(
      'label' => __('Read More Button Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_read_more_button',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_read_more_button',array(
		'label'	=> __('Read More Label','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_read_more_button',
		'type'		=> 'text'
	));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_read_more_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_welcome_read_more_button_link',array(
		'label'	=> __('Read More Link','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_welcome_section',
		'setting'	=> 'advance_fitness_gym_pro_welcome_read_more_button_link',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_welcome_section_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_welcome_section_color_fonts_settings',
      array(
      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_welcome_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_main_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_main_title_color', array(
		'label' => __('Welcome Main Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_main_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_main_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_main_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Welcome Main Title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_title_bottom_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_title_bottom_border_color', array(
		'label' => __('Welcome Title Bottom Border Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_title_bottom_border_color',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_title_color', array(
		'label' => __('Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_subtitle_color', array(
		'label' => __('Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Sub-title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_second_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_second_subtitle_color', array(
		'label' => __('Second Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_second_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_second_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_second_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Second Sub-title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_content_color', array(
		'label' => __('Welcome Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_content_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_content_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_content_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Welcome Content Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_read_more_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_read_more_color', array(
		'label' => __('Read More Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_read_more_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_welcome_read_more_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_welcome_read_more_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_welcome_section',
	    'label'    => __( 'Read More Text Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_button_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_button_border_color', array(
		'label' => __('Button Border Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_button_border_color',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_read_more_hover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_read_more_hover_color', array(
		'label' => __('Read More Text Color On Hover', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_read_more_hover_color',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_welcome_read_more_hover_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_welcome_read_more_hover_background_color', array(
		'label' => __('Button Background Color On Hover', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_welcome_section',
		'settings' => 'advance_fitness_gym_pro_welcome_read_more_hover_background_color',
	)));
	/*------------------------------------Services Section -------------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_services_section',array(
		'title'	=> __('Services Section','advance-fitness-gym-pro'),
		'description'	=> __('This section is only for services title and styling. <a href="','advance-fitness-gym-pro').esc_url(home_url()).__('/wp-admin/edit.php?post_type=services" target="_blank">Click here</a> to add services.','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_services_section_enable', array(
	    'selector' => '#services .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_services_section_enable',
  	));

	$wp_customize->add_setting( 'advance_pet_care_pro_services_section_enable_disable_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_services_section_enable_disable_settings',
      array(
      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_services_section_enable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
	$wp_customize->add_control('advance_fitness_gym_pro_services_section_enable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'advance_fitness_gym_pro_services_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));

    $wp_customize->add_setting( 'advance_pet_care_pro_services_section_background_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_services_section_background_settings',
      array(
      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_services_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_bgcolor', array(
		'label' => __('Section Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_services_bgimage',array(
        'label' => __('Section Background Image','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_services_section',
        'settings' => 'advance_fitness_gym_pro_services_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_loop',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_services_loop',
	   array(
	      'label' => esc_html__( 'Loop Sattings', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_services_section'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_main_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_main_title_settings',
      array(
      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_services_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_services_main_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_services_section',
		'setting'	=> 'advance_fitness_gym_pro_services_main_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_sub_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_sub_title_settings',
      array(
      'label' => __('Section Description Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_services_sub_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_services_sub_title',array(
		'label'	=> __('Section Description','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_services_section',
		'setting'	=> 'advance_fitness_gym_pro_services_sub_title',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_box_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_box_title_settings',
      array(
      'label' => __('Services Box Title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_services_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_services_title',array(
		'label'	=> __('Services Box Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_services_section',
		'setting'	=> 'advance_fitness_gym_pro_services_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_number_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_number_settings',
      array(
      'label' => __('Services Number Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_services_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_services_number',array(
		'label'	=> __('Number of Details to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_services_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_contents_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_contents_settings',
      array(
      'label' => __('Services Contents Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$countchoose =  get_theme_mod('advance_fitness_gym_pro_services_number');
	for($i=1; $i<=$countchoose; $i++) {
		$wp_customize->add_setting('advance_fitness_gym_pro_services_icon_image'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(
		    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_services_icon_image'.$i,array(
			    'label' => __('Services Icon Image','advance-fitness-gym-pro'),
			    'section' => 'advance_fitness_gym_pro_services_section',
			    'settings' => 'advance_fitness_gym_pro_services_icon_image'.$i
			)
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_icon'.$i,array(
			'label'	=> __('Add Icon Class Here','advance-fitness-gym-pro'),
			'description'	=> __('Add either Icon Image or Icon class, If you add both, Icon image has the highest priority.','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_services_section',
			'setting'	=> 'advance_fitness_gym_pro_services_icon'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_title'.$i,array(
			'label'	=> __('Services Box Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_services_section',
			'setting'	=> 'advance_fitness_gym_pro_services_title'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_title_second'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_title_second'.$i,array(
			'label'	=> __('Services Box Second Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_services_section',
			'setting'	=> 'advance_fitness_gym_pro_services_title_second'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_content'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_content'.$i,array(
			'label'	=> __('Services Box Contents','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_services_section',
			'setting'	=> 'advance_fitness_gym_pro_services_content'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_read_more'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_read_more'.$i,array(
			'label'	=> __('Services Box Read More Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_services_section',
			'setting'	=> 'advance_fitness_gym_pro_services_read_more'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_services_read_more_url'.$i,array(
				'default'	=> '',
				'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_services_read_more_url'.$i,array(
				'label'	=> __('Read More Link','advance-fitness-gym-pro'),
				'section'	=> 'advance_fitness_gym_pro_services_section',
				'setting'	=> 'advance_fitness_gym_pro_services_read_more_url'.$i,
				'type'		=> 'url'
		));	
	}

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_section_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_section_color_fonts_settings',
      array(
      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_services_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_title_color', array(
		'label' => __('Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_services_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_services_section',
	    'label'    => __( 'Title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_subtitle_color', array(
		'label' => __('Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_services_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_services_section',
	    'label'    => __( 'Sub-title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_box_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_box_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_box_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_services_box_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_services_section',
	    'label'    => __( 'Box Title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_box_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_box_subtitle_color', array(
		'label' => __('Box Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_box_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_box_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_services_box_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_services_section',
	    'label'    => __( 'Box Sub-title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_box_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_services_box_content_color', array(
		'label' => __('Box Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_services_section',
		'settings' => 'advance_fitness_gym_pro_services_box_content_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_services_box_content_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_services_box_content_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_services_section',
	    'label'    => __( 'Box Content Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	/*------------------------------------ Special Offer-------------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_special_offer_section',array(
		'title'	=> __('Special Offer Section','advance-fitness-gym-pro'),
		'description'	=> __('Add Skills content here','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_special_offer_enable', array(
	    'selector' => '#special_offer .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_special_offer_enable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_services_enable_disable_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_enable_disable_settings',
      array(
      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_special_offer_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_special_offer_enable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_special_offer_enable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'advance_fitness_gym_pro_special_offer_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_services_background_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_services_background_settings',
      array(
      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_special_offer_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_bgcolor', array(
		'label' => __('Section Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_special_offer_bgimage',array(
        'label' => __('Section Background Image','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_special_offer_section',
        'settings' => 'advance_fitness_gym_pro_special_offer_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_title_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_title_settings',
      array(
      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_special_offer_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_special_offer_title',array(
			'label'	=> __('Section Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_special_offer_section',
			'settings' => 'advance_fitness_gym_pro_special_offer_title',
			'type'	=> 'text'
		));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_subtitle_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_subtitle_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_special_offer_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_subtitle',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_special_offer_subtitle',array(
			'label'	=> __('Section Sub-Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_special_offer_section',
			'settings' => 'advance_fitness_gym_pro_special_offer_subtitle',
			'type'	=> 'text'
		));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_read_more_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    	));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_read_more_settings',
	      array(
	      'label' => __('Read More Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_special_offer_section'
    	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_read_more',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_special_offer_read_more',array(
			'label'	=> __('Add Read More Title here','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_special_offer_section',
		    'settings' => 'advance_fitness_gym_pro_special_offer_read_more',
			'type'	=> 'text'
		));
	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_read_more_url',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_special_offer_read_more_url',array(
			'label'	=> __('Add Read More Link here','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_special_offer_section',
		    'settings' => 'advance_fitness_gym_pro_special_offer_read_more_url',
			'type'	=> 'text'
		));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    	));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_special_offer_section'
    	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_title_color', array(
		'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_special_offer_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_special_offer_section',
	    'label'    => __( 'Section Title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_subtitle_color', array(
		'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_special_offer_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_special_offer_section',
	    'label'    => __( 'Section Sub-title Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_read_more_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_read_more_color', array(
		'label' => __('Read More Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_read_more_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_special_offer_read_more_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_special_offer_read_more_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_special_offer_section',
	    'label'    => __( 'Read More Text Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_button_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_button_border_color', array(
		'label' => __('Button Border Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_button_border_color',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_special_offer_button_hover_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_special_offer_button_hover_background_color', array(
		'label' => __('Button Background Color on Hover', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_special_offer_section',
		'settings' => 'advance_fitness_gym_pro_special_offer_button_hover_background_color',
	)));
	/* ---------------------------- Our Facilities --------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_our_facilities_section',array(
		'title'	=> __('Our Facilities','advance-fitness-gym-pro'),
		'description'	=> __('Add Facilities details here','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_facilities_enable', array(
	    'selector' => '#our_facilities .inner_sec .container-fluid',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_facilities_enable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_facilities_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_facilities_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_our_facilities_section',
        'choices' => array(
            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_bgcolor',array(
		'label' => __('Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_facilities_section',
		'settings' => 'advance_fitness_gym_pro_facilities_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_facilities_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_facilities_bgimage',array(
        'label' => __('Background image ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_our_facilities_section',
        'settings' => 'advance_fitness_gym_pro_facilities_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_our_facilities_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
		'setting'	=> 'advance_fitness_gym_pro_our_facilities_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_sub_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_sub_title_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_our_facilities_subtitle',array(
		'label'	=> __('Section Sub-title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
		'setting'	=> 'advance_fitness_gym_pro_our_facilities_subtitle',
		'type'		=> 'textarea'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_box_number_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_box_number_settings',
	      array(
	      'label' => __('Facilities Box Number Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_facilities_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_facilities_box_number',array(
		'label'	=> __('Number of boxes to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_contents_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_contents_settings',
	      array(
	      'label' => __('Section Contents Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_facilities_section'
    )));

	$countchoose =  get_theme_mod('advance_fitness_gym_pro_facilities_box_number');
	for($i=1; $i<=$countchoose; $i++) {
		$wp_customize->add_setting('advance_fitness_gym_pro_facilities_box_icon_image'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(
		    new WP_Customize_Image_Control( $wp_customize,'advance_fitness_gym_pro_facilities_box_icon_image'.$i,array(
			    'label' => __('Facilities Icon Image','advance-fitness-gym-pro'),
			    'section' => 'advance_fitness_gym_pro_our_facilities_section',
			    'settings' => 'advance_fitness_gym_pro_facilities_box_icon_image'.$i
			)
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_facilities_box_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_facilities_box_icon'.$i,array(
			'label'	=> __('Add Icon Class Here','advance-fitness-gym-pro'),
			'description'	=> __('Add either Icon Image or Icon class, If you add both, Icon image has the highest priority.','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
			'setting'	=> 'advance_fitness_gym_pro_facilities_box_icon'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_facilities_box_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_facilities_box_title'.$i,array(
			'label'	=> __('Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
			'setting'	=> 'advance_fitness_gym_pro_facilities_box_title'.$i,
			'type'		=> 'text'
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_facilities_box_subtitle'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_facilities_box_subtitle'.$i,array(
			'label'	=> __('Sub Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_our_facilities_section',
			'setting'	=> 'advance_fitness_gym_pro_facilities_box_subtitle'.$i,
			'type'		=> 'text'
		));
		}

		$wp_customize->add_setting( 'advance_fitness_gym_pro_facilities_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
	    ));
	    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_facilities_color_fonts_settings',
		      array(
		      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
		      'section' => 'advance_fitness_gym_pro_our_facilities_section'
	    )));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_facilities_title_color', array(
			'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_facilities_section',
			'settings' => 'advance_fitness_gym_pro_our_facilities_title_color',
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_title_fonts',array(
		  'default' => '',
		  'capability' => 'edit_theme_options',
		  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
		));
		$wp_customize->add_control(
		    'advance_fitness_gym_pro_our_facilities_title_fonts', array(
		    'section'  => 'advance_fitness_gym_pro_our_facilities_section',
		    'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
		    'type'     => 'select',
		    'choices'  => $font_array,
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_bottom_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_facilities_bottom_border_color', array(
			'label' => __('Title Bottom Border Color', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_facilities_section',
			'settings' => 'advance_fitness_gym_pro_our_facilities_bottom_border_color',
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_facilities_subtitle_color', array(
			'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_facilities_section',
			'settings' => 'advance_fitness_gym_pro_our_facilities_subtitle_color',
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_subtitle_fonts',array(
		  'default' => '',
		  'capability' => 'edit_theme_options',
		  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
		));
		$wp_customize->add_control(
		    'advance_fitness_gym_pro_our_facilities_subtitle_fonts', array(
		    'section'  => 'advance_fitness_gym_pro_our_facilities_section',
		    'label'    => __( 'Section Sub-title Font Family','advance-fitness-gym-pro'),
		    'type'     => 'select',
		    'choices'  => $font_array,
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_subtext_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_facilities_subtext_title_color', array(
			'label' => __('Facilities Title Color', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_facilities_section',
			'settings' => 'advance_fitness_gym_pro_our_facilities_subtext_title_color',
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_subtext_title_fonts',array(
		  'default' => '',
		  'capability' => 'edit_theme_options',
		  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
		));
		$wp_customize->add_control(
		    'advance_fitness_gym_pro_our_facilities_subtext_title_fonts', array(
		    'section'  => 'advance_fitness_gym_pro_our_facilities_section',
		    'label'    => __( 'Facilities Title Font Family','advance-fitness-gym-pro'),
		    'type'     => 'select',
		    'choices'  => $font_array,
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_facilities_content_color', array(
			'label' => __('Facilities Content Color', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_facilities_section',
			'settings' => 'advance_fitness_gym_pro_our_facilities_content_color',
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_our_facilities_content_fonts',array(
		  'default' => '',
		  'capability' => 'edit_theme_options',
		  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
		));
		$wp_customize->add_control(
		    'advance_fitness_gym_pro_our_facilities_content_fonts', array(
		    'section'  => 'advance_fitness_gym_pro_our_facilities_section',
		    'label'    => __( 'Facilities Content Font Family','advance-fitness-gym-pro'),
		    'type'     => 'select',
		    'choices'  => $font_array,
		));		

	/*------------------------------------Popular Programs section -------------------------------------*/

    $wp_customize->add_section('advance_fitness_gym_pro_popular_programs_section',array(
		'title'	=> __('Popular Programs','advance-fitness-gym-pro'),
		'description'	=> __('Add Popular Programs content here.','advance-fitness-gym-pro'),
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_popular_programs_enabledisable', array(
	    'selector' => '#programs .programs_outer',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_popular_programs_enabledisable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_enabledisable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	    )
    );
	$wp_customize->add_control('advance_fitness_gym_pro_popular_programs_enabledisable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
	        'section' => 'advance_fitness_gym_pro_popular_programs_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
	            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	        ),
	    )
    );

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_bgcolor',array(
		'label' => __('Background Color', 'advance-fitness-gym-pro'),

		'section' => 'advance_fitness_gym_pro_popular_programs_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'settings' => 'advance_fitness_gym_pro_popular_programs_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_bgimage',array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
           new WP_Customize_Image_Control(
               $wp_customize,
               'advance_fitness_gym_pro_popular_programs_bgimage',
               array(
                   'label' => __('Background Image(Image Resolution:1520*420)','advance-fitness-gym-pro'),
                   'section' => 'advance_fitness_gym_pro_popular_programs_section',
                   'settings' => 'advance_fitness_gym_pro_popular_programs_bgimage',
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_title',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_popular_programs_title',array(
			'label'	=> __('Section Title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_popular_programs_section',
			'settings' => 'advance_fitness_gym_pro_popular_programs_title',
			'type'	=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_sub_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_sub_title_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_subtitle',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
	$wp_customize->add_control('advance_fitness_gym_pro_popular_programs_subtitle',array(
			'label'	=> __('Section Sub-title','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_popular_programs_section',
			'settings' => 'advance_fitness_gym_pro_popular_programs_subtitle',
			'type'	=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_loop',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_loop',
	   array(
	      'label' => esc_html__( 'Loop Sattings', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_popular_programs_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_popular_programs_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_title_color', array(
		'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_popular_programs_section',
		'settings' => 'advance_fitness_gym_pro_popular_programs_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_popular_programs_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_popular_programs_section',
	    'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_subtitle_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_subtitle_color', array(
		'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_popular_programs_section',
		'settings' => 'advance_fitness_gym_pro_popular_programs_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_popular_programs_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_popular_programs_section',
	    'label'    => __( 'Section Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_box_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_popular_programs_section',
		'settings' => 'advance_fitness_gym_pro_popular_programs_box_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_box_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_popular_programs_box_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_popular_programs_section',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_box_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_popular_programs_box_text_color', array(
		'label' => __('Box Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_popular_programs_section',
		'settings' => 'advance_fitness_gym_pro_popular_programs_box_text_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_popular_programs_box_text_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_popular_programs_box_text_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_popular_programs_section',
	    'label'    => __( 'Box Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_about_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_about_number',array(
		'label'	=> __('Number of record to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_about_sec',
		'type'		=> 'number'
	));
	$count =  get_theme_mod('advance_fitness_gym_pro_about_number');

	for($i=1; $i<=$count; $i++) {

		$wp_customize->add_setting('advance_fitness_gym_pro_about_sec_icon'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_icon'.$i,array(
			'label'	=> __('Add Icon Class','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_about_icon_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_about_icon_image'.$i,array(
	        'label' => __('Icon Image(Image Resolution 85*85)If you want to add image first remove the icon','advance-fitness-gym-pro'),
	        'section' => 'advance_fitness_gym_pro_about_sec',
	        'settings' => 'advance_fitness_gym_pro_about_icon_image'.$i
		)));

		$wp_customize->add_setting('advance_fitness_gym_pro_about_sec_title'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_title'.$i,array(
			'label'	=> __('Donate Now','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));
        
        $wp_customize->add_setting('advance_fitness_gym_pro_about_sec_btnurl'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_btnurl'.$i,array(
			'label'	=> __('Donate Now Link','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));

		$wp_customize->add_setting('advance_fitness_gym_pro_about_sec_details'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_details'.$i,array(
			'label'	=> __('Service Content','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_about_sec_readmore'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_readmore'.$i,array(
			'label'	=> __('read More Text','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_about_sec_readmore_link'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_about_sec_readmore_link'.$i,array(
			'label'	=> __('read More Link','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_about_sec',
			'type'	=> 'text'
		));
	}
	$wp_customize->add_setting( 'advance_fitness_gym_pro_aboutheading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_aboutheading_color', array(
		'label' => __('Title Heading Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_aboutheading_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_aboutheading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_aboutheading_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_about_sec',
	    'label'    => __( 'Title Heading Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_sub_heading_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_sub_heading_color', array(
		'label' => __('Sub Heading Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_sub_heading_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_sub_heading_font_family', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_sub_heading_font_family', array(
		'label' => __('Sub Heading Font Family', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_sub_heading_font_family',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_bgcolor', array(
		'label' => __('Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_bgcolor',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_icon_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_icon_color', array(
		'label' => __('Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_icon_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_bgcolor_hover', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
		));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_bgcolor_hover', array(
		'label' => __('Box Background Color On hover', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_bgcolor_hover',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_icon_color_hover', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_icon_color_hover', array(
		'label' => __('Box Background Color On hover', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_icon_color_hover',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_heading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_heading_color', array(
		'label' => __('Box Heading Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_heading_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_about_box_heading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_about_box_heading_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_about_sec',
	    'label'    => __( 'Box Heading Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_content_color', array(
		'label' => __('Box Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_content_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_about_box_content_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_about_box_content_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_about_sec',
	    'label'    => __( 'Box Content Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_about_box_link_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
		'advance_fitness_gym_pro_about_box_link_color', array(
		'label' => __('Box Link Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_about_sec',
		'settings' => 'advance_fitness_gym_pro_about_box_link_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_about_box_link_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_about_box_link_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_about_sec',
	    'label'    => __( 'Box link Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	//BMI Calculator
	$wp_customize->add_section('advance_fitness_gym_pro_bmi_section',array(
		'title'	=> __('BMI Calculator Section','advance-fitness-gym-pro'),
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_bmi_enable', array(
	    'selector' => '#bmi .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_bmi_enable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_bmi_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
	$wp_customize->add_control(
    'advance_fitness_gym_pro_bmi_enable',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
	        'section' => 'advance_fitness_gym_pro_bmi_section',
	        'choices' => array(
	            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
	            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	    ),
    ));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_bmi_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 		'advance_fitness_gym_pro_bmi_color', array(
		'label' => 'Background Color',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_image',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'advance_fitness_gym_pro_bmi_image',
	        array(
	            'label' => __('Background image','advance-fitness-gym-pro'),
	            'section' => 'advance_fitness_gym_pro_bmi_section',
	            'settings' => 'advance_fitness_gym_pro_bmi_image'
	))); 

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_bmi_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_bmi_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_bmi_section',
		'setting'	=> 'advance_fitness_gym_pro_bmi_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_text_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_text_settings',
	      array(
	      'label' => __('Section Description Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_bmi_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_bmi_text',array(
		'label'	=> __('Section Description','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_bmi_section',
		'setting'	=> 'advance_fitness_gym_pro_bmi_text',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_bmi_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_color_fonts_settings',
	      array(
	      'label' => __('Section Color/Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_bmi_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_title_color', array(
		'label' => __('Form Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_bmi_form_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_bmi_section',
	    'label'    => __( 'Form Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_subtitle_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_subtitle_color', array(
		'label' => __('Form Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_bmi_form_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_bmi_section',
	    'label'    => __( 'Form Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_text_color', array(
		'label' => __('Form Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_text_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_text_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_bmi_form_text_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_bmi_section',
	    'label'    => __( 'Form Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_calculate_text_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_calculate_text_color', array(
		'label' => __('Calculate Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_calculate_text_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_calculate_text_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_bmi_form_calculate_text_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_bmi_section',
	    'label'    => __( 'Calculate Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));	

	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_button_background_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_button_background_color', array(
		'label' => __('Button Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_button_background_color',
	)));


	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_value_title_color', array(
	'default' => '',
	'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_bmi_form_value_title_color', array(
		'label' => __('BMI Value Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_bmi_section',
		'settings' => 'advance_fitness_gym_pro_bmi_form_value_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_bmi_form_value_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_bmi_form_value_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_bmi_section',
	    'label'    => __( 'BMI Value Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));		

	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_title_color', array(
		'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_title_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_subtext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_subtext_color', array(
		'label' => __('Sub Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_subtext_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_subtext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_subtext_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Sub Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_box_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_box_title_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_box_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_box_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_box_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_box_content_color', array(
		'label' => __('Box Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_box_content_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_box_content_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_box_content_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Box Content Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_box_meta_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_box_meta_content_color', array(
		'label' => __('Box Meta Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_box_meta_content_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_box_meta_content_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_box_meta_content_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Box Meta Content Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_box_meta_date_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_box_meta_date_color', array(
		'label' => __('Box Date Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_box_meta_date_color',
	)));

	$wp_customize->add_setting('advance_fitness_gym_pro_latestpost_box_meta_date_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_latestpost_box_meta_date_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_latest_post',
	    'label'    => __( 'Box date Content Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_latestpost_box_meta_date_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_latestpost_box_meta_date_bgcolor', array(
		'label' => __('Box date Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_latest_post',
		'settings' => 'advance_fitness_gym_pro_latestpost_box_meta_date_bgcolor',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_post_date',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_post_date',
	   array(
	      'label' => esc_html__( 'show/hide Date', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_latest_post'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_post_meta',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_post_meta',
	   array(
	      'label' => esc_html__( 'show/hide Meta Content','advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_latest_post'
	)));
	/*------------------------ Membership Section --------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_membership_section',array(
		'title'	=> __('Membership Section','advance-fitness-gym-pro'),
		'description'	=> __('Add Membership details here','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_membership_enable', array(
	    'selector' => '#membership .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_membership_enable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_membership_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_membership_enable',array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_membership_section',
        'choices' => array(
            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	)));
	
	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_bgcolor_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_bgcolor_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_bgcolor',array(
		'label' => __('Background Color', 'advance-fitness-gym-pro'),
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_bgimage',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_membership_bgimage',array(
        'label' => __('Background image ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_membership_section',
        'settings' => 'advance_fitness_gym_pro_membership_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_membership_section_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_membership_section_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_membership_section',
		'setting'	=> 'advance_fitness_gym_pro_membership_section_title',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_sub_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_sub_title_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_membership_section_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_membership_section_subtitle',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_membership_section',
		'setting'	=> 'advance_fitness_gym_pro_membership_section_subtitle',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_number_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_number_settings',
	      array(
	      'label' => __('Membership Box Number Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_membership_box_number',array(
		'label'	=> __('Number of boxes to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_membership_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_contents_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_contents_settings',
	      array(
	      'label' => __('Section Contents Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

	$countmembership =  get_theme_mod('advance_fitness_gym_pro_membership_box_number', 3);
	for($i=1; $i<=$countmembership; $i++) {
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_title'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_title'.$i,array(
			'label'	=> __('Membership Box Title','advance-fitness-gym-pro').$i,
			'section'	=> 'advance_fitness_gym_pro_membership_section',
			'setting'	=> 'advance_fitness_gym_pro_membership_box_title'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_subtitle'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_subtitle'.$i,array(
			'label'	=> __('Box Sub-title','advance-fitness-gym-pro').$i,
			'section'	=> 'advance_fitness_gym_pro_membership_section',
			'setting'	=> 'advance_fitness_gym_pro_membership_box_subtitle'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_price'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_price'.$i,array(
			'label'	=> __('Box Price','advance-fitness-gym-pro').$i,
			'section'	=> 'advance_fitness_gym_pro_membership_section',
			'setting'	=> 'advance_fitness_gym_pro_membership_box_price'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_price_base'.$i,array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_price_base'.$i,array(
			'label'	=> __('Per/month or year','advance-fitness-gym-pro').$i,
			'section'	=> 'advance_fitness_gym_pro_membership_section',
			'setting'	=> 'advance_fitness_gym_pro_membership_box_price_base'.$i,
			'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_text_number'.$i,array(
		'default'	=> 6,
		'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_text_number'.$i,array(
			'label'	=> __('Number of Membership to show','advance-fitness-gym-pro'),
			'section'	=> 'advance_fitness_gym_pro_membership_section',
			'type'		=> 'number'
		));
		$countplans =  get_theme_mod('advance_fitness_gym_pro_membership_text_number'.$i, 6);
		for($k=1; $k<=$countplans; $k++) { 
			$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_text'.$k.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
			));
			$wp_customize->add_control('advance_fitness_gym_pro_membership_box_text'.$k.$i,array(
				'label'	=> __('Membership Text','advance-fitness-gym-pro'),
				'section'	=> 'advance_fitness_gym_pro_membership_section',
				'setting'	=> 'advance_fitness_gym_pro_membership_box_text'.$k.$i,
				'type'		=> 'text'
			));
		}
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_btn'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_btn'.$i,array(
				'label'	=> __('Button Text','advance-fitness-gym-pro'),
				'section'	=> 'advance_fitness_gym_pro_membership_section',
				'setting'	=> 'advance_fitness_gym_pro_membership_box_btn'.$i,
				'type'		=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_url'.$i,array(
				'default'	=> __('#','advance-fitness-gym-pro'),
				'sanitize_callback'	=> 'esc_url_raw'
		));
		$wp_customize->add_control('advance_fitness_gym_pro_membership_box_url'.$i,array(
				'label'	=> __('Button Link','advance-fitness-gym-pro'),
				'section'	=> 'advance_fitness_gym_pro_membership_section',
				'setting'	=> 'advance_fitness_gym_pro_membership_box_url'.$i,
				'type'		=> 'url'
		));
	}

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_membership_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_membership_section'
    )));

		//color pallete
	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_boxbgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_boxbgcolor',array(
		'label' => __('Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'settings' => 'advance_fitness_gym_pro_membership_boxbgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_boxbgimage',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_control(
	   new WP_Customize_Image_Control(
	       $wp_customize,
	       'advance_fitness_gym_pro_membership_boxbgimage',
	       array(
	           'label' => __('Box Background Image','advance-fitness-gym-pro'),
	           'description' => __('Image Size should be approximate (300*640px)', 'advance-fitness-gym-pro'),
	           'section' => 'advance_fitness_gym_pro_membership_section',
	           'settings' => 'advance_fitness_gym_pro_membership_boxbgimage',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_topboxbgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_topboxbgcolor',array(
		'label' => __('Top Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
		'settings' => 'advance_fitness_gym_pro_membership_topboxbgcolor',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_title_color', array(
		'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_title_bottom_border_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_title_bottom_border_color', array(
		'label' => __('Section Title Bottom Border Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_title_bottom_border_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_subtitle_color', array(
		'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Section Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_title_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_box_title_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_subtitle_color', array(
		'label' => __('Box Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_subtitle_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_box_subtitle_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Box Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_price_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_price_color', array(
		'label' => __('Box Price Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_price_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_price_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_box_price_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Box Price Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_text_color', array(
		'label' => __('Box Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_text_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_text_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_box_text_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Box Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_button_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_button_text_color', array(
		'label' => __('Button Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_button_text_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_membership_box_button_text_fonts',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_membership_box_button_text_fonts', array(
	    'section'  => 'advance_fitness_gym_pro_membership_section',
	    'label'    => __( 'Button Text Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_membership_box_button_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_membership_box_button_background_color', array(
		'label' => __('Button Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_membership_section',
		'settings' => 'advance_fitness_gym_pro_membership_box_button_background_color',
	)));

	$wp_customize->add_setting( 'vw_business_pro_pricing_boxtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_boxtitle_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_boxtitle_color',
	)));

	$wp_customize->add_setting('vw_business_pro_pricing_boxtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_business_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_business_pro_pricing_boxtitle_font_family', array(
	    'section'  => 'vw_business_pro_plans_pricing',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_business_pro_pricing_boxsubtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_boxsubtitle_color', array(
		'label' => __('Box Sub Title Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_boxsubtitle_color',
	)));

	$wp_customize->add_setting('vw_business_pro_pricing_boxsubtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_business_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_business_pro_pricing_boxsubtitle_font_family', array(
	    'section'  => 'vw_business_pro_plans_pricing',
	    'label'    => __( 'Box Sub Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_business_pro_pricing_boxpricetitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_boxpricetitle_color', array(
		'label' => __('Box Price Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_boxpricetitle_color',
	)));

	$wp_customize->add_setting('vw_business_pro_pricing_boxpricetitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_business_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_business_pro_pricing_boxpricetitle_font_family', array(
	    'section'  => 'vw_business_pro_plans_pricing',
	    'label'    => __( 'Box Price Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_business_pro_pricing_boxlisttitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_boxlisttitle_color', array(
		'label' => __('Box list Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_boxlisttitle_color',
	)));

	$wp_customize->add_setting('vw_business_pro_pricing_boxlisttitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'vw_business_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'vw_business_pro_pricing_boxlisttitle_font_family', array(
	    'section'  => 'vw_business_pro_plans_pricing',
	    'label'    => __( 'Box List Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'vw_business_pro_pricing_button_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_button_bgcolor', array(
		'label' => __('Button Background Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_button_bgcolor',
	)));
	$wp_customize->add_setting( 'vw_business_pro_pricing_button_text_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'vw_business_pro_pricing_button_text_color', array(
		'label' => __('Button Text Color', 'advance-fitness-gym-pro'),
		'section' => 'vw_business_pro_plans_pricing',
		'settings' => 'vw_business_pro_pricing_button_text_color',
	)));
    /*------------------------------Meet Our Trainers Section----------------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_our_trainers_section',array(
		'title'	=> __('Meet Our Trainers Section','advance-fitness-gym-pro'),
		'description'	=> __('This section is only for Team title and styling. <a href="','advance-fitness-gym-pro').esc_url(home_url()).__('/wp-admin/edit.php?post_type=team" target="_blank">Click here</a> to add Trainers','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_our_trainers_enable', array(
	    'selector' => '#team .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_our_trainers_enable',
  	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_our_trainers_enable',array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_our_trainers_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_our_trainers_section',
	    'choices' => array(
        'Enable' => __('Enable', 'advance-fitness-gym-pro'),
        'Disable' => __('Disable', 'advance-fitness-gym-pro')
	     ),
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_bgcolor', array(
			'label' => __('Background Color', 'advance-fitness-gym-pro'),
			'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
			'section' => 'advance_fitness_gym_pro_our_trainers_section',
			'settings' => 'advance_fitness_gym_pro_our_trainers_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_bgimage',array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'advance_fitness_gym_pro_our_trainers_bgimage',
	        array(
	            'label' => __('Background Image','advance-fitness-gym-pro'),
	            'section' => 'advance_fitness_gym_pro_our_trainers_section',
	            'settings' => 'advance_fitness_gym_pro_our_trainers_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_team_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_team_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_our_trainers_section',
		'setting'	=> 'advance_fitness_gym_pro_team_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_description_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_description_settings',
	      array(
	      'label' => __('Section Description Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_team_desc',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_team_desc',array(
		'label'	=> __('Section Description','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_our_trainers_section',
		'setting'	=> 'advance_fitness_gym_pro_team_desc',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_loop',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_loop',
	   array(
	      'label' => esc_html__( 'Loop Sattings', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_our_trainers_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_title_color', array(
		'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_title_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_our_trainers_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_our_trainers_section',
	    'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_subtitle_color', array(
		'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_subtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_our_trainers_subtitle_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_our_trainers_section',
	    'label'    => __( 'Sub Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_box_title_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_box_title_color', array(
		'label' => __('Box Title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_box_title_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_box_title_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_our_trainers_box_title_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_our_trainers_section',
	    'label'    => __( 'Box Title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_box_subtitle_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_box_subtitle_color', array(
		'label' => __('Box Sub-title Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_box_subtitle_color',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_our_trainers_box_subtitle_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_our_trainers_box_subtitle_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_our_trainers_section',
	    'label'    => __( 'Box Sub-title Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_social_icons_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_social_icons_color', array(
		'label' => __('Social Icons Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_social_icons_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_trainers_socialicons_hover_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_trainers_socialicons_hover_color', array(
		'label' => __('Social Icons Hover Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_trainers_socialicons_hover_color',
	)));
	$wp_customize->add_setting( 'advance_fitness_gym_pro_trainers_socialicons_hover_background_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_trainers_socialicons_hover_background_color', array(
		'label' => __('Social Icons Hover Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_trainers_socialicons_hover_background_color',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_our_trainers_box_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_our_trainers_box_bgcolor', array(
		'label' => __('Box Background Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_our_trainers_section',
		'settings' => 'advance_fitness_gym_pro_our_trainers_box_bgcolor',
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_team_box_content_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_team_box_content_color', array(
		'label' => __('Content Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_team_sec',
		'settings' => 'advance_fitness_gym_pro_team_box_content_color',
	)));
	  /* Custom Footer */
    $wp_customize->add_section('advance_fitness_gym_pro_custom_footer_section',array(
        'title' => __('Get in Touch','advance-fitness-gym-pro'),
        'description'   => __('Edit Get in Touch section','advance-fitness-gym-pro'),
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_get_in_touch_enable', array(
	    'selector' => '.get_in_touch .section-heading',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_get_in_touch_enable',
  	));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_radio_get_in_touch_enable',
        array(
            'default' => 'Enable',
            'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
        )
    );
    $wp_customize->add_control('advance_fitness_gym_pro_radio_get_in_touch_enable',
        array(
            'type' => 'radio',
            'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
            'section' => 'advance_fitness_gym_pro_custom_footer_section',
            'choices' => array(
                'Enable' => __('Enable', 'advance-fitness-gym-pro'),
                'Disable' => __('Disable', 'advance-fitness-gym-pro')
            ),
        )
    );

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_custom_get_in_touch_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_custom_get_in_touch_bgcolor', array(
        'label' => __('Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'settings' => 'advance_fitness_gym_pro_custom_get_in_touch_bgcolor',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'advance_fitness_gym_pro_get_in_touch_bgimage',
            array(
                'label' => __('Background image','advance-fitness-gym-pro'),
                'section' => 'advance_fitness_gym_pro_custom_footer_section',
                'settings' => 'advance_fitness_gym_pro_get_in_touch_bgimage'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_get_in_touch_title',array(
        'label' => __('Section Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'setting'   => 'advance_fitness_gym_pro_get_in_touch_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_subtitle_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_subtitle_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_get_in_touch_subtitle',array(
        'label' => __('Section Sub-title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'setting'   => 'advance_fitness_gym_pro_get_in_touch_subtitle',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_shortcode_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_shortcode_settings',
	      array(
	      'label' => __('Section Shortcode Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_get_in_touch_shortcode',array(
        'label' => __('Get in Touch Form Shortcode','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'setting'   => 'advance_fitness_gym_pro_get_in_touch_shortcode',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_get_in_touch_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_custom_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_title_color', array(
        'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'settings' => 'advance_fitness_gym_pro_get_in_touch_title_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_get_in_touch_title_font_family', array(
        'section'  => 'advance_fitness_gym_pro_custom_footer_section',
        'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_subtitle_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_subtitle_color', array(
        'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'settings' => 'advance_fitness_gym_pro_get_in_touch_subtitle_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_subtitle_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_get_in_touch_subtitle_font_family', array(
        'section'  => 'advance_fitness_gym_pro_custom_footer_section',
        'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_submit_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_submit_color', array(
        'label' => __('Submit Text Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'settings' => 'advance_fitness_gym_pro_get_in_touch_submit_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_submit_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_get_in_touch_submit_font_family', array(
        'section'  => 'advance_fitness_gym_pro_custom_footer_section',
        'label'    => __( 'Section Text Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_get_in_touch_submit_background_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_get_in_touch_submit_background_color', array(
        'label' => __('Submit Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_custom_footer_section',
        'settings' => 'advance_fitness_gym_pro_get_in_touch_submit_background_color',
    )));

	/* ------------------------------Testimonial Section -----------------------------------*/
	$wp_customize->add_section('advance_fitness_gym_pro_testimonial',array(
			'title'	=> __('Testimonial','advance-fitness-gym-pro'),
			'description'	=> __('This section is only for Testimonial title and styling. <a href="','advance-fitness-gym-pro').esc_url(home_url()).__('/wp-admin/edit.php?post_type=testimonials" target="_blank">Click here</a> to add testimonials.','advance-fitness-gym-pro'),
			'priority'	=> null,
			'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_testimonial_enable', array(
	    'selector' => '#testimonials .container',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_testimonial_enable',
  	));

  	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_testimonial'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_radio_testimonial_enable',
	    array(
	        'default' => 'Enable',
	        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_radio_testimonial_enable',
    array(
        'type' => 'radio',
        'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_testimonial',
	        'choices' => array(
	            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
	            'Disable' => __('Disable', 'advance-fitness-gym-pro')
	    ),
    ));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonials_loop',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_testimonials_loop',
	   array(
	      'label' => esc_html__( 'Loop Sattings', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_testimonial'
	)));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_testimonial'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_bgcolor', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_bgcolor', array(
				'label' => __('Background Color', 'advance-fitness-gym-pro'),
				'description' => __('Either add background color or background image, if you add both background color will be top most priority', 'advance-fitness-gym-pro'),
				'section' => 'advance_fitness_gym_pro_testimonial',
				'settings' => 'advance_fitness_gym_pro_testimonial_bgcolor',
	)));
	$wp_customize->add_setting('advance_fitness_gym_pro_our_testimonial_bgimage',array(
			'default'	=>'',
			'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control(
	    new WP_Customize_Image_Control(
	        $wp_customize,
	        'advance_fitness_gym_pro_our_testimonial_bgimage',
	        array(
	            'label' => __('Background image','advance-fitness-gym-pro'),
	            'section' => 'advance_fitness_gym_pro_testimonial',
	            'settings' => 'advance_fitness_gym_pro_our_testimonial_bgimage'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_testimonial'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_testimonial_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_fitness_gym_pro_testimonial_title',array(
		'label'	=> __('Section Title','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_testimonial',
		'setting'	=> 'advance_fitness_gym_pro_testimonial_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_testimonial'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_testimonial_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_text_color', array(
        'label' => __('Testimonial Box Text Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_testimonial',
        'settings' => 'advance_fitness_gym_pro_testimonial_text_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_testimonial_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_testimonial_text_font_family', array(
        'section'  => 'advance_fitness_gym_pro_testimonial',
        'label'    => __( 'Testimonial Box Text Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_testimonial_name_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_name_color', array(
        'label' => __('Testimonial Name Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_testimonial',
        'settings' => 'advance_fitness_gym_pro_testimonial_name_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_testimonial_name_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_testimonial_name_font_family', array(
        'section'  => 'advance_fitness_gym_pro_testimonial',
        'label'    => __( 'Testimonial Name Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_testimonial_designation_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_testimonial_designation_color', array(
		'label' => __('Testimonial Designation Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_testimonial',
		'settings' => 'advance_fitness_gym_pro_testimonial_designation_color',
	)));
	
	$wp_customize->add_setting('advance_fitness_gym_pro_testimonial_designation_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_testimonial_designation_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_testimonial',
	    'label'    => __( 'Testimonial Designation Font Family','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	  /* Newsletter Section */
    $wp_customize->add_section('advance_fitness_gym_pro_newsletter_section',array(
        'title' => __('Newsletter','advance-fitness-gym-pro'),
        'description'   => __('Edit Newsletter section','advance-fitness-gym-pro'),
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_radio_newsletter_enable', array(
	    'selector' => '.newsletter .section-heading',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_radio_newsletter_enable',
  	));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_enable_disable_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_enable_disable_settings',
	      array(
	      'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_radio_newsletter_enable',
        array(
            'default' => 'Enable',
            'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
        )
    );
    $wp_customize->add_control('advance_fitness_gym_pro_radio_newsletter_enable',
        array(
            'type' => 'radio',
            'label' => __('Do you want this section', 'advance-fitness-gym-pro'),
            'section' => 'advance_fitness_gym_pro_newsletter_section',
            'choices' => array(
                'Enable' => __('Enable', 'advance-fitness-gym-pro'),
                'Disable' => __('Disable', 'advance-fitness-gym-pro')
            ),
        )
    );

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_background_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_background_settings',
	      array(
	      'label' => __('Section Background Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_bgcolor', array(
        'label' => __('Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_bgcolor',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'advance_fitness_gym_pro_newsletter_bgimage',
            array(
                'label' => __('Background image','advance-fitness-gym-pro'),
                'section' => 'advance_fitness_gym_pro_newsletter_section',
                'settings' => 'advance_fitness_gym_pro_newsletter_bgimage'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_title_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_title_settings',
	      array(
	      'label' => __('Section Title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_newsletter_title',array(
        'label' => __('Section Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'setting'   => 'advance_fitness_gym_pro_newsletter_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_subtitle_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_subtitle_settings',
	      array(
	      'label' => __('Section Sub-title Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_newsletter_subtitle',array(
        'label' => __('Section Sub-title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'setting'   => 'advance_fitness_gym_pro_newsletter_subtitle',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_subtitle_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_subtitle_settings',
	      array(
	      'label' => __('Section Shortcode Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_newsletter_shortcode',array(
        'label' => __('Get in Touch Form Shortcode','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'setting'   => 'advance_fitness_gym_pro_newsletter_shortcode',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_newsletter_color_fonts_settings',
	      array(
	      'default' => '',
	      'transport' => 'postMessage',
	      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_color_fonts_settings',
	      array(
	      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
	      'section' => 'advance_fitness_gym_pro_newsletter_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_title_color', array(
        'label' => __('Section Title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_title_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_newsletter_title_font_family', array(
        'section'  => 'advance_fitness_gym_pro_newsletter_section',
        'label'    => __( 'Section Title Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_title_bottom_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_title_bottom_border_color', array(
        'label' => __('Title Bottom Border Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_title_bottom_border_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subtitle_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_subtitle_color', array(
        'label' => __('Section Sub-title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_subtitle_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subtitle_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_newsletter_subtitle_font_family', array(
        'section'  => 'advance_fitness_gym_pro_newsletter_section',
        'label'    => __( 'Section-title Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subscribe_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_subscribe_color', array(
        'label' => __('Subscribe Text Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_subscribe_color',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subscribe_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_newsletter_subscribe_font_family', array(
        'section'  => 'advance_fitness_gym_pro_newsletter_section',
        'label'    => __( 'Subscribe Text Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_newsletter_subscribe_background_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_newsletter_subscribe_background_color', array(
        'label' => __('Subscribe Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_newsletter_section',
        'settings' => 'advance_fitness_gym_pro_newsletter_subscribe_background_color',
    )));

	/*Blog page category*/
	$wp_customize->add_section('advance_fitness_gym_pro_blog_category',array(
		'title'	=> __('Blog Page','advance-fitness-gym-pro'),
		'description'	=> __('select the category you wish to be get displayed on blog page .','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));
	$categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
	$wp_customize->add_setting('advance_fitness_gym_pro_category_setting',array(
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_category_setting',array(
		'type'    => 'select',
		'choices' => $cats,
		'label' => __('Blog page (select category to show selected post)','advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_blog_category',
	));	

	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_auther',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_auther',
	   array(
	      'label' => esc_html__( 'Author Name', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_comments',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_comments',
	   array(
	      'label' => esc_html__( 'Comment', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_date',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_date',
	   array(
	      'label' => esc_html__( 'Post Date', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));
	
	$wp_customize->add_setting( 'advance_fitness_gym_pro_toggle_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_toggle_sharing',
	   array(
	      'label' => esc_html__( 'Social Sharing', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_facebook_social_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_facebook_social_sharing',
	   array(
	      'label' => esc_html__( 'Facebook Social Sharing', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_linkedin_social_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_linkedin_social_sharing',
	   array(
	      'label' => esc_html__( 'Linkedin Social Sharing', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_googleplus_social_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_googleplus_social_sharing',
	   array(
	      'label' => esc_html__( 'Google Plus Social Sharing', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_twitter_social_sharing',
	   array(
	      'default' => 1,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_twitter_social_sharing',
	   array(
	      'label' => esc_html__( 'Twitter Social Sharing', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_blog_category'
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_blog_page_show_hide_sidebar_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_blog_page_show_hide_sidebar_settings',
      array(
      'label' => __('Show / Hide Sidebar Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_blog_category'
    )));

 	$wp_customize->add_setting('advance_fitness_gym_pro_blog_page_sidebar',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_blog_page_sidebar',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Sidebar','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_blog_category',
    ));
    
    $wp_customize->add_setting( 'advance_pet_care_pro_blog_page_categories_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_blog_page_categories_settings',
      array(
      'label' => __('Show / Hide Categories Name Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_blog_category'
    )));

 	$wp_customize->add_setting('advance_fitness_gym_pro_categories',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_categories',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Categories Name','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_blog_category',
    ));
?>