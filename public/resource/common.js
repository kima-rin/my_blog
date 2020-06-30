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


$(function () {
  slide();
  gridSlide();
});

function a(){
  $('.main-box > .slide-box > .side-btn> div:last-child').click();
}
setInterval(a, 3000);