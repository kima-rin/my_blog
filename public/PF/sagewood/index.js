console.clear();

function fullpage__init(){
  new fullpage('#fullpage', {
    navigation: true,
    scrollbar: false,
    autoScrolling:true,
    anchors: ['anchor1', 'anchor2', 'anchor3', 'anchor4', 'anchor5'],
  });
}

$(function(){
  fullpage__init();
});

