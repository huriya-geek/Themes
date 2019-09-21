<?php
/**
 * Template part for displaying posts
 *
 * @package advance_fitness_gym_pro
 */
$about_us = get_theme_mod( 'advance_fitness_gym_pro_membership_enable' );
if ( 'Disable' == $about_us ) {
  return;
}
if( get_theme_mod('advance_fitness_gym_pro_membership_bgcolor','') ) { 
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_membership_bgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_membership_bgimage','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_membership_bgimage')).'\')';
}else{
  $about_backg = '';   
}

if( get_theme_mod('advance_fitness_gym_pro_membership_boxbgcolor','') ) { 
  $box_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_membership_boxbgcolor','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_membership_boxbgimage','') ){
  $box_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_membership_boxbgimage')).'\')';
}else{
  $box_backg = '';   
}

?>
<section id="membership" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="section-title">
      <?php if(get_theme_mod('advance_fitness_gym_pro_membership_section_title',true) != ''){?>
        <h3 class="white_head_title"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_section_title'));?></h3>
      <?php }?> 
      <?php if(get_theme_mod('advance_fitness_gym_pro_membership_section_subtitle',true) != ''){?>
        <p class="white_head_title"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_section_subtitle'));?></p>
      <?php }?>         
    </div>        
    <div class="row">
      <?php $countmembership =  get_theme_mod('advance_fitness_gym_pro_membership_box_number', 4); ?>
      <?php /* Define column size */ 
       if( get_theme_mod('advance_fitness_gym_pro_membership_box_number') == 1) {
          $col_size = 'col-md-12 col-sm-12'; 
        } else if( get_theme_mod('advance_fitness_gym_pro_membership_box_number') == 2){
          $col_size = 'col-md-6 col-sm-6'; 
        } else if( get_theme_mod('advance_fitness_gym_pro_membership_box_number') == 3){
          $col_size = 'col-md-4 col-sm-6'; 
        }
        else{
          $col_size = 'col-lg-3 col-md-4 col-sm-6'; 
        }?> 

      <?php for($i=1,$j=1; $i<=$countmembership; $i++,$j++) {?>
        <div class="<?php echo esc_attr($col_size); ?>">
          <div class="membership-box" style="<?php echo esc_attr($box_backg); ?>">
            <?php
              if( get_theme_mod('advance_fitness_gym_pro_membership_heading_bgcolor'.$i) ) { 
                $price_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_membership_heading_bgcolor'.$i)).';';
              }elseif( get_theme_mod('advance_fitness_gym_pro_membership_heading_bgimage'.$i) ){
                $price_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_membership_heading_bgimage'.$i)).'\')';
              }else{
                $price_backg = '';
              }
            ?>
            <div class="membership-heading-box text-center" style="<?php echo esc_attr($price_backg); ?>">
              <?php if( get_theme_mod('advance_fitness_gym_pro_membership_box_subtitle'.$i, true) != ''){ ?>
              <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_subtitle'.$i));?></p>
              <?php } ?>
              <?php if( get_theme_mod('advance_fitness_gym_pro_membership_box_title'.$i, true) != ''){ ?>
                <h4><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_title'.$i)); ?></h4>
              <?php } ?>
              </div>
              <div class="box-price">
                <?php if( get_theme_mod('advance_fitness_gym_pro_membership_box_price'.$i, true) != ''){ ?>
                  <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_price'.$i)); ?><p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_price_base'.$i)); ?></p></h3>
              <?php } ?> 
              </div>
            <div class="col-md-12 plans-content">
              <?php $countplans =  get_theme_mod('advance_fitness_gym_pro_membership_text_number'.$i, 6); ?>
              <ul>
                <?php for($k=1; $k<=$countplans; $k++) {?>
                  <?php if( get_theme_mod('advance_fitness_gym_pro_membership_box_text'.$k.$i, true) != ''){ ?>
                    <li><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_text'.$k.$i)); ?></li>
                  <?php } ?>                
                <?php } ?>
              </ul>
            </div>
            <div class="col-md-12 select-plans">
              <?php if( get_theme_mod('advance_fitness_gym_pro_membership_box_btn'.$i, true) != ''){ ?>
                <h4><a class="theme_button" href="<?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_url'.$i)); ?>"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_membership_box_btn'.$i)); ?></a></h4>
              <?php } ?>
            </div>
          </div>  
        </div>
      <?php }?> 
    </div>
    <div class="clearfix"></div>
  </div>
</section>