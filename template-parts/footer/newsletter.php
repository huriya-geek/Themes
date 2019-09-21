<?php 
$section_disable = get_theme_mod( 'advance_fitness_gym_pro_radio_newsletter_enable' );
if ( 'Disable' == $section_disable ) {
  return;
}

if( get_theme_mod('advance_fitness_gym_pro_newsletter_bgcolor') ) { 
  $section_bg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_newsletter_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_newsletter_bgimage') ){
  $section_bg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_newsletter_bgimage')).'\')';
}else{
  $section_bg = '';   
}
?>
<section class="newsletter" style="<?php echo esc_attr($section_bg); ?>">
	<?php if(get_theme_mod('advance_fitness_gym_pro_newsletter_title') != ''){?>
		<div class="footer_form container">
	      <div class="section-heading">
	        <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_newsletter_title')); ?></h3>
	      </div>
	      <?php if(get_theme_mod('advance_fitness_gym_pro_newsletter_subtitle') != ''){?>
	      <div class="section-subtitle">
	      	<p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_newsletter_subtitle'))?></p>
	      </div>
	      <?php } ?>
	    </div>
	<?php } ?>
	<?php if ( get_theme_mod('advance_fitness_gym_pro_newsletter_shortcode',true) != false ){ ?>
		<div class="form_outer">
			<div class="footer_form container">		    
				<?php echo do_shortcode(get_theme_mod('advance_fitness_gym_pro_newsletter_shortcode')); ?>
			</div>
		</div>
	<?php } ?>
</section>	