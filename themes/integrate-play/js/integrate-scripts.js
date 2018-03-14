// Hamburger Menu Functionality JS

(function ($) {


  /**
   * Check if something exists 
   */
  // if($('.cats').length){
  // console.log($(this));
  // }

  /** Maybe better in media query */

  $(window).resize(function () { // grabbed from http://jsfiddle.net/UqYCr/
    if (document.body.clientWidth < 600) {
      // $('.menu').css('align-items','flex-start')
      $('.header-logo').removeClass('desktop-logo');
      $('.header-logo').addClass('mobile-logo');
      $('.menu-menu-1-container').hide()
    } else {
      $('.header-logo').removeClass('mobile-logo');
      $('.header-logo').addClass('desktop-logo');
      $('.menu-menu-1-container').show();
    }
  })


  $('#menu-toggle').on('click', function () {
    $(this).toggleClass('is-active');
    $('.menu-menu-1-container').stop().slideToggle();
  })
})(jQuery);