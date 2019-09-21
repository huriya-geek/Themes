<?php
    /* Footer Sections */
    $wp_customize->add_section('advance_fitness_gym_pro_social_icons',array(
        'title' => __('Social Icons','advance-fitness-gym-pro'),
        'description'   => __('Add social Icons details Here','advance-fitness-gym-pro'),
        'panel' => 'advance_fitness_gym_pro_panel_id',
    ));

    $wp_customize->add_setting('advance_fitness_gym_pro_headertwitter',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headertwitter',array(
        'label' => __('Add twitter link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headertwitter',
        'type'      => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headerpinterest',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headerpinterest',array(
        'label' => __('Add pinterest link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headerpinterest',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headerfacebook',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headerfacebook',array(
        'label' => __('Add facebook link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headerfacebook',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headeryoutube',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headeryoutube',array(
        'label' => __('Add Youtube link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headeryoutube',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headerinstagram',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headerinstagram',array(
        'label' => __('Add Instagram link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headerinstagram',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headerlinkedin',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headerlinkedin',array(
        'label' => __('Add Linkedin link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headerlinkedin',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headertumblric',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headertumblric',array(
        'label' => __('Add Tumblr link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headertumblric',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headergoogleplus',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headergoogleplus',array(
        'label' => __('Add GooglePlus link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headergoogleplus',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headerflickr',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headerflickr',array(
        'label' => __('Add Flickr link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headerflickr',
        'type'  => 'text'
    ));
    $wp_customize->add_setting('advance_fitness_gym_pro_headervk',array(
        'default'   => '',
        'sanitize_callback' => 'esc_url_raw'
    ));
    
    $wp_customize->add_control('advance_fitness_gym_pro_headervk',array(
        'label' => __('Add VK link','advance-fitness-gym-pro'),
        'section'   => 'advance_fitness_gym_pro_social_icons',
        'setting'   => 'advance_fitness_gym_pro_headervk',
        'type'  => 'text'
    ));
   
?>