// Modal Contact Form Functionality

(function ($) {
  $( document ).ready(function() {
  //function to make modal contact form on mobile to appear when users click buttons
    $('.mobile-btn').on('click',function(){
      $('.testimonials').hide();
      $('.mobile-btn').hide();
      $('.mobile-contact-form').show();
    });

  //This closes the modal window
    $('#close-btn').on('click',function(){
      $('.testimonials').show();
      $('.mobile-btn').show();
      $('.mobile-contact-form').hide();
    });
  

  //This shows full quote on the praise page when user clicks on See More

    if($('body').is('.page-id-32')){
      $('.read-more').on('click', function(e){
        e.preventDefault();
        $(this).parent().parent().hide();
        $(this).parent().parent().prev().show();
      })
    
      $('.read-less').on('click', function(e){
        e.preventDefault();
          $(this).parent().hide();
          $(this).parent().next().show();
      })
    }

  });  
})(jQuery);