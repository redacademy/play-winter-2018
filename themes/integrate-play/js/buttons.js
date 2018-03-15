// Modal Contact Form Functionality

(function ($) {

  $('#mobile-btn').on('click',function(){
    $('#masthead').hide();
    $('#colophon').hide();
    $('#main').hide();
    $('#primary').css( "padding", "0" );
    $('.mobile-contact-form').show();
  });

  $('#close-btn').on('click',function(){
    $('#masthead').show();
    $('#colophon').show();
    $('#main').show();
    $('#primary').css( "padding", "" );
    $('.mobile-contact-form').hide();
  });

})(jQuery);