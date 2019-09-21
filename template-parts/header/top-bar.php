<?php
/**
 * Template part for displaying Top Bar Content
 *
 * @package advance_fitness_gym_pro
 */ 

$about_section = get_theme_mod( 'advance_fitness_gym_pro_topbar_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('advance_fitness_gym_pro_topbar_bgcolor','') ) {
  $background_setting = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_topbar_bgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_topbar_bgimage','') ){
  $background_setting = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_topbar_bgimage')).'\')';
}else{
  $background_setting = '';
}
?>
<section id="site_top" class="top_bar" style="<?php echo esc_attr($background_setting);  ?>">
  <div class="container-fluid contact_details">
    <div class="row m-0">
      <div class="col-lg-7 col-md-7 col-sm-12 col-12 pl-lg-5">
        <ul class="left-side-content pt-1">
          <?php if(get_theme_mod('advance_fitness_gym_pro_top_bar_contact_number') != ''){ ?>
            <li class="">
              <span class="hi_normal"><i class="fas fa-phone-volume"></i><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_contact_number'));?></span>
            </li>
          <?php } ?>
          <?php if(get_theme_mod('advance_fitness_gym_pro_top_bar_email_address') != ''){ ?>
            <li class="email_wrap">
              <span class="hi_normal"><a href="mailto:<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_email_address')); ?>"><i class="far fa-envelope-open"></i><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_email_address'));?></span>
            </li>
          <?php } ?>
        </ul>
      </div>
      <div class="col-lg-3 col-md-5 col-sm-6 col-12">
        <ul class="right-side-content pt-2">
          <?php if(get_theme_mod('advance_fitness_gym_pro_footer_section_social_icon',true)!= ""){?>
            <div class="social-icons">
              <?php get_template_part( 'template-parts/home/social-icons' ); ?>
            </div>
        <?php }?>
        </ul>
      </div>
      <div class="register-section col-lg-2 col-md-12 col-sm-6 col-12">
        <ul>
          <?php if(get_theme_mod('advance_fitness_gym_pro_top_bar_register_title',true) != ''){ ?>
            <li>
              <a class="register" href="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_register_title_link')); ?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_register_title'));?></span>
            </li>
          <?php } ?>
          <?php if(get_theme_mod('advance_fitness_gym_pro_top_bar_login_title',true) != ''){ ?>
          <li>
            <a class="login" href="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_login_title_link')); ?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_top_bar_login_title'));?></span>
          </li>
        <?php } ?>
        </ul>         
      </div>
    <div class="clearfix"></div>
  </div>
</section>