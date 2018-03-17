// Modal Contact Form Functionality

(function ($) {
  $( document ).ready(function() {
//function to make modal contact form on mobile to appear when users click buttons
    $('.mobile-btn').on('click',function(){
      // $('body').append('<div class="lbox">L Box</div>');
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
  });

//This shows full quote on the praise page when user clicks on See More
  $('.read-more').on('click', function(e){
    e.preventDefault();
    // console.log('button works');
    $(this).parent().parent().hide();
    $(this).parent().parent().prev().show();
  })
  
  $('.read-less').on('click', function(e){
    e.preventDefault();
       $(this).parent().hide();
       $(this).parent().next().show();
  })
})(jQuery);