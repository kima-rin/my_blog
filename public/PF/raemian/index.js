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
    var swiper = new Swiper('.my-slider-1 .swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: '.my-slider-1 .swiper-pagination',
        clickable: true,
      },
    });

    $('.my-slider-1').css('visibility', 'visible');
  }, 500);
}

$(function () {
  TopBar__init();
  BannerSlider__init();
});