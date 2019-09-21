<?php
/* Single Testimonial Post Type */
function advance_fitness_gym_pro_single_testimonials($single_template) {
	global $post;
	if ($post->post_type == 'testimonials') {
		$single_template = dirname( __FILE__ ) . '/single-testimonial.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'advance_fitness_gym_pro_single_testimonials' );

/* Single Team Post Type */
function advance_fitness_gym_pro_single_team($single_template) {
	global $post;
	if ($post->post_type == 'team') {
		$single_template = dirname( __FILE__ ) . '/single-team.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'advance_fitness_gym_pro_single_team' );

/* Single Portfolio Post Type */
function advance_fitness_gym_pro_single_work($single_template) {
	global $post;
	if ($post->post_type == 'work') {
		$single_template = dirname( __FILE__ ) . '/single-work.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'advance_fitness_gym_pro_single_work' );

/* Single Services Post Type */
function advance_fitness_gym_pro_single_service($single_template) {
	global $post;
	if ($post->post_type == 'services') {
		$single_template = dirname( __FILE__ ) . '/single-service.php';
	}
	return $single_template;
}
add_filter( 'single_template', 'advance_fitness_gym_pro_single_service' );