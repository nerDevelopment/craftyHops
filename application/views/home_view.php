<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crafty Hops</title>
<!--  ====================	Meta Tags ====================	-->
	<meta charset="utf-8">
	<meta name="description" content="Tired of having to ask your bartenders what you might like to drink when trying different types of craft beers? Well, then this site is for you! Crafty Hops' main goal is to help figure out just what craft beer you might like!">
	<meta name="application-name" content="Crafty Hops">
	<!--	<meta name="robots" content="all">
	<meta name="googlebot" content="all">-->
	<meta name="author" content="nerdDevelopment">
<!--	<meta name="copyright" content="©nerdDevelopment">-->
	<meta name="format-detection" content="telephone=no">
<!--	<meta name="handheldfriendly">-->
	<meta name="viewport" content="initial-scale=.5; maximum-scale=.5">
	<meta name="keywords" content="craft beer, craft, beer, bartender, alcohol">
	
<!--  ====================	Style Sheets ====================	-->
	<link rel="stylesheet" href="inc/css/toast/toast.css" />
	<link rel="stylesheet" href="inc/css/screen.css"/>
	<link rel="stylesheet" href="inc/css/mobile.css"/>		
	<link rel="stylesheet" href="inc/js/plugins/ketchup/css/jquery.ketchup.css" type="" />
		
<!--  ==================	Google and modenizer js =================	-->	
	<script  src="inc/js/google.js" type="text/javascript"></script>
	<script src="inc/js/modernizr.js" type="text/javascript"></script>
<!--  ====================	ie exception sheets ====================	-->
	<!--[if lte IE 6]>
		<![endif]-->	
		<!--[if lt IE 9]>
		<![endif]-->		
</head>

  <body  class="hide-extras">
<!--  ====================	Header and navigation ====================	-->	
		
		<header>
			<div id="headerContent">
				
				<nav id="mainNav">
					<ul>
		    			<li class="circle"><a href="#home" class="navHome">Home</a></li>
		    			<li class="circle"><a href="#favorite" class="navFavorite">Favorite</a></li>
		    			<li class="circle"><a href="#addbeer" class="navAddbeer">Add a Beer</a></li>
		    			<li class="circle"><a href="#login" class="navLogin">Login</a></li>
		    			<li><a href="#register" class="navRegister">Register</a></li>
		    		</ul>
		    		</nav>
  			  <a class='navbtn' id="navbtn" href="#" >Menu</a>  			  
			</div><!--  end headerContent  -->
		</header>
		<div id="logoPos">
			<h4 id="logo"><a href="http://www.crafty-hops.com">Crafty Hops</a></h4>
		</div> <!--  end logoPos  -->
		
		<section id="sidenav" role="complementary">
				<ul>
					<li><a href="#home" class="navHome">Home</a></li>
					<li><a href="#favorite" class="navFavorite">Favorite</a></li>
					<li><a href="#addbeer" class="navAddbeer">Add a Beer</a></li>
					<li><a href="#login" class="navLogin">Login</a></li>
					<li><a href="#register" class="navRegister">Register</a></li>
				</ul>
		</section>
<!--  ====================  Content ====================	-->

<!--  ====================  Home page ====================	-->
		<article id="home">
			<div class="container">
				<div class="promoContent">
					<p class="tagLine"><span class="textShadow">What are your top three favorite beers?</span></p>
					<p class="subParagraph">Find your <span class="textShadow">Craft Beer</span> in seconds, with just one question. Just fill in the three boxes and click to <span class="textShadow">find</span> your beer!  It’s as <span class="textShadow">simple</span> as that!</p>
				</div><!--  end promoContent  -->
			
			<div class="posInput">
				<form method="post" action="#" name="suggestBeer" id="suggestBeer">
					<div class="wrap">
						<div class="grids">
							<div class="grid-4 ">
								<p><span>1</span><input class="sudggestInput" type="text" name="sudggest1"   data-validate="validate(required)"/></p>
		  	 	  		  	</div><!--  end grid-4  -->
							<div class="grid-4 ">
		  	 	  		  		<p><span>2</span><input class="sudggestInput" type="text" name="sudggest2"  data-validate="validate(required)" /></p>
		  	 	  		  	</div><!--  end grid-4  -->
		  	 	  		  	<div class="grid-4 ">
		  	 	  		  		<p><span>3</span><input class="sudggestInput" type="text" name="sudggest3" data-validate="validate(required)" /></p>
		  	 	  		  	</div><!--  end grid-4  -->
		  	 	  		  		<p class="btnPos"><button class="findBtn">Find Beer!</button></p>
						</div><!--  end grids -->
					</div><!--  end wrap  -->
				</form>
			</div><!--  posInput  -->
			
		  <div class="clear"></div>
		  	 
		  <div class="section">
				<div class="wrap">
		  	 	  	<div class="grids reasons">
		  	 	  		<div class="grid-4 ">
		  	 	  			<h3>FIND.</h3>	
		  	 	  			<img class="sideImg" src="inc/img/side.png" alt="" />
		  	 	  			<p class="text">Tell us your top three favorite beers and we'll caluclate a selection of craft beers for you.</p>
		  	 	  			<div class="clear"></div>
		  	 	  		</div><!--  end grid-4  -->	
		  	 	  		<div class="grid-4">
		  	 	  			<h3>ENJOY.</h3>	
		  	 	  			<img class="sideImg" src="inc/img/side.png" alt="" />
		  	 	  			<p class="text">Sort through suggested Craft beers and their reviews to enjoy the right taste for you.</p>  
		  	 	  			<div class="clear"></div>		
		  	 	  		</div><!--  end grid-4  -->	
		  	 	  		<div class="grid-4">
		  	 	  			<h3>SOCIALIZE.</h3>
		  	 	  			<img class="sideImg" src="inc/img/side.png" alt="" />		
		  	 	  			<p style="border: none;" class="text">Come back and tell us about your experence by writing a review, voting up a review, or adding a Craft beer to our collection.</p>
		  	 	  			<div class="clear"></div>
		  	 	  		</div><!--  end grid-4  -->
		  	 	  	</div><!--  end grids and reasons  -->
		  	 	  </div><!--  end wrap  -->
				</div><!--  end section  -->
			</div><!--  end container  -->
		</article><!--  end home  -->	
<!--  ====================  Suggection page ====================	-->
	<article id="suggection">
		<div class="container">
			<h1>Hello there</h1>
		</div><!--  end container  -->	
	</article><!--  end suggection  -->	

<!--  ====================  Favorite page ====================	-->

		<article id="favorite">
			<p>favorite</p>
		</article><!--  end favorite  -->

<!--  ====================  Add beer page ====================	-->
		<article id="addBeer">
			<div class="container">
				<div class="notamember">
					<p >Please make sure you are logged in to view this feature!</p>
				</div><!--  end notamember  -->
					
				<div class="membercontent">
				<div id="succesMess">
					<p>Thank you for helping us build up our database! Your fellow beer friends thank you! Add some more, come on, you know you want to!</p>
				</div>
					<div id="addForm" class="stylized">
						<div class="wrap">
							<div class="grids">
								<div class="grid-6 info">
									<h2>Add a Beer</h2>
									<p>Add a beer to our database and help other users! While we might be amazing in our knowlage, we sadly don't know everything about you local beers. That means that we a little help from YOU by adding beers to our database. This way we can let everyone know about the awesome beers in your area!</p>
									<p>Please keep in mind that your beer has to go through our moderators just to make sure everything is perfect before it will show up in our database or on the website.</p>
								</div><!--  end grid-6 -->
								<div class="grid-6">
									<form id="addBeer" name="form" method="post" action="#">
										<ul class="fields">										
											<li>	<span class="titles">Name:</span><input type="text" name="name" class="colorized" id="name" data-validate="validate(required)"/></li>
											<li><span class="titles">Brewed by:</span><input type="text" name="brewed" id="brewed" class="colorized"/></li>
											<li><span class="titles">File:</span><input type="file" class="file" name="beerimage" id="beerimage"  /></li>
											<li><input type="submit"  value="Add" class="submit"/></li>
										</ul><!-- end fields  -->
									</form><!--  end addBeer -->
								</div><!--  end grid-6 -->
							</div><!--  end grids  -->
						</div><!--  end wrap  -->		
					</div><!--  end addForm  -->
				</div><!--  end membercontent  -->
			 </div><!--  end container  -->	 	
		</article><!--  end addBeer page -->	
			
<!--  ====================  Login page ====================	-->
			
		
		<article id="login">
			<div class="container">
				<div class="notamember">
					<p >Please make sure you are logged in to view this feature!</p>
				</div><!--  end notamember  -->
				
				<div class="membercontent">
					<div id="loginForm" class="stylized">
						<form id="login" name="form" method="post" action="#">
						<div class="twoCol">
							<ul class="fields">
								<li class="fbbutton"><a id="fbloginbtn" href="#">Facebook</a></li>
							</ul>		
							
							<div class="clear"></div>
									
							<h2 id="or">Or</h2>
							
							<h2>Login</h2>
									
							<ul class="fields">
								<li><span class="titles">Email:</span><input type="text" name="logemail" id="logemail" class="colorized" data-validate="validate(email)"/></li>
								<li><span  class="titles">Password:</span><input type="text" name="logpass" id="logpass" class="colorized" data-validate="validate(required)"/></li>
								<li><input type="submit"  value="Register" class="submit"/></li>
							</ul>
									
							<div class="clear"></div>							
						</div><!--  end twoCol  -->	
						</form>
					</div><!--  end loginForm  -->
				</div><!--  end membercontent  -->
			</div><!--  end container  -->
		</article><!--  end login page  -->
		
<!--  ====================  Register page ====================	-->
		<article id="register">
			<div class="container">
				<div class="notamember">
					<p >Please make sure you are logged in to view this feature!</p>
				</div><!--  end notamember  -->
					
				<div class="membercontent">
					<div id="registerForm" class="stylized">
						<form id="registerPage" name="form" method="post" action="#">
							<h2>Register</h2>
							<div class="twoCol">
								<ul class="fields">
									<li><span class="titles">First name:</span><input type="text" name="firstN" id="firstN" class="colorized" data-validate="validate(required)"/></li>
									<li><span  class="titles">Last Name:</span><input type="text" name="lastN" id="lastN" class="colorized" data-validate="validate(required)"/></li>							
									<li>	<span class="titles">Email:</span><input type="text" name="email" class="colorized" id="email" data-validate="validate(email)"/></li>
									<li>	<span class="titles">Password:</span><input type="text" name="pass" class="colorized" id="pass" data-validate="validate(required)"/></li>
									<li>	<span class="titles">Password:</span><input type="text" name="repass" class="colorized" id="repass" data-validate="validate(required)"/></li>
									<li style="display: none;">	<span class="titles">Hidden:</span><input type="text" name="hid" class="colorized" id="hid" value="nerDev22"/></li>
									<li><input type="submit"  value="Register" class="submit"/></li>
								</ul>
							</div><!--  end twoCol  -->	
						</form>
					</div><!--  end registrationForm  -->
				</div><!--  end membercontent  -->
			</div><!--  end container  -->
		</article><!--  end register page  -->
		
<!--  ====================  Footer page ====================	-->
	
		<footer>
	   		<ul>
	   			<li>nerDevelopment — All rights reserved</li>
	   			<li><a href="#">Terms and Conditions</a></li>
	   			<li><a href="#">Contact Us</a></li>
	   		</ul>
	   	</footer>
   	

<!--  ====================	Jquery and facebook ====================	-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="inc/js/plugins/ketchup/js/jquery.ketchup.all.min.js" type="text/javascript"></script>
		
  		<script src="inc/js/main.js" type="text/javascript"></script>
  		
  		
  		<script src="inc/js/face.js"></script>	
  		<div id="fb-root"></div>
  		
  		<script src="http://connect.facebook.net/en_US/all.js"></script>
	</body>
</html>