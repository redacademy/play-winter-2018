// Burger menu functions
(function ($) {
  $('.hamburger').on('click', function() {
    $('.hamburger').addClass('is-active');

    $('.main-navigation .search-field').hide();
 
    $('.main-navigation .icon-search').on('click', function(evt){
      evt.preventDefault();
   
      $('.main-navigation .search-field').show('fast');
      $('.main-navigation .search-field').focus();
      
    });
   
    $('.main-navigation .search-field').on('blur', function(){
   
      $('.main-navigation .search-field').hide('fast');
    });
  })

  $('.hamburger').on('click', function() {
    $('.hamburger').removeClass('is-active');
  })


})(jQuery);