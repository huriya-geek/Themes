<?php
/**
 * The Template for displaying all single posts.
 *
 * @package advance-fitness-gym-pro
 */
get_header();
get_template_part( 'template-parts/banner' );
?>
<div class="container">
	<div class="row">
		<div class="content_page col-lg-9 col-md-8 col-sm-12 col-12">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="content_boxes">
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="feature-box">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>">
					</div>
				<?php } ?>
				<div class="metabox">
					<?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_date',true) == "1" ) { ?>
					<span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_auther',true) == "1" ) { ?>
					<span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
					<?php } ?>
					
					<?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_comments',true) == "1" ) { ?>
					<span class="entry-comments"><?php comments_number( __( '0 Comments','advance-fitness-gym-pro' ), __( '0 Comments','advance-fitness-gym-pro' ), __( '0 % Comments','advance-fitness-gym-pro' ) ); ?></span>
					<?php } ?>
					
				</div>
				<p><?php the_content();?></p>

				<?php if ( get_theme_mod('advance_fitness_gym_pro_toggle_sharing',true) == "1" ) { ?>
				<?php do_action('advance_fitness_gym_pro_before_blog_sharing'); ?>
				<div class="share_icon row p-0 m-0"> 
                    <p class="socila_share p-0">
                    	<b><?php _e('Share: ','advance-fitness-gym-pro'); ?></b>
                    	<?php if(get_theme_mod('advance_fitness_gym_pro_facebook_social_sharing',true) == "1"){?>
                    		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    	<?php } ?>
                    	<?php if(get_theme_mod('advance_fitness_gym_pro_linkedin_social_sharing',true) == "1"){?>
                    		<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=<?php the_title(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                    	<?php } ?>
                    	<?php if(get_theme_mod('advance_fitness_gym_pro_googleplus_social_sharing',true) == "1"){?>
                    		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                    	<?php } ?>
                    	<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo the_title(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                	</p>
                    <p class="col-md-6 post_tag">
                    	<?php
                        if( $tags = get_the_tags() ) {
                            echo '<span class="meta-sep"></span>';
                            foreach( $tags as $tag ) {
                              $sep = ( $tag === end( $tags ) ) ? '' : ' ';
                              echo '<a href="' . esc_url(get_term_link( $tag, $tag->taxonomy )) . '">#' . esc_html($tag->name) . '</a>' . esc_html($sep);
                            }
	                    } ?>
	                </p>
                </div>
                <?php } ?>
                <?php if(get_theme_mod('advance_fitness_gym_pro_categories',true) != ''){?>
	                <div class="post_ctg font-weight-bold"><span><?php _e('Categories: ','advance-fitness-gym-pro'); ?></span><?php the_category();?></div>
					</div>
				<?php } ?>
				<?php // If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) {
					comments_template();
				}?>
				<div class="clearfix"></div>
			<?php the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'advance-fitness-gym-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'advance-fitness-gym-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'advance-fitness-gym-pro' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'advance-fitness-gym-pro' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );
			endwhile; // end of the loop. ?>
		</div>
		<?php if(get_theme_mod('advance_fitness_gym_pro_blog_page_sidebar',true) != '') {?>
			<div class="col-lg-3 col-md-4 col-sm-12 col-12" id="sidebar">
	          <?php dynamic_sidebar('sidebar-1'); ?>
	        </div>
			<div class="clearfix"></div>
		<?php } ?>
	</div>
</div>
<?php get_footer(); ?>