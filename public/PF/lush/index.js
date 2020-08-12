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

$(function(){
    topBackground__init();
});