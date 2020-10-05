console.clear();

function Slider1_1__init() {
  var swiper = new Swiper('.swiper-container', {
    cssMode: true,
    loop: true,
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

var SliderBox7__boxIsHover = false;
var SliderBox7__nowInAnimation = false;

function SliderBox7__init() {
  var $box = $('.slider-box-7');

  $box.mouseenter(function() {
    SliderBox7__boxIsHover = true;
  });

  $box.mouseleave(function() {
    SliderBox7__boxIsHover = false;
  });

  var $item = $box.find('.items > .item');

  var $itemCurP0 = $box.find('.items > .item.item-p-0');
  var $itemCurP1 = $box.find('.items > .item.item-p-1');
  var $itemCurP2 = $box.find('.items > .item.item-p-2');
  var $itemCurP3 = $box.find('.items > .item.item-p-3');

  var $itemOldP0 = null;
  var $itemOldP1 = null;
  var $itemOldP2 = null;
  var $itemOldP3 = null;

  $box.find('.side-btns > div').click(function () {
    if ( SliderBox7__nowInAnimation ) {
      return;
    }

    SliderBox7__nowInAnimation = true;

    setTimeout(function() {
      SliderBox7__nowInAnimation = false;
    }, 3000);

    var isLeft = $(this).index() == 0;
    $itemOldP0 = $itemCurP0;
    $itemOldP1 = $itemCurP1;
    $itemOldP2 = $itemCurP2;
    $itemOldP3 = $itemCurP3;

    if (isLeft) {
      $itemCurP0 = $itemOldP0.prev();

      if ($itemCurP0.length == 0) {
        $itemCurP0 = $item.last();
      }

      $itemCurP1 = $itemOldP1.prev();

      if ($itemCurP1.length == 0) {
        $itemCurP1 = $item.last();
      }

      $itemCurP2 = $itemOldP2.prev();

      if ($itemCurP2.length == 0) {
        $itemCurP2 = $item.last();
      }

      $itemCurP3 = $itemOldP3.prev();

      if ($itemCurP3.length == 0) {
        $itemCurP3 = $item.last();
      }
    } else {
      $itemCurP0 = $itemOldP0.next();

      if ($itemCurP0.length == 0) {
        $itemCurP0 = $item.first();
      }

      $itemCurP1 = $itemOldP1.next();

      if ($itemCurP1.length == 0) {
        $itemCurP1 = $item.first();
      }

      $itemCurP2 = $itemOldP2.next();

      if ($itemCurP2.length == 0) {
        $itemCurP2 = $item.first();
      }

      $itemCurP3 = $itemOldP3.next();

      if ($itemCurP3.length == 0) {
        $itemCurP3 = $item.first();
      }
    }

    $itemOldP0.removeClass('item-p-0');
    $itemOldP1.removeClass('item-p-1');
    $itemOldP2.removeClass('item-p-2');
    $itemOldP3.removeClass('item-p-3');

    $itemCurP0.addClass('item-p-0');
    $itemCurP1.addClass('item-p-1');
    $itemCurP2.addClass('item-p-2');
    $itemCurP3.addClass('item-p-3');
  });
}

function SliderBox7__next() {
  if ( SliderBox7__boxIsHover == false && SliderBox7__nowInAnimation == false ) {
    $('.slider-box-7 > .side-btns > div:last-child').click();
  }
}

$(function () {
  Slider1_1__init();
  SliderBox7__init();
  setInterval(SliderBox7__next, 5000);
});