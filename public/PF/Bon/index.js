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
  var $btnIndex = $this.index();
  var $parent = $this.closest('.slide-box');
  var $activeDot = $parent.find(' > .slides-btn > .active');
  var $activeSlide = $parent.find(' > .slides > .active');
  var $slides = $parent.find(' > .slides > div');
  var $nowSlide = $slides.eq($btnIndex);
  

  $activeDot.removeClass('active');
  $activeSlide.removeClass('active');
  $this.addClass('active');
  $nowSlide.addClass('active');

  




}



















function slideBox__init(){
  var imgP = [];
  for (var i = 0 ; i < $('.slide-box > .slides > div').length; i++ ) {
    imgP.push($('.slide-box > .slides > div').eq(i).position().left);
  }
  console.log(imgP);

  $('.slide-box > .slides-btn > li').click(slide);
}


$(function(){
    TopBox__init();
    resizeImg();
    slideBox__init();
});