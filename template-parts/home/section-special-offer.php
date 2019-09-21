<?php 
$section_status = get_theme_mod( 'advance_fitness_gym_pro_radio_special_offer_enable' );
if ( 'Disable' == $section_status ) {
  return;
}
if( get_theme_mod('advance_fitness_gym_pro_special_offer_bgcolor') ) {
  $section_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_special_offer_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_special_offer_bgimage') ){
  $section_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_special_offer_bgimage')).'\')';
}else{
  $section_backg = '';
}     
?>
<section id="special_offer" style="<?php echo esc_attr($section_backg); ?>">
  <div class="container">
     <?php if(get_theme_mod('advance_fitness_gym_pro_special_offer_title',true)!= ''){?>
        <h1><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_special_offer_title')); ?></h1>
     <?php } ?>
     <?php if(get_theme_mod('advance_fitness_gym_pro_special_offer_subtitle',true)!= ''){?>
        <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_special_offer_subtitle')); ?></p>
     <?php } ?>
     <div class="special_offer_button">
        <a class="offer-read-more" href="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_special_offer_read_more_url',__("#",'advance-fitness-gym-pro'))); ?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_special_offer_read_more'))?></a>
     </div>
  </div>
</section>