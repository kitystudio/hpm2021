$(function(){
  $('.close').click(function(){
    $(this).parent().fadeOut();
  });
  
  $('.servicedetail_button').click(function(){
    $(this).next().fadeIn();
  });
  
  $('.menutoggle').click(function(){
    $(this).next().fadeToggle();
 /*   if ($(this).next().css("right") == "-10rem") {
      $(this).next().animate({"right":"1rem"});
    } else {
      $(this).next().animate({"right":"-10rem"});
    }*/
  });
//  $('').click(function(){});
});