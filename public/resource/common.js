console.clear();
function MobileSideBar__toggle() {
  var $btn = $('.btn-toggle-mobile-side-bar');
  var $mobileSideBar = $('.mobile-side-bar');
  var $mobileSideBarBg = $('.mobile-side-bar-bg');
  var $html = $('html');



  if ( $btn.hasClass('active') ) {
      $btn.removeClass('active');
      $mobileSideBar.removeClass('active');
      $mobileSideBarBg.removeClass('active');
      $html.removeClass('mobile-side-bar-actived');
  }
  else {
      $btn.addClass('active');
      $mobileSideBar.addClass('active');
      $mobileSideBarBg.addClass('active');
      $html.addClass('mobile-side-bar-actived');
  }
}

function MobileSideBar__init() {
  $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);
  $('.mobile-side-bar>.mobile-menu-bar ul>li').click(function(e){
    if ($(this).hasClass('active')){
      $(this).removeClass('active');
    }
    else{
      $(this).addClass('active');
    }
    e.stopProagation();
  });
  
}

$(function() {
  MobileSideBar__init();

  $('btn-toggle-mobile-side-bar').click();
  $('mobile-side-bar>.mobile-menu-bar > ul>li:last-child').click();
});

$('.sbs-slider .side-bars > div').click(function(){
  var $this = $(this);
  var $slider = $this.parent().parent();
  var $current = $slider.find('> .slides > img.active');
  var $post = $current.next();

 $current.removeClass('active');
 $post.addClass('active');
});