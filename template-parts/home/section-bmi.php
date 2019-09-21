<?php 
$bmi_section = get_theme_mod( 'advance_fitness_gym_pro_bmi_enable' );
if ( 'Disable' == $bmi_section ) {
  return;
}

/*--BMI CALCULATOR--*/
if( get_theme_mod('advance_fitness_gym_pro_bmi_color','') ) {
  $about_backg = 'background-color:'.esc_attr(get_theme_mod('advance_fitness_gym_pro_bmi_color','')).';';
}elseif( get_theme_mod('advance_fitness_gym_pro_bmi_image','') ){
  $about_backg = 'background-image:url(\''.esc_url(get_theme_mod('advance_fitness_gym_pro_bmi_image')).'\')';
}else{
  $about_backg = '';
}
?>
<section id="bmi" style="<?php echo esc_attr($about_backg); ?>">
  <div class="container">
    <div class="row wow bounceInUp">
      <div class="col-md-6 col-sm-12">
        <div class="calculator_form_box">
          <div class="calculator_form">
            <?php if( get_theme_mod('advance_fitness_gym_pro_bmi_title') != ''){ ?>
            <h3 class="wow tada"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_bmi_title',__('BMI Calculator','advance-fitness-gym-pro'))); ?></h3>
            <?php }?>
            <?php if( get_theme_mod('advance_fitness_gym_pro_bmi_text') != ''){ ?>
            <p><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_bmi_text',__('BMI is a measure of body fat based on height and weight that applies to adult men and women ','advance-fitness-gym-pro'))); ?></p>
            <?php }?>
            <form name="bmi_calculator">
              <div class="row bmi-calculator">
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <select name="weight_measure_in" id="weight_measure_in"><option value="kg">KG</option><option value="pounds"><?php esc_html_e('Pounds','advance-fitness-gym-pro'); ?></option></select>
                  <input class="textInput" type="text" id="bmi_weight" name="bmi_weight" placeholder="<?php echo esc_attr_x( 'Weight', 'placeholder', 'advance-fitness-gym-pro' );?>">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">      
                  <select name="height_measure_in" id="height_measure_in"><option value="feet"><?php esc_html_e('Feet','advance-fitness-gym-pro'); ?></option><option value="inches"><?php esc_html_e('Inches','advance-fitness-gym-pro'); ?></option></select>
                  <input class="textInput" type="text" id="bmi_height" name="bmi_height" placeholder="<?php echo esc_attr_x( 'Height', 'placeholder', 'advance-fitness-gym-pro' );?>">                      
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <input type="button" class="text-white" onclick="calculateBMI()" value="<?php esc_html_e('CALCULATE','advance-fitness-gym-pro'); ?>" class="bmi_button">
                </div>
                <div class="col-md-12">
                  <div class="bmi_result">
                    <h4><?php esc_html_e('BMI VALUE FOR YOU','advance-fitness-gym-pro'); ?>
                    <span id="bmi_results_graph">
                      <span class="bmi_value"><?php esc_html_e('0.00','advance-fitness-gym-pro'); ?></span>
                    </span>
                    </h4>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6">
        
        <div class="clear"></div>
      </div>
    </div>
  </div>
</section>
