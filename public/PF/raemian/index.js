console.clear();

function TopBar__init() {
  var $itemBottomLine = $('.top-bar .menu-box-1 > ul > .item-bottom-line');
  
  $('.top-bar .menu-box-1 > ul > li:not(.li-logo)').mouseenter(function() {
      var $li = $(this);
      
      var left = $li.position().left;
      var width = $li.width();
      
      $itemBottomLine.css({
          left:left,
          width:width
      })
  });
}



$(function(){
  TopBar__init();

});