<!doctypehtml>
<?php
session_start();

if (!isset($_SESSION["userName"]))
{
	echo"<script>alert('Log in to continue to this page')</script>";
	header("Location:Log in.php");
}
else
{
	$username = $_SESSION["userName"];
	$id = $_SESSION['ID'];
}
?>		
<?php
	if (isset($_POST['sbmtcard']))
	{	//update the payment table............
		$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
							
		$sql="INSERT INTO `orderpayment`(`OrderID`, `paymethod`) VALUES ('$id','Card')";

		if ($conn->query($sql))
		{
			echo"<script>alert('Order Successfully recorded!')</script>";
		}else
		{echo 'error';}
		
		
		//updating card details...................
		$crdNo = $_POST['crd'];
		$mnth = $_POST['m'];
		$year = $_POST['y'];
		$cvv = $_POST['cvv'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		
		
		
		$sql="INSERT INTO `carddetails`(`userName`, `CardNumber`, `Mnth`, `Year`, `CVV`, `fName`, `lName`) VALUES ('$username','$crdNo','$mnth','$year','$cvv','$fname','$lname')";

		if ($conn->query($sql))
		{
			echo"<script>alert('Order Successfully recorded!')</script>";
		}
//close the connection
mysqli_close($conn);

}
?>
<?php
if(isset($_POST['sbmtcod']))
	{		
		$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	
		$sql="INSERT INTO `orderpayment`(`OrderID`, `paymethod`) VALUES ('$id','COD')";
		if ($conn->query($sql))
		{
		echo"<script>alert('Order Successfully recorded!')</script>";
		}

						
//close the connection
mysqli_close($conn);
}
?>
<html>
<head>
	<title>Saini Foods Rate Us</title>
	<link rel="stylesheet" type="text/css" href="rateus.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
	<script src="rateus.js"></script>
	<script src="https://kit.fontawesome.com/2ac0bfc790.js" crossorigin="anonymous"></script>
	
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
					<a href = "home.php"><li>Home</li></a>
					<a href = "food.php"><li>Food</li></a>
					<a href = "galary.php"><li>Galary</li></a>
					<a href = "aboutus.php"><li>About Us</li></a>
					<a href = "contactus.php"><li>Contact Us</li></a>
					<a class = "current" href = "rateus.php"><li>Rate Us</li></a>
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
		<div class = "bodyBox"> <br>
			<center><h1 class="header1">Select the Food to Rate</h1></center>
			
			<div class="pictures">
			<div class="Pza">
				<h2>Pizza</h2>
				<img src="Resources/Food for Galary/Pizza/thin crust/beef.jpg" width="250" height="200" alt="">
				<input type="button" value="chicken" id="1" onClick="loadData('1');">
				<input type="button" value="Sausage" id="2" onClick="loadData('2');"><br>
				<input type="button" value="SeaFood" id="3" onClick="loadData('3');">
				<input type="button" value="Veggie" id="4" onClick="loadData('4');"><br>
			</div>	
			<div class="frice">
				<h2>Fried Rice</h2>
				<img src="Resources/Food for Galary/Fried Rice/egg.jpg" width="250px" height="200px" alt="">
				<input type="button" value="Chicken" id="5" onClick="loadData('5');">
				<input type="button" value="Egg" id="6" onClick="loadData('6');"><br>
				<input type="button" value="Nasigoren" id="7" onClick="loadData('7');">
				<input type="button" value="Shrimp" id="8" onClick="loadData('8');"><br>
			</div>	
			<div class="brgr">
				<h2>Burger</h2>
				<img src="Resources/Food for Galary/Burger/bacon.jpg" width="250px" height="200px" alt="">
				<input type="button" value="Bacon" id="9"  onClick="loadData('9');">
				<input type="button" value="Cheese" id="10" onClick="loadData('10');"><br>
				<input type="button" value="Dbl. Cheese" id="11" onClick="loadData('11');">
				<input type="button" value="Ham" id="12" onClick="loadData('12');"><br>
			</div>	
			<div class="swtch">
				<h2>Sandwitch</h2>
				<img src="Resources/Food for Galary/Sandwitches/chicken.jpg" width="250px" height="200px" alt="">
				<input type="button" value="Chicken" id="13" onClick="loadData('13');">
				<input type="button" value="Rst. Chicken" id="14" onClick="loadData('14');"><br>
				<input type="button" value="Veggie" id="15" onClick="loadData('15');">
				<input type="button" value="Beef" id="16" onClick="loadData('16');"><br>
			</div>	
			<div class="ndls">
				<h2>Noodle</h2>
				<img src="Resources/Food for Galary/noodles/beef.png" width="250px" height="200px" alt="">
				<input type="button" value="Chicken" id="17" onClick="loadData('17');">
				<input type="button" value="Shrimp" id="18" onClick="loadData('18');"><br>
				<input type="button" value="Veggie" id="19" onClick="loadData('19');">
				<input type="button" value="Beef" id="20" onClick="loadData('20');"><br>
				
			</div>	
			</div>
			<div><hr></div>
			
			<div class="bdy">
				<div class="Food">
					<center><div>
					<p id="topic"></p>
					<img id="fdimg" width="250px" height="200px">
					<div>
					<!--rating system-->
			
						
					</div>
					
					</center>
				</div>	
				<div class="Vline"></div>
				<div class="dscption">
					<center><h3 class="header2">Rate Us</h3></center>
					<form action="" method="POST">
						
						<!--log for the choosen food-->
						<input type="hidden" id="input-get" name="foodID" placeholder="number">
						<!--log for the choosen food ends-->
						
						<div class="frmname">
							<div class="name1">
								<label for="fname">First Name</label><br><br>
								<input id="fname" type="text" name="fName" placeholder="First Name" required><br><br>
							</div>
							<div class= "name2">
								<lable for="fname">Last Name</lable><br><br>
								<input id="lname" type="text" name="lName" placeholder="Last Name" required><br><br>
							</div>
						</div>
						<div class="frmemail">
							
								<label for="fname">Email Address</label><br><br>
								<input id="email" type="text" name="email" placeholder="example@email.com" required>
							
						</div>
						<div class="Star-icn">
								
								<p class="topic1">Rate us</p>
								
								<input type="radio" name="ratebtn" value="5" id="str1"><label for ="str1" class="fas fa-star" ></label>
								<input type="radio" name="ratebtn" value="4" id="str2"><label for ="str2" class="fas fa-star"></label>
								<input type="radio" name="ratebtn" value="3" id="str3"><label for ="str3" class="fas fa-star"></label>
								<input type="radio" name="ratebtn" value="2" id="str4"><label for ="str4" class="fas fa-star"></label>
								<input type="radio" name="ratebtn" value="1" id="str5"><label for ="str5" class="fas fa-star" ></label>
								
						</div>	
						
						<div class="cmnts">
								<p class="topic1">Add Coments</p>
								<textarea id="cmnts" name="msg" rows="10" cols="100" placeholder="Enter you comments here" required></textarea>
						</div>
						<div class="sbmt"><br><br>
							
							<center><input type="submit" name="submit" value ="Submit"></center>
						<br><br></div>
					</form>
					
<?php

$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	if (isset($_POST['submit']))
	{
	$fName= $_POST['fName'];
	$lName= $_POST['lName'];
	$email= $_POST['email'];
	$rate= $_POST['ratebtn'];
	$msg= $_POST['msg'];
	$foodID = $_POST['foodID'];
	
				
	$sql="INSERT INTO `rateus`(`ID`, `FoodID`, `fName`, `lName`, `email`, `rate`, `msg`) VALUES ('','$foodID','$fName','$lName','$email','$rate','$msg')";
	
	if (empty($foodID))
	{
		echo"<script>alert('First pick a food to rate!')</script>";
	}
	else 
	{
		if($conn->query($sql))
		{
			echo"<script>alert('successfully recorded')</script>";
		}
		else
		{
			echo"<script>alert('Error Mother fuckerr')</script>";
		}
	}
	
	}


//close the connection
	mysqli_close($conn);
?>
				</div>	
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