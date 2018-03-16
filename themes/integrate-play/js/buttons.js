// Modal Contact Form Functionality

(function ($) {

  //function to make modal contact form on mobile to appear when users click buttons
  $('.mobile-btn').on('click',function(){
    $('#masthead').hide();
    $('#colophon').hide();
    $('#main').hide(); //make sure button and form are outside the #main content area
    $('#primary').css( "padding", "0" );
    $('.mobile-btn').hide();
    $('.mobile-contact-form').show();
  });

  //This closes the modal window
  $('#close-btn').on('click',function(){
    $('#masthead').show();
    $('#colophon').show();
    $('#main').show();
    $('#primary').css( "padding", "" );
    $('.mobile-btn').show();
    $('.mobile-contact-form').hide();
  });

})(jQuery);