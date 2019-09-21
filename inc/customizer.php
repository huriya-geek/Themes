<?php
/**
 * advance-fitness-gym-pro Theme Customizer
 *
 * @package advance-fitness-gym-pro
 */
/**
 * Loads custom control for layout settings
 */
function advance_fitness_gym_pro_custom_controls() {
    require_once get_template_directory() . '/inc/admin/customize-texteditor-control.php';
    require_once get_template_directory() . '/inc/custom-controls.php';

     // Inlcude the Alpha Color Picker control file.
    require_once get_template_directory() . '/inc/alpha-color-picker.php';
     get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
     get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

}
add_action( 'customize_register', 'advance_fitness_gym_pro_custom_controls' );
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function advance_fitness_gym_pro_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    //add home page setting pannel
    $wp_customize->add_panel( 'advance_fitness_gym_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Theme Settings', 'advance-fitness-gym-pro' ),
        'description' => __( 'Description of what this panel does.', 'advance-fitness-gym-pro' ),
    ) );

    $wp_customize->add_setting('advance_fitness_gym_pro_display_tagline',array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    $wp_customize->add_control('advance_fitness_gym_pro_display_tagline',array(
        'type' => 'checkbox',
        'label' => __('Show Tagline','advance-fitness-gym-pro'),
        'section' => 'title_tagline',
    ));
    $font_array = array(
        '' => __( 'No Fonts', 'advance-fitness-gym-pro' ),
        'Abril Fatface' => __( 'Abril Fatface', 'advance-fitness-gym-pro' ),
        'Acme' => __( 'Acme', 'advance-fitness-gym-pro' ),
        'Anton' => __( 'Anton', 'advance-fitness-gym-pro' ),
        'Architects Daughter' => __( 'Architects Daughter', 'advance-fitness-gym-pro' ),
        'Arimo' => __( 'Arimo', 'advance-fitness-gym-pro' ),
        'Arsenal' => __( 'Arsenal', 'advance-fitness-gym-pro' ),
        'Arvo' => __( 'Arvo', 'advance-fitness-gym-pro' ),
        'Alegreya' => __( 'Alegreya', 'advance-fitness-gym-pro' ),
        'Alfa Slab One' => __( 'Alfa Slab One', 'advance-fitness-gym-pro' ),
        'Averia Serif Libre' => __( 'Averia Serif Libre', 'advance-fitness-gym-pro' ),
        'Bangers' => __( 'Bangers', 'advance-fitness-gym-pro' ),
        'Boogaloo' => __( 'Boogaloo', 'advance-fitness-gym-pro' ),
        'Bad Script' => __( 'Bad Script', 'advance-fitness-gym-pro' ),
        'Bitter' => __( 'Bitter', 'advance-fitness-gym-pro' ),
        'Bree Serif' => __( 'Bree Serif', 'advance-fitness-gym-pro' ),
        'BenchNine' => __( 'BenchNine', 'advance-fitness-gym-pro' ),
        'Cabin' => __( 'Cabin', 'advance-fitness-gym-pro' ),
        'Cardo' => __( 'Cardo', 'advance-fitness-gym-pro' ),
        'Courgette' => __( 'Courgette', 'advance-fitness-gym-pro' ),
        'Cherry Swash' => __( 'Cherry Swash', 'advance-fitness-gym-pro' ),
        'Cormorant Garamond' => __( 'Cormorant Garamond', 'advance-fitness-gym-pro' ),
        'Crimson Text' => __( 'Crimson Text', 'advance-fitness-gym-pro' ),
        'Cuprum' => __( 'Cuprum', 'advance-fitness-gym-pro' ),
        'Cookie' => __( 'Cookie', 'advance-fitness-gym-pro' ),
        'Chewy' => __( 'Chewy', 'advance-fitness-gym-pro' ),
        'Days One' => __( 'Days One', 'advance-fitness-gym-pro' ),
        'Dosis' => __( 'Dosis', 'advance-fitness-gym-pro' ),
        'Economica' => __( 'Economica', 'advance-fitness-gym-pro' ),
        'Fredoka One' => __( 'Fredoka One', 'advance-fitness-gym-pro' ),
        'Fjalla One' => __( 'Fjalla One', 'advance-fitness-gym-pro' ),
        'Francois One' => __( 'Francois One', 'advance-fitness-gym-pro' ),
        'Frank Ruhl Libre' => __( 'Frank Ruhl Libre', 'advance-fitness-gym-pro' ),
        'Gloria Hallelujah' => __( 'Gloria Hallelujah', 'advance-fitness-gym-pro' ),
        'Great Vibes' => __( 'Great Vibes', 'advance-fitness-gym-pro' ),
        'Handlee' => __( 'Handlee', 'advance-fitness-gym-pro' ),
        'Hammersmith One' => __( 'Hammersmith One', 'advance-fitness-gym-pro' ),
        'Inconsolata' => __( 'Inconsolata', 'advance-fitness-gym-pro' ),
        'Indie Flower' => __( 'Indie Flower', 'advance-fitness-gym-pro' ),
        'IM Fell English SC' => __( 'IM Fell English SC', 'advance-fitness-gym-pro' ),
        'Julius Sans One' => __( 'Julius Sans One', 'advance-fitness-gym-pro' ),
        'Josefin Slab' => __( 'Josefin Slab', 'advance-fitness-gym-pro' ),
        'Josefin Sans' => __( 'Josefin Sans', 'advance-fitness-gym-pro' ),
        'Kanit' => __( 'Kanit', 'advance-fitness-gym-pro' ),
        'Lobster' => __( 'Lobster', 'advance-fitness-gym-pro' ),
        'Lato' => __( 'Lato', 'advance-fitness-gym-pro' ),
        'Lora' => __( 'Lora', 'advance-fitness-gym-pro' ),
        'Libre Baskerville' => __( 'Libre Baskerville', 'advance-fitness-gym-pro' ),
        'Lobster Two' => __( 'Lobster Two', 'advance-fitness-gym-pro' ),
        'Merriweather' => __( 'Merriweather', 'advance-fitness-gym-pro' ),
        'Monda' => __( 'Monda', 'advance-fitness-gym-pro' ),
        'Montserrat' => __( 'Montserrat', 'advance-fitness-gym-pro' ),
        'Muli' => __( 'Muli', 'advance-fitness-gym-pro' ),
        'Marck Script' => __( 'Marck Script', 'advance-fitness-gym-pro' ),
        'Noto Serif' => __( 'Noto Serif', 'advance-fitness-gym-pro' ),
        'Open Sans' => __( 'Open Sans', 'advance-fitness-gym-pro' ),
        'Overpass' => __( 'Overpass', 'advance-fitness-gym-pro' ),
        'Overpass Mono' => __( 'Overpass Mono', 'advance-fitness-gym-pro' ),
        'Oxygen' => __( 'Oxygen', 'advance-fitness-gym-pro' ),
        'Orbitron' => __( 'Orbitron', 'advance-fitness-gym-pro' ),
        'Patua One' => __( 'Patua One', 'advance-fitness-gym-pro' ),
        'Pacifico' => __( 'Pacifico', 'advance-fitness-gym-pro' ),
        'Padauk' => __( 'Padauk', 'advance-fitness-gym-pro' ),
        'Playball' => __( 'Playball', 'advance-fitness-gym-pro' ),
        'Playfair Display' => __( 'Playfair Display', 'advance-fitness-gym-pro' ),
        'PT Sans' => __( 'PT Sans', 'advance-fitness-gym-pro' ),
        'Philosopher' => __( 'Philosopher', 'advance-fitness-gym-pro' ),
        'Permanent Marker' => __( 'Permanent Marker', 'advance-fitness-gym-pro' ),
        'Poiret One' => __( 'Poiret One', 'advance-fitness-gym-pro' ),
        'Quicksand' => __( 'Quicksand', 'advance-fitness-gym-pro' ),
        'Quattrocento Sans' => __( 'Quattrocento Sans', 'advance-fitness-gym-pro' ),
        'Raleway' => __( 'Raleway', 'advance-fitness-gym-pro' ),
        'Rubik' => __( 'Rubik', 'advance-fitness-gym-pro' ),
        'Rokkitt' => __( 'Rokkitt', 'advance-fitness-gym-pro' ),
        'Russo One' => __( 'Russo One', 'advance-fitness-gym-pro' ),
        'Righteous' => __( 'Righteous', 'advance-fitness-gym-pro' ),
        'Slabo' => __( 'Slabo', 'advance-fitness-gym-pro' ),
        'Source Sans Pro' => __( 'Source Sans Pro', 'advance-fitness-gym-pro' ),
        'Shadows Into Light Two' => __( 'Shadows Into Light Two', 'advance-fitness-gym-pro'),
        'Shadows Into Light' => __( 'Shadows Into Light', 'advance-fitness-gym-pro' ),
        'Sacramento' => __( 'Sacramento', 'advance-fitness-gym-pro' ),
        'Shrikhand' => __( 'Shrikhand', 'advance-fitness-gym-pro' ),
        'Tangerine' => __( 'Tangerine', 'advance-fitness-gym-pro' ),
        'Ubuntu' => __( 'Ubuntu', 'advance-fitness-gym-pro' ),
        'VT323' => __( 'VT323', 'advance-fitness-gym-pro' ),
        'Varela Round' => __( 'Varela Round', 'advance-fitness-gym-pro' ),
        'Vampiro One' => __( 'Vampiro One', 'advance-fitness-gym-pro' ),
        'Vollkorn' => __( 'Vollkorn', 'advance-fitness-gym-pro' ),
        'Volkhov' => __( 'Volkhov', 'advance-fitness-gym-pro' ),
        'Yanone Kaffeesatz' => __( 'Yanone Kaffeesatz', 'advance-fitness-gym-pro' )
    );

    require_once get_template_directory() . '/inc/customizer-seperator/class/customizer-seperator.php';

    require_once get_template_directory() . '/inc/customizer-text-radio-button/class/customizer-text-radio-button.php';

    require_once get_template_directory() . '/inc/customize-repeater/customize-repeater.php';
    
    //general Settings
    require get_template_directory() . '/inc/customizer-custom-variables.php';
    //Top bar
    require get_template_directory() . '/inc/customizer-part-top-bar.php';
    //Header
    require get_template_directory() . '/inc/customizer-part-header.php';
    //Slider
    require get_template_directory() . '/inc/customizer-part-slide.php';
    //Home page sections
    require get_template_directory() . '/inc/customizer-part-home.php';
    // Social icons
    require get_template_directory() . '/inc/customizer-part-social-icons.php';
    //Footer
    require get_template_directory() . '/inc/customizer-part-footer.php';

}
add_action( 'customize_register', 'advance_fitness_gym_pro_customize_register' );
//Integer
function advance_fitness_gym_pro_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class advance_fitness_gym_pro_customize {
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance() {
        static $instance = null;
        if ( is_null( $instance ) ) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct() {}
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions() {
        // Register panels, sections, settings, controls, and partials.
        add_action( 'customize_register', array( $this, 'sections' ) );
        // Register scripts and styles for the controls.
        add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections( $manager ) {
        // Load custom sections.
        load_template( trailingslashit( get_template_directory() ) . '/inc/review-section.php' );
        // Register custom section types.
        $manager->register_section_type( 'advance_fitness_gym_pro_customize_reviews_and_testimonials' );
        // Register sections.
        $manager->add_section(
            new advance_fitness_gym_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title'    => esc_html__( 'Review & Testimonial', 'advance-fitness-gym-pro' ),
                    'reviews_and_testimonials_text' => esc_html__( 'Rate Us', 'advance-fitness-gym-pro' ),
                    'reviews_and_testimonials_url'  => 'https://www.themeshopy.com/forum/reviews-and-testimonials/'
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts() {
        wp_enqueue_script( 'advance-fitness-gym-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );
        wp_enqueue_style( 'advance-fitness-gym-pro-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
    }
}
// Doing this customizer thang!
advance_fitness_gym_pro_customize::get_instance();


