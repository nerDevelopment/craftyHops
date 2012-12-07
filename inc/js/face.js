$(document).ready(function(){
	if (Modernizr.localstorage) {
	FB.init({
		appId  : '193624530762471',
		status : true, // check login status
		cookie : true, // enable cookies to allow the server to access the session
	    	xfbml  : true, // parse XFBML
	    	oauth  : true // enable OAuth 2.0
	  });
	  
	  FB.getLoginStatus(function(response) {
	  		console.log("getLoginStatus object:", response)
	  		console.log("getLoginStatus response:", response.status)
	  		if (response.status === 'connected') {
	  			userFbId = response.authResponse.userID;
	  			accessToken = response.authResponse.accessToken;
	  		} else if (response.status === 'not_authorized') {
	  				// not_authorized
	  				console.log("not_authorized");
	  		} else {
	  			// not_logged_in
	  		}
	  	});
	  
	  	$("#fbloginbtn").on("click", function(){
	  		
	  		FB.login(function(response) {
	  			console.log("FB.login response", response);
	  			getFbInfo();
	  				
	  		});
	  	});
	  
	  	//Get user facebook information and update or add to database
	  	var getFbInfo = function(){
	  	
	  		console.log("getFbInfo function");
	  
	  		FB.api('/me', function(response) {
	  			userFbId = response.id;

	  			FB.api('/me/picture', function(pic){
	  				console.log(pic.data.url);
					$.post('../Jessica/index.php/Users/addFbUser',
						{'fbUser_id':response.id,
						'firstName':response.first_name,
						 'lastName':response.last_name,
						 'email':response.email,
						 'url': pic.data.url
						},function(response){
							console.log("added to database", response.id);
							window.location = 'http://www.crafty-hops.com/Jessica';
						}
	  				);
	  			});	  				  			
	  		});	  
	  	};
	 } 
});
