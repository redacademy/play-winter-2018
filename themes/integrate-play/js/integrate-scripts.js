// Hamburger Menu Functionality JS

(function ($) {

  /** Maybe better in media query */

  $(window).resize(function () { // grabbed from http://jsfiddle.net/UqYCr/
    if (document.body.clientWidth < 800) {
      // $('.header-logo').removeClass('desktop-logo');
      // $('.header-logo').addClass('mobile-logo');
      // $('.menu-menu-1-container').hide()
      // $('.menu-menu-1-container').css('display', 'none')
      // $('#menu-item-37').addClass('science-logo')

    } else {
      // $('.header-logo').removeClass('mobile-logo');
      // $('.header-logo').addClass('desktop-logo');
      // $('.menu-menu-1-container').show();
      $('.menu-menu-1-container').css('display', 'flex');
      $('.menu-menu-1-container').removeClass('menu-expanded');
      $('#menu-toggle').removeClass('is-active');
      
    }
  })

  // if (document.body.clientWidth < 800) {
  //   $('#menu-item-37').before("<div class='science-logo'>yo</div>");
  //   $('#menu-item-45').before("<div class='services-logo'>yo</div>");
  //   $('#menu-item-38').before("<div class='praise-logo'>yo</div>");
  //   $('#menu-item-39').before("<div class='contact-logo'>yo</div>");
  // } else {
  //   // $('#menu-item-37').remove("<p>yo</p>");
  // }


  $('#menu-toggle').on('click', function () {
    $(this).toggleClass('is-active');
    $('.menu-menu-1-container').toggleClass('menu-expanded');
  })
})(jQuery);