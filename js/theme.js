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

});

