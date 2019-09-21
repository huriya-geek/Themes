/**
 * Exoplanet Custom JS
 *
 * @package Exoplanet
 *
 * Distributed under the MIT license - http://opensource.org/licenses/MIT
 */

jQuery(function($){
  "use strict";
    jQuery('.menu > ul').superfish({
      delay:       500,                            
      animation:   {opacity:'show',height:'show'},  
      speed:       'fast'                         
    });

    jQuery('.search-box span i').click(function(){
        jQuery(".serach_outer").toggle();
    });
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});


jQuery('document').ready(function(){
  var programs_loop="";
        if(jQuery("#programs-loop").text()=='true')
           {
             programs_loop=true;
           }else{
             programs_loop=false;
           }
  var trainers_loop="";
        if(jQuery("#trainers-loop").text()=='true')
           {
             trainers_loop=true;
           }else{
             trainers_loop=false;
           }
  var testimonials_loop="";
        if(jQuery("#testimonials-loop").text()=='true')
           {
             testimonials_loop=true;
           }else{
             testimonials_loop=false;
           }
  var exercise_loop="";
        if(jQuery("#exercise-loop").text()=='true')
           {
             exercise_loop=true;
           }else{
             exercise_loop=false;
           }
  var services_loop="";
        if(jQuery("#services-loop").text()=='true')
           {
             services_loop=true;
           }else{
             services_loop=false;
           }
  var owl = jQuery('#exercise .owl-carousel');
        owl.owlCarousel({
        margin: 0,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: exercise_loop,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    var owl = jQuery('#services .owl-carousel');
        owl.owlCarousel({
        margin: 15,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: services_loop,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 4
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    var owl = jQuery('#programs .owl-carousel');
          owl.owlCarousel({
          margin: 15,
          nav: true,
          autoplay : true,
          lazyLoad: true,
          autoplayTimeout: 3000,
          loop: programs_loop,
          navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
          responsive: {
            0: {
              items: 1
            },
            600: {
              items: 2
            },
            1000: {
              items: 3
            }
          },
          autoplayHoverPause : true,
          mouseDrag: true
      });

    var owl = jQuery('#testimonials .owl-carousel');
        owl.owlCarousel({
        margin: 20,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: testimonials_loop,
        navText : ['<i class="fas fa-long-arrow-alt-left" aria-hidden="true"></i>','<i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 2
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
    var owl = jQuery('#latest_post .owl-carousel');
        owl.owlCarousel({
        margin: 25,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: false,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });
    var owl = jQuery('#team .owl-carousel');
        owl.owlCarousel({
        margin: 30,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop: trainers_loop,
        navText : ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>'],
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    jQuery('a.accordion-toggle').click(function() {
        jQuery("i", this).toggleClass("fas fa-plus fas fa-times");
    });

    jQuery("#our_skills .progress-bar").loading();
    jQuery('#our_skills input').on('click', function () {
       jQuery("#our_skills .progress-bar").loading();
    });
});
/* Counter */
jQuery(document).ready(function(){
  jQuery('.count').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 30000,
          easing: 'swing',
          step: function (now) {
             jQuery(this).text(Math.ceil(now));
          }
      });
  });
});

jQuery(function($){
    $(window).scroll(function(){
      var scrollTop = $(window).scrollTop();
      if( scrollTop > 100 ){
        $('#masthead').addClass('scrolled');
      }else{
        $('#masthead').removeClass('scrolled');
      }
        $('.main-header').css('background-position', 'center ' + (scrollTop / 2) + 'px');
    });

 });

// custom Animation
jQuery(window).scroll(function() {
  jQuery('.work_inner').each(function(){
  var imagePos = jQuery(this).offset().top;

  var topOfWindow = jQuery(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      jQuery(this).addClass("fadeInRight");
    }
  });

  jQuery('#about .container').each(function(){
  var imagePos = jQuery(this).offset().top;

  var topOfWindow = jQuery(window).scrollTop();
    if (imagePos < topOfWindow+400) {
      jQuery(this).addClass("fadeInLeft");
    }
  });

});
