<!doctype html>
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
if (isset($_POST['submitcustom']))
{
$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
$foodID=$_POST["fdid"];
$size=$_POST["size"];
$cheese=$_POST["cheese"];
$sauce=$_POST["sauce"];
$mnaise=$_POST["mnce"];
$instruct=$_POST["txtarea"];
$qty=$_POST["ordrqty"];
$amount=$_POST["tots"];	
					
$sql="INSERT INTO `orderfood`(`ID`, `FoodID`, `size`, `cheese`, `sauce`, `mnaise`, `instruction`, `qty`, `amount`,`orderID`,`userName`) VALUES ('','$foodID','$size','$cheese','$sauce','$mnaise','$instruct','$qty','$amount','$id','$username')";

if ($conn->query($sql))
{
	echo"<script>alert('Order Successfully recorded!')</script>";
}

}
?>


<html>
<head>
	<title>Saini Foods Order</title>
	<link rel="stylesheet" type="text/css" href="OrderIt.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
	<link type="text/javascript" href="OrderIt .js">
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
		<div class = "bodyBox"><br>
			<div class="displyItem">
<?php
$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	//getting data for food details...................			
$sql = "select * from orderfood where OrderID='$id'";
$result = $conn->query($sql);
				
if ($result->num_rows > 0) 
{
  	// output data of each row
	while($row = $result->fetch_assoc())
	{
		
		$foodID=$row["FoodID"];
		$size=$row["size"];
		$cheese=$row["cheese"];
		$sauce=$row["sauce"];
		$mnaise=$row["mnaise"];
		$instruct=$row["instruction"];
		$qty=$row["qty"];
		$amount=$row["amount"];	
			
	}
}
	
//getting data for image and Name...
$sql = "select * from food where ID='$foodID'";
$result = $conn->query($sql);
				
if ($result->num_rows > 0) 
{
  	// output data of each row
	while($row = $result->fetch_assoc())
	{
		
		$image=$row['Image'];
		$name=$row['foodName'];
			
	}

}
?>
				
			<div class="image">
				<center><div class="Name"><h2><?php echo $name;?></h2></div>	
				<div class ="photo"><img src= "<?php echo $image?>" height="250px" width="250px" alt="#"></div>	</center>
			</div>
				
			<div class="vertical"></div>
				
			<div class="data">

				<div class="total"><h3>Grand total : <?php echo $amount;?>.00</h3></div>
				<table class="preview">
				<tr>
					<td>Size</td>	
					<td>:</td>	
					<td><?php echo $size;?></td>	
				</tr>
				<tr>
					<td>Cheese</td>	
					<td>:</td>	
					<td><?php echo $cheese;?></td>	
				</tr>
				<tr>
					<td>Sauce</td>	
					<td>:</td>	
					<td><?php echo $sauce;?></td>	
				</tr>
				<tr>
					<td>Mayonnaise</td>	
					<td>:</td>	
					<td><?php echo $mnaise;?></td>	
				</tr>
				<tr>
					<td>Quantity</td>	
					<td>:</td>	
					<td><?php echo $qty;?></td>	
				</tr>
				<tr>
					<td>Instructions</td>	
					<td>:</td>	
					<td><?php echo $instruct;?></td>	
				</tr>
				</table>
				&nbsp;&nbsp;<form action="" method="POST"><input class="Submit" type="Submit" name="SUBmit" value="Remove"></form><br><br>
				<?php 
					if (isset($_POST['SUBmit']))
					{
						$sql = "DELETE FROM `orderfood` WHERE OrderID ='$id' ";
						
						if($conn-> query($sql))
						{
							echo"<script>alert('Successfully Removed!')</script>";
							header("Location:food.php");
						}
					}
				?>
			</div>
				
			</div>	
			<div class="displyDtail">
			<h3>Delivery Details</h3>
			<div class="delidtail">
			<form action="Payment.php" method="POST">
				<input type="text" class="insert" name="fName" placeholder="Name" required><br><br>
				<input type="text" class="insert" name="mno" placeholder="Mobile Number" required><br><br>
				<input type="text" class="insert" name="adrs1" placeholder="Address Line 1" required><br><br>
				<input type="text" class="insert" name="adrs2" placeholder="Address Line 2" ><br><br>
				<input type="text" class="insert" name="cty" placeholder="City" required><br><br><br>
				<input type="submit" class="Submit" value="Procede to Pay" name="submit" required><br><br>
			</form>
			</div>
		</div>
		</div>
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
		</div>
		<!--Body Ends -->
		<!--Footer area -->
		
		<!-- Footer finished-->
	</div>	
</body>	
</html>	