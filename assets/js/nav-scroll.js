$(document).ready(function() {
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      //nav bar to stick.  
      //console.log($(window).scrollTop())
    if ($(this).scrollTop() > 215) {
	    $('nav ul').addClass('transition-background');
    } else if ($(this).scrollTop() == 0) {
	    $('nav ul').removeClass('transition-background');
    }
  });
});



