<?php 
$section_status = get_theme_mod( 'advance_fitness_gym_pro_popular_programs_enabledisable' );
if ( 'Disable' == $section_status ) {
  return;
}
if( get_theme_mod('advance_fitness_gym_pro_popular_programs_bgcolor') ) {
  $section_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_popular_programs_bgcolor')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_popular_programs_bgimage') ){
  $section_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_popular_programs_bgimage')).'\')';
}else{
  $section_backg = '';
}
$args = array(
  'post_type' => 'programs',
  'post_status' => 'publish',
  'posts_per_page' => get_theme_mod('advance_fitness_gym_pro_popular_programs_number')
);
$programs_loop="true";
if(get_theme_mod('advance_fitness_gym_pro_popular_programs_loop',true)=='1')
{
$programs_loop="true";
}else{
$programs_loop="false";
}
$new = new WP_Query($args); 
if ( defined( 'ADVANCE_FITNESS_GYM_PRO_POSTTYPE_VERSION' ) ) :
?>
<section id="programs" style="<?php echo esc_attr($section_backg); ?>">
	<div class="container">
		<?php if(get_theme_mod('advance_fitness_gym_pro_popular_programs_title') != ''){?>
      <div class="section-heading">
        <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_popular_programs_title')); ?></h3>
        <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_popular_programs_subtitle')); ?></p>
      </div>
    <?php } ?>
    <?php if ( $new->have_posts() ) : ?>
    <div class="programs_outer">
      <div class="row">
        <div class="owl-carousel">
        <?php            
          $i = 0; 
          while ( $new->have_posts() ){
          $new->the_post();  ?>
          <div class="programs_box">
            <div class="programs_circle">
              <div class="programs_icon_image">
                  <?php if (has_post_thumbnail()){ ?>
                <div class="services-image">
                  <?php the_post_thumbnail(); ?>
                </div>
                  <?php } ?>
               </div>
            </div>
            <div class="programs-box-content">
        			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <div class="programs_content"><?php $excerpt = get_the_excerpt(); echo esc_html(advance_fitness_gym_pro_string_limit_words($excerpt,15)); ?></div>
        		</div>
          </div>
        <?php $i++; }
        wp_reset_query(); ?>
      </div>
      </div>
   </div>
    <?php
      else :
        echo '<h5 class="text-center">' . esc_html__( 'Create the Popular Programs to make it appear here.', 'advance-fitness-gym-pro' ) . '</h5>'; 
      endif;
    ?>
	</div>
  <span id="programs-loop"><?php echo esc_html($programs_loop); ?></span>
</section>
<?php
else :
  echo '<h5 class="text-center">' . esc_html__( 'Please Activate Advance Fitness Gym Pro Posttype and create the Popular Programs to make it appear here.', 'advance-fitness-gym-pro' ) . '</h5>'; 
endif; ?>