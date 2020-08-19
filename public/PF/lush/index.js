console.clear();

function topBackground__init(){
    var $topBar = $('.wrapper')
  $topBar.find('.top-menu-box>.menu-box-base>.top-menu-bar>nav>ul>li').mouseenter(function () {
    $topBar.addClass('background-actived');
  });

  $topBar.find('.top-menu-box>.menu-box-base>.top-menu-bar>nav>ul>li').mouseleave(function () {
    $topBar.removeClass('background-actived');
  });
}

var $window = $(window);

function miniTopBar_init(){
  var $miniTopBar = $('.top-menu-box-2');
  $(window).scroll(function(){
    var scrollTop = $window.scrollTop();
    if( scrollTop >= 300){
      $miniTopBar.addClass('active');
    }
    else{
      $miniTopBar.removeClass('active');
    }
  });
}



$(function(){
    topBackground__init();
    miniTopBar_init();
});