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

function loginEtc_init(){
  var $loginEtc = $('.charity-pot>.text-box>div>ul');
  $(window).scroll(function(){
    var scrollTop = $window.scrollTop();
    if( scrollTop >= 800){
      $loginEtc.addClass('active');
    }
    else{
      $loginEtc.removeClass('active');
    }
  });
}
function MainSlider__init() {
  var swiper = new Swiper(".main-slider-1> .swiper-container", {
      slidesPerView: 2,
      loop: true,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
      }
  });

  swiper.on('slideChange', function () {
      console.log('slide changed');
  });
}
function prodBox2__init() {
  var swiper = new Swiper('.my-slider-2 > .swiper-container', {
    slidesPerView: 6,
    spaceBetween: 30,
      loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
   navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

}



$(function(){
    topBackground__init();
    miniTopBar_init();
    loginEtc_init();
    MainSlider__init();
    prodBox2__init();
});