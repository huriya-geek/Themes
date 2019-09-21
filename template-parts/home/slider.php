<?php 
$section_hide = get_theme_mod( 'advance_fitness_gym_pro_slider_enabledisable' );
if ( 'Disable' == $section_hide ) {
  return;
}
$number = get_theme_mod('advance_fitness_gym_pro_slide_number'); 
$slide_delay = get_theme_mod('advance_fitness_gym_pro_slide_delay'); 
  if($number != ''){
?>
  <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide <?php if ( get_theme_mod('advance_fitness_gym_pro_slide_remove_fade') == "1" ) { ?> carousel-fade <?php } ?>" data-ride="carousel" data-interval="<?php echo esc_attr($slide_delay); ?>">
        <div class="carousel-inner" role="listbox">
          <?php for ($i=1,$j=1; $i<=$number; $i++,$j++) { 
            if($j>3){ $j=1; } ?>
            <?php if(get_theme_mod('advance_fitness_gym_pro_slide_image'.$i) != ''){ ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if ( get_theme_mod('advance_fitness_gym_pro_slide_image',true) != "" ) {?>
                  <img  src="<?php echo esc_url(get_theme_mod('advance_fitness_gym_pro_slide_image'.$i)); ?>" alt="<?php echo esc_attr(get_theme_mod('advance_fitness_gym_pro_slide_title'.$i, true)); ?>" title="#slidecaption<?php echo esc_html($i); ?>">
                <?php } ?>
                <?php if ( get_theme_mod('advance_fitness_gym_pro_slide_heading'.$i,true) != "" && get_theme_mod('advance_fitness_gym_pro_slide_text'.$i,true) != "") {?>
                <div class="carousel-caption d-none d-md-block mt-5">
                  <div class="container h-100">
                    <div class="row h-100">
                      <div class="inner_carousel">
                        <div class="slider-box ">
                          <h2 class="font-weight-bold"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_slide_heading'.$i)); ?><small><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_slide_heading_first'.$i)); ?></small></h2>
                          <div class="prop_desc"><p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_slide_text'.$i)); ?></p></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php } ?>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <?php if( get_theme_mod('advance_fitness_gym_pro_slider_arrows', true) != ''){ ?>
        <div class="">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
            <span class="sr-only"><?php esc_html_e('Previous','advance-fitness-gym-pro'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
            <span class="sr-only"><?php esc_html_e('Next','advance-fitness-gym-pro'); ?></span>
          </a>
        </div>
        <?php }?>
      </div> 
      <div class="clearfix"></div>
  </section>
<?php 
  }
?>