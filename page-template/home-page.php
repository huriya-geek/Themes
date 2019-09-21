<?php
/**
 * Template Name: Home Page
 */
get_header();

get_template_part( 'template-parts/home/slider' );
do_action( 'advance_fitness_gym_pro_after_slider' );
	
	$section_order ='';

	$section_order = explode( ',', get_theme_mod( 'advance_fitness_gym_pro_section_ordering_settings_repeater') );
	
    foreach( $section_order as $key => $value ){
	   if($value !=''){ 

	   	get_template_part( 'template-parts/home/section', $value );

        }
    } 

get_footer(); ?>