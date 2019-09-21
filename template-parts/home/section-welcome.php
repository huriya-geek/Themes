<?php
/**
 * Template to show the content of our record section 
 *
 * @package ts_shop_Pro
 */

$about_section = get_theme_mod( 'advance_fitness_gym_pro_radio_welcome_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('advance_fitness_gym_pro_welcome_bgcolor','') ) {
  $welcome_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_welcome_bgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_welcome_bgimage','') ){
  $welcome_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_welcome_bgimage')).'\')';
}else{
  $welcome_backg = '';
}
?>
<section id="welcome" style="<?php echo esc_attr($welcome_backg); ?>" class="">
  <div class="container text-center">
    <div class="section-heading">
      <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_main_title',true != '')){?>
          <h2><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_main_title')); ?></h2>
      <?php } ?>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_image',true) != ''){?>
        <img src="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_welcome_image'))?>" alt="">
        <?php } ?>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="welcome-content">
          <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_title') != ''){?>
          <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_title'))?></h3>
          <?php } ?>
          <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_title_second') != ''){?>
          <h4><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_title_second'))?></h4>
          <?php } ?>
          <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_title_third') != '') {?>
          <h6><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_title_third'))?></h6>
          <?php } ?>
          <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_contents') != '') {?>
          <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_contents'))?></p>
          <?php } ?>
        </div>
        <div class="welcome-btn">
          <?php if(get_theme_mod('advance_fitness_gym_pro_welcome_read_more_button') != '') {?>
            <a class="welome-btn" href="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_read_more_button_link')); ?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_welcome_read_more_button'))?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</section>
