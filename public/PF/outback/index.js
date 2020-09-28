console.clear();

function Slider1_1__init() {
    var swiper = new Swiper('.swiper-container', {
        cssMode: true,
        loop:true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        pagination: {
          el: '.swiper-pagination'
        },
        mousewheel: true,
        keyboard: true,
        autoplay: {
            delay: 3000,
          },
      });
  }

  $(function(){
    Slider1_1__init(); 
  });