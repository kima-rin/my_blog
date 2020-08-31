console.clear();
function slide(){
  $('.main-box > .slide-box > .side-btn> div').click(function() {
    var $this = $(this);
    var $slider = $this.parent().parent();
    var $current = $slider.find('>.slides>div.active');
    var $post;
    var $isleft = $this.index()==0;

    if($isleft){
      $post = $current.prev();
      if($post.length == 0){
        $post = $slider.find('>.slides>div:last-child');
      }

    }
    else{
      $post = $current.next();
      if($post.length == 0){
        $post = $slider.find('>.slides>div:first-child')
      }

    }

    
    


    $current.removeClass('active');
    $post.addClass('active');
  
    
  });
}

function gridSlide(){
  var $grid = $('.grid');
  $grid.masonry({
    itemSelector: '.item',
    fitwidth: true
  });
  $grid.imagesLoaded().progress(function () {
    $grid.masonry('layout');
  });
}
function MobileSideBar__init() {
  $('.btn-toggle-mobile-side-bar').click(function() {
    var $this = $(this);
    
    if ( $this.hasClass('active') ) {
      $this.removeClass('active');
      $('.right-side-bar').removeClass('active');
    }
    else {
      $this.addClass('active')
      $('.right-side-bar').addClass('active');
    }
  });
}
/*portfolio_blur_init*/
function BlurIn__init() {
  $('.blur-in').each(function(index, el) {
    var $el = $(el);
    var duration = $el.attr('data-blur-in-duration');
    var $blurItem = $el.find(' > .blur-item');
    var $blurItemClone = $blurItem.clone();
    $blurItem.addClass('origin');
    $blurItemClone.addClass('clone');
    $el.append($blurItemClone);
    var htmlCover = '<div class="blur-item-cover-box"><div class="blur-item-cover first"></div><div class="blur-item-cover second"></div></div>';
    $el.append(htmlCover);
    $el.find('.blur-item-cover').css('transition-duration', duration + 's');
  });
  
  $('.btn-active-all-blur-in').click(function() {
    $('.blur-in').addClass('active');
  });
  
  $('.btn-inactive-all-blur-in').click(function() {
    $('.blur-in').removeClass('active');
  });
  
  $('.blur-in[data-trigger-active-delay]').each(function(index, el) {
    var $el = $(el);
    var delay = parseInt($el.attr('data-trigger-active-delay'));
    setTimeout(function() {
      $el.addClass('active');
    }, delay);
  });
}


$(function () {
  slide();
  gridSlide();
  MobileSideBar__init();
  BlurIn__init();
});

function a(){
  $('.main-box > .slide-box > .side-btn> div:last-child').click();
}
setInterval(a, 3000);