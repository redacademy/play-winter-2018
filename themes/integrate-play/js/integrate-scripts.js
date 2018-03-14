// Hamburger Menu Functionality JS

(function ($) {

  /** Maybe better in media query */

  $(window).resize(function () { // grabbed from http://jsfiddle.net/UqYCr/
    if (document.body.clientWidth < 600) {
      // $('.header-logo').removeClass('desktop-logo');
      // $('.header-logo').addClass('mobile-logo');
      // $('.menu-menu-1-container').hide()
      $('.menu-menu-1-container').css('display', 'none')

    } else {
      // $('.header-logo').removeClass('mobile-logo');
      // $('.header-logo').addClass('desktop-logo');
      // $('.menu-menu-1-container').show();
      $('.menu-menu-1-container').css('display', 'flex')
    }
  })


  $('#menu-toggle').on('click', function () {
    $(this).toggleClass('is-active');
    $('.menu-menu-1-container').stop().slideToggle();
  })
})(jQuery);