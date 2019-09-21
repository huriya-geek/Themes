<?php
/**
 * Template Name: Contact
*/

get_header(); get_template_part( 'template-parts/banner' );?>
<?php do_action('advance_fitness_gym_pro_before_contact_title'); ?>
<div class="contact-box">
	<div class="container">
		<div class="contact-color-bg row mb-5">
			<div class="col-md-6">
				<div class="contact-info ">
					<?php if ( get_theme_mod('advance_fitness_gym_pro_address_title',true) != "" ) { ?>
					<div class="contact-address">
						<div class="inner-cont row">
							<div class="c_icon col-lg-2 col-md-3 col-sm-3">
								<i class="fas fa-location-arrow"></i>
							</div>
							<div class="c_content media-small col-lg-10 col-md-9 col-sm-9">
								<span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_address_title')); ?></span>
								<p class="m-0"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_address')); ?></p>
							</div>
						</div>
					</div>
					<?php }?>
					<?php if ( get_theme_mod('advance_fitness_gym_pro_contactpage_email_title',true) != "" ) { ?>
					<div class="contact-email">
						<div class="inner-cont row">
							<div class="c_icon col-lg-2 col-md-3 col-sm-3">
								<i class="far fa-envelope-open"></i>
							</div>
							<div class="c_content media-small col-lg-10 col-md-9 col-sm-9">
								<span class="w-100 font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_email_title')); ?></span>
								<p class="m-0"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_email',__('abc@gamil.com', 'advance-fitness-gym-pro'))); ?></p>
							</div>
						</div>
					<?php }?>
					</div>				
					<?php if ( get_theme_mod('advance_fitness_gym_pro_contactpage_phone_title',true) != "" ) { ?>
					<div class="contact-phone">
						<div class="inner-cont row">
							<div class="c_icon col-lg-2 col-md-3 col-sm-3">
								<i class="fas fa-phone-volume"></i>
							</div>
							<div class="c_content media-small col-lg-10 col-md-9 col-sm-9">
				 				<span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_phone_title')); ?></span>
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_phone')); ?></p>
				 			</div>
				 		</div>
		 			</div>
		 			<?php }?>
		 			<?php if ( get_theme_mod('advance_fitness_gym_pro_contactpage_working_hours_title',true) != "" ) { ?>
					<div class="contact-phone">
						<div class="inner-cont row">
							<div class="c_icon col-lg-2 col-md-3 col-sm-3">
								<i class="fas fa-calendar-alt"></i>
							</div>
							<div class="c_content media-small col-lg-10 col-md-9 col-sm-9">
				 				<span class="font-weight-bold text-uppercase"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_working_hours_title')); ?></span>
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_working_hours')); ?></p>
				 			</div>
				 		</div>
		 			</div>
		 			<?php }?>

		 			<?php if ( get_theme_mod('advance_fitness_gym_pro_contactpage_form_desc',true) != "" ) { ?>
					<div class="contact-phone">
						<div class="inner-cont row">
							<div class="c_icon col-lg-2 col-md-3 col-sm-3">
								<i class="fas fa-info-circle"></i>
							</div>
							<div class="c_content media-small col-lg-10 col-md-9 col-sm-9">
				 				<p class="m-0"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_form_desc')); ?></p>
				 			</div>
				 		</div>
		 			</div>
		 			<?php }?>
				</div>
			</div>
		
		<section class="contac_form col-md-6">
			<div class="text-center">
				<?php if(get_theme_mod('advance_fitness_gym_pro_contactpage_form_title') != ''){?>
			      <h3><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_form_title')); ?></h3>
			    <?php }
			    if(get_theme_mod('advance_fitness_gym_pro_contactpage_form_subtitle') != ''){ ?>
			      <p class="subtitle"><?php echo esc_html(get_theme_mod('advance_fitness_gym_pro_contactpage_form_subtitle')); ?></p>
			    <?php } ?>
			</div>
			<?php while ( have_posts() ) : the_post(); ?>
	        	<?php the_content(); ?>
	    	<?php endwhile; // end of the loop. ?>
		</section>
	</div>
	</div>	
	<?php do_action('advance_fitness_gym_pro_before_map'); ?>
		<section class="google-map text-center p-0" id="map">
			<?php if ( get_theme_mod('advance_fitness_gym_pro_address_latitude',true) != "" && get_theme_mod('advance_fitness_gym_pro_address_longitude',true) != "" ) {?>
			  <embed width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_attr(get_theme_mod('advance_fitness_gym_pro_address_latitude')); ?>,<?php echo esc_attr(get_theme_mod('advance_fitness_gym_pro_address_longitude')); ?>&hl=es;z=14&amp;output=embed"></embed>
			<?php }?>
		</section>
	<?php do_action('advance_fitness_gym_pro_after_map'); ?>
</div>
<?php do_action('advance_fitness_gym_pro_before_footer'); ?>

<?php get_footer(); ?>