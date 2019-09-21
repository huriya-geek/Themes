<?php 
$attorneys_enable = get_theme_mod( 'advance_fitness_gym_pro_radio_testimonial_enable' );
if ( 'Disable' == $attorneys_enable ) {
  return;
}
if( get_theme_mod('advance_fitness_gym_pro_testimonial_bgcolor') ) { 
  $testi_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_testimonial_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_our_testimonial_bgimage') ){
  $testi_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_our_testimonial_bgimage')).'\')';
}else{
  $testi_backg = '';   
}
$testimonials_loop="true";
if(get_theme_mod('advance_fitness_gym_pro_testimonials_loop',true)=='1')
{
$testimonials_loop="true";
}else{
$testimonials_loop="false";
}          
?>

<section id="testimonials" style="<?php echo esc_html($testi_backg); ?>">
  <div class="innerbox">
    <div class="container">  
      <?php if(get_theme_mod('advance_fitness_gym_pro_testimonial_title',true != '')){?>
      <h2><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_testimonial_title')); ?></h2>
      <?php }?>
      <?php if ( defined( 'ADVANCE_FITNESS_GYM_PRO_POSTTYPE_VERSION' ) ) { ?>
      <div class="owl-carousel">
        <?php
          $args = array(
            'post_type' => 'testimonials',
            'post_status' => 'publish',
            'paged' => $paged,
          );
          $new = new WP_Query($args); 
          $loop_index = 0; $i=1;
          while ( $new->have_posts() ){
          $new->the_post();  ?>
          <div class="<?php if($i == 1){ echo 'active';}?>"> 
            <div class="testimonial_box w-100 mb-3">  
              <div class="image-box media">
                <?php if (has_post_thumbnail()){ ?>
                <img class="" src="<?php the_post_thumbnail_url(); ?>">
                <?php } ?>
                <div class="testimonial-box media-body">
                    <div class="content_box w-100">
                      <div class="short_text pt-1 pl-2"><blockquote><?php the_content(); ?></blockquote></div>
                    </div>
                    <div class="testimonial_name_designation">
                      <?php $custom_url = ''; if(get_post_meta(get_the_ID(), 'meta-testimonial-url', true !='')){  $custom_url = get_post_meta(get_the_ID(), 'meta-testimonial-url', true); } ?>
                      <h4 class="testimonial_name mt-0"><a href="<?php if($custom_url != ''){ echo esc_url($custom_url); } else { the_permalink(); } ?>"><?php the_title(); ?></a></h4>
                      <h5 class="border_heading"><?php echo esc_html(get_post_meta($post->ID,'advance_fitness_gym_pro_posttype_testimonial_desigstory',true)); ?></h5>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; }
       wp_reset_query(); ?>
      </div>
    </div>
    <?php } else{ echo '<h5 class="text-center">' . esc_html__( 'Please Activate Medical Supplements Store Posttype and create the testimonials to make it appear here.', 'advance-fitness-gym-pro' ) . '</h5>'; } ?>
  </div>
  <span id="testimonials-loop"><?php echo esc_html($testimonials_loop); ?></span>
</section>
