<?php 
$about_section = get_theme_mod( 'advance_fitness_gym_pro_services_section_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
if( get_theme_mod('advance_fitness_gym_pro_services_bgcolor') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_services_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_services_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_services_bgimage')).'\')';
}else{
  $about_backg = '';
}
$services_loop="true";
if(get_theme_mod('advance_fitness_gym_pro_services_loop',true)=='1')
{
$services_loop="true";
}else{
$services_loop="false";
}          
?>
 <section id="services" style="<?php echo esc_attr($about_backg); ?>">
    <div class="container">
      <div class="section-title">
        <?php if(get_theme_mod('advance_fitness_gym_pro_services_main_title',true)!= ''){?>
            <h2><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_main_title')); ?></h2>
        <?php } ?>
        <?php if(get_theme_mod('advance_fitness_gym_pro_services_sub_title',true) != ''){?>
            <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_sub_title')); ?></p>
        <?php } ?>
      </div>
      <div class="services_outer ml-0 mr-0 p-0">
        <div class="owl-carousel">
          <?php $countchoose = get_theme_mod('advance_fitness_gym_pro_services_number',4);
          for($i=1; $i<=$countchoose; $i++) {?>
          <div class="services-main-box">
            <div class="text-center services_box">
               <?php if(get_theme_mod('advance_fitness_gym_pro_services_icon_image'.$i,true) != ''){?>
                <a class="services_icon_image"><img class="services-images" src="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_services_icon_image'.$i,get_template_directory_uri().'assets/images/services/icon'.$i.'.png'));?>" alt="Image" /></a>
               <?php } else if(get_theme_mod('advance_fitness_gym_pro_services_icon'.$i,true) != '') {?>
               <a class="services_icon_image"><i class="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_icon'.$i)); ?> fa-3x"></i></a>
               <?php } if(get_theme_mod('advance_fitness_gym_pro_services_title'.$i,true) != ''){?>
                  <h3 class="features_head text-uppercase font-weight-bold"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_title'.$i)); ?></h3>
               <?php } if(get_theme_mod('advance_fitness_gym_pro_services_title_second'.$i,true) != ''){?>
                  <h6 class="features_head"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_title_second'.$i)); ?></h6>
               <?php } if(get_theme_mod('advance_fitness_gym_pro_services_content'.$i,true) != ''){?>
                  <p class="features_head"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_content'.$i)); ?></p>
               <?php } if(get_theme_mod('advance_fitness_gym_pro_services_read_more'.$i,true) != ''){?>
                <div class="services_button_outer">
                  <div class="services-button">
                    <a class="services-read-more" href="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_services_read_more_url'.$i))?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_services_read_more'.$i))?></a>
                  </div>
                </div>
               <?php } ?>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <span id="services-loop"><?php echo esc_html($services_loop); ?></span>
 </section>
