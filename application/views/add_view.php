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
	<link rel="stylesheet" href="../../inc/css/toast/toast.css" />
	<link rel="stylesheet" href="../../inc/css/screen.css"/>
	<link rel="stylesheet" href="../../inc/css/mobile.css"/>		
		
<!--  ====================	Google js ====================	-->	
	<script  src="../../inc/js/google.js" type="text/javascript"></script>
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
				<div id="logoPos">
				<h4 id="logo"><a href="http://www.crafty-hops.com">Crafty Hops</a></h4>
				</div> <!--  end logoPos  -->
				<nav id="mainNav">
					<ul>
		    				<li><a href="#">Favorites</a></li>
		    				<li><?php echo anchor('/index.php/welcome/addbeer', 'Add a Beer', 'class="addForm"') ?></li>
		    				<li><?php echo anchor('/index.php/welcome/login', 'Login', 'class="login"') ?></li>
		    				<li><?php echo anchor('/index.php/welcome/register', 'Register', 'class="register"') ?></li>
		    			</ul>
		    		</nav>
  			  <a class='navbtn' id="navbtn" href="#" >Menu</a>  			  
			</div><!--  end headerContent  -->
		</header>
		
		<section id="sidenav" role="complementary">
				<ul>
						<li><a href="#">Favorites</a></li>
						<li><?php echo anchor('/index.php/welcome/addbeer', 'Add a Beer', 'class="addForm"') ?></li>
						<li><?php echo anchor('/index.php/welcome/login', 'Login', 'class="login"') ?></li>
						<li><?php echo anchor('/index.php/welcome/register', 'Register', 'class="register"') ?></li>
					</ul>
		</section>
<!--  ====================	Main Content ====================	-->		
		<div class="container">
			<div class="notamember"  style="display: none;">
				<p >Please make sure you are logged in to view this feature!</p>
			</div>
				
			<div class="membercontent">
					<div id="addForm" class="stylized">
						<form id="addBeer" name="form" method="post" action="#">
							<h2>Add a Beer</h2>
							<div class="twoCol">
								<ul class="fields">
									<li>	<span class="titles">Name:</span><input type="text" name="name" class="colorized" id="name" /></li>
									<li><span class="titles">Brewed:</span><input type="text" name="brewed" id="brewed" class="colorized"/></li>
									<li><span  class="titles">ABV:</span><input type="text" name="abv" id="abv" class="colorized"/></li>
									<li><span class="titles">File:</span><input type="file" class="file" name="beerimage"  /></li>
									<li><input type="submit"  value="Add" class="submit"/></li>
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
<!--  ====================	Jquery and facebook ====================	-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
  		<script src="../../inc/js/main.js" type="text/javascript"></script>
	</body>
</html>