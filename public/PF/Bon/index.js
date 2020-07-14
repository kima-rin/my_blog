console.clear();
var $window = $(window);
var $html = $('html');

function TopBox__init() {
    var $topBox = $('.top-box');

    $topBox.find('.btn-close-ad-bar').click(function(){
        $topBox.addClass('ad-bar-closed');
        $html.addClass('top-box-ad-bar-hidden')
    });

    $topBox.find('.top-bar .menu-box-1').mouseenter(function() {
        $topBox.addClass('background-actived');
    });

    $topBox.mouseleave(function(){
        $topBox.removeClass('background-actived');
    });
    
    $(window).scroll(function() {
        var scrollTop = $window.scrollTop();
        console.log(scrollTop);
    
        if ( scrollTop > 0 ) {
          $topBox.addClass('ad-bar-hidden');
          $topBox.addClass('background-middle');
        }
        else {
          $topBox.removeClass('ad-bar-hidden');
          $topBox.removeClass('background-middle');
        }
      });
       

}
function SlideBox__init(){
  var $slideBox=$('.slide-box');

  $slideBox.find('>.slides-btn>li').click(function(){
    var $this=$(this);
    var $slides = $this.parent().parent();
    var $current = $slides.find('>.slides>div.active');
    var $post = $current.next();

    if($post.length == 0){
      $post = $slides.find('>.slides>div:first-child');
    }

    $current.removeClass('active');
    $post.addClass('active');

  });

}

$(function(){
    TopBox__init();
    SlideBox__init();
});
