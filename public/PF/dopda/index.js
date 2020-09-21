console.clear();

function Slider1_1__init() {
    var swiper = new Swiper('.slider-1-1 > .swiper-container', {
      effect:'fade',
      speed:0,
      loop: true,
      pagination: {
        el: '.slider-1-1 .swiper-pagination',
        type: 'fraction',
      },
      autoplay:{
      delay:3000,
     },
    });
  
    var $count = $('.slider-1-1 .count');
    swiper.on('slideChange', function () {
      $count.text(swiper.realIndex + 1);
    });
  }

  
  
  $(function(){
    Slider1_1__init();
   })
  