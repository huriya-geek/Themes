<div class="col-lg-6 col-md-12 col-sm-12 col-12">
  <div class="postbox">
    <div class="postpic">
      <?php if (has_post_thumbnail()){ ?>
        <?php the_post_thumbnail(); ?>
      <?php } ?>
      <?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_post_date',true) == "1" ) { ?>
        <div class="posticon-1">
          <div class="date_div">
            <span class="entry-date price pull-right"><?php the_time(get_option('date_format')); ?></span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="postbox-content text-left">
      <h3 class="posttitle text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_post_meta',true) == "1" ) { ?>
        <div class="row m-0 border_box">
          <span class="mr-3"><?php echo esc_html('By '); echo esc_html( the_author() ); ?></span><span><?php echo esc_html('/ '); comments_number( __('no comments','advance-fitness-gym-pro'), __('no comments','advance-fitness-gym-pro'), __('% comments','advance-fitness-gym-pro') ); ?></span>
        </div>
      <?php } ?>
      <div class="posttext mt-3"><?php $excerpt = get_the_excerpt(); echo esc_html(advance_fitness_gym_pro_string_limit_words($excerpt,30)); ?></div>
    </div>
  </div>
</div>
