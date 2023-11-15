<!doctype html>
<html>
<head>
	<title>Saini Foods Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
	<script src="home.js"></script>
</head>
	
<body>
	
	<div class = "container">
		<!--Header begins -->
		<div class = "headBox">
			<div class = "upperbox">
					<div class = "logoBox">
					<!-- Logo in the corner of the web site-->
						<center>
						<a href = "home.php"><img src ="Resources/logo.png" alt = "logo" width="150px" height="150px"></a>
						</center>
					</div>
				
					<!-- Restaurent name and motto -->
					<div class = "box2"> 
						<center><div class="banner">
						<img src="Resources/namebanner.png" width="50%" height="100px;">
						</div></center>
					</div>
				
					<!-- Log in and sign in -->
					<div class = "box3">
						<center>
						<img class = "logIcon" src ="Resources/logIn.png" alt = "logo" width="100px" height="100px"><br>
						<a href="Log in.php"><button class = "logIn"  type="button" >Log in</button></a>
						<form action="Logout.php"><input type="submit" class = "signIn" value="Log Off" name="logoff"></form>
						</center>
					</div>
			</div>
			<!--Navigation panel -->
			<div class = "lowerbox"> 
				<div class = "links">
				<ul class = "nav"> 
					<a class = "current" href = "home.php"><li>Home</li></a>
					<a href = "food.php"><li>Food</li></a>
					<a href = "galary.php"><li>Galary</li></a>
					<a href = "aboutus.php"><li>About Us</li></a>
					<a href = "contactus.php"><li>Contact Us</li></a>
					<a href = "rateus.php"><li>Rate Us</li></a>
					<a href = "advancedsearch.php"><li>Advanced Search</li></a>
				</ul>
				</div>
				<!--Search bar -->
				<div class = "search">
					<form action="advancedsearch.php" method="POST">
					<table class = "find">
					<tr><center>
						<th><input type="text" placeholder="Search" name="minisearch"></th>
						<th width="10%"> <input type="image" name="submit" src ="Resources/Search.png" alt = "seach logo"  width = "15px" height="15px"></th>
					</center></tr>
					</table>
					</form>
				
				</div>
			</div>
		</div>
		<!--Header ends -->
		
		<!--Body begins-->
		<div class = "bodyBox">
				<div class = "slides"><br><br>
					<img class="imgSlider" id="pic" src="Resources/food/1.png" alt="">
					<br>	
					
					<center>
					<div class="picNavigator">
					<!-- Input radio buttons -->
					<lable class = "rbtn"><input class="radioBtn" type="button"  onclick="loadData('b1');" name= "radio-btn" id="radio1"><span></span></lable>
					<lable class = "rbtn"><input class="radioBtn" type="button"  onclick="loadData('b2');" name= "radio-btn" id="radio2"><span></span></lable>
					<lable class = "rbtn"><input class="radioBtn" type="button"  onclick="loadData('b3');" name= "radio-btn" id="radio3"><span></span></lable>
					<lable class = "rbtn"><input class="radioBtn" type="button"  onclick="loadData('b4');" name= "radio-btn" id="radio4"><span></span></lable>
					<lable class = "rbtn"><input class="radioBtn" type="button"  onclick="loadData('b5');" name= "radio-btn" id="radio5"><span></span></lable>
					<!--radio button ends -->
					</div>
					</center>
					<br><br>
				</div>
				
			
				
		</div>
		<!--Body Ends -->
		
		
		
		<!--Footer area -->
		<footer>
		
		<div class = "footBox">
			<div class = "fbox1"> Saini Foods Restaurent <br> Tel : +94 70 222 2222 <br> Tel: 058 222 2222 <br> Find us at : Kandy, Colombo 07,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Batticalo, Nugegoda </div>
			<div class = "fbox2">
				<center>
				<div class = "vline"></div>		
				</center>
			</div>
			<div class = "fbox3"><h1><center>Saini Foods</center></h1></div>
			<div class = "fbox4">
				<center>
				<div class = "vline"></div>
				</center>
			</div>
			<!-- Social Media logos -->
			<div class = "fbox5">
			<div class = "slogo">
			<br> <br>
			<div class = "fb"> 
				<br>
				<a href = "https://www.facebook.com">
				<img src = "Resources/facebook.png" alt = "fb logo" width = "40px" height = "40px">
				</a>
			</div>
			<div class = "inst"> 
				<br>
				<a href = "https://instagram.com">
				<img src = "Resources/instagram.png" alt = "insta logo" width = "40px" height = "40px">
				</a>
			</div>
			<div class = "twtr">
				<br>
				<a href = "https://www.twitter.com">
				<img src = "Resources/twitter.png" alt = "twtr logo" width = "40px" height = "40px">
				</a>
			</div>
			<center>
			<div class = "g">
				<br>
				<a href = "https://www.googleplus.com">
				<img src = "Resources/google-plus-logotype.png" alt = "g+ logo" width = "40px" height = "40px">
				</a>
 			</div>
			</center>
				</div>
			</div>
		</div>
		
		</footer>
		<!-- Footer finished-->
		
	</div>	
	
	
</body>	
</html>	