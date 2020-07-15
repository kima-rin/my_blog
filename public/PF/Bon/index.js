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

function resizeImg() {
  if ( $(window).width() > 1279 ){
    $('.slide-box > .slides > div').css('min-width', $(window).width() + 'px');
  }

  $(window).resize(function(){
    var windowWidth = $(window).width();
    if (windowWidth > 1279 ) {
      $('.slide-box > .slides > div').css('min-width', windowWidth + 'px');
    }
  })
}


function slide(){
  var $this = $(this);
  /* 클릭한 점의 순서 */
  var $btnIndex = $this.index();
  /* 점과 슬라이드를 감싸는 부모까지 올라가기 */
  var $parent = $this.closest('.slide-box');
  /* 슬라이드스 라는 박스를 찾기 */
  var $slideBox = $parent.find('> .slides');
  /* 액티브가 걸려있던 슬라이드와 점 찾기 */
  var $activeDot = $parent.find(' > .slides-btn > .active');
  var $activeSlide = $parent.find(' > .slides > .active');
  /* 모든 슬라이드들 찾기 */
  var $slides = $parent.find(' > .slides > div');
  /* 클릭한 순서와 동일한 순번의 슬라이드 선택 */
  var $nowSlide = $slides.eq($btnIndex);
  
  /* 액티브 걸린 슬라이드와 점에서 액티브를 빼고 클릭한 순서의 슬라이드와 점에 액티브 걸기 */
  $activeDot.removeClass('active');
  $activeSlide.removeClass('active');
  $this.addClass('active');
  $nowSlide.addClass('active');

  /* 새로 생긴 액티브를 찾기 */
  $activeSlide = $parent.find(' > .slides > .active');
  /* 액티브가 걸린 슬라이드의 상대적 좌표값 왼쪽을 구하기*/
  var $activePosition = $activeSlide.position().left;

  /* 슬라이드 박스의 left값을 바꾸기 */
  $slideBox.css('left', -$activePosition + 'px');

}

function intervalDot(){
  var $activeDot = $('.slide-box > .slides-btn > .active');
  var $post = $activeDot.next();

  if ($post.length != 0){
    $post.click();
  }
  else {
    $post = $('.slide-box > .slides-btn > li:first-child');
    $post.click();
  }
}

function slideBox__init(){
  $('.slide-box > .slides-btn > li').click(slide);

  setInterval(intervalDot, 10000);
}


$(function(){
    TopBox__init();
    resizeImg();
    slideBox__init();
});