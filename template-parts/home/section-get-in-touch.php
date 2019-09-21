<?php 
$section_disable = get_theme_mod( 'advance_fitness_gym_pro_radio_get_in_touch_enable' );
if ( 'Disable' == $section_disable ) {
  return;
}

if( get_theme_mod('advance_fitness_gym_pro_custom_get_in_touch_bgcolor') ) { 
  $section_bg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_custom_get_in_touch_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_get_in_touch_bgimage') ){
  $section_bg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_get_in_touch_bgimage')).'\')';
}else{
  $section_bg = '';   
}
?>
<section class="get_in_touch" style="<?php echo esc_attr($section_bg); ?>">
	<?php if(get_theme_mod('advance_fitness_gym_pro_get_in_touch_title') != ''){?>
		<div class="footer_form container">
	      <div class="section-heading">
	        <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_get_in_touch_title')); ?></h3>
	      </div>
	      <?php if(get_theme_mod('advance_fitness_gym_pro_get_in_touch_subtitle') != ''){?>
	      <div class="section-subtitle">
	      	<p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_get_in_touch_subtitle'))?></p>
	      </div>
	      <?php } ?>
	    </div>
	<?php } ?>
	<?php if ( get_theme_mod('advance_fitness_gym_pro_get_in_touch_shortcode',true) != false ){ ?>
	<div class="form_outer">
		<div class="footer_form container">		    
			<?php echo do_shortcode(get_theme_mod('advance_fitness_gym_pro_get_in_touch_shortcode')); ?>
		</div>
	</div>
	<?php } ?>
</section>	