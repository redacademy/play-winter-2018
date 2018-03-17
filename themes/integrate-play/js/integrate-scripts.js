(function ($) {
  $( document ).ready(function() {
    
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
  /* Button generation for breadcrumb bar */
    $('.page-template-page-services').find('#site-navigation').append('<div class="breadcrumb-bar">' +
      '<a id="bread-workshop" href="#workshop" class="bread-btn work-btn">Workshops</a>' +
      '<a id="bread-speak" href="#speaking" class="bread-btn speak-btn">Speaking</a>' +
      '<a id="bread-coach" href="#coaching" class="bread-btn coach-btn">Coaching</a>'
    );
  /* Default services layout */
    $('.workshops-wrapper').css('display', 'block');
    $('.speaking-wrapper').css('display', 'none');
    $('.coaching-wrapper').css('display', 'none');


  /* Services layout for Hashed URl */ 
    $(window).on('popstate', function () {
      if (window.location.hash === '#workshop') 
      {
        $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
        $('#bread-speak').css('border-bottom', '5px solid #DEDDDB');
        $('#bread-coach').css('border-bottom', '5px solid #DEDDDB');
        $('.workshops-wrapper').css('display', 'block');
        $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');
      }
      else if (window.location.hash === '#speaking') 
      {
        $('#bread-speak').css('border-bottom', '5px solid #FF5301');
        $('#bread-coach').css('border-bottom', '5px solid #DEDDDB');
        $('#bread-workshop').css('border-bottom', '5px solid #DEDDDB');
        $('.speaking-wrapper').css('display', 'block');
        $('.workshops-wrapper , .coaching-wrapper').css('display', 'none');
    
      } 
      else if (window.location.hash === '#coaching') 
      {
        $('#bread-coach').css('border-bottom', '5px solid #FF5301');
        $('#bread-speak').css('border-bottom', '5px solid #DEDDDB');
        $('#bread-workshop').css('border-bottom', '5px solid #DEDDDB');
        $('.coaching-wrapper').css('display', 'block');
        $('.speaking-wrapper , .workshops-wrapper').css('display', 'none');
      }
    });


  /* Breadcrumb click functions */
    $('#bread-workshop').on('click', function() {
      $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
      $('#bread-speak').css('border-bottom', '5px solid #DEDDDB');
      $('#bread-coach').css('border-bottom', '5px solid #DEDDDB');
      $('.workshops-wrapper').css('display', 'block');
      $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');
    });

    $('#bread-speak').on('click', function() {
      $('#bread-speak').css('border-bottom', '5px solid #FF5301');
      $('#bread-coach').css('border-bottom', '5px solid #DEDDDB');
      $('#bread-workshop').css('border-bottom', '5px solid #DEDDDB');
      $('.speaking-wrapper').css('display', 'block');
      $('.workshops-wrapper , .coaching-wrapper').css('display', 'none');
    });
    
    $('#bread-coach').on('click', function() {
      $('#bread-coach').css('border-bottom', '5px solid #FF5301');
      $('#bread-speak').css('border-bottom', '5px solid #DEDDDB');
      $('#bread-workshop').css('border-bottom', '5px solid #DEDDDB');
      $('.coaching-wrapper').css('display', 'block');
      $('.speaking-wrapper , .workshops-wrapper').css('display', 'none');
    });
  /* Header Scroll Auto-Sizing Function */
    function serviceHeaderResize() {
      var docYval = window.pageYOffset;
      var headerResize = 50;
      if (docYval > headerResize) {
        $('.page-template-page-services').find('#site-navigation').addClass('header-resized');
        $('.header-resized').css('height','150px');
      } else {
        $('.page-template-page-services').find('#site-navigation').removeClass('header-resized');
        $('.page-template-page-services').find('#site-navigation').css('height','200px');
      }
    }
    window.addEventListener('scroll',serviceHeaderResize);

  });
})(jQuery);