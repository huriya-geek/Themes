<?php
if ( get_theme_mod( 'advance_fitness_gym_pro_footer_copy_bgcolor' ) ) {
	$about_backg = 'background-color:' . esc_attr( get_theme_mod( 'advance_fitness_gym_pro_footer_copy_bgcolor' ) ) . ';';
} elseif ( get_theme_mod( 'advance_fitness_gym_pro_footer_copy_bgimage' ) ) {
	$about_backg = 'background-image:url(\'' . esc_url( get_theme_mod( 'advance_fitness_gym_pro_footer_copy_bgimage' ) ) . '\')';
} else {
	$about_backg = '';
}
?>
<div class="copyright" style="<?php echo esc_attr($about_backg); ?>">
	<div class="container">
		<div class="row main_sociobox">
			<div class="col-sm-12">
				<p><?php echo esc_html( get_theme_mod( 'advance_fitness_gym_pro_footer_copy' ) ); ?><span class="credit_link"><?php echo esc_html( advance_fitness_gym_pro_credit_link() ); ?></span></p>
			</div>
		</div>
	</div>
</div>