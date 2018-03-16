(function ($) {
/* Hamburger Menu Functionality JS */
  $(window).on('resize', function () { /* Function triggers on menu sizing*/
    if (document.body.clientWidth < 800) { 
      $('.menu-menu-1-container').css('display', 'flex');
      $('.menu-menu-1-container').removeClass('menu-expanded');
      $('#menu-toggle').removeClass('is-active');
    }
  })

/* Triggers the burger transformation and menu display*/
  $('#menu-toggle').on('click', function () {
    $(this).toggleClass('is-active');
    $('.menu-menu-1-container').toggleClass('menu-expanded');
  })
  
/* Mobile Nav Menu Icon Creation*/
  $('#menu-item-37').prepend('<div class="science-logo"></div>');
  $('#menu-item-78').prepend('<div class="services-logo"></div>');
  $('#menu-item-38').prepend('<div class="praise-logo"></div>');
  $('#menu-item-39').prepend('<div class="contact-logo"></div>');


/* Services Page Content */

  // $('.page-template-page-services').find('#site-navigation').css('height', '200px');
  // $('.page-template-page-services').find('.header-logo').css({'position':'absolute','top':'2px'});
  // $('.page-template-page-services').find('.nav-menu-wrapper').css({'position': 'absolute', 'top':'20px','right':'2px'});



  $('.workshops-wrapper').css('display', 'block');
  $('.speaking-wrapper').css('display', 'none');
  $('.coaching-wrapper').css('display','none');


})(jQuery);