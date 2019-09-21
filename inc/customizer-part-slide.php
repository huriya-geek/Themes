<?php
	$wp_customize->add_section('advance_fitness_gym_pro_slider_section',array(
		'title'	=> __('Slider Settings','advance-fitness-gym-pro'),
		'description'	=> __('Add slider images here.','advance-fitness-gym-pro'),
		'priority'	=> null,
		'panel' => 'advance_fitness_gym_pro_panel_id',
	));

	$wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_slider_enabledisable', array(
	    'selector' => '#slider .slider-box',
	    'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_slider_enabledisable',
  	));

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_enable_disable_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_enable_disable_settings',
      array(
      'label' => __('Slider Enable/Disable Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_slider_enabledisable',array(
        'default'=> 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
	$wp_customize->add_control('advance_fitness_gym_pro_slider_enabledisable', array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'advance_fitness_gym_pro_slider_section',
        'choices' => array(
            'Enable' => 'Enable',
            'Disable' => 'Disable'
        ),
    ));

    $wp_customize->add_setting( 'advance_pet_care_pro_slider_number_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_number_settings',
      array(
      'label' => __('Slider Number Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	$wp_customize->add_setting('advance_fitness_gym_pro_slide_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_slide_number',array(
		'label'	=> __('Number of slides to show','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_slider_section',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_contents_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_contents_settings',
      array(
      'label' => __('Slider Contents Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	$count =  get_theme_mod('advance_fitness_gym_pro_slide_number');
		
	for($i=1, $j=1; $i<=$count; $i++, $j++) {
		if($j>=5){ $j=1; }
		$wp_customize->add_setting('advance_fitness_gym_pro_slide_image'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'esc_url_raw',
		));
		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'advance_fitness_gym_pro_slide_image'.$i,
	        array(
	            'label' => __('Slider Image ','advance-fitness-gym-pro').$i.__(' (1600x562)','advance-fitness-gym-pro'),
	            'section' => 'advance_fitness_gym_pro_slider_section',
	            'settings' => 'advance_fitness_gym_pro_slide_image'.$i
		)));
		$wp_customize->add_setting('advance_fitness_gym_pro_slide_heading'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_slide_heading'.$i,array(
			'label' => __('Slide Title','advance-fitness-gym-pro').$i,
			'section' => 'advance_fitness_gym_pro_slider_section',
			'setting'	=> 'advance_fitness_gym_pro_slide_heading'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_slide_heading_first'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_slide_heading_first'.$i,array(
			'label' => __('Slide Sub-title','advance-fitness-gym-pro').$i,
			'section' => 'advance_fitness_gym_pro_slider_section',
			'setting'	=> 'advance_fitness_gym_pro_slide_heading_first'.$i,
			'type'	=> 'text'
		));
		$wp_customize->add_setting('advance_fitness_gym_pro_slide_text'.$i,array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_textarea_field',
		));
		$wp_customize->add_control('advance_fitness_gym_pro_slide_text'.$i,array(
			'label' => __('Slide Text','advance-fitness-gym-pro').$i,
			'section' => 'advance_fitness_gym_pro_slider_section',
			'setting'	=> 'advance_fitness_gym_pro_slide_text'.$i,
			'type'	=> 'textarea'
		));
	}

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_delay_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_delay_settings',
      array(
      'label' => __('Slide Delay Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	// Other Settings
	$wp_customize->add_setting('advance_fitness_gym_pro_slide_delay',array(
		'default'	=> '1000',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_fitness_gym_pro_slide_delay',array(
		'label'	=> __('Slide Delay','advance-fitness-gym-pro'),
		'section'	=> 'advance_fitness_gym_pro_slider_section',
		'description' => __('interval is in milliseconds. 1000 = 1 second -> so 1000 * 10 = 10 seconds', 'advance-fitness-gym-pro'),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_remove_fade_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_remove_fade_settings',
      array(
      'label' => __('Slide Remove Fade Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_slide_remove_fade',
	   array(
	      'default' => 0,
	      'transport' => 'refresh',
	      'sanitize_callback' => 'themeshopyfitness_switch_sanitization'
	));	 
	$wp_customize->add_control( new vwstartup_Toggle_Switch_Custom_control( $wp_customize, 'advance_fitness_gym_pro_slide_remove_fade',
	   array(
	      'label' => esc_html__( 'Remove Fade Slider', 'advance-fitness-gym-pro' ),
	      'section' => 'advance_fitness_gym_pro_slider_section'
	)));

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_section_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_section_color_fonts_settings',
      array(
      'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

	$wp_customize->add_setting( 'advance_fitness_gym_pro_slidermainHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_slidermainHeading_color', array(
		'label' => __('Slider Top Heading Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_slider_section',
		'settings' => 'advance_fitness_gym_pro_slidermainHeading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('advance_fitness_gym_pro_slidermainHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_slidermainHeading_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_slider_section',
	    'label'    => __( 'Slider Top Heading Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is Slider Heading Color picker setting
	$wp_customize->add_setting( 'advance_fitness_gym_pro_sliderHeading_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_sliderHeading_color', array(
		'label' => __('Slider Heading Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_slider_section',
		'settings' => 'advance_fitness_gym_pro_sliderHeading_color',
	)));
	//This is Slider Heading FontFamily picker setting
	$wp_customize->add_setting('advance_fitness_gym_pro_sliderHeading_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_sliderHeading_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_slider_section',
	    'label'    => __( 'Slider Heading Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));
	// This is Slider Text Color picker setting
	$wp_customize->add_setting( 'advance_fitness_gym_pro_slidertext_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_slidertext_color', array(
		'label' => __('Slider Text Color', 'advance-fitness-gym-pro'),
		'section' => 'advance_fitness_gym_pro_slider_section',
		'settings' => 'advance_fitness_gym_pro_slidertext_color',
	)));
	//This is Slider Text FontFamily picker setting
	$wp_customize->add_setting('advance_fitness_gym_pro_slidertext_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_fitness_gym_pro_slidertext_font_family', array(
	    'section'  => 'advance_fitness_gym_pro_slider_section',
	    'label'    => __( 'Slider Text Fonts','advance-fitness-gym-pro'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting( 'advance_pet_care_pro_slider_show_hide_next_previous_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_pet_care_pro_slider_show_hide_next_previous_settings',
      array(
      'label' => __('Show / Hide Next & Previous Arrows Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_slider_section'
    )));

 	$wp_customize->add_setting('advance_fitness_gym_pro_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_slider_arrows',array(
        'type' => 'checkbox',
        'label' => __('Show / Hide Next & Previous Arrows','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_slider_section',
    ));
?>