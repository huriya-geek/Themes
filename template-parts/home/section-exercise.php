<?php
/**
 * Template to show the content of our record section 
 *
 * @package advance_fitness_gym_pro
 */

$about_section = get_theme_mod( 'advance_fitness_gym_pro_radio_exercise_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('advance_fitness_gym_pro_exercise_bgcolor','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_exercise_bgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_exercise_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_exercise_bgimage')).'\')';
}else{
  $about_backg = '';
}
$exercise_loop="true";
if(get_theme_mod('advance_fitness_gym_pro_exercise_loop',true)=='1')
{
$exercise_loop="true";
}else{
$exercise_loop="false";
}          
?>
<section id="exercise" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="exercise_outer ml-0 mr-0 p-0">
	 <div class="owl-carousel">	
      <?php $countchoose =  get_theme_mod('advance_fitness_gym_pro_exercise_number'); 
      for($i=1; $i<=$countchoose; $i++) { ?>
        <div class="text-center exercise_box">
          <?php if(get_theme_mod('advance_fitness_gym_pro_exercise_sec_icon'.$i) != ''){?>
            <div class="icon_features"><i class="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_exercise_sec_icon'.$i)); ?> fa-3x"></i></div>
          <?php } else {?>
            <img class="exercise-images" src="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_exercise_icon_image'.$i,get_template_directory_uri().'/assets/images/exercise-images/icon'.$i.'.png')); ?>" alt="Image"/>
          <?php } ?>
          <div class="exercise-title">
            <?php if(get_theme_mod('advance_fitness_gym_pro_exercise_title'.$i) != ''){?>
              <a class="features_head text-uppercase font-weight-bold" href="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_exercise_title_url'))?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_exercise_title'.$i)); ?></a>
            <?php } ?>
          </div>
          <?php if(get_theme_mod('advance_fitness_gym_pro_exercise_sec_details'.$i) != ''){?>
            <p class="record_details"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_exercise_sec_details'.$i)); ?></p>
          <?php }?>
        </div>
      <?php } ?>
	  </div>	
    </div>
  </div>
  <div class="clearfix"></div>
  <span id="exercise-loop"><?php echo esc_html($exercise_loop); ?></span>
</section>