console.clear();
var $window = $(window);
var $html = $('html');

function TopBox__init() {
  var $topBox = $('.top-box');

  $topBox.find('.btn-close-ad-bar').click(function () {
    $topBox.addClass('ad-bar-closed');
    $html.addClass('top-box-ad-bar-hidden')
  });

  $topBox.find('.top-bar .menu-box-1').mouseenter(function () {
    $topBox.addClass('background-actived');
  });

  $topBox.mouseleave(function () {
    $topBox.removeClass('background-actived');
  });

  $(window).scroll(function () {
    var scrollTop = $window.scrollTop();
    console.log(scrollTop);

    if (scrollTop > 0) {
      $topBox.addClass('ad-bar-hidden');
      $topBox.addClass('background-middle');
    } else {
      $topBox.removeClass('ad-bar-hidden');
      $topBox.removeClass('background-middle');
    }
  });

  $topBox.find('.top-bar .menu-box-1 > ul > li').mouseenter(function () {
    $(this).addClass('active');
    $(this).siblings('.active').removeClass('active');
    $(this).find('.menu-item-bottom-line').css('width', 0);
  });

  // 메뉴박스1의 2차메뉴 올리기 이벤트 걸기
  $topBox.mouseleave(function () {
    $topBox.find('.top-bar .menu-box-1 > ul > li.active').removeClass('active');
  });

  $topBox.find('.top-bar .menu-box-1 ul > li').mouseenter(function () {
    var $this = $(this);
    var $span = $this.find(' > a > span');
    var $itemBottomLine = $this.parent().siblings('.menu-item-bottom-line');

    var width = $span.width();
    var left = $span.position().left;

    $itemBottomLine.css('width', width);
    $itemBottomLine.css('left', left);
  });

  $topBox.mouseleave(function () {
    $topBox.find('.menu-item-bottom-line').css('width', 0);
  });


}


function slideBox__init() {
  $('.my-slider-1 > .owl-carousel').owlCarousel({
    items: 1,
    loop: true
  });

}



$(function () {
  TopBox__init();
  slideBox__init();
});