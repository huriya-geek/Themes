<?php
/**
 * The Template for displaying all single Service.
 *
 * @package advance-fitness-gym-pro
 */
get_header(); 
get_template_part( 'template-parts/banner' );?>
<?php do_action('advance_fitness_gym_pro_before_contact_title'); ?>
<div class="container">
    <div class="row">
        <div id="service_single" class="col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php if ( has_post_thumbnail() ) { ?>
            <div class=" portfolio-image">
                <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
            </div>
            <?php } ?>  
            <p class="mt-3"><?php the_content();?></p>              
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
        <div class="col-md-3" id="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
        </div>   
        <div class="clearfix"></div>
        <?php endwhile; // end of the loop. ?> 
    </div>    
</div>
<?php get_footer(); ?>