jQuery(document).ready(function($) {

  $('.bannerslider').royalSlider({
      imageScaleMode: 'fill',
      slidesSpacing: 0,
      arrowsNavAutoHide: false,
      fadeinLoadedSlide: false,
      transitionType: 'fade',
      loop: 'true',
      autoPlay: {
          // autoplay options go gere
          enabled: true,
          // autoScaleSlider: true,
          pauseOnHover: false,
          delay: 3700
      },
      block: {
        // animated blocks options go gere
        fadeEffect: true,
        moveOffset: 900,
        speed : 3700,
        easing: 'easeOutCirc'

      }
  });


});

