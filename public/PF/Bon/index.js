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
function interviewBox__init(){
  $('.my-slider-1-2 > .owl-carousel').owlCarousel({
    items:1,
    loop:true,
    margin:50,
    stagePadding:450,
    nav:true,
    navText: ['좌', '우']
  });
}


/* 발견되면 활성화시키는 라이브러리 시작 */
function ActiveOnVisible__init() {
  $(window).resize(ActiveOnVisible__initOffset);
  ActiveOnVisible__initOffset();

  $(window).scroll(ActiveOnVisible__checkAndActive);
  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__initOffset() {
  $('.active-on-visible').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.offset().top;
      $node.attr('data-active-on-visible-offsetTop', offsetTop);

      if ( !$node.attr('data-active-on-visible-diff-y') ) {
          $node.attr('data-active-on-visible-diff-y', '0');
      }

      if ( !$node.attr('data-active-on-visible-delay') ) {
          $node.attr('data-active-on-visible-delay', '0');
      }
  });

  ActiveOnVisible__checkAndActive();
}

function ActiveOnVisible__checkAndActive() { 
  $('.active-on-visible:not(.actived)').each(function(index, node) {
      var $node = $(node);

      var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
      var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
      var delay = parseInt($node.attr('data-active-on-visible-delay'));

      var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

      if ( $(window).scrollTop() + $(window).height() + diffY > offsetTop ) {
          $node.addClass('actived');

          setTimeout(function() {
              $node.addClass('active');
              if ( window[callbackFuncName] ) {
                  window[callbackFuncName]($node);
              }
          }, delay);
      }
  });
}

$(function() {
  ActiveOnVisible__init();
})
/* 발견되면 활성화시키는 라이브러리 끝 */


$(function () {
  TopBox__init();
  slideBox__init();
  interviewSlider1__init();
  ActiveOnVisible__init();
  interviewBox__init();
});