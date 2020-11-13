console.clear();

function mySlider__init(){
    var swiper = new Swiper('.my-slider > .swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
          loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
       navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
}

$(function(){
    mySlider__init();
});