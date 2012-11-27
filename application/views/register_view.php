<!DOCTYPE html>
<html lang="en">
<head>
<!--  ====================	Meta Tags ====================	-->
	<meta charset="utf-8">
	<meta name="description" content="Tired of having to ask your bartenders what you might like to drink when trying different types of craft beers? Well, then this site is for you! Crafty Hops' main goal is to help figure out just what craft beer you might like!">
	<meta name="application-name" content="Crafty Hops">
	<meta name="robots" content="all">
	<meta name="googlebot" content="all">
	<meta name="author" content="nerdDevelopment">
	<meta name="copyright" content="©nerdDevelopment">
	<meta name="format-detection" content="telephone=no">
	<meta name="handheldfriendly">
	<meta name="keywords" content="craft beer, craft, beer, bartender, alcohol">
	
<!--  ====================	Style Sheets ====================	-->
	<link rel="stylesheet" href="../../inc/css/toast/toast.css" />
	<link rel="stylesheet" href="../../inc/css/screen.css"/>
<!--  ====================	Google js ====================	-->	
	<script src="text/javascript" src="../../inc/js/google.js" type="text/javascript"></script>
	<title>Crafty Hops</title>
	<!--  ====================	ie exception sheets ====================	-->
	<!--[if lte IE 6]>
		<![endif]-->	
		<!--[if lt IE 9]>
		<![endif]-->
		
	</head>
	<body>
	<header>
		<div id="headerContent">
			<div id="logoPos">
			<h2 id="logo"><a href="http://www.crafty-hops.com">Crafty Hops</a></h2>
			</div>
			<nav id="mainNav">
				<ul>
					<li><a href="#">FAVORITES</a></li>
					<li><?php echo anchor('/index.php/welcome/addbeer', 'ADD A BEER', 'class="addForm"') ?></li>
					<li><?php echo anchor('/index.php/welcome/login', 'LOGIN', 'class="login"') ?></li>
					<li><?php echo anchor('/index.php/welcome/register', 'REGISTER', 'class="register"') ?></li>
				</ul>
			</nav>
			<button type="button" class="navbtn"></button>
			<nav id="mobileNav" style="display: none;">
				<ul>
					<li><a href="#">FAVORITES</a></li>
					<li><?php echo anchor('/index.php/welcome/addbeer', 'ADD A BEER', 'class="addForm"') ?></li>
					<li><?php echo anchor('/index.php/welcome/login', 'LOGIN', 'class="login"') ?></li>
					<li><?php echo anchor('/index.php/welcome/register', 'REGISTER', 'class="register"') ?></li>
				</ul>
			</nav>
		</div>		
	</header>
		
		<div class="container">
			<div class="notamember"  style="display: none;">
				<p >Please make sure you are logged in to view this feature!</p>
			</div>
				
			<div class="membercontent">
					<div id="registerForm" class="stylized">
						<form id="register" name="form" method="post" action="#">
							<h2>Register</h2>
							<div class="twoCol">
								<ul class="fields">
									<li><span class="titles">First name:</span><input type="text" name="firstN" id="firstN" class="colorized"/></li>
									<li><span  class="titles">Last Name:</span><input type="text" name="lastN" id="lastN" class="colorized"/></li>
									<li>	<span class="titles">Age:</span><input type="text" name="age" class="colorized" id="age" /></li>								
									<li>	<span class="titles">Email:</span><input type="text" name="email" class="colorized" id="email" /></li>
									<li>	<span class="titles">Password:</span><input type="text" name="pass" class="colorized" id="pass" /></li>
									<li>	<span class="titles">Password:</span><input type="text" name="email" class="colorized" id="repass" /></li>
									<li><input type="submit"  value="Register" class="submit"/></li>
								</ul>
						</div>	
							</form>
					</div>
				</div>
						<footer style="clear: both;">
							<ul>
								<li>                                                                          ©nerDevelopment — All rights reserved</li>
								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</footer>
		 </div>	 	
	</body>	
	
<!--<body>
	<div class="wrap">
	  <div class="grids">
	  
	  <div class="container">
	  		<header>
	  			<h2 id="logo"><a href="http://www.crafty-hops.com">Crafty Hops</a></h2>
	  		<nav>
	  			<ul>
	  				<li><a href="#">Favorites</a></li>
	  				<li><?php echo anchor('/index.php/welcome/addbeer', 'Add a Beer', 'class="addForm"') ?></li>
	  				<li><?php echo anchor('/index.php/welcome/register', 'Login/Register', 'class="register"') ?></li>
	  			</ul>
	  		</nav>
	  		</header>
	  	<div class="content">
	  		<div class="innercontent">
		  		<div class="notamember" style="display: none;">
		  			<p>Please make sure you are logged in to view this feature!</p>
		  		</div>
		  		
		  		<div class="newmember">
		  			<div id="stylized" class="registerform">
		  			<form id="form" name="form" method="post" action="#">
		  			<h2>Register</h2>	  
		  			<label>Email:
		  			</label>
		  			<input type="text" name="email" id="email" />
		  			<label>Name:
		  			</label>
		  			<input type="text" name="name" id="name" />
		  			<label>Age:
		  			</label>
		  			<input type="text" name="age" id="age" />
					<label>Password:
					</label>
					<input type="text" name="password" id="password" />
					<label>Password:
					</label>
					<input type="text" name="repassword" id="repassword" />
		  			<input type="submit"  value="Register" class="submit"/>
		  			<div class="spacer"></div>
		  			</form>
		  			</div>
		  		</div>
		  		
		  	<div id="stylized" class="loginform">
		  			<form id="loginForm" name="form" method="post" action="#">
		  			<h2>Login</h2>
		  			<label>
		  			</label>
		  			<p class="fbbutton"><fb:login-button onlogin="loginFace();">Connect with Facebook</fb:login-button>	</p>  
		  			<label>Email:
		  			</label>
		  			<input type="text" name="logemail" id="logemail" />
		  			<label>Password:
		  			</label>
		  			<input type="text" name="logPassword" id="logPassword" />
		  			<input type="submit"  value="Login" class="logsubmit"/>
		  			<div class="spacer"></div>
		  			</form>
	  				</div>
	  			</div>	
	  	</div>
	  		
		<div class="clear"></div>
</body>-->
<!--  ====================	Jquery and facebook ====================	-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="../../inc/js/face.js"></script>	
		<div id="fb-root"></div>
		
		<script src="http://connect.facebook.net/en_US/all.js"></script>
		
</html>