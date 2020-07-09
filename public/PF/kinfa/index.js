console.clear();

function slide(){
    $('.bg-visual>.side-bars>div').click(function(){
        var $this = $(this);
        var $slider = $this.parent().parent();
        var $current = $slider.find('>.visual-box>div.active');
        var $post;
        var $isLeft = $this.index()==0;

        if($isLeft){
            $post = $current.prev();
            if($post.length == 0){
                $post = $slider.find('>.visual-box>div:last-child')
            }
        }
        else{
            $post = $current.next();

        if($post.length == 0){
            $post = $slider.find('>.visual-box>div:first-child')
        }
        }
        

        $current.removeClass('active');
        $post.addClass('active');
    })

};

$(function () {
    slide();
  });
