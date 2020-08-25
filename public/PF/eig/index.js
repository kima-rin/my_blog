console.clear();

var $html = $('html');

function mainImage__init() {
    $('.first-view>.img-box-btn>div').click(function () {
        var $this = $(this);
        var $slider = $this.parent().parent();
        var $current = $slider.find('>.img-box>div.active');
        var $post = $current.next();

        if ($post.length == 0) {
            $post = $slider.find('>.img-box>:first-child');
        }

        $current.removeClass('active');
        $post.addClass('active');

    });
}

function toggleBtn__init() {
    $('.top-bar').click(function () {
        $(this).toggleClass('active');
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

/* 발견되면 활성화시키는 라이브러리 끝 */

function Slider__init() {
    setInterval(function () {
        $('.first-view>.img-box-btn>div:last-child').click();
    }, 13000);
}

function Ripple__init() {
    $('.first-view>.img-box>div:first-child').ripples({
        resolution: 512,
        dropRadius: 10, //px
        perturbance: 0.02,
    });

    // Automatic drops
    var rippleAni = setInterval(function () {
        var $el = $('.first-view>.img-box>div:first-child');
        var x = Math.random() * $el.outerWidth();
        var y = Math.random() * $el.outerHeight();
        var dropRadius = 10;
        var strength = 0.02 + Math.random() * 0.04;

        $el.ripples('drop', x, y, dropRadius, strength);
    }, 50);

    setTimeout(function () {
        clearTimeout(rippleAni);
    }, 1000);
}


$(function () {
    mainImage__init();
    toggleBtn__init();
    ActiveOnVisible__init();

    $html.addClass('actived');

    Ripple__init();

    setTimeout(function() {
        Slider__init();
    }, 5000);
});