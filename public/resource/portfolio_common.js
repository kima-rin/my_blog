var winWidth = $(window).outerWidth();

function winResize__init(){
    $(window).resize(function(){
        winWidth = $(window).outerWidth();
        Box1__init();
    })
}




/*portfolio_blur_init*/
var BlurIn__loaded = false;
var BlurIn__length = 0;
var BlurIn__loadedLength = 0;

function BlurIn__init() {
    $('.blur-in').each(function (index, el) {
        var $el = $(el);
        var duration = $el.attr('data-blur-in-duration');
        var $blurItem = $el.find(' > .blur-item');
        var $blurItemClone = $blurItem.clone();
        $blurItem.addClass('origin');
        $blurItemClone.addClass('clone');
        $el.append($blurItemClone);
        var htmlCover = '<div class="blur-item-cover-box"><div class="blur-item-cover first"></div><div class="blur-item-cover second"></div></div>';
        $el.append(htmlCover);
        $el.find('.blur-item-cover').css('transition-duration', duration + 's');
    });

    $('.btn-active-all-blur-in').click(function () {
        $('.blur-in').addClass('active');
    });

    $('.btn-inactive-all-blur-in').click(function () {
        $('.blur-in').removeClass('active');
    });

    BlurIn__length = $('.blur-in[data-trigger-active-delay]').length;

    $('.blur-in[data-trigger-active-delay]').each(function (index, el) {
        var $el = $(el);
        var delay = parseInt($el.attr('data-trigger-active-delay'));
        setTimeout(function () {
            $el.addClass('active');
            BlurIn__loadedLength++;

            if (BlurIn__length == BlurIn__loadedLength) {
                BlurIn__loaded = true;
            }
        }, delay);
    });

    $('.blur-in-before-hidden').removeClass('blur-in-before-hidden');
}

function onLeavePageA() {
    $('.blur-in.active').each(function (index, el) {
        var $el = $(el);

        var inactiveDelay = $el.attr('data-trigger-inactive-delay');

        if (!inactiveDelay) {
            inactiveDelay = 0;
        }

        setTimeout(function () {
            $el.addClass('for-leave');
            $el.removeClass('active');
        }, inactiveDelay);
    });
}

function onLeavePageB() {
    $('.blur-in.active').each(function (index, el) {
        var $el = $(el);

        var inactiveDelay = $el.attr('data-trigger-inactive-delay');

        if (!inactiveDelay) {
            inactiveDelay = 0;
        }

        setTimeout(function () {
            $el.addClass('for-leave');
            $el.removeClass('active');
        }, inactiveDelay);
    });
}

function movePage(el) {
    var url = $(el).attr('href');

    movePageLink(url);
}

function movePageLink(url) {
    if (BlurIn__loaded == false) {
        location.href = url;
        return;
    }

    var delay = 2000;

    if (location.href.indexOf('/portfolio_A.php') !== -1) {
        delay = 2000;
        onLeavePageA();
    } else if (location.href.indexOf('/portfolio_B.php') !== -1) {
        delay = 2000;
        onLeavePageB();
    }

    setTimeout(function () {
        location.href = url;
    }, delay);
}

function enableAutoNext() {
    var $btnNext = $('.btn-next');
    var url = $btnNext.attr('href');

    var delay = 18000;

    if (url.indexOf('/portfolio_B.php') !== -1) {
        delay = 15000;
    }

    $btnNext.find(' > div').css('transition-duration', delay / 1000 + 's');

    setTimeout(function () {
        $btnNext.addClass('start-count');
    }, 10);

    setTimeout(function () {
        movePageLink(url);
    }, delay);
}

$(function () {
    BlurIn__init();

    $('.btn-next').click(function () {
        $(this).removeClass('start-count');
        $(this).find(' > div').css('transition-duration', '0s');
    });
});

function TabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');
        // [for]
        // 紐⑤뱺 寃껋쓣 �④린怨�
        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
}

function leftSideBar__init() {
    $('left-side-bar>.rs-logo-box>.btn-toggle-mobile-side-bar').click(function () {
        var $this = $(this);

        if ($this.hasClass('active')) {
            $this.removeClass('active');
            $('.left-side-bar').removeClass('active');
        } else {
            $this.addClass('active')
            $('.left-side-bar').addClass('active');
        }
    });
}

function listviewSlide__init() {
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
}

/*portfolio-c �щ씪�대뱶*/

var Box1__$slider1;
var Box1__detailBoxWidth = $('.box-1 > .box-detail').width();
var Box1__detailBoxNowAnimating = false;

var Box1__next = function() {};

function Box1__init() {
    Box1__$slider1 = $('.box-1 .slider-1');
    var slidesCount = Box1__$slider1.find('.slide').length;
    var Box1__slider1Width = Box1__$slider1.width();

    Box1__$slider1.css('margin-left', -Box1__slider1Width);

    if (winWidth < 1441) {
        Box1__$slider1.animate({
            'margin-left': 751 + 'px'
        }, 2000, "easeOutCirc");
    } else {
        Box1__$slider1.animate({
            'margin-left': 801 + 'px'
        }, 2000, "easeOutCirc");
    }

    var $box1 = $('.box-outer > .box-1');

    var currentIndex = 0;
    var wheelIsUp = false;

    function Box1__move() {
        if (wheelIsUp) {
            currentIndex--;
        } else {
            currentIndex++;
        }

        if(winWidth < 1441) {
            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex + 1 > slidesCount - 2) {
                currentIndex = slidesCount - 2;
            }
        }
        else {
            if (currentIndex < 0) {
                currentIndex = 0;
            } else if (currentIndex + 1 > slidesCount - 3) {
                currentIndex = slidesCount - 3;
            }   
        }

        //Box1__$slider1.css('left', currentIndex * 301 * -1);
        Box1__$slider1.stop().animate({
            'left': currentIndex * 301 * -1
        }, 100);
    }

    function slideScroll(){
        var $scroll = $('.wheel-slider-scroll');
        var $scrollBar = $scroll.find(' > .scroll-bar');
        var basicBarWidth = parseInt($scrollBar.attr('data-basic-width'));
        var barSpeed = $scrollBar.attr('data-basic-width');
        var barMaxWidth = 901;
    
        var slideCount = $('.box-outer .slider-1 .slides > .slide').length;
        var viewItemNum = 3;
    
        if(winWidth < 1441) {
            viewItemNum = 2;
            barMaxWidth = 601;
        }
    
        var barWidth = (barMaxWidth - basicBarWidth) / (slideCount - viewItemNum);
        
        var viewItemNum = parseInt(viewItemNum);
        
        $scrollBar.stop().animate({
          width: basicBarWidth + (barWidth * currentIndex) + 'px'
        }, barSpeed);
    }

    Box1__next = function() {
        wheelIsUp = false;
        Box1__move();
        slideScroll();
    }

    Box1__prev = function() {
        wheelIsUp = true;
        Box1__move();
        slideScroll();
    }

    setTimeout(function () {
        $('.box-outer').on('mousewheel DOMMouseScroll', function (e) {
            var E = e.originalEvent;
            delta = 0;
            
            if (E.detail) {
                delta = E.detail * -40;
                wheelIsUp = delta > 0;
            } else {
                delta = E.wheelDelta;
                wheelIsUp = delta > 0;
            };

            Box1__move();
            slideScroll();
        });

        var $detailBoxTitleFlyable = $('.box-outer > .box-1 > .box-detail .title.flyable');
        var $detailBoxTxt1Flyable = $('.box-outer > .box-1 > .box-detail .txt1.flyable');
        var $detailBoxTxt2Flyable = $('.box-outer > .box-1 > .box-detail .txt2.flyable');
        var $detailBoxImgBoxFlyable = $('.box-outer > .box-1 > .box-detail .img-box.flyable');

        var $detailBoxTitleNotFlyable = $('.box-outer > .box-1 > .box-detail .title:not(.flyable)');
        var $detailBoxTxt1NotFlyable = $('.box-outer > .box-1 > .box-detail .txt1:not(.flyable)');
        var $detailBoxTxt2NotFlyable = $('.box-outer > .box-1 > .box-detail .txt2:not(.flyable)');
        var $detailBoxImgBoxNotFlyable = $('.box-outer > .box-1 > .box-detail .img-box:not(.flyable)');

        var $detailBoxTitle = $('.box-outer > .box-1 > .box-detail .title');
        var $detailBoxTxt1 = $('.box-outer > .box-1 > .box-detail .txt1');
        var $detailBoxTxt2 = $('.box-outer > .box-1 > .box-detail .txt2');
        var $detailBoxTxt3 = $('.box-outer > .box-1 > .box-detail .txt3');
        var $detailBoxImgBox = $('.box-outer > .box-1 > .box-detail .img-box');

        $('.box-outer > .box-1 > .slider-1 > .slides > .slide').click(function () {
            if (Box1__detailBoxNowAnimating) {
                return;
            }

            Box1__detailBoxNowAnimating = true;

            $('.box-1 > .box-detail').addClass('in-change');

            setTimeout(function () {
                $('.box-1 > .box-detail').removeClass('in-change');
                Box1__detailBoxNowAnimating = false;
            }, 1000);

            var $title = $(this).find('.title');
            var $txt1 = $(this).find('.txt1');
            var $txt2 = $(this).find('.txt2');
            var $txt3 = $(this).find('.txt3');
            var $imgBox = $(this).find('.img-box');
            var $imgBox2 = $(this).find('.img-box-2');

            $detailBoxTitle.html($title.html());
            $detailBoxTxt1.html($txt1.html());
            $detailBoxTxt2.html($txt2.html());
            $detailBoxTxt3.html($txt3.html());
            $detailBoxImgBox.html($imgBox2.html());

            var ani1Duration = 1000;

            $detailBoxTitleFlyable.css({
                top: $title.offset().top,
                left: $title.offset().left,
                opacity: 0
            });

            $detailBoxTitleFlyable.stop().animate({
                top: $detailBoxTitleNotFlyable.offset().top,
                left: $detailBoxTitleNotFlyable.offset().left,
                opacity: 1
            }, ani1Duration);

            $detailBoxTxt1Flyable.css({
                top: $txt1.offset().top,
                left: $txt1.offset().left,
                opacity: 0
            });

            $detailBoxTxt1Flyable.stop().animate({
                top: $detailBoxTxt1NotFlyable.offset().top,
                left: $detailBoxTxt1NotFlyable.offset().left,
                opacity: 1
            }, ani1Duration);

            $detailBoxTxt2Flyable.css({
                top: $txt2.offset().top,
                left: $txt2.offset().left,
                opacity: 0
            });

            $detailBoxTxt2Flyable.stop().animate({
                top: $detailBoxTxt2NotFlyable.offset().top,
                left: $detailBoxTxt2NotFlyable.offset().left,
                opacity: 1
            }, ani1Duration);

            $detailBoxImgBoxFlyable.css({
                width: $imgBox.width(),
                top: $imgBox.offset().top,
                left: $imgBox.offset().left,
                opacity: 0
            });

            $detailBoxImgBoxFlyable.stop().animate({
                width: $detailBoxImgBoxNotFlyable.width(),
                top: $detailBoxImgBoxNotFlyable.offset().top,
                left: $detailBoxImgBoxNotFlyable.offset().left,
                opacity: 1
            }, ani1Duration);
        });
    }, 2000);

    $('.box-1 .txt1 img').click(Box1__next);
}

function popup__init() {
    function popupOpen() {
      var $this = $(this);
      var itemIndex = $this.attr("data-popup-index");
      var $popupBox = $(".popup-box");
      var $popupBg = $(".popup-bg");
      var $popupItem = $popupBox.find(".popup-items > .popup-item");

      
  
      console.log(itemIndex);
  
      $popupBg.addClass("active");
      $popupBox.addClass("active");
      $popupItem.eq(itemIndex).addClass("active");
      $popupBox.find('> .popup-items').scrollTop(0);
    }
  
    function popupClose() {
      var $popupBox = $(".popup-box");
      var $popupBg = $(".popup-bg");
      var $popupItem = $popupBox.find(".popup-items > .popup-item");
  
      $popupBox.removeClass("active");
      $popupBg.removeClass("active");
      $popupItem.removeClass("active");
    }
  
    function popupArrow() {
      var $this = $(this);
      var $popupBox = $this.closest(".popup-box");
      var $popupItem = $popupBox.find(".popup-items > .popup-item.active");
      var post;
      if ($this.index() == 0) {
        post = $popupItem.prev();
      } else {
        post = $popupItem.next();
      }
  
      if (post.length == 0) {
        if ($this.index() == 0) {
          post = $popupBox.find(".popup-items > .popup-item:last-child");
        } else {
          post = $popupBox.find(".popup-items > .popup-item:first-child");
        }
      }
  
      $popupItem.removeClass("active");
      post.addClass("active");
    }
  
    $(".popup-bg, .btn-close, .popup-button > button").on(
        "mousewheel DOMMouseScroll",
        function (e) {
          e.preventDefault();
          e.stopPropagation();
          return;
        }
      );
  
    $(".btn-popup-item").click(popupOpen);
  
    $(".popup-bg, .btn-close").click(popupClose);
  
    $(".popup-button > button").click(popupArrow);
  }
  
  

$(function () {
    TabBox__init();
    leftSideBar__init();
    listviewSlide__init();
    Box1__init();
    winResize__init();
    popup__init();
});