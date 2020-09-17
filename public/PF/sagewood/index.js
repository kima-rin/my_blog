console.clear();

function fullpage__init(){
  new fullpage('#fullpage', {
    navigation: true,
    scrollbar: false,
    autoScrolling:true,
    anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
  });
}



function mainSlider__init(){
  $('#fullpage .slider .side-bars > div').click(function(){
    var $this = $(this);
    var $slider = $this.parent(). parent();
    var $current = $slider.find(' > .slides > div.active');
    var $post;
    var $isLeft = $this.index() == 0;


    if($isLeft){
      $post = $current.prev();
      if($post.length == 0){
        $post = $slider.find('> .slides > div:last-child');
      }
    }  
    else{
      $post = $current.next();
      if($post.length == 0){
        $post = $slider.find('> .slides > div:first-child');
      }
    }

    $current.removeClass('active');
    $post.addClass('active');
  });

  setInterval(function(){
    $('#fullpage .page1 .slider .side-bars > div:last-child').click();
  }, 5000);
}

$(function(){
  fullpage__init();
  mainSlider__init();
});