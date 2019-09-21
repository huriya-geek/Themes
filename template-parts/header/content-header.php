<?php
/**
 * Template part for displaying header content
 *
 * @package advance_fitness_gym_pro
 */
?>
<div class="container">
  <div class="row bg-media">
    <div class="col-lg-4 col-md-6 col-sm-9 col-9">
      <div class="logo">
        <?php if( has_custom_logo() ){ advance_fitness_gym_pro_the_custom_logo();
          }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>
            <?php 
            if(get_theme_mod('advance_fitness_gym_pro_display_tagline',true) != ''){
             $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo esc_html($description); ?></p>
          <?php endif; } } ?>
      </div>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-3 col-3">
      <?php get_template_part( 'template-parts/header/navigation' ); ?>
    </div>
  </div>
</div>