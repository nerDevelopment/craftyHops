$(document).ready(function(){
//This is the side navigation function. It allows the button to be toggled and uses the functions below to enable and disable scrolling.
  var toggleBtn = $("#navbtn");
  if (toggleBtn.length > 0) {
  $("#navbtn").click(function(){
      $("body").toggleClass("active");
     	 enable_scroll();
    	  if($("body").hasClass("active"))
    	  {
		disable_scroll(); 
	}
      	return false;
    });
  }
//This lets the navigation work on top and works with the side swipe  
  $("#login").hide();
  $("#addBeer").hide();
  $("#favorite").hide();
  $("#register").hide();
  
  $(".navHome").click(function(){
  	$("#login").hide();
  	$("#addBeer").hide();
 	$("#favorite").hide();
 	$("#register").hide();
 	
 	if($('body').hasClass('active')){
 		$("body").toggleClass("active");
 		enable_scroll();
 	};
 	  	
 	$("#home").show();
 	return false;
 });
 
 $(".navFavorite").click(function(){
  	$("#home").hide();
 	$("#login").hide();
 	$("#addBeer").hide();
 	$("#register").hide();
 	
 	if($('body').hasClass('active')){
 		$("body").toggleClass("active");
 		enable_scroll();
 	};
 	
 	$("#favorite").show();
 	return false;
 });
 
 $(".navAddbeer").click(function(){
  	$("#home").hide();
 	$("#login").hide();
 	$("#favorite").hide();
 	$("#register").hide();
 	
 	if($('body').hasClass('active')){
 		$("body").toggleClass("active");
 		enable_scroll();
 	};
 	
 	$("#addBeer").show();
 	return false;
 });
  
  $(".navLogin").click(function(){
   	$("#home").hide();
   	$("#favorite").hide();
   	$("#addBeer").hide();
   	$("#register").hide();
   	
   	if($('body').hasClass('active')){
   		$("body").toggleClass("active");
   		enable_scroll();
   	};
   	
  	$("#login").show();
  	return false;
  });
  
  $(".navRegister").click(function(){
   	$("#home").hide();
   	$("#favorite").hide()
   	$("#addBeer").hide();
  	$("#login").hide();
  	
  	if($('body').hasClass('active')){
  		$("body").toggleClass("active");
  		enable_scroll();
  	};
  	
  	$("#register").show();
  	return false;
  });
  
  
  
  //This prevents the page from being scrollable when the side navigation bar is activated.
  var keys = [37, 38, 39, 40];
  
  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault)
        e.preventDefault();
    e.returnValue = false;  
  }
  
  function keydown(e) {
      for (var i = keys.length; i--;) {
          if (e.keyCode === keys[i]) {
              preventDefault(e);
              return;
          }
      }
  }
  
  function wheel(e) {
    preventDefault(e);
  }
  
  function disable_scroll() {
    if (window.addEventListener) {
        window.addEventListener('DOMMouseScroll', wheel, false);
    }
    window.onmousewheel = document.onmousewheel = wheel;
    document.onkeydown = keydown;
  }
  
  function enable_scroll() {
      if (window.removeEventListener) {
          window.removeEventListener('DOMMouseScroll', wheel, false);
      }
      window.onmousewheel = document.onmousewheel = document.onkeydown = null;  
  }
});
