jQuery.noConflict();

jQuery(function($){

  // Smooth Scrolling: Smooth scrolls to an ID on the current page.
  // To use this feature, add a link on your page that links to an ID, and add the .page-scroll class to the link itself. See the docs for more details.
  jQuery('.navbar-mim .nav-link, .page-scroll').bind('click', function(event) {
    jQuery('.navbar-collapse').collapse('hide');

    var $anchor = jQuery(this);
    jQuery('html, body').stop().animate({
        scrollTop: (jQuery($anchor.attr('href')).offset().top - 48)
    }, 1250, 'easeInOutExpo');
    event.preventDefault();
  });

  jQuery('#rtb-party').prepend('<option value="" disabled selected>Party Size</option>');
  if(jQuery('#rtb-party').find('option:selected').val() == ""){
    jQuery(this).css('color','#999');
    jQuery(this).children().css('color','red');
  }

  jQuery("#rtb-location-2").prepend("<option selected disabled>Location</option>")
  jQuery("#rtb-location-2").on("change", function(e) {
    if(e.target.value == 1) {
      console.log("HArlem")
      window.location.replace("https://madeinmexico.nyc/harlem/#rsvp");
    }
  });

  jQuery(".mim-events").owlCarousel({
    loop: false,
    center:false,
    startPosition: 0,
    margin:20,
    dots: false,
    autoplay: true,
    autoplayTimeout: 7000,
    navText: [
      '<i class="fas fa-chevron-left"></i>',
      '<i class="fas fa-chevron-right"></i>'
    ],
    responsiveClass:true,
    responsive:{
        0:{
          items:1,
          slideBy: 1,
          margin: 10,
          nav:false,
          loop:false,
          stagePadding: 80,
          startPosition: 1,
        },
        768:{
          items:2,
          slideBy: 2,
          margin: 15,
          startPosition: 1,
          stagePadding: 80,
          nav:false
        },
        1000:{
          items:3,
          slideBy: 3,
          nav:false,
          loop:false
        }
    }
  });

  jQuery(".reservation-form :input").each(function(index, elem) {
    var eId = jQuery(elem).attr("id");
    var label = null;
    if (eId && (label = jQuery(elem).parents("form").find("label[for="+eId+"]")).length == 1) {
      jQuery(elem).attr("placeholder", jQuery(label).html().replace(/\s/g, ''));
      jQuery(label).remove();
    }
  });


});
