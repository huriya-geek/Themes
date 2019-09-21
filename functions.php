<?php
/**
 * advance-fitness-gym-pro functions and definitions
 *
 * @package advance-fitness-gym-pro
 */

if ( ! function_exists( 'advance_fitness_gym_pro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function advance_fitness_gym_pro_setup() {
	$GLOBALS['content_width'] = apply_filters( 'advance_fitness_gym_pro_content_width', 640 );
	if ( ! isset( $content_width ) ) $content_width = 640;
	load_theme_textdomain( 'advance-fitness-gym-pro', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'wc-product-gallery-zoom' ); 
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('advance-fitness-gym-pro-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'advance-fitness-gym-pro' )
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	add_editor_style( array( 'assets/css/editor-style.css') );
}
endif;
add_action( 'after_setup_theme', 'advance_fitness_gym_pro_setup' );

/* Theme Widgets Setup */
function advance_fitness_gym_pro_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on blog page sidebar', 'advance-fitness-gym-pro' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on page sidebar', 'advance-fitness-gym-pro' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 1', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on footer', 'advance-fitness-gym-pro' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 2', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on footer', 'advance-fitness-gym-pro' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 3', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on footer', 'advance-fitness-gym-pro' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer Column 4', 'advance-fitness-gym-pro' ),
		'description'   => __( 'Appears on footer', 'advance-fitness-gym-pro' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'advance_fitness_gym_pro_widgets_init' );

/* Theme Font URL */
function advance_fitness_gym_pro_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext,vietnamese';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Poppins';
	$font_family[] = 'PT Serif';
	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function advance_fitness_gym_pro_scripts() {
	wp_enqueue_style( 'advance-fitness-gym-pro-font', advance_fitness_gym_pro_font_url(), array() );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'advance-fitness-gym-pro-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'advance-fitness-gym-pro-style', 'rtl', 'replace' );

	/* Inline style sheet */
	require get_parent_theme_file_path( '/inline_style.php' );
	wp_add_inline_style( 'advance-fitness-gym-pro-basic-style',$custom_css );
	
	wp_enqueue_style( 'animation-wow', get_template_directory_uri().'/assets/css/animation.css' );
	wp_enqueue_style( 'custom-animation', get_template_directory_uri().'/assets/css/custom-animation.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.min.css' );
	wp_enqueue_style( 'effect', get_template_directory_uri().'/assets/css/effect.css' );
	wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
	// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), true);
	wp_enqueue_script( 'tether', get_template_directory_uri() . '/assets/js/tether.js', array('jquery'), '',true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script( 'superfsh', get_template_directory_uri() . '/assets/js/jquery.superfish.js',array('jquery'),'',true);
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js',array('jquery'),'',true);
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js',array('jquery'),'',true);
	wp_enqueue_script( 'jquery-progressbar-js', get_template_directory_uri() . '/assets/js/jquery-progressbar.js',array('jquery'),'',true);
	wp_enqueue_script( 'advance-fitness-gym-pro-customscripts', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'),'', true );

	if ( is_page_template( 'page-template/home-page.php' ) ) {
		wp_enqueue_script( 'advance-fitness-gym-pro-bmi', get_template_directory_uri() . '/assets/js/bmi.js', array('jquery') ,'',true);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style('advance-fitness-gym-pro-ie', get_template_directory_uri().'/assets/css/ie.css', array('advance-fitness-gym-pro-basic-style'));
	wp_style_add_data( 'advance-fitness-gym-pro-ie', 'conditional', 'IE' );
}
add_action( 'wp_enqueue_scripts', 'advance_fitness_gym_pro_scripts' );

/* Implement the Custom Header feature. */
require get_parent_theme_file_path( '/inc/custom-header.php' );
/* Custom template tags for this theme. */
require get_parent_theme_file_path( '/inc/template-tags.php' );
/* Customizer additions. */
require get_parent_theme_file_path( '/inc/customizer.php' );
/* TGM. */
require get_parent_theme_file_path( '/inc/tgm.php' );
/* Get Started. */
require get_parent_theme_file_path( '/inc/getstarted/getstart.php' );



/* URL DEFINES */
define('ADVANCE_FITNESS_GYM_PRO_SITE_URL','https://www.themeshopy.com/');
/* Theme Credit link */
function advance_fitness_gym_pro_credit_link() {
	echo esc_html_e('Design & Developed by','advance-fitness-gym-pro'). "<a href=".esc_url(ADVANCE_FITNESS_GYM_PRO_SITE_URL)." target='_blank'> Themeshopy </a>";
}
/*Radio Button sanitization*/
function advance_fitness_gym_pro_sanitize_choices( $input, $setting ) {
	global $wp_customize;
	$control = $wp_customize->get_control( $setting->id );
	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

 /* Breadcrumb Begin */
function advance_fitness_gym_pro_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(', ');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Excerpt Limit Begin */
function advance_fitness_gym_pro_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

/* Excerpt Read more overwrite */
function advance_fitness_gym_pro_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}
	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'advance-fitness-gym-pro' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'advance_fitness_gym_pro_excerpt_more' );

//social widget file
require get_parent_theme_file_path( '/inc/posttype-templates/posttype-templates.php' );

//social widget file
require get_parent_theme_file_path( '/inc/widget/socail-widget.php' );

//Contact Widget file
require get_parent_theme_file_path( '/inc/widget/contact-widget.php' );

// Recent post widget with thumbnails
Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {
    function widget($args, $instance) {
            if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts', 'advance-fitness-gym-pro' );
        /** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true
        ) ) );
        if ($r->have_posts()) :
        ?>
        <?php echo $args['before_widget']; ?>
        <?php if ( $title ) {
            echo $args['before_title'] . esc_html($title) . $args['after_title'];
        } ?>
        <ul>
	        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
	            <li>
	                <div class="row recent-post-box">
		                <div class="post-thumb <?php if(has_post_thumbnail()) { echo 'col-md-4 col-sm-4 col-4'; } ?> ">
		                    <?php the_post_thumbnail(); ?>
		                </div>
		                <div class="post-content <?php if(has_post_thumbnail()) { echo 'col-md-8 col-sm-8 col-8'; } else { echo 'col-md-12 col-sm-12 col-12'; }?>">
		                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			                <?php if ( $show_date ) : ?>
			                    <p class="post-date"><?php the_time(get_option('date_format')); ?></p>
			                <?php endif; ?>
		                </div>
	                </div>
	            </li>
	        <?php endwhile; 
	        wp_reset_postdata(); ?>
        </ul>

        <?php echo $args['after_widget'];
        
        endif;
    }
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');
define('ADVANCE_FITNESS_GYM_PRO_LIVE_DEMO','https://themeshopy.com/advance-fitness-gym-pro/');
define('ADVANCE_FITNESS_GYM_PRO_DOC','https://themeshopy.com/docs/wordpress-fitness-theme/');
define('ADVANCE_FITNESS_GYM_PRO_CONTACT','https://www.themeshopy.com/support/');
