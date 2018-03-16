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

  /* Default services layout */
    $('.workshops-wrapper').css('display', 'block');
    $('.speaking-wrapper').css('display', 'none');
    $('.coaching-wrapper').css('display', 'none');

  /* Button generation for breadcrumb bar */
    $('.page-template-page-services').find('#site-navigation').append('<div class="breadcrumb-bar">' +
      '<a id="bread-workshop" href="#workshop" class="bread-btn">Workshops</a>' +
      '<a id="bread-speak" href="#speaking" class="bread-btn">Speaking</a>' +
      '<a id="bread-coach" href="#coaching" class="bread-btn">Coaching</a>'
    );
  /* Breadcrumb click functions */
    $('#bread-workshop').on('click', function() {
      $('.workshops-wrapper').css('display', 'block');
      $('.speaking-wrapper').css('display', 'none');
      $('.coaching-wrapper').css('display', 'none');
    });

    $('#bread-speak').on('click', function() {
      $('.workshops-wrapper').css('display', 'none');
      $('.speaking-wrapper').css('display', 'block');
      $('.coaching-wrapper').css('display', 'none');
    });
    
    $('#bread-coach').on('click', function() {
      $('.workshops-wrapper').css('display', 'none');
      $('.speaking-wrapper').css('display', 'none');
      $('.coaching-wrapper').css('display', 'block');
    });

/* Default services layout */
  $('.workshops-wrapper').css('display', 'block');
  $('.speaking-wrapper').css('display', 'none');
  $('.coaching-wrapper').css('display', 'none');


})(jQuery);