<?php

  //Section Re-ordering
  $wp_customize->add_section('advance_fitness_gym_pro_section_ordering_settings',array(
      'title' => __('Section Ordering','advance-fitness-gym-pro'),
      'description'=> __('Section Ordering.','advance-fitness-gym-pro'),
      'panel' => 'advance_fitness_gym_pro_panel_id',
  ));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_section_ordering_settings_repeater',
      array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
      )
  );
  $wp_customize->add_control( new advance_fitness_gym_pro_Repeater_Custom_Control( $wp_customize, 'advance_fitness_gym_pro_section_ordering_settings_repeater',
      array(
        'label' => __( 'Section Reordering','advance-fitness-gym-pro' ),
        'section' => 'advance_fitness_gym_pro_section_ordering_settings',
        'button_labels' => array(
          'add' => __( 'Add Row','advance-fitness-gym-pro' ), 
        )
      )
   ) );
  //General Color Pallete
  $wp_customize->add_section('advance_fitness_gym_pro_color_pallette',array(
      'title' => __('Typography / General settings','advance-fitness-gym-pro'),
      'description'=> __('Typography settings','advance-fitness-gym-pro'),
      'panel' => 'advance_fitness_gym_pro_panel_id',
  ));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_radio_boxed_full_layout_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_radio_boxed_full_layout_settings',
      array(
      'label' => __('Section Boxed or Full Width Layout Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));


  $wp_customize->add_setting('advance_fitness_gym_pro_radio_boxed_full_layout',
      array(
        'default' => 'full-Width',
        'sanitize_callback' => 'advance_fitness_gym_pro_sanitize_choices'
  ));
  $wp_customize->add_control('advance_fitness_gym_pro_radio_boxed_full_layout',
      array(
        'type' => 'radio',
        'label' => __('Choose Boxed or Full Width Layout', 'advance-fitness-gym-pro'),
        'section' => 'advance_fitness_gym_pro_color_pallette',
        'choices' => array(
        'full-Width' => __('Full Width', 'advance-fitness-gym-pro'),
        'boxed' => __('Boxed', 'advance-fitness-gym-pro')
      ),
  ));

  $wp_customize->add_setting('advance_fitness_gym_pro_radio_boxed_full_layout_value',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_radio_boxed_full_layout_value',array(
      'label' => __('Add Boxed layout Width Here','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_radio_boxed_full_layout_value',
      'type'    => 'text'
    )
  );

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_body_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_body_color_fonts_settings',
      array(
      'label' => __('Body Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  //This is Button Text FontFamily picker setting
  $wp_customize->add_setting('advance_fitness_gym_pro_body_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_body_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'Body Font family','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_body_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_body_font_size',array(
      'label' => __('Font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_body_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_body_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_body_color', array(
    'label' => __('Body color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_body_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h1_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h1_color_fonts_settings',
      array(
      'label' => __('H1 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h1_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h1_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H1','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h1_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h1_font_size',array(
      'label' => __('H1 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h1_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h1_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h1_color', array(
    'label' => __('H1 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h1_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h2_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h2_color_fonts_settings',
      array(
      'label' => __('H2 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h2_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h2_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H2','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h2_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h2_font_size',array(
      'label' => __('H2 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h2_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h2_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h2_color', array(
    'label' => __('H2 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h2_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h3_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h3_color_fonts_settings',
      array(
      'label' => __('H3 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_h3_font_family',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_h3_font_family',
      array(
      'label' => __('H3 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h3_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h3_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H3','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h3_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h3_font_size',array(
      'label' => __('H3 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h3_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h3_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h3_color', array(
    'label' => __('H3 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h3_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h4_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h4_color_fonts_settings',
      array(
      'label' => __('H4 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_h4_font_family',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_h4_font_family',
      array(
      'label' => __('H4 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h4_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h4_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H4','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h4_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h4_font_size',array(
      'label' => __('H4 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h4_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h4_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h4_color', array(
    'label' => __('H4 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h4_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h5_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h5_color_fonts_settings',
      array(
      'label' => __('H5 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_h5_font_family',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_h5_font_family',
      array(
      'label' => __('H5 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h5_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h5_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H5','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h5_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h5_font_size',array(
      'label' => __('H5 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h5_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h5_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h5_color', array(
    'label' => __('H5 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h5_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_h6_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_h6_color_fonts_settings',
      array(
      'label' => __('H6 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_h6_font_family',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_h6_font_family',
      array(
      'label' => __('H6 Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting('advance_fitness_gym_pro_h6_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_h6_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'H6','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_h6_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_h6_font_size',array(
      'label' => __('H6 font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_h6_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_h6_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_h6_color', array(
    'label' => __('H6 color', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_h6_color',
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_para_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_para_color_fonts_settings',
      array(
      'label' => __('Paragraph Color Fonts Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  //paragarph font family
  $wp_customize->add_setting('advance_fitness_gym_pro_paragarpah_font_family',array(
    'default' => '',
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(
      'advance_fitness_gym_pro_paragarpah_font_family', array(
      'section'  => 'advance_fitness_gym_pro_color_pallette',
      'label'    => __( 'Paragraph','advance-fitness-gym-pro'),
      'type'     => 'select',
      'choices'  => $font_array,
  ));
  $wp_customize->add_setting('advance_fitness_gym_pro_para_font_size',array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field'
    )
  );
  $wp_customize->add_control('advance_fitness_gym_pro_para_font_size',array(
      'label' => __('Paragraph font size in px','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'setting' => 'advance_fitness_gym_pro_para_font_size',
      'type'    => 'text'
    )
  );
  $wp_customize->add_setting( 'advance_fitness_gym_pro_para_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_para_color', array(
      'label' => __('Para color', 'advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette',
      'settings' => 'advance_fitness_gym_pro_para_color',
    )
  ));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_color_pallette_highlight_color_fonts_settings',
      array(
      'default' => '',
      'transport' => 'postMessage',
      'sanitize_callback' => 'advance_fitness_gym_pro_text_sanitization'
    ));
  $wp_customize->add_control( new Themeshopy_Themes_Seperator_custom_Control( $wp_customize, 'advance_fitness_gym_pro_color_pallette_highlight_color_fonts_settings',
      array(
      'label' => __('Highlight Color Settings','advance-fitness-gym-pro'),
      'section' => 'advance_fitness_gym_pro_color_pallette'
  )));

  $wp_customize->add_setting( 'advance_fitness_gym_pro_hi_first_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
  ));
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_fitness_gym_pro_hi_first_color', array(
    'label' => __('Highlight Color  (It will change it globally)', 'advance-fitness-gym-pro'),
    'section' => 'advance_fitness_gym_pro_color_pallette',
    'settings' => 'advance_fitness_gym_pro_hi_first_color',
  )));

?>