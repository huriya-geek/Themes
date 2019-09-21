<?php
/**
 * Template to show the content of our record section 
 *
 * @package ts_shop_Pro
 */

$about_section = get_theme_mod( 'advance_fitness_gym_pro_radio_facilities_enable' );
if ( 'Disable' == $about_section ) {
  return;
}
/*About us*/
if( get_theme_mod('advance_fitness_gym_pro_facilities_bgcolor','') ) {
  $welcome_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_facilities_bgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_facilities_bgimage','') ){
  $welcome_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_facilities_bgimage')).'\')';
}else{
  $welcome_backg = '';
}
$countchoose =  get_theme_mod('advance_fitness_gym_pro_facilities_box_number');
if($countchoose != ''){
?>
<section id="our_facilities" class="records_section" style="<?php echo esc_attr($welcome_backg); ?>">
    <div class="inner_sec">
      <div class="container-fluid">
        <?php if(get_theme_mod('advance_fitness_gym_pro_our_facilities_title') != ''){?>
          <div class="section-heading">
            <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_our_facilities_title')); ?></h3>
            <?php } ?>
            <?php if(get_theme_mod('advance_fitness_gym_pro_our_facilities_subtitle') != ''){?>
              <p class="w-75 subtext mb-5"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_our_facilities_subtitle')); ?></p>
            <?php } ?>
          </div>
        <div class="row">
          <div class="offset-md-4 col-md-8">
          <div class="about-inner container">
            <div class="how-we-work row">            
              <?php for($i=1; $i<=$countchoose; $i++) { ?>
                <div class="col-lg-6 col-md-12 col-sm-6 mb-4 work-box-outer animated fadeInUp">
                  <div class="work-box">
                    <div class="row m-0">
                      <div class="col-md-3 col-4">
                        <div class="facilities-box-icon">
                          <?php if(get_theme_mod('advance_fitness_gym_pro_facilities_box_icon_image'.$i) != ''){ ?>
                            <a class="facilities-icon-image"><img src="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_facilities_box_icon_image'.$i,get_template_directory_uri().'/assets/images/facilities/icon'.$i.'.jpg')); ?>"></a>
                             <?php } else {?>
                             <a class="facilities-icon-image"><i class="<?php echo esc_attr(get_theme_mod('advance_fitness_gym_pro_facilities_box_icon'.$i)); ?>"></i></a>
                            <?php } ?>
                        </div>
                      </div> 
                      <div class="col-md-9 col-8 p-0">
                        <div class="choose-box-content">
                          <?php if(get_theme_mod('advance_fitness_gym_pro_facilities_box_title'.$i) != ''){ ?>
                          <h4><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_facilities_box_title'.$i)); ?></a></h4>
                          <?php } ?>
                          <?php if(get_theme_mod('advance_fitness_gym_pro_facilities_box_subtitle'.$i) != ''){ ?>
                          <p class="facilities-contents"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_facilities_box_subtitle'.$i)); ?></a></p>
                          <?php } ?>
                        </div>            
                      </div>
                    </div> 
                  </div>
                </div>
              <?php } ?>            
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      </div>
    </div>
  </section>
<?php } ?>