$(function(){
  
  // Toggle "visually-hidden" class
  $('.link-primary').hover(function(){
     $(this).find('.links-sub').toggleClass('visually-hidden');
     $('>a',this).toggleClass('active');
  });

  // Calc nav and div.links-sub width
  var navWidth = $('.nav-main').width();
  var subWidth = $('.links-sub').width(); 
     
  $('.link-primary').each(function(){
    //$(this).find('.links-sub').toggleClass('active');
    var linkPos = $(this).position();
    if (linkPos.left+subWidth >= navWidth) {
      $(this).toggleClass('push');
    }
  });
  
});