// Hamburger Menu Functionality JS

(function ($) {


  /**
   * Check if something exists 
   */
  // if($('.cats').length){
    // console.log($(this));
  // }

  /** Maybe better in media query */
  // if(document.body.clientWidth < 600){

  // } else {

  // }

  $('.menu-menu-1-container').hide();

  $('#menu-toggle').on('click', function() {
    $(this).toggleClass('is-active');

  
    $('.menu-menu-1-container').stop().slideToggle();

    })

    // if () {
    //   $('.hamburger').addClass('is-active');
    // } else {
    //   $('.hamburger').removeClass('is-active');
    // }
  // })
})(jQuery);