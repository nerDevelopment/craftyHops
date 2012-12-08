$(document).ready(function(){
//initualize ketchup
$.ketchup.messages({
  required : 'Enter a beer please!'
});
$('#suggestBeer').ketchup();

$.ketchup.messages({
  required : 'Please fill out this field.'
});

$("#addBeer").ketchup();

$.ketchup.messages({
  required : 'Please enter your password!',
  email : 'Please enter a valid email address.',
});

$("#loginForm").ketchup();

$.ketchup.messages({
  required : 'Please fill out this field',
  email : 'Please enter a valid email address.',
});

$("#registerForm").ketchup();


//hidden messaes for the user to see once even happens
$("#succesMess").hide();
$(".notamember").hide();


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
  $("#suggection").hide();
  
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
 	$(".ketchup-error").hide();
 });
 
 $(".navFavorite").click(function(){
  	$("#home").hide();
 	$("#login").hide();
 	$("#addBeer").hide();
 	$("#register").hide();
 	$(".ketchup-error").hide();
 	
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
 	$(".ketchup-error").hide();
 	
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
   	$(".ketchup-error").hide();
   	
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
  	$(".ketchup-error").hide();
  	
  	if($('body').hasClass('active')){
  		$("body").toggleClass("active");
  		enable_scroll();
  	};
  	
  	$("#register").show();
  	return false;
  });
  
  //Double check that the registreation email is valid
	function validateEmail(sEmail){
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if(filter.test(sEmail)){
			return true;
		}else{
			return false;
		}
	}
	
	  //button page switch
  $("#suggestBeer").submit(function(){
  		$("#home").hide();
  		$("#favorite").hide()
  		$("#addBeer").hide();
  		$("#login").hide();
  		$(".ketchup-error").hide();
  		$("#register").hide();
  		
  		if($('body').hasClass('active')){
  			$("body").toggleClass("active");
  			enable_scroll();
  		};
  		$("#suggection").show();
  		return false;
  		
  });
  
  $("#registerPage").submit(function(){
  	var sEmail = $('#email').val();
  	
	 if($("#firstN").val() == "" || $("#lastN").val() == "" || $("#email").val() == "" || $("#pass").val() == "" || $("#repass").val() == "")
	 {
	    return false;
	}else {
		if(validateEmail(sEmail))
		{
			if($("#pass").val() == $("#repass").val())
			{
			$.post('../Jessica/index.php/Users/addUserToData',
					{'firstN': $("#firstN").val(),
					'lastN': $("#lastN").val(),
					 'email': $("#email").val(),
					 'pass': $("#pass").val()
					},function(success){
						window.location = 'http://www.crafty-hops.com/Jessica';		
				});
				}else{
				$(".error").append('<p>Please make sure your passwords match!</p>');
					return false;
				}
		}else{
			return false;
		}
	}
  	return false;
  });
  
  $("#addBeer").submit(function(){
  		$.post('../Jessica/index.php/Email',
  		{'name': $('#name').val(),
  		'brewed': $('#brewed').val(),
  		'img': $('#beerimage').val()
  		},function(success){
	
  	$('#succesMess').fadeIn().delay(5000).fadeOut('slow');
  	
  	});
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
