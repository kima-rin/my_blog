console.clear();

function mainImage__init(){
    $('.first-view>.img-box-btn>div').click(function(){
        var $this = $(this);
        var $slider = $this.parent().parent();
        var $current = $slider.find('>.img-box>div.active');
        var $post = $current.next();
        
        if($post.length == 0){
            $post = $slider.find('>.img-box>:first-child');
        }
        
        $current.removeClass('active');
        $post.addClass('active');
      
    });
}

function toggleBtn__init(){
    $('.top-bar').click(function(){
        $(this).toggleClass('active');
    })
    

}
function a(){
    $('.first-view>.img-box-btn>div:last-child').click();
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

$(function(){
    mainImage__init();
    toggleBtn__init();
    setInterval(a, 3000);
    ActiveOnVisible__init()
})

$(function() {
    ActiveOnVisible__init();
  })