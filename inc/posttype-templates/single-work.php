<?php
/**
 * The Template for displaying all single Portfolio.
 *
 * @package advance-fitness-gym-pro
 */
get_header(); 
get_template_part( 'template-parts/banner' );?>
<div class="container">
    <div class="row">
        <div id="portfolio_single" class="col-md-9">
            <?php while ( have_posts() ) : the_post(); 
            $data = get_post_meta( $post->ID);?>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="portfolio-image">
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>">
                    </div>
                <?php } ?>  
                <div class="post_info">
                    <p class="mt-3"><?php the_content();?></p>
                    <?php $terms = get_the_terms( get_the_ID() , 'createcategory' ); 
                        foreach ( $terms as $term ) {
                            $term_link = get_term_link( $term, 'createcategory' );
                            if( is_wp_error( $term_link ) )
                            continue;
                        echo '<a class="post_taxonomy" href="' . $term_link . '">' . $term->name . '</a>';
                        } 
                    ?>
                    <a class="work_url" href="<?php echo esc_url(get_post_meta($post->ID,'vw_work_project_url',true)); ?>" target="_blank"><?php esc_html_e('Check the Work Here','advance-fitness-gym-pro'); ?></i></a>
                </div>                 
                <div class="clearfix"></div>
            <?php endwhile; // end of the loop. ?>
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
    </div>    
    <div class="clearfix"></div>
</div>
<?php get_footer(); ?>