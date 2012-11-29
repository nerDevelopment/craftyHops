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
			<div class="promoContent">
				<p class="tagLine"><span class="textShadow">What are your top three favorite beers?</span></p>
				<p class="subParagraph">Find your <span class="textShadow">Craft Beer</span> in seconds, with just one question. Just fill in the three boxes and click to <span class="textShadow">find</span> your beer!  It’s as <span class="textShadow">simple</span> as that!</p>
			</div><!--  end promoContent  -->
			
			<div class="posInput">
				<form method="post" action="#">
					<div class="wrap">
						<div class="grids">
							<div class="grid-4 ">
								<p><span>1</span><input class="sudggestInput" type="text" name="sudggest1"  /></p>
		  	 	  		  	</div><!--  end grid-4  -->
							<div class="grid-4 ">
		  	 	  		  		<p><span>2</span><input class="sudggestInput" type="text" name="sudggest2"  /></p>
		  	 	  		  	</div><!--  end grid-4  -->
		  	 	  		  	<div class="grid-4 ">
		  	 	  		  		<p><span>3</span><input class="sudggestInput" type="text" name="sudggest3"  /></p>
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
		  	 	  			<p style="border: none;" class="text">Come back and tell us about your experence by writing a review, voting up a review, or ading a Craft beer to our collection.</p>
		  	 	  			<div class="clear"></div>
		  	 	  		</div><!--  end grid-4  -->
		  	 	  	</div><!--  end grids and reasons  -->
		  	 	  </div><!--  end wrap  -->
			</div><!--  end section  -->

	<footer>
   		<ul>
   			<li>nerDevelopment — All rights reserved</li>
   			<li><a href="#">Terms and Conditions</a></li>
   			<li><a href="#">Contact Us</a></li>
   		</ul>
   	</footer>
   	
  </div><!--  end container  -->

<!--  ====================	Jquery and facebook ====================	-->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
  		<script src="../inc/js/main.js" type="text/javascript"></script>
  

	</body>
</html>