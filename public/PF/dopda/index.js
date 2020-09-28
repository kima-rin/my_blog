console.clear();

var $window = $(window);

function TopBar_init(){
  var $TopBar = $('.top-menu-box > div');
  $(window).scroll(function(){
    var scrollTop = $window.scrollTop();
    if( scrollTop >= 300){
      $TopBar.addClass('active');
    }
    else{
      $TopBar.removeClass('active');
    }
  });
}

function Slider1_1__init() {
  var swiper = new Swiper('.slider-1-1 > .swiper-container', {
    effect: 'fade',
    speed: 0,
    loop: true,
    pagination: {
      el: '.slider-1-1 .swiper-pagination',
      clickable: true
    },
    autoplay: {
      delay: 3000,
    },
  });

  var $count = $('.slider-1-1 .count');
  swiper.on('slideChange', function () {
    $count.text(swiper.realIndex + 1);
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

/* 발견되면 활성화시키는 라이브러리 끝 */

$(function () {
  setTimeout(function() {
    TopBar_init();
    Slider1_1__init();
    ActiveOnVisible__init();
  }, 500);

})