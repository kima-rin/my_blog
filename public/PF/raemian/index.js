console.clear();

function topBackground__init(){
    var $topBar = $('.top-bar')
  $topBar.find('.con > ul > li').mouseenter(function () {
    $topBar.addClass('background-actived');
  });

  $topBar.mouseleave(function () {
    $topBar.removeClass('background-actived');
  });
}
function btnToggle__init(){
    $('.btn-toggle-mobile-side-bar').click(function(){
        $(this).toggleClass('active');
    })
}

$(function(){
    topBackground__init();
    btnToggle__init();

});