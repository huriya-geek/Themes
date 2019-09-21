<?php 
$team_enable = get_theme_mod( 'advance_fitness_gym_pro_radio_our_trainers_enable' );
if ( 'Disable' == $team_enable ) {
  return;
}
/*team*/
if( get_theme_mod('advance_fitness_gym_pro_our_trainers_bgcolor') ) { 
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_our_trainers_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_our_trainers_bgimage') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_our_trainers_bgimage')).'\')';
}else{
  $about_backg = '';   
}
$args = array(
  'post_type' => 'team',
  'post_status' => 'publish'
);  
$trainers_loop="true";
if(get_theme_mod('advance_fitness_gym_pro_our_trainers_loop',true)=='1')
{
$trainers_loop="true";
}else{
$trainers_loop="false";
}          
$new = new WP_Query($args); 
if ( defined( 'ADVANCE_FITNESS_GYM_PRO_POSTTYPE_VERSION' ) ) :
?>
  <section id="team" style="<?php echo esc_html($about_backg); ?>">
    <div class="container">
    <?php if(get_theme_mod('advance_fitness_gym_pro_team_title') != ''){?>
      <div class="section-heading">
        <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_team_title')); ?></h3>
        <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_team_desc')); ?></p>
      </div>
    <?php } ?>
    <?php if ( $new->have_posts() ) : ?>
      <div class="owl-carousel">
        <?php            
          $loop_index = 0; $i=1;
          while ( $new->have_posts() ){
          $new->the_post();  ?>
          <div class="<?php if($i == 1){ echo 'active';}?>"> 
            <div class="box">
              <?php the_post_thumbnail(); ?>
              <div class="overlay">
                  <div class="work_content">
                    <div class="teambox-content"> 
                    <h4 class="teamtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <span class="teampost"><?php $excerpt = get_the_excerpt(); echo esc_html(advance_fitness_gym_pro_string_limit_words($excerpt,5)); ?></span>
                    <div class="socialbox">                           
                      <?php if(get_post_meta($post->ID,'meta-facebookurl',true) || get_post_meta($post->ID,'meta-twitterurl',true) || get_post_meta($post->ID,'meta-googleplusurl',true) || get_post_meta($post->ID,'meta-linkdenurl',true)){?>
                          <?php if(get_post_meta($post->ID,'meta-facebookurl',true)){?>
                            <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                          <?php } if(get_post_meta($post->ID,'meta-twitterurl',true)){?>
                            <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-twitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a>                              
                          <?php } if(get_post_meta($post->ID,'meta-linkdenurl',true)){?>
                            <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                          <?php } if(get_post_meta($post->ID,'meta-googleplusurl',true)){?>
                            <a class="" href="<?php echo esc_html(get_post_meta($post->ID,'meta-googleplusurl',true)); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                          <?php }?>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php $i++; }
        wp_reset_query(); ?>
      </div>
      <?php
        else :
          echo '<h5 class="text-center">' . esc_html__( 'Create the team to make it appear here.', 'advance-fitness-gym-pro' ) . '</h5>'; 
        endif;
      ?>
    </div>
    <div class="clearfix"></div>
    <span id="trainers-loop"><?php echo esc_html($trainers_loop); ?></span>
  </section>
<?php
else :
  echo '<h5 class="text-center">' . esc_html__( 'Please Activate Advance Fitness Gym Pro Posttype and create the team to make it appear here.', 'advance-fitness-gym-pro' ) . '</h5>'; 
endif; ?>