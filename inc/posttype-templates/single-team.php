<?php
/**
 * The Template for displaying all single Team.
 *
 * @package advance-fitness-gym-pro
 */
get_header(); 
get_template_part( 'template-parts/banner' );
?>
<div class="container">
    <div id="team_single">
        <div class="row m-0">
            <?php while ( have_posts() ) : the_post();
            $data = get_post_meta( $post->ID);?>
                <div class="col-lg-9 col-md-8 col-sm-12 col-12 services_desc_box p-0">
                    <div class="posttype-box">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                        <p><?php the_content();?></p>
                    </div>
                    <div class="clearfix"></div>     
                        <?php if(get_post_meta($post->ID,'meta-designation',true)!= ''){ ?>
                            <div class="mb-3"><strong><?php _e('Designation: ','advance-fitness-gym-pro');?></strong> <?php echo esc_html(get_post_meta($post->ID,'meta-designation',true)); ?></div>
                        <?php }?>               
                        <?php if(get_post_meta($post->ID,'meta-desig',true)!= ''){ ?>
                            <div class="mb-3"><strong><?php _e('Email: ','advance-fitness-gym-pro');?></strong> <?php echo esc_html(get_post_meta($post->ID,'meta-desig',true)); ?></div>
                        <?php }?>
                        <?php if(get_post_meta($post->ID,'meta-call',true)!= ''){ ?>
                            <div class="mb-3"><strong><?php _e('Call: ','advance-fitness-gym-pro');?></strong><?php echo esc_html(get_post_meta($post->ID,'meta-call',true)); ?></div>
                        <?php } ?>
                        <div class="about-socialbox">
                            <?php if(get_post_meta($post->ID,'meta-facebookurl',true)!= ''){ ?>
                                <a class="chef_social" href="<?php echo esc_url(get_post_meta($post->ID,'meta-facebookurl',true)); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-twitterurl',true)!= ''){ ?>
                                <a class="chef_social" href="<?php echo esc_url(get_post_meta($post->ID,'meta-twitterurl',true)); ?>" target="_blank"><i class="fab fa-twitter"></i></a></a>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-googleplusurl',true)!= ''){ ?>
                                <a class="chef_social" href="<?php echo esc_url(get_post_meta($post->ID,'meta-googleplusurl',true)); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            <?php } ?>
                            <?php if(get_post_meta($post->ID,'meta-linkdenurl',true)!= ''){ ?>
                                <a class="chef_social" href="<?php echo esc_url(get_post_meta($post->ID,'meta-linkdenurl',true)); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <?php } ?>
                        </div>
                    <div class="post_pagination mt-4">
                        <?php the_post_navigation( array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-fitness-gym-pro' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Next post:', 'advance-fitness-gym-pro' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-fitness-gym-pro' ) . '</span> ' .
                                '<span class="screen-reader-text">' . __( 'Previous post:', 'advance-fitness-gym-pro' ) . '</span> ' .
                                '<span class="post-title">%title</span>',
                        ) );?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12" id="sidebar">
                  <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endwhile; // end of the loop. ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>