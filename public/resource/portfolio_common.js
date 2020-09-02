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

            if ( BlurIn__length == BlurIn__loadedLength ) {
                BlurIn__loaded = true;
            }
        }, delay);
    });

    $('.blur-in-before-hidden').removeClass('blur-in-before-hidden');
}

function onLeavePageA() {
    $('.blur-in.active').each(function(index, el) {
        var $el = $(el);

        var inactiveDelay = $el.attr('data-trigger-inactive-delay');

        if ( !inactiveDelay ) {
            inactiveDelay = 0;
        }

        setTimeout(function() {
            $el.addClass('for-leave');
            $el.removeClass('active');
        }, inactiveDelay);
    });
}

function onLeavePageB() {
    $('.blur-in.active').each(function(index, el) {
        var $el = $(el);

        var inactiveDelay = $el.attr('data-trigger-inactive-delay');

        if ( !inactiveDelay ) {
            inactiveDelay = 0;
        }

        setTimeout(function() {
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
    if ( BlurIn__loaded == false ) {
        location.href = url;
        return;
    }

    var delay = 2000;

    if (location.href.indexOf('/portfolio_A.php') !== -1) {
        delay = 2000;
        onLeavePageA();
    } else if (location.href.indexOf('/portfolio_B.php') !== -1) {
        delay = 4000;
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

    setTimeout(function() {
        $btnNext.addClass('start-count');
    }, 10);

    setTimeout(function() {
        movePageLink(url);
    }, delay);
}

$(function () {
    BlurIn__init();

    $('.btn-next').click(function() {
        $(this).removeClass('start-count');
        $(this).find(' > div').css('transition-duration', '0s');
    });
});

function TabBox__init() {
    $('[data-tab-head-item-name]').click(function() {
      var $this = $(this);
      var tabName = $this.attr('data-tab-name');
      var itemName = $this.attr('data-tab-head-item-name');
      // [for]
      // 모든 것을 숨기고
      $('[data-tab-name="' + tabName + '"]').removeClass('active');
      
      $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
      $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
  }
  
  $(function () {
    TabBox__init();
  });