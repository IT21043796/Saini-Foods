<!doctype php>
<php>
<head>
	<title>Saini Foods Food</title>
	<link rel="stylesheet" type="text/css" href="food.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
	<link type="text/javascript" href="food .js">
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
					<a  href = "home.php"><li>Home</li></a>
					<a class = "current" href = "food.php"><li>Food</li></a>
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
			<br>
			<div class="Category"> <h2> Pizza </h2> </div><br>
			<div class="Pan">				
			<div class="Pchicken">
				<img src="Resources/Food for Galary/Pizza/Pan/Chicken.jpg" alt="chkn" id="ppchkn" width="300px" height="250px">
				<h2>Chicken Pizza</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="1" type="submit" value="Customize and Order" onclick="loadData('f1');"></form>
			</div>
				
			<div class="Psausage">
				<img src="Resources/Food for Galary/Pizza/Pan/sausage.jpg" alt="sausge" id="ppssge" width="300px" height="250px">
				<h2>Sausage Pizza</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="2" type="submit" value="Customize and Order" onclick="loadData('f2');"></form>
			</div>
				
			<div class="Psaefood">
				<img src="Resources/Food for Galary/Pizza/Pan/seafood.jpg" alt="sea" id="ppsea" width="300px" height="250px">
				<h2>SeaFood Pizza</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="3" type="submit" value="Customize and Order" onclick="loadData('f3');"></form>
			</div>
				
			<div class="Pveggie">
				<img src="Resources/Food for Galary/Pizza/Pan/SpicyVeggie.jpg" alt="veg" id="ppveg" width="300px" height="250px">
				<h2>Veggie Pizza</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="4" type="submit" value="Customize and Order" onclick="loadData('f4');"></form>
			</div>
			</div><br><br>
			
			<div class="Category"> <h2>Burger</h2></div><br>
			<div class="Burger">
			<div class="Bbacon">
				<img src="Resources/Food for Galary/Burger/bacon.jpg" alt="bacon" id="bbcn" width="300px" height="250px">
				<h2>Bacon Burger</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="5" type="submit" value="Customize and Order" onclick="loadData('f5');"></form>
			</div>
				
			<div class="Bcheeseburger">
				<img src="Resources/Food for Galary/Burger/Cheeseburger.jpg" alt="chse" id="bchse" width="300px" height="250px">
				<h2>Cheese Burger</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="6" type="submit" value="Customize and Order" onclick="loadData('f6');"></form>
			</div>
				
			<div class="Bdblecheese">
				<img src="Resources/Food for Galary/Burger/DoubleCheeseburger.jpg" alt="dblch" id="bdchse" width="300px" height="250px">
				<h2>Double Cheese Burger</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="7" type="submit" value="Customize and Order" onclick="loadData('f7');"></form>
			</div>
				
			<div class="Bham">
				<img src="Resources/Food for Galary/Burger/ham.jpg" alt="ham" id="bham" width="300px" height="250px">
				<h2>Ham Burger</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="8" type="submit" value="Customize and Order" onclick="loadData('f8');"></form>
			</div>
			</div><br><br>
			
			<div class="Category"> <h2> Fried Rice </h2> </div><br>
			<div class="Rice">
			<div class="Rchicken">
				<img src="Resources/Food for Galary/Fried Rice/chicken3.jpg" alt="chkn" id="rchkn" width="300px" height="250px">
				<h2>Chicken Fried Rice</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="9" type="submit" value="Customize and Order" onclick="loadData('f9');"></form>
			</div>
				
			<div class ="Regg">
				<img src="Resources/Food for Galary/Fried Rice/egg.jpg" alt="egg" id="regg" width="300px" height="250px">
				<h2>Egg Fried Rice</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="10" type="submit" value="Customize and Order" onclick="loadData('f10');"></form>
			</div>
				
			<div class="Rnasigrn">
				<img src="Resources/Food for Galary/Fried Rice/nasigrn.jpg" alt="nci" id="rnsi" width="300px" height="250px">
				<h2>Nasigoren</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="11" type="submit" value="Customize and Order" onclick="loadData('f11');"></form>
			</div>
				
			<div class="Rsaefood">
				<img src="Resources/Food for Galary/Fried Rice/seafood.jpg" alt="sea" id="rsea" width="300px" height="250px">
				<h2>Seafood Fried Rice</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="12" type="submit" value="Customize and Order" onclick="loadData('f12');"></form>
			</div>
			</div><br><br>
			
			<div class="Category"> <h2> Sandwitch </h2> </div><br>
			<div class="Sandwitch">
			<div class="Schicken">
				<img src="Resources/Food for Galary/Sandwitches/chicken.jpg" alt="chkn" id="schkn" width="300px" height="250px">
				<h2>Chicken Sandwich</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="13" type="submit" value="Customize and Order" onclick="loadData('f13');"></form>
			</div>
				
			<div class="Sroastchkn">
				<img src="Resources/Food for Galary/Sandwitches/roastedChicken.jpg" alt="chkn" id="srchkn" width="300px" height="250px">
				<h2>Roast Chicken Sandwich</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="14" type="submit" value="Customize and Order" onclick="loadData('f14');"></form>
			</div>
				
			<div class="Svegei">
				<img src="Resources/Food for Galary/Sandwitches/wegi.jpg" alt="vegi" id="svegi" width="300px" height="250px">
				<h2>Veggie Sandwich</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="15" type="submit" value="Customize and Order" onclick="loadData('f15');"></form>
			</div>
				
			<div class="Sbeef">
				<img src="Resources/Food for Galary/Sandwitches/beef.jpg" alt="beef" id="sbeef" width="300px" height="250px">
				<h2>Beef Sandwich</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="16" type="submit" value="Customize and Order" onclick="loadData('f16');"></form>
			</div>
			</div><br><br>
			
			<div class="Category"> <h2> Noodles </h2> </div><br>
			<div class="Noodle">
			<div class="Nchicken">
				<img src="Resources/Food for Galary/noodles/chicken.png" alt="chkn" id="nchkn" width="300px" height="250px">
				<h2>Chicken Noodle</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="17" type="submit" value="Customize and Order" onclick="loadData('f17');"></form>
			</div>
				
			<div class="Nshrimp">
				<img src="Resources/Food for Galary/noodles/shrimp.png" alt="sea" id="nsea" width="300px" height="250px">
				<h2>Shrimp Noodle</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="18" type="submit" value="Customize and Order" onclick="loadData('f18');"></form>
			</div>
				
			<div class="Nvegei">
				<img src="Resources/Food for Galary/noodles/vegii.png" alt="vegi" id="nvegi" width="300px" height="250px">
				<h2>Veggie Noodle</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="19" type="submit" value="Customize and Order" onclick="loadData('f19');"></form>
			</div>
				
			<div class="Nbeef">
				<img src="Resources/Food for Galary/noodles/beef.png" alt="beef" id="nbeef" width="300px" height="250px">
				<h2>Beef Noodle</h2>
				
				<form action="Customize.php" method="POST"><input class = "Custo" name="20" type="submit" value="Customize and Order" onclick="loadData('f20');"></form>
			</div>
			</div> <br><br>	
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
</php>	