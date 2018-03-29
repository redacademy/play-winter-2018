(function($){
  $( document ).ready(function() {
    $('.main-carousel').flickity({
      // options
      cellAlign: 'left',
      contain: true,
      wrapAround: true,
      prevNextButtons: false
    });
  })
})(jQuery);