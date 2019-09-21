<?php
//about theme info
add_action( 'admin_menu', 'advance_fitness_gym_pro_abouttheme' );
function advance_fitness_gym_pro_abouttheme() {    	
	add_theme_page( esc_html__('Get Started', 'advance-fitness-gym-pro'), esc_html__('Get Started', 'advance-fitness-gym-pro'), 'edit_theme_options', 'advance_fitness_gym_pro_guide', 'advance_fitness_gym_pro_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function advance_fitness_gym_pro_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() .'/inc/getstarted/getstart.css');
}
add_action('admin_enqueue_scripts', 'advance_fitness_gym_pro_admin_theme_style');

//guidline for about theme
function advance_fitness_gym_pro_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<script type="text/javascript">
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>
 <div class="wrapper-info">
	<div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/logo.png" alt="" />
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'advance-fitness-gym-pro'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( ADVANCE_FITNESS_GYM_PRO_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo' , 'advance-fitness-gym-pro'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_FITNESS_GYM_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'advance-fitness-gym-pro'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_FITNESS_GYM_PRO_CONTACT ); ?>" target="_blank"><?php esc_html_e('Support', 'advance-fitness-gym-pro'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Theme Setup', 'advance-fitness-gym-pro'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Plugin Setup', 'advance-fitness-gym-pro'); ?></button>
	<button class="tablink" onclick="openPage('theme_offer', this, '')"><?php esc_html_e('Demo Importer', 'advance-fitness-gym-pro'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up Homepage', 'advance-fitness-gym-pro'); ?></h3>
	  	<div class="sec-button">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'advance-fitness-gym-pro'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'advance-fitness-gym-pro'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'advance-fitness-gym-pro'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e('Set the front page: Go to Setting >> Reading >> Set the front page display static page to home page', 'advance-fitness-gym-pro'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('How to set up Plugin ', 'advance-fitness-gym-pro'); ?></h3>
	  	<div class="sec-button">
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'advance-fitness-gym-pro'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e('Follow these instructions to setup Advance  Portfolio Post-type Plugin, Advance  Portfolio Plugin, and Advance  Portfolio Banner Plugin.', 'advance-fitness-gym-pro'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e(' For Plugin Activation : Go to Dashboard >> Plugin >> Add New.', 'advance-fitness-gym-pro'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/plugin1.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/plugin2.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e(' Go to Upload plugin >> Choose File >> Install Now', 'advance-fitness-gym-pro'); ?></li>
						<!-- <li> <b><?php esc_html_e('Step 4.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e('Do the same procedure to setup Advance Portfolio Gallery Plugin and TS Title Banner Image Plugin', 'advance-fitness-gym-pro'); ?></li> -->
					</ul>
			  	</div>  	
			</div>
			<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 5.', 'advance-fitness-gym-pro'); ?></b> <?php esc_html_e('Plugins are activated', 'advance-fitness-gym-pro'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstarted/images/plugin3.png" alt="" />	
		  	</div>
		</div>
	</div>

	<div id="theme_offer" class="tabcontent">
			<h3><?php _e( 'Click the below run importer button to import demo content', 'advance-fitness-gym-pro' ); ?></h3>
			<p class="import-note"><?php echo esc_html('Please Install and Activate Advance Fitness Gym Pro Posttype and Contact Form 7 Plugin before clicking on Run Importer', 'advance-ecommerce-store-pro')?></p>
			<hr class="h3hr">
			<?php 
			/* Get Started. */ 
			require get_parent_theme_file_path( '/inc/getstarted/demo-importer.php' ); ?>
		</div>
<?php } ?>