<div class="theme-offer">
	<?php
		//POST and update the customizer and other related data of Advance Fitness Gym Pro

      if(isset($_POST['submit'])){
        // Create a front page and assigned the template
        $home_id = ''; $blog_id = ''; $page_id = ''; $contact_id = ''; 
        if( get_page_by_title( 'home' ) == NULL ){
          $home_title = 'Home';
      		$home_check = get_page_by_title($home_title);
     	   	$home = array(
        		   'post_type' => 'page',
        		   'post_title' => $home_title,
        		   'post_status' => 'publish',
        		   'post_author' => 1,
        		   'post_slug' => 'home'
     		   );
          $home_id = wp_insert_post($home);
         }
         //Set the home page template
         add_post_meta( $home_id, '_wp_page_template', 'page-template/home-page.php' );

         //Set the static front page
         $home = get_page_by_title( 'Home' );
         update_option( 'page_on_front', $home->ID );
         update_option( 'show_on_front', 'page' );

         if( get_page_by_title( 'Blog' ) == NULL ){
            // Create a blog page and assigned the template
            $blog_title = 'Blog';
            $blog_check = get_page_by_title($blog_title);
            $blog = array(
               'post_type' => 'page',
               'post_title' => $blog_title,
               'post_status' => 'publish',
               'post_author' => 1,
               'post_slug' => 'blog'
            );
            $blog_id = wp_insert_post($blog);
         }

         //Set the blog page template
         add_post_meta( $blog_id, '_wp_page_template', 'page-template/blog-fullwidth-extend.php' );

         if( get_page_by_title( 'Page' ) == NULL ){
         // Create a Page 
            $page_title = 'Page ';
            $content = 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Suspendisse eu ligula. Nulla facilisi. Donec id justo. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Curabitur suscipit suscipit tellus. Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Proin magna. Duis vel nibh at velit scelerisque suscipit. Curabitur turpis. Vestibulum suscipit nulla quis orci. Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam. Suspendisse potenti.';

            $page_check = get_page_by_title($page_title);
            $page = array(
            'post_type' => 'page',
            'post_title' => $page_title,
            'post_content'  => $content,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'page'
            );
            $page_id = wp_insert_post($page);
         }

         if( get_page_by_title( 'Contact' ) == NULL ){
            // Create a contact page and assigned the template
            $contact_title = 'Contact';
            $contact_check = get_page_by_title($contact_title);
            $contact = array(
            'post_type' => 'page',
            'post_title' => $contact_title,
            'post_status' => 'publish',
            'post_author' => 1,
            'post_slug' => 'contact'
            );
   		   $contact_id = wp_insert_post($contact);
         }
          //Set the blog with right sidebar template
         add_post_meta( $contact_id, '_wp_page_template', 'page-template/contact.php' );

         //Drag and Drop
         set_theme_mod( 'advance_fitness_gym_pro_section_ordering_settings_repeater','exercise,welcome,services-we-offer,special-offer,facilities,popular-programs,bmi,membership,our-team,get-in-touch,testimonial,record,our-partners');

         /*customizer-custom-variables.php*/
         //Typography Section-First Highlight Color
         set_theme_mod( 'advance_fitness_gym_pro_hi_first_color', '#f15d28' );

         //Typography Section-Second Highlight Color
         set_theme_mod( 'advance_fitness_gym_pro_hi_second_color', '#003056' );
         //Top Bar
         set_theme_mod( 'advance_fitness_gym_pro_top_bar_contact_number', '1(868) 225-6155' );

         set_theme_mod( 'advance_fitness_gym_pro_top_bar_email_address', 'admin@gftinternational.com' );

         set_theme_mod( 'advance_fitness_gym_pro_top_bar_register_title', 'Register' ); 

         set_theme_mod( 'advance_fitness_gym_pro_top_bar_login_title', 'Login' );

         set_theme_mod( 'advance_fitness_gym_pro_top_bar_register_title_link', '#' ); 

         set_theme_mod( 'advance_fitness_gym_pro_top_bar_login_title_link', '#' );

         /*customizer-part-slide.php*/
         //Number of slides to show section
         set_theme_mod( 'advance_fitness_gym_pro_slide_number', '3' );
         //Slider Images section
         for($i=1; $i<=3; $i++) {
            set_theme_mod( 'advance_fitness_gym_pro_slide_image'.$i, get_template_directory_uri().'/assets/images/slides/slide'.$i.'.jpg' );
            //Slide Heading Title section
            set_theme_mod( 'advance_fitness_gym_pro_slide_heading_first'.$i, 'Transform your life' );
            //Slide top title
            set_theme_mod( 'advance_fitness_gym_pro_slide_heading'.$i, 'Build your body' );
            //Slide Text section
            set_theme_mod( 'advance_fitness_gym_pro_slide_text'.$i, 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium, leo ac pellentesque mollis' );
         }
         //Slide Delay
         set_theme_mod( 'advance_fitness_gym_pro_slide_delay', '10000' );

          /*customizer-part-home.php*/
           //Exercise section-Number
          set_theme_mod('advance_fitness_gym_pro_exercise_bgcolor','#e9eaed');
          
          set_theme_mod( 'advance_fitness_gym_pro_exercise_number', '4' );

          $exercise_title = array("Yoga","Weight Lifting","Running","Medication");

          for($i=1; $i<=4; $i++){
                      //Goals Box Icon
          set_theme_mod( 'advance_fitness_gym_pro_exercise_icon_image'.$i,get_template_directory_uri().'/assets/images/exercise-images/icon'.$i.'.png' );
          set_theme_mod( 'advance_fitness_gym_pro_exercise_icon_image','');
                      //content
          set_theme_mod( 'advance_fitness_gym_pro_exercise_sec_details'.$i, 'Suspendisse eu ligula. Nulla facilisi. Donec id justo.' );

          set_theme_mod('advance_fitness_gym_pro_exercise_title'.$i, $exercise_title[$i-1]);
          }
          set_theme_mod('advance_fitness_gym_pro_exercise_title_url', '#');
       
         /*customizer-part-home.php*/
         //Welcome section-
            //Welcome
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_welcome_main_title', 'Welcome to the Gym Fitness' );

            set_theme_mod( 'advance_fitness_gym_pro_welcome_title', 'Class aptent taciti sociosqu ad.' );

            set_theme_mod( 'advance_fitness_gym_pro_welcome_read_more_button', 'Read More' );

            set_theme_mod( 'advance_fitness_gym_pro_welcome_read_more_button_link', '#' );

            set_theme_mod('advance_fitness_gym_pro_welcome_image',get_template_directory_uri().'/assets/images/aboutusimg2.jpg');

            set_theme_mod( 'advance_fitness_gym_pro_welcome_title_second', 'Praesent venenatis metus at tortor pulvinar varius.' ); 

            set_theme_mod( 'advance_fitness_gym_pro_welcome_title_third', 'Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Curabitur suscipit suscipit tellus.' ); 

            set_theme_mod( 'advance_fitness_gym_pro_welcome_contents', 'Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Fusce neque. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce fermentum odio nec arcu.' ); 

            set_theme_mod('advance_fitness_gym_pro_welcome_read_more_button','Read More');

            /*customizer-part-home.php*/
            //Services Section-
            //Services
            set_theme_mod( 'advance_fitness_gym_pro_services_bgimage', get_template_directory_uri().'/assets/images/servicesbg.jpg' ); 
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_services_number', '4' );
              for($i=1; $i<=4; $i++){
            set_theme_mod( 'advance_fitness_gym_pro_services_main_title', 'Services We Offer' );

            set_theme_mod( 'advance_fitness_gym_pro_services_sub_title', 'Aliquam lobortis. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus.' );

            set_theme_mod( 'advance_fitness_gym_pro_services_icon_image'.$i,get_template_directory_uri().'/assets/images/services/icon'.$i.'.png' );

            set_theme_mod( 'advance_fitness_gym_pro_services_title'.$i, 'The Best Training' );

            set_theme_mod( 'advance_fitness_gym_pro_services_title_second'.$i, 'Nullam tincidunt adipiscing enim. Phasellus tempus.' );

            set_theme_mod( 'advance_fitness_gym_pro_services_content'.$i, 'Morbi vestibulum volutpat enim. Aliquam eu nunc. Nunc sed turpis. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero.' ); 

            set_theme_mod( 'advance_fitness_gym_pro_services_read_more'.$i, 'Read More' ); 
            set_theme_mod( 'advance_fitness_gym_pro_services_read_more_url', '' );
            }
             /*customizer-part-home.php*/
            //Special Offer
            //Special Offer
            set_theme_mod( 'advance_fitness_gym_pro_special_offer_bgcolor', '#f15d28' );
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_special_offer_title', 'Special Offer!' );

            set_theme_mod( 'advance_fitness_gym_pro_special_offer_subtitle', 'Become a member until 31.05 and get 4 weeks of free trainings.' );

            set_theme_mod( 'advance_fitness_gym_pro_special_offer_read_more', 'Read More' );

            set_theme_mod( 'advance_fitness_gym_pro_special_offer_read_more_url', '#' );

            //Number of Details to show
            set_theme_mod( 'advance_fitness_gym_pro_about_number', '3' ); 
            $icon_array = array("fas fa-headphones", "far fa-object-ungroup", "fas fa-dollar-sign");
            $box_title = array("Digital Solutions", "Creative Strategy", "Integrated Marketing");
            for($i=1; $i<=3; $i++){
               //Icon class
               set_theme_mod( 'advance_fitness_gym_pro_about_sec_icon'.$i, $icon_array[$i-1] ); 
               // Box title
               set_theme_mod( 'advance_fitness_gym_pro_about_sec_title'.$i, $box_title[$i-1] ); 
               //Description
               set_theme_mod( 'advance_fitness_gym_pro_about_sec_details'.$i, 'lacus ante convallis tellus, vitae iaculis lacus elit id.' ); 

               set_theme_mod( 'advance_fitness_gym_pro_about_sec_readmore'.$i, 'Read More' );
            }
           /*customizer-part-home.php*/
         // section-
            //Facilities
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_facilities_bgimage', get_template_directory_uri().'/assets/images/ourfacilities.jpg' );

            set_theme_mod( 'advance_fitness_gym_pro_facilities_main_title', 'Our Facilities' );

            set_theme_mod( 'advance_fitness_gym_pro_facilities_main_subtitle', 'Fusce ac felis sit amet ligula pharetra condimentum.' );

             for($i=1; $i<=7; $i++){
            set_theme_mod( 'advance_fitness_gym_pro_welcome_title_second', 'Fusce ac felis sit amet ligula pharetra condimentum.' ); 

            set_theme_mod( 'advance_fitness_gym_pro_welcome_title_third', 'Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros.' ); 

            set_theme_mod( 'advance_fitness_gym_pro_welcome_contents', 'uspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Suspendisse eu ligula. Nulla facilisi. Donec id justo. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor.' ); 
             } 
         //Membership 
            //Title
            set_theme_mod( 'advance_fitness_gym_pro_membership_section_title', 'Membership' );

            //Sub-title
            set_theme_mod( 'advance_fitness_gym_pro_membership_section_subtitle', 'Aliquam lobortis. Donec orci lectus, aliquam ut, faucibus non, euismod id.' );

             //background Colour
            set_theme_mod( 'advance_fitness_gym_pro_membership_bgcolor','');

            //background image
            set_theme_mod( 'advance_fitness_gym_pro_membership_bgimage', get_template_directory_uri().'/assets/images/membershipbg.jpg');

             //background Colour
            set_theme_mod( 'advance_fitness_gym_pro_membership_boxbgcolor','#ffffff');

            //background image
            set_theme_mod( 'advance_fitness_gym_pro_membership_boxbgimage', get_template_directory_uri().'');

            //Number of Pricing to show section
            set_theme_mod( 'advance_fitness_gym_pro_membership_box_number', '4' );
            //counter image
            for($i=1; $i<=4; $i++){
                  //
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_title'.$i, 'Etiam sollicitudin' );
                  //
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_subtitle'.$i, 'Etiam sollicitudin' );
                  //
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_price'.$i, '$199.00' );
                  //
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_price_base'.$i, 'per year' );
                 
                  for($k=1; $k<=6; $k++){
                        //
                        set_theme_mod( 'advance_fitness_gym_pro_membership_box_text'.$k.$i, 'Morbi vestibulum volutpat.' );
                        //
                        set_theme_mod( 'vw_business_pro_plan_box_text_price'.$k.$i, '$25' );
                  }
                  //
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_btn'.$i, 'Sign Up' );
                  set_theme_mod( 'advance_fitness_gym_pro_membership_box_btn_url'.$i, '#' );
            }
         //BMI
            set_theme_mod('advance_fitness_gym_pro_bmi_image',get_template_directory_uri().'/assets/images/calculatorbmi.jpg');
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_work_title', 'Working Strategy' ); 
            set_theme_mod( 'advance_fitness_gym_pro_work_desc', 'Class aptent taciti sociosqu ad.' ); 
            //Number of Details to show
            set_theme_mod( 'advance_fitness_gym_pro_how_work_box_number', '4' ); 
            $how_we_work = array("Idea", "Design", "Approved", "Launch");
            for($i=1; $i<=4; $i++){
                  //Box Icon
                  set_theme_mod( 'advance_fitness_gym_pro_how_work_box_image'.$i,get_template_directory_uri().'/assets/images/how-we-work/howwework'.$i.'.png' );
                  //Sub Title
                  set_theme_mod( 'advance_fitness_gym_pro_how_work_box_title'.$i, $how_we_work[$i-1] );
            }

         //Our Skills
           //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_our_skills_section_title', 'My Other Skills' );
            //Section Sub Title
            set_theme_mod( 'advance_fitness_gym_pro_our_skills_section_desc', 'Duis lobortis massa imperdiet quam. Suspendisse potenti. Pellentesque commodo eros a enim. Vestibulum turpis sem, aliquet eget, lobortis pellentesque.' );
            //Left Side Content
            set_theme_mod( 'advance_fitness_gym_pro_our_skills_number', '4' );
            $skills_title_array = array("Adobe Flash", "Adobe illustrator", "Corel Draw", "Adobe Photoshop");
            $skills_percent_title = array("90", "75", "50", "100");
            //To set bar title and percentage
            for($i=1; $i<=4; $i++) {
               set_theme_mod( 'advance_fitness_gym_pro_our_skills_bar_percent'.$i, $skills_percent_title[$i-1]);
               set_theme_mod( 'advance_fitness_gym_pro_our_skills_bar_title'.$i,  $skills_title_array[$i-1] );
            }

            set_theme_mod( 'advance_fitness_gym_pro_our_skills_bar_color', '#003056' );
            set_theme_mod( 'advance_fitness_gym_pro_our_skills_bar_outer_color', 'ecf8fe' );

         // Popular Programs Section 

            // Creating post types
            $programs_array = array("Cardio Training", "Weight Reducing", "Body Sculpting");
            for($i=1;$i<=3;$i++){
               $title = $programs_array[$i-1];
               $content = 'Aliquam lobortis. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros.Praesent venenatis metus at tortor pulvinar varius.';

               // Create post object
               $my_post = array(
                 'post_title'    => wp_strip_all_tags( $title ),
                 'post_content'  => $content,
                 'post_status'   => 'publish',
                  'post_type'     => 'programs',
               );
               // Background Image
              set_theme_mod( 'advance_fitness_gym_pro_popular_programs_bgimage', get_template_directory_uri().'/assets/images/popularprogrambg.jpg' ); 
               // Insert the post into the database
               $post_id = wp_insert_post( $my_post );
               //Title
               set_theme_mod( 'advance_fitness_gym_pro_popular_programs_title', 'Popular Programs' );
               //Description
               set_theme_mod( 'advance_fitness_gym_pro_popular_programs_subtitle', 'Etiam iaculis nunc ac metus. Ut id nisl quis enim dignissim sagittis. Etiam sollicitudin, ipsum eu pulvinar rutrum.' );

               $image_url = get_template_directory_uri().'/assets/images/programs/icon'.$i.'.jpg';

               $image_name      = 'icon'.$i.'.jpg';
               $upload_dir       = wp_upload_dir(); // Set upload folder
               $image_data       = file_get_contents($image_url); // Get image data
               $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
               $filename         = basename( $unique_file_name ); // Create image file name

               // Check folder permission and define file location
               if( wp_mkdir_p( $upload_dir['path'] ) ) {
                 $file = $upload_dir['path'] . '/' . $filename;
               } else {
                 $file = $upload_dir['basedir'] . '/' . $filename;
               }

               // Create the image  file on the server
               file_put_contents( $file, $image_data );

               // Check image file type
               $wp_filetype = wp_check_filetype( $filename, null );

               // Set attachment data
               $attachment = array(
                 'post_mime_type' => $wp_filetype['type'],
                 'post_title'     => sanitize_file_name( $filename ),
                 'post_content'   => '',
                 'post_type'     => 'programs',
                 'post_status'    => 'inherit'
               );

               // Create the attachment
               $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

               // Include image.php
               require_once(ABSPATH . 'wp-admin/includes/image.php');

               // Define attachment metadata
               $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

               // Assign metadata to attachment
               wp_update_attachment_metadata( $attach_id, $attach_data );

               // And finally assign featured image to post
               set_post_thumbnail( $post_id, $attach_id );

            }

         // Our Facilities Section
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_our_facilities_title', 'Our Facilities' ); 
            set_theme_mod( 'advance_fitness_gym_pro_our_facilities_subtitle', 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros,' ); 
            //Number of Details to show
            set_theme_mod( 'advance_fitness_gym_pro_facilities_box_number', '4' ); 
            $facilities_title = array("Lockers", "Your Safety & Security", "Showers & Changing Rooms", "Weight Equipment", "Jogging track and trall");
            for($i=1; $i<=4; $i++){
                  //Box Icon Image
                  set_theme_mod( 'advance_fitness_gym_pro_facilities_box_icon_image'.$i,get_template_directory_uri().'/assets/images/facilities/icon'.$i.'.jpg' );
                  //Box Icon
                  set_theme_mod( 'advance_fitness_gym_pro_facilities_box_title'.$i, $facilities_title[$i-1] );
                  //Sub Title
                  set_theme_mod( 'advance_fitness_gym_pro_facilities_box_subtitle'.$i,'Suspendisse potenti. Pellentesque commodo eros a enim. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Sed libero.'); 
            }
         //Team Section
            //Section Title
            set_theme_mod( 'advance_fitness_gym_pro_team_title', 'Meet Our Trainers' ); 
            set_theme_mod( 'advance_fitness_gym_pro_team_desc', 'Donec vitae orci sed dolor rutrum auctor. Fusce egestas elit eget lorem. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam.' ); 
         

         //Video Section
            //Video Image
            set_theme_mod( 'advance_fitness_gym_pro_video_image',get_template_directory_uri().'/assets/images/videoimg.jpg' );
            //Embedded Video URL
            set_theme_mod( 'advance_fitness_gym_pro_video_link', 'https://www.youtube.com/embed/aVS4W7GZSq0' ); 

         //Testimonial Section
            //Section Title and description
            set_theme_mod( 'advance_fitness_gym_pro_testimonial_title', 'Testimonials' ); 
            set_theme_mod( 'advance_fitness_gym_pro_testimonial_desc', 'Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam..' ); 

         //Latest Post
            //Section Title
               set_theme_mod( 'advance_fitness_gym_pro_latestpost_title', 'Latest News' ); 
               set_theme_mod( 'advance_fitness_gym_pro_latestpost_desc', 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium.' );

         //Our Partners Title
            set_theme_mod( 'advance_fitness_gym_pro_our_partnersbg_color', '#f3f6fc' ); 
            //Number of boxes to show
            set_theme_mod( 'advance_fitness_gym_pro_our_partners_number', '5' );

            //advance_fitness_gym_pro_our_partners_image
            for($i=1; $i<=6; $i++) {
                  set_theme_mod( 'advance_fitness_gym_pro_our_partners_image'.$i, get_template_directory_uri().'/assets/images/sponsers/sponser'.$i.'.jpg' );
            }

         // Get in Touch
            set_theme_mod( 'advance_fitness_gym_pro_get_in_touch_title', 'Get in touch, we cant wait to work with you.'); 

            set_theme_mod( 'advance_fitness_gym_pro_get_in_touch_subtitle', 'Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Curabitur blandit mollis lacus.'); 

            set_theme_mod( 'advance_fitness_gym_pro_get_in_touch_shortcode', 'Add Contact Form shortcode' ); 

            set_theme_mod( 'advance_fitness_gym_pro_custom_get_in_touch_bgcolor', '#383737' );

          // Newsletter
            set_theme_mod( 'advance_fitness_gym_pro_newsletter_title', 'Newsletter.'); 

            set_theme_mod( 'advance_fitness_gym_pro_newsletter_subtitle', 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. '); 

            set_theme_mod( 'advance_fitness_gym_pro_newsletter_shortcode', 'Add Contact Form shortcode' ); 

            set_theme_mod( 'advance_fitness_gym_pro_newsletter_bgcolor', '#f15d28' );

            set_theme_mod( 'advance_fitness_gym_pro_newsletter_shortcode', '[contact-form-7 id="148" title="Newsletter"]' );

         /*customizer-part-social-icons.php*/
            //twitter link
            set_theme_mod( 'advance_fitness_gym_pro_headertwitter', 'https://twitter.com/' ); 
            //facebook link 
            set_theme_mod( 'advance_fitness_gym_pro_headerfacebook', 'https://www.facebook.com/' ); 
            //Linkedin link
            set_theme_mod( 'advance_fitness_gym_pro_headerlinkedin', 'https://www.linkedin.com' ); 
            //GooglePlus link
            set_theme_mod( 'advance_fitness_gym_pro_headergoogleplus', 'https://plus.google.com/' );
            //GooglePlus link
            set_theme_mod( 'advance_fitness_gym_pro_headeryoutube', 'https://www.youtube.com/' );
            //GooglePlus link
            set_theme_mod( 'advance_fitness_gym_pro_headerpinterest', 'https://in.pinterest.com/' ); 

         /*customizer-part-footer.php*/
            //Footer Contact details
            $count = set_theme_mod( 'advance_fitness_gym_pro_footer_contact_details_number', '3' );
            $box_icon = array("fas fa-map-marker-alt", "fas fa-phone", "fas fa-envelope");
            $box_content = array("351 Montreal Ave, Staten Island, NY 10306", "9876543210 , 1234567890", "Expample@gmail.com, 12345@gmail.com");
            for($i=1; $i<=3; $i++){
                  //Box Icon
                  set_theme_mod( 'advance_fitness_gym_pro_footer_contact_details_box_icon'.$i, $box_icon[$i-1] );
                  //Box Icon
                  set_theme_mod( 'advance_fitness_gym_pro_footer_contact_details_box'.$i, $box_content[$i-1] );
            }
         //Footer section
            set_theme_mod( 'advance_fitness_gym_pro_footer_logo', get_template_directory_uri().'/assets/images/footerlogo.png' );

         //Contact Page
            //Longitude
            set_theme_mod( 'advance_fitness_gym_pro_address_longitude', '-80.053361' ); 
            //Latitude
            set_theme_mod( 'advance_fitness_gym_pro_address_latitude', '26.704241' ); 
            //Email Title text
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_email_title', 'Email ' ); 
            //Email ID
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_email', 'abcxuz@gmail.com' ); 
            //Address Title text
            set_theme_mod( 'advance_fitness_gym_pro_address_title', 'Address' ); 
            //Address
            set_theme_mod( 'advance_fitness_gym_pro_address', '455 Martinson, Los Angeles' ); 
            //Phone Title text
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_phone_title', 'Phone' ); 
            //Phone No.
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_phone', '123-456-7890' );

            

            //Working Hours Title
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_working_hours_title', 'Working Hours' ); 
            //Phone No.
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_working_hours', 'Monday-Friday, 8am - 6pm' ); 

            //Additional Infomation.
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_form_desc', 'Suspendisse non nisl sit amet velit hendrerit rutrum. Ut leo. Ut a nisl id ante tempus hendrerit. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Suspendisse eu ligula. Nulla facilisi. Donec id justo. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Curabitur suscipit suscipit tellus. Praesent vestibulum dapibus nibh. Etiam iaculis nunc ac metus.' );

            //Contact From Title
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_form_title', 'SAY HELLO!' ); 
            //Phone No.
            set_theme_mod( 'advance_fitness_gym_pro_contactpage_form_subtitle', 'We would love to hear from you!' );  

         //footer text
            //Copyright Text
            set_theme_mod( 'advance_fitness_gym_pro_footer_copy', 'Wordpress Fitness Theme 2018 | All Rights Reserved.' ); 
         
         //Shortcode
            set_theme_mod( 'advance_fitness_gym_pro_shortcode', '[advance-fitness-gym-pro-programs], [advance-fitness-gym-pro-team], [advance-fitness-gym-pro-testimonials]', '[advance-fitness-gym-pro-work]' );
            
         /*--- Latest Post---*/
        	for($i=1;$i<=3;$i++){
            $title = 'Praesent suscipit m'.$i;
            $content = 'Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Proin magna. Duis vel nibh at velit scelerisque suscipit. Curabitur turpis. Vestibulum suscipit nulla quis orci. Fusce ac felis sit amet ligula pharetra condimentum. Maecenas egestas arcu quis ligula mattis placerat. Duis lobortis massa imperdiet quam. Suspendisse potenti. Pellentesque commodo eros a enim. Vestibulum turpis.';
            	// Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'post',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );

            $image_url = get_template_directory_uri().'/assets/images/blog/blog'.$i.'.jpg';

            $image_name       = 'news'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'post',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
			   }

        	/*--- Testimonial---*/
        	for($i=1;$i<=4;$i++){
            $title = 'Testimonial'.$i;
            $content = 'Sed a libero. Cras varius. Donec vitae orci sed dolor rutrum auctor. Fusce egestas elit eget lorem. Suspendisse nisl elit.';
            	// Create post object
            $my_post = array(
            'post_title'    => wp_strip_all_tags( $title ),
            'post_content'  => $content,
            'post_status'   => 'publish',
            'post_type'     => 'testimonials',
            );

            // Insert the post into the database
            $post_id = wp_insert_post( $my_post );

            	// Now replafile_urice meta w/ new updated value array
            	update_post_meta( $post_id, 'advance_fitness_gym_pro_posttype_testimonial_desigstory', 'Web Designer');

            $image_url = get_template_directory_uri().'/assets/images/testimonials/testimonial'.$i.'.jpg';

            $image_name       = 'testimonial'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'testimonials',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
			   }

        	/*---Team Post ---*/ 
        	for($i=1;$i<=3;$i++){
         	$title = 'Trainer'.$i;
         	$content = 'Curabitur blandit mollis lacus. Nam adipiscing. Vestibulum eu odio. Vivamus laoreet. Nullam tincidunt adipiscing enim. Phasellus tempus. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Fusce neque. Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vivamus aliquet elit ac nisl. Fusce fermentum odio nec arcu.';

            // Create post object
         	$my_post = array(
         	  'post_title'    => wp_strip_all_tags( $title ),
         	  'post_content'  => $content,
         	  'post_status'   => 'publish',
               'post_type'     => 'team',
         	);

         	// Insert the post into the database
         	$post_id = wp_insert_post( $my_post );

         	// Now replace meta w/ new updated value array
           	update_post_meta( $post_id, 'meta-facebookurl', 'https://www.facebook.com/');
           	update_post_meta( $post_id, 'meta-linkdenurl', 'https://www.linkedin.com');
           	update_post_meta( $post_id, 'meta-twitterurl', 'https://twitter.com/');
           	update_post_meta( $post_id, 'meta-googleplusurl', 'https://plus.google.com' );

           	$image_url = get_template_directory_uri().'/assets/images/trainers/ourtrainers'.$i.'.jpg';

            $image_name       = 'ourtrainers'.$i.'.jpg';
            $upload_dir       = wp_upload_dir(); // Set upload folder
            $image_data       = file_get_contents($image_url); // Get image data
            $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
            $filename         = basename( $unique_file_name ); // Create image file name

            // Check folder permission and define file location
            if( wp_mkdir_p( $upload_dir['path'] ) ) {
              $file = $upload_dir['path'] . '/' . $filename;
            } else {
              $file = $upload_dir['basedir'] . '/' . $filename;
            }

            // Create the image  file on the server
            file_put_contents( $file, $image_data );

            // Check image file type
            $wp_filetype = wp_check_filetype( $filename, null );

            // Set attachment data
            $attachment = array(
              'post_mime_type' => $wp_filetype['type'],
              'post_title'     => sanitize_file_name( $filename ),
              'post_content'   => '',
              'post_type'     => 'team',
              'post_status'    => 'inherit'
            );

            // Create the attachment
            $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

            // Include image.php
            require_once(ABSPATH . 'wp-admin/includes/image.php');

            // Define attachment metadata
            $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

            // Assign metadata to attachment
            wp_update_attachment_metadata( $attach_id, $attach_data );

            // And finally assign featured image to post
            set_post_thumbnail( $post_id, $attach_id );
         }
      }
    ?>
    <ul>
		<li>
			<hr>
			<span class="dashicons dashicons-format-aside"></span><?php _e('Click on the below content to get demo content installed.','advance-fitness-gym-pro'); ?>
			<br><small><b><?php _e('Please take backup if your website is already live with data.This importer will fill the VW Portfolio Pro new customizer values.','advance-fitness-gym-pro'); ?></b></small>
			<br><br>
	        <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=advance_fitness_gym_pro_guide" method="POST" onsubmit="return validate(this);">
	            <input type="submit" name="submit" value="<?php _e('Run Importer','advance-fitness-gym-pro'); ?>" class="button button-primary button-large">
	        </form>
			<script type="text/javascript">
				function validate(valid) {
    				 if(confirm("Do you really want to do this?")){
					    document.forms[0].submit();
					}
				    else {
					    return false;
				    }
				}
			</script>
			<hr>
		</li>
	</ul>
</div>