// Hamburger Menu Functionality JS

(function ($) {

  $(window).on('resize', function () { // grabbed from http://jsfiddle.net/UqYCr/
    if (document.body.clientWidth < 800) {
    } else {
      console.log('Desktop');
      $('.menu-menu-1-container').css('display', 'flex');
      $('.menu-menu-1-container').removeClass('menu-expanded');
      $('#menu-toggle').removeClass('is-active');
    }

  })

  $('#menu-toggle').on('click', function () {
    $(this).toggleClass('is-active');
    $('.menu-menu-1-container').toggleClass('menu-expanded');
  })
  
  $('#menu-item-37').prepend('<div class="science-logo"></div>');
  $('#menu-item-45').prepend('<div class="services-logo"></div>');
  $('#menu-item-38').prepend('<div class="praise-logo"></div>');
  $('#menu-item-39').prepend('<div class="contact-logo"></div>');

})(jQuery);