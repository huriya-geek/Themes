<?php
    /* Footer Sections */
    $wp_customize->add_section('advance_fitness_gym_pro_footer_widget_section',array(
        'title' => __('Footer Widgets','advance-fitness-gym-pro'),
        'description'   => __('Edit footer Widgets sections','advance-fitness-gym-pro'),
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_footer_widgets_enable', array(
        'selector' => '#footer #footer_box .container',
        'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_footer_widgets_enable',
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_widgets_enable_disable_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widgets_enable_disable_settings',
          array(
          'label' => __('Section Enable/Disable Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_widget_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widgets_enable',
    array(
        'default' => 'Enable',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_footer_widgets_enable',
    array(
        'type' => 'radio',
        'label' => 'Do you want this section',
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'choices' => array(
            'Enable' => __('Enable', 'advance-fitness-gym-pro'),
            'Disable' => __('Disable', 'advance-fitness-gym-pro')
        ),
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_widgets_background_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widgets_background_settings',
          array(
          'label' => __('Section Background Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_widget_section'
    )));

    // add color picker setting
    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_widget_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_bgcolor', array(
        'label' => __('Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_bgcolor',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'advance_fitness_gym_pro_footer_widget_bgimage',
            array(
                'label' => __('Background image','advance-fitness-gym-pro'),
                'section' => 'advance_fitness_gym_pro_footer_widget_section',
                'settings' => 'advance_fitness_gym_pro_footer_widget_bgimage'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_widgets_color_fonts_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widgets_color_fonts_settings',
          array(
          'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_widget_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_heading_color', array(
        'label' => __('Footer Heading Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_heading_color',
    )));
    
    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_footer_widget_heading_font_family', array(
        'section'  => 'advance_fitness_gym_pro_footer_widget_section',
        'label'    => __( 'Footer Heading Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_bottom_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_bottom_border_color', array(
        'label' => __('Footer Bottom Border Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_bottom_border_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_content_color', array(
        'label' => __('Footer Content Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_content_color',
    )));
    
    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_footer_widget_content_font_family', array(
        'section'  => 'advance_fitness_gym_pro_footer_widget_section',
        'label'    => __( 'Footer Content Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_social_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_social_icon_color', array(
        'label' => __('Footer Social Icon Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_social_icon_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_social_icon_border_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_social_icon_border_color', array(
        'label' => __('Footer Social Icon Border Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_social_icon_border_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_widget_contact_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_widget_contact_icon_color', array(
        'label' => __('Footer Contact Icon Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_widget_section',
        'settings' => 'advance_fitness_gym_pro_footer_widget_contact_icon_color',
    )));

    // Footer Copyright
    $wp_customize->add_section('advance_fitness_gym_pro_footer_section',array(
        'title' => __('Footer Text','advance-fitness-gym-pro'),
        'description'   => __('Add some text for footer like copyright etc.','advance-fitness-gym-pro'),
        'priority'  => null,
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->selective_refresh->add_partial( 'advance_fitness_gym_pro_footer_copy', array(
        'selector' => '.copyright .container',
        'render_callback' => 'advance_fitness_gym_pro_customize_partial_advance_fitness_gym_pro_footer_copy',
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_copyright_text_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copyright_text_settings',
          array(
          'label' => __('Copyright Text Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_copy',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_footer_copy',array(
        'label' => __('Copyright Text','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_footer_section',
        'type'      => 'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_copyright_background_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copyright_background_settings',
          array(
          'label' => __('Section Background Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_section'
    )));

     // add color picker setting
    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_copy_bgcolor', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copy_bgcolor', array(
        'label' => __('Background Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_section',
        'settings' => 'advance_fitness_gym_pro_footer_copy_bgcolor',
    )));
    $wp_customize->add_setting('advance_fitness_gym_pro_footer_copy_bgimage',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'advance_fitness_gym_pro_footer_copy_bgimage',
            array(
                'label' => __('Background image','advance-fitness-gym-pro'),
                'section' => 'advance_fitness_gym_pro_footer_section',
                'settings' => 'advance_fitness_gym_pro_footer_copy_bgimage'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_copyright_color_fonts_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copyright_color_fonts_settings',
          array(
          'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_footer_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_footer_copy_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copy_content_color', array(
        'label' => __('Footer Content Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_section',
        'settings' => 'advance_fitness_gym_pro_footer_copy_content_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_copy_content_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_footer_copy_content_font_family', array(
        'section'  => 'advance_fitness_gym_pro_footer_section',
        'label'    => __( 'Content Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_copy_themeshopy_text_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_footer_copy_themeshopy_text_color', array(
        'label' => __('Themeshopy Text Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_footer_section',
        'settings' => 'advance_fitness_gym_pro_footer_copy_themeshopy_text_color',
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_footer_copy_themeshopy_text_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_footer_copy_themeshopy_text_font_family', array(
        'section'  => 'advance_fitness_gym_pro_footer_section',
        'label'    => __( 'Themeshopy Text Font Family','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));


    //Contact Page section
    $wp_customize->add_section('advance_fitness_gym_pro_contact_page_section',array(
        'title' => __('Contact','advance-fitness-gym-pro'),
        'description'   => __('Add contact page settings here).','advance-fitness-gym-pro'),
        'priority'  => null,
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_longitude_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_longitude_settings',
          array(
          'label' => __('Map Longitude Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_address_longitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_address_longitude',array(
        'label' => __('Longitude','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_address_longitude',
        'type'=>'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_latitude_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_latitude_settings',
          array(
          'label' => __('Map Latitude Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_address_latitude',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_address_latitude',array(
        'label' => __('Latitude','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_address_latitude',
        'type'=>'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_email_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_email_settings',
          array(
          'label' => __('Email Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_email_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_email_title',array(
        'label' => __('Email Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_email_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_email',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_email',array(
        'label' => __('Email ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_email',
        'type'  => 'text'
    ));
    
    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_address_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_address_settings',
          array(
          'label' => __('Address Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_address_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_address_title',array(
        'label' => __('Address','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_address_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_address',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_address',array(
        'label' => __('Address ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_address',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_phone_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_phone_settings',
          array(
          'label' => __('Phone Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_phone_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_phone_title',array(
        'label' => __('Phone Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_phone_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_phone',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_phone',array(
        'label' => __('Phone ','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_phone',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_working_hours_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_working_hours_settings',
          array(
          'label' => __('Working Hours Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_working_hours_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_working_hours_title',array(
        'label' => __('Working Hours','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_working_hours_title',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_working_hours',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_working_hours',array(
        'label' => __('Add Working Hours','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_working_hours',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_form_description_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_form_description_settings',
          array(
          'label' => __('Form Description Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_form_desc',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_form_desc',array(
        'label' => __('Add Additional Information','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_form_desc',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_form_title_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_form_title_settings',
          array(
          'label' => __('Form Title Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_form_title',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_form_title',array(
        'label' => __('Add Form Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_form_title',
        'type'  => 'text'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_form_subtitle_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_form_subtitle_settings',
          array(
          'label' => __('Form Sub-title Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting('advance_fitness_gym_pro_contactpage_form_subtitle',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_contactpage_form_subtitle',array(
        'label' => __('Add Form Sub Title','advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'setting'   => 'advance_fitness_gym_pro_contactpage_form_subtitle',
        'type'  => 'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_color_fonts_settings',
          array(
          'default' => '',
          'transport' => 'postMessage',
          'sanitize_callback' => 'advance_pet_care_pro_text_sanitization'
    ));
    $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_color_fonts_settings',
          array(
          'label' => __('Section Color Fonts Settings','advance-fitness-gym-pro'),
          'section' => 'advance_fitness_gym_pro_contact_page_section'
    )));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_heading_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_heading_color', array(
        'label' => __('Contact Heading Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'settings' => 'advance_fitness_gym_pro_contact_page_heading_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('advance_fitness_gym_pro_contact_page_heading_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_contact_page_heading_font_family', array(
        'section'  => 'advance_fitness_gym_pro_contact_page_section',
        'label'    => __( 'Contact Heading Fonts','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_content_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_content_color', array(
        'label' => __('Contact Content Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'settings' => 'advance_fitness_gym_pro_contact_page_content_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('advance_fitness_gym_pro_contact_page_contact_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_contact_page_contact_font_family', array(
        'section'  => 'advance_fitness_gym_pro_contact_page_section',
        'label'    => __( 'Contact Content Fonts','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_icon_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_icon_color', array(
        'label' => __('Icon Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'settings' => 'advance_fitness_gym_pro_contact_page_icon_color',
    )));

    //Shortcode Section
    $wp_customize->add_section('advance_fitness_gym_pro_shortcode_section',array(
        'title' => __('Shortcode Settings','advance-fitness-gym-pro'),
        'description'   => __('Use below shortcode here.','advance-fitness-gym-pro'),
        'priority'  => null,
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));
   $wp_customize->add_setting('advance_fitness_gym_pro_shortcode',array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_shortcode',array(
        'section' => 'advance_fitness_gym_pro_shortcode_section',
        'setting'   => 'advance_fitness_gym_pro_shortcode',
        'type'=>'textarea'
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_form_title_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_form_title_color', array(
        'label' => __('Contact Form Title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'settings' => 'advance_fitness_gym_pro_contact_page_form_title_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('advance_fitness_gym_pro_contact_page_form_title_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_contact_page_form_title_font_family', array(
        'section'  => 'advance_fitness_gym_pro_contact_page_section',
        'label'    => __( 'Contact Form Title Fonts','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));

    $wp_customize->add_setting( 'advance_fitness_gym_pro_contact_page_form_subtitle_color', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_contact_page_form_subtitle_color', array(
        'label' => __('Contact Form Sub-title Color', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_contact_page_section',
        'settings' => 'advance_fitness_gym_pro_contact_page_form_subtitle_color',
    )));
    //This is Section Heading FontFamily picker setting
    $wp_customize->add_setting('advance_fitness_gym_pro_contact_page_form_subtitle_font_family',array(
      'default' => '',
      'capability' => 'edit_theme_options',
      'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
    ));
    $wp_customize->add_control(
        'advance_fitness_gym_pro_contact_page_form_subtitle_font_family', array(
        'section'  => 'advance_fitness_gym_pro_contact_page_section',
        'label'    => __( 'Contact Form Sub-title Fonts','advance-fitness-gym-pro'),
        'type'     => 'select',
        'choices'  => $font_array,
    ));
?>