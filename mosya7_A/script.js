

$(function(){
  
function hamburger(){
  $('.hamburger').toggleClass('active');

   if($('.hamburger').hasClass('active')){
    $('#navi').addClass('active');
   }else{
    $('#navi').removeClass('active');
   }
};


$('.hamburger').on('click',function(){
  
  hamburger();
});

$('.navi a').on('click',function(){

  hamburger();
});

$('.inview-slide-left').on('inview',function(event,isInView,visiblePartX,visiblePartY){
  if(isInView){
    $(this).stop().addClass('slide-left');
  }
});
$('.inview-slide-left').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
  if(isInView){
    // 要素が表示されたらslide-leftクラスを追加
    $(this).stop().addClass('slide-left');
  }
});

$('.inview-slide-right').on('inview',function(event, isInView, visiblePartX, visiblePartY){
  if(isInView){

    $(this).stop().addClass('slide-right');
  }
});

$('.inview-baloon').on('inview',function(event, isInView, visiblePartX, visiblePartY){
  if(isInView){
    $(this).stop().addClass('balloon')
  }
});


});