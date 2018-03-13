

(function ($) {
  $('.hamburger').on('click', function() {
    $('.hamburger').addClass('is-active');
  })
  $('.is-active').on('click', function() {
    $('.hamburger').removeClass('is-active');
  })


})(jQuery);