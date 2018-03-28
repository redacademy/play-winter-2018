(function ($) {
  $( document ).ready(function() {

    /* Hamburger Menu Functionality JS */
      $(window).on('resize', function () { /* Function triggers on menu sizing*/
        if (document.body.clientWidth < 800) {
          $('.menu-menu-1-container').css('display', 'block');
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
        $('.page-id-68').find('#site-navigation').append( '<header class="service-header">Services</header>' +
          '<div class="breadcrumb-bar">' +
          '<a id="bread-workshop" href="#workshop" class="bread-btn work-btn">Workshops</a>' +
          '<a id="bread-speak" href="#speaking" class="bread-btn speak-btn">Speaking</a>' +
          '<a id="bread-coach" href="#coaching" class="bread-btn coach-btn">Coaching</a>' +
          '</div>'
        );

        $('.page-id-68').find('#mobile-btn').removeClass('purple');
        $('.page-id-68').find('#mobile-btn').addClass('orange');

      /* Default services layout */
        $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
        $('#bread-speak , #bread-coach').css('border-bottom', '5px solid #DEDDDB');
        $('.workshops-wrapper').css('display', 'flex');
        $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');



      /* Services layout for Hashed URl */ 
        $(window).on('popstate', function () {
          if (window.location.hash === '#workshop') 
          {
            $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
            $('#bread-speak , #bread-coach').css('border-bottom', '5px solid #DEDDDB');
            $('.workshops-wrapper').css('display', 'flex');
            $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');
          }
          else if (window.location.hash === '#speaking') 
          {
            $('#bread-speak').css('border-bottom', '5px solid #FF5301');
            $('#bread-coach , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
            $('.speaking-wrapper').css('display', 'flex');
            $('.workshops-wrapper , .coaching-wrapper').css('display', 'none');
        
          } 
          else if (window.location.hash === '#coaching') 
          {
            $('#bread-coach').css('border-bottom', '5px solid #FF5301');
            $('#bread-speak , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
            $('.coaching-wrapper').css('display', 'flex');
            $('.speaking-wrapper , .workshops-wrapper').css('display', 'none');
          }
        });

      /* Content Display via Menu link fix */
        $(window).on('load', function (){ 
          if (window.location.hash === '#workshop') 
          {
            $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
            $('#bread-speak , #bread-coach').css('border-bottom', '5px solid #DEDDDB');
            $('.workshops-wrapper').css('display', 'flex');
            $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');
          }
          else if (window.location.hash === '#speaking') 
          {
            $('#bread-speak').css('border-bottom', '5px solid #FF5301');
            $('#bread-coach , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
            $('.speaking-wrapper').css('display', 'flex');
            $('.workshops-wrapper , .coaching-wrapper').css('display', 'none');
        
          } 
          else if (window.location.hash === '#coaching') 
          {
            $('#bread-coach').css('border-bottom', '5px solid #FF5301');
            $('#bread-speak , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
            $('.coaching-wrapper').css('display', 'flex');
            $('.speaking-wrapper , .workshops-wrapper').css('display', 'none');
          }
        })

      /* Breadcrumb click functions */
        $('#bread-workshop').on('click', function () {
          $('#bread-workshop').css('border-bottom', '5px solid #FF5301'); 
          $('#bread-speak , #bread-coach').css('border-bottom', '5px solid #DEDDDB');
          $('.workshops-wrapper').css('display', 'flex');
          $('.speaking-wrapper , .coaching-wrapper').css('display', 'none');
          window.scrollTo(0,0);
        });

        $('#bread-speak').on('click', function () {
          $('#bread-speak').css('border-bottom', '5px solid #FF5301');
          $('#bread-coach , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
          $('.speaking-wrapper').css('display', 'flex');
          $('.workshops-wrapper , .coaching-wrapper').css('display', 'none');
          window.scrollTo(0,0);
        });
        
        $('#bread-coach').on('click', function () {
          $('#bread-coach').css('border-bottom', '5px solid #FF5301');
          $('#bread-speak , #bread-workshop').css('border-bottom', '5px solid #DEDDDB');
          $('.coaching-wrapper').css('display', 'flex');
          $('.speaking-wrapper , .workshops-wrapper').css('display', 'none');
          window.scrollTo(0,0);
        });
      /* Header Scroll Auto-Sizing Function */
        function serviceHeaderResize () {
          var docYval = window.pageYOffset;
          var headerResize = 50;
          if (docYval > headerResize) {
            $('.page-id-68').find('#site-navigation').addClass('header-resized');
            $('.header-resized').css('height','150px');
          } else {
            $('.page-id-68').find('#site-navigation').removeClass('header-resized');
            $('.page-id-68').find('#site-navigation').css('height','200px');
          }
        }
        window.addEventListener('scroll',serviceHeaderResize);


    //Adding the text for the Form Thank You pop up


      $('.wpcf7-submit').on('click', function(){
        setTimeout(function(){
          if($('.wpcf7-mail-sent-ok').is(':visible')){
            $('.wpcf7-mail-sent-ok').empty().append('<div class="thank-you-container"><h2>Thank You!</h2><p>Your information package is on its way</p><a href="" id="thank-you-close-btn" class="btn orange thank-you-btn">Okay</a></div>');
          }
        }, 500);

        
      });


    
    
    
  });
})(jQuery);