jQuery(document).ready(function($) {

  $('.bannerslider').royalSlider({
      imageScaleMode: 'fill',
      slidesSpacing: 0,
      arrowsNav: false,
      controlNavigation: 'none',
      fadeinLoadedSlide: false,
      transitionType: 'fade',
      loop: 'true',
      autoPlay: {
          // autoplay options go gere
          enabled: true,
          pauseOnHover: false,
          delay: 3700
      },
      block: {
        // animated blocks options go gere
   
        speed : 1000,
        easing: 'easeOutCirc'

      }
  });

  $('.productSlider').royalSlider({
      imageScaleMode: 'fill',
      slidesSpacing: 0,
      controlNavigation: 'thumbnails',
      transitionType: 'fade'
  });

  // wrap every 3 items into a row div
  var rowFunction = function(){
  var row = $(".archiveProduct");
  var i = row.length;

  for(var i = 0; i < row.length; i+=3) {
    row.slice(i, i+3).wrapAll("<div class='row'></div>");
  }

};
  // call rowFunction
  rowFunction();

});

