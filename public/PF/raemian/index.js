console.clear();

function TopBar__init() {
  var $itemBottomLine = $('.top-bar .menu-box-1 > ul > .item-bottom-line');

  $('.top-bar .menu-box-1 > ul > li:not(.li-logo)').mouseenter(function () {
    var $li = $(this);

    var left = $li.position().left;
    var width = $li.width();

    $itemBottomLine.css({
      left: left,
      width: width
    })
  });
}

function BannerSlider__init() {
  setTimeout(function () {
    var swiper = new Swiper('.my-slider-1 > .swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.my-slider-1>.swiper-pagination',
        clickable: true,
      },
    });

    $('.my-slider-1').css('visibility', 'visible');
  }, 500);
}

function BannerSlider2__init() {
  setTimeout(function () {
    var swiper = new Swiper('.my-slider-2 > .swiper-container', {
      direction: 'vertical',
      loop: true,
      slidesPerView: 1,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  })
}

$(function () {
  TopBar__init();
  BannerSlider__init();
  BannerSlider2__init();
});