<?php
/**
 * Alpha Color Picker.
 * @package VW Automobile Pro
 */
if ( ! class_exists( 'WP_Customize_Control' ) ){
	return;
}

/**
 * Sortable Repeater Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */
class advance_fitness_gym_pro_Repeater_Custom_Control extends WP_Customize_Control {
	/**
	 * The type of control being rendered
	 */
	public $type = 'sortable_repeater';
	/**
		 * Button labels
		 */
	public $button_labels = array();
	/**
	 * Constructor
	 */
	public function __construct( $manager, $id, $args = array(), $options = array() ) {
		parent::__construct( $manager, $id, $args );
		// Merge the passed button labels with our default labels
		$this->button_labels = wp_parse_args( $this->button_labels,
			array(
				'add' => __( 'Add', 'advance-fitness-gym-pro' ),
			)
		);
	}
	/**
	 * Enqueue our scripts and styles
	 */
	public function enqueue() {
		wp_enqueue_script( 'themeshopythemes_custom_control_js', get_template_directory_uri() . '/inc/customize-repeater/js/customize-repeater.js', array('jquery'), '', true);
		wp_enqueue_style( 'themeshopythemes_custom_controls_css', get_template_directory_uri(). '/inc/customize-repeater/css/customize-repeater.css', null, '1.0.0' );
	}
	/**
	 * Render the control in the customizer
	 */
	public function render_content() {

		$section_name = array("exercise","welcome","services-we-offer","special-offer","facilities","popular-programs","bmi","membership","our-team","get-in-touch","testimonial","record","our-partners");
		$string_array = rtrim(implode(',', $section_name), ',');
	?>
	    <div class="sortable_repeater_control">
			<?php if( !empty( $this->label ) ) { ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php } ?>
			<?php if( !empty( $this->description ) ) { ?>
				<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
			<?php } ?>
			<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $string_array ); ?>" class="customize-control-sortable-repeater" <?php $this->link(); ?> />
			<div class="sortable">
				<div class="repeater">
					<input type="text" value="" class="repeater-input" placeholder="" disabled="disabled" /><span class="dashicons dashicons-sort"></span>
				</div>
			</div>
		</div>
	<?php
	}
}