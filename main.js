
$(window).scroll(function() {
  $('#experience').each(function(){
   var imagePos = $(this).offset().top;
   var topOfWindow = $(window).scrollTop();
   if (imagePos < topOfWindow+1000) {
   $(this).addClass("slideUp");
   }
  });
});


$(window).scroll(function() {
      $('#1').each(function(){
       var imagePos = $(this).offset().top;
       var topOfWindow = $(window).scrollTop();
       if (imagePos < topOfWindow+1000) {
       $(this).addClass("slideRight");
       }
      });
    });
    
$(window).scroll(function() {
      $('#2').each(function(){
       var imagePos = $(this).offset().top;
       var topOfWindow = $(window).scrollTop();
       if (imagePos < topOfWindow+1000) {
       $(this).addClass("slideUp");
       }
      });
    });
    
$(window).scroll(function() {
      $('#3').each(function(){
       var imagePos = $(this).offset().top;
       var topOfWindow = $(window).scrollTop();
       if (imagePos < topOfWindow+1000) {
       $(this).addClass("slideLeft");
       }
      });
    });