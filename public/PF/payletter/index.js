console.clear();

function TopBar__init() {
  var $topBar = $('.top-menu-box')
  $topBar.find('.top-menu-bar>.menu-box-1>ul>li').mouseenter(function () {
    $topBar.addClass('background-actived');
  });

  $topBar.mouseleave(function () {
    $topBar.removeClass('background-actived');
  });

}



function MainBannerBox__init() {
  /* 발견되면 활성화시키는 라이브러리 시작 */
  function ActiveOnVisible__init() {
    $(window).resize(ActiveOnVisible__initOffset);
    ActiveOnVisible__initOffset();

    $(window).scroll(ActiveOnVisible__checkAndActive);
    ActiveOnVisible__checkAndActive();
  }

  function ActiveOnVisible__initOffset() {
    $('.active-on-visible').each(function (index, node) {
      var $node = $(node);

      var offsetTop = $node.offset().top;
      $node.attr('data-active-on-visible-offsetTop', offsetTop);

      if (!$node.attr('data-active-on-visible-diff-y')) {
        $node.attr('data-active-on-visible-diff-y', '0');
      }

      if (!$node.attr('data-active-on-visible-delay')) {
        $node.attr('data-active-on-visible-delay', '0');
      }
    });

    ActiveOnVisible__checkAndActive();
  }

  function ActiveOnVisible__checkAndActive() {
    $('.active-on-visible:not(.actived)').each(function (index, node) {
      var $node = $(node);

      var offsetTop = $node.attr('data-active-on-visible-offsetTop') * 1;
      var diffY = parseInt($node.attr('data-active-on-visible-diff-y'));
      var delay = parseInt($node.attr('data-active-on-visible-delay'));

      var callbackFuncName = $node.attr('data-active-on-visible-callback-func-name');

      if ($(window).scrollTop() + $(window).height() + diffY > offsetTop) {
        $node.addClass('actived');

        setTimeout(function () {
          $node.addClass('active');
          if (window[callbackFuncName]) {
            window[callbackFuncName]($node);
          }
        }, delay);
      }
    });
  }

  $(function () {
    ActiveOnVisible__init();
  })
  /* 발견되면 활성화시키는 라이브러리 끝 */
}

function Slider1_1__init() {
  var swiper = new Swiper('.slider-1-1 > .swiper-container', {
    loop: true,
    pagination: {
      el: '.slider-1-1 .swiper-pagination',
      type: 'fraction',
    },
  });

  var $count = $('.slider-1-1 .count');
  swiper.on('slideChange', function () {
    $count.text(swiper.realIndex + 1);
  });
}



function Slider1_2__init() {
  var swiper = new Swiper('.slider-1-2 > .swiper-container', {
    loop: true,
    pagination: {
      el: '.slider-1-2 .swiper-pagination',
      type: 'fraction',
    },
  });

  var $count = $('.slider-1-2 .count');
  swiper.on('slideChange', function () {
    $count.text(swiper.realIndex + 1);
  });
}

function newsBoxSlider__init() {
  var swiper = new Swiper('.my-slider-2 > .swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
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


function MySlider1__init() {
  var swiper = new Swiper('.my-slider-1 > .swiper-container', {
    direction: 'vertical',
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
}




$(function () {
  TopBar__init();
  MainBannerBox__init();
  Slider1_1__init();
  Slider1_2__init();
  newsBoxSlider__init();
  MySlider1__init();
});