<?php
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function advance_fitness_gym_pro_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Advance Fitness Gym Pro Posttype', 'advance-fitness-gym-pro' ),
			'slug'             => 'advance-fitness-gym-pro-posttype',
			'source'           => get_template_directory() . '/inc/plugins/advance-fitness-gym-pro-posttype',
			'required'         => true,
			'force_activation' => true,
		)	
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'advance_fitness_gym_pro_register_recommended_plugins' );