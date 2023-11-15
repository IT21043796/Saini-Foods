<!doctype html>
<html>
<head>
	<title>Saini Foods Adv. Search</title>
	<link rel="stylesheet" type="text/css" href="advancedsearch.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
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
					<a class = "current" href = "advancedsearch.php"><li>Advanced Search</li></a>
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
			<br><br>
			<center>
			<!--Search box begin-->
				<form action="" method="POST">
				<div class = "insearch">
					<table class = "infind">
					<tr>
						<center>
							
						<th><input type="text" placeholder="Search......................................(use only simple letters)" name="Name"></th>
						<th> <img src ="Resources/Search.png" alt = "seach logo"  width = "20px" height="20px"></th>
						<th class="sbtn"><input type="submit" value="Search" name="Submit"></th>
							
						</center>
					</tr>
					</table>
					
				</div>
			<!--Search box end-->
			 <br>
				<select name="type" class="fdtype" > 
    				<option>Select the type</option>  
    				<option value="chicken">Chicken</option>
    				<option value="beef">Beef</option>
    				<option value="bacon">Bacon</option>
    				<option value="veggie">Veggie</option>
    				<option value="seafood">Sea Food</option>
 				 </select>
			
				<select name="food" class="fd" > 
    				<option>Select the food</option>  
    				<option value="pizza">Pizza</option>
    				<option value="friedrice">Fried Rice</option>
    				<option value="burger">Burger</option>
    				<option value="noodle">Noodle</option>
    				<option value="sandwich">Sandwitch</option>
 				 </select>
				</form>
<!--html pauses-->
				
<?php
if (isset($_POST['Submit']))
{
	$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
//when the name is not empty
	if (!empty($_POST['Name']))
	{
		if(($_POST['type'])!= "Select the type")//name and the type not empty.....
		{
			$name=$_POST['Name'];
			$type=$_POST['type'];			
			$sql = "SELECT * FROM `food` WHERE `food`='$name' and `type`='$type'";
			$query = $conn->query($sql);
			
			if ($query->num_rows > 0 )
			{
				
							$insql = $sql;
							$result = $conn->query($insql);
							echo 	'<div class="Item">';
							while($row = $result->fetch_assoc()) 
							{
									echo 	'<div class="Food">';
									echo	'<div class="Title">';
									echo 	("<br>".$row["foodName"] );
									echo	'</div>';
									echo	'<div class="image">';
									?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
									echo	'</div>';	
									echo	'<div class="Name">';
									echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
									echo '</div> </div>';
							}
							echo '</div>';
			}	
			if ($query->num_rows == 0 )
			{
				echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
				echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
			}
		}
		if(($_POST['type'])== "Select the type")//name is not empty but type is empty....
		{
			$name=$_POST['Name'];
			$sql = "SELECT * FROM `food` WHERE `food`='$name'";
			$query = $conn->query($sql);
			
			if ($query->num_rows > 0 )
			{
				
				$insql = $sql;
				$result = $conn->query($insql);
				echo 	'<div class="Item">';
				while($row = $result->fetch_assoc()) 
				{
						echo 	'<div class="Food">';
						echo	'<div class="Title">';
						echo 	("<br>".$row["foodName"] );
						echo	'</div>';
						echo	'<div class="image">';
						?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
						echo	'</div>';	
						echo	'<div class="Name">';
						echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
						echo '</div> </div>';
				}
				echo '</div>';
  			}
				
	
			if ($query->num_rows == 0 )
			{
				echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
				echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
			}
		}
		
	}
	if (empty($_POST['Name']))
	{
		if(($_POST['type'])!="Select the type")
		{
			if(($_POST['food'])!="Select the food")
			{
				$type=$_POST['type'];
				$food=$_POST['food'];
				
				$sql = "SELECT * FROM `food` WHERE `food`='$food' and `type`='$type'";
				$query = $conn->query($sql);
			
				if ($query->num_rows > 0 )
				{
					$insql = $sql;
					$result = $conn->query($insql);
					echo 	'<div class="Item">';
					while($row = $result->fetch_assoc()) 
					{
						echo 	'<div class="Food">';
						echo	'<div class="Title">';
						echo 	("<br>".$row["foodName"] );
						echo	'</div>';
						echo	'<div class="image">';
						?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
						echo	'</div>';	
						echo	'<div class="Name">';
						echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
						echo '</div> </div>';
					}
					echo '</div>';
				}
				if ($query->num_rows == 0 )
				{
					echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
					echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
				}
				
				
			}
		
			
			if(($_POST['food'])=="Select the food")
			{
					$type=$_POST['type'];
			
					$sql = "SELECT * FROM `food` WHERE `type`='$type'";
					$query = $conn->query($sql);
			
					if ($query->num_rows > 0 )
					{
							
							$insql = $sql;
							$result = $conn->query($insql);
							echo 	'<div class="Item">';
							while($row = $result->fetch_assoc()) 
							{
									echo 	'<div class="Food">';
									echo	'<div class="Title">';
									echo 	("<br>".$row["foodName"] );
									echo	'</div>';
									echo	'<div class="image">';
									?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
									echo	'</div>';	
									echo	'<div class="Name">';
									echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
									echo '</div> </div>';
							}
							echo '</div>';
					}
					if ($query->num_rows == 0 )
					{
							echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
							echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
					}
			}
		}
	
		
		if(($_POST['type'])=="Select the type")
		{
			if(($_POST['food'])!="Select the food")
			{
				$food=$_POST['food'];				
					$sql = "SELECT * FROM `food` WHERE `food`='$food'";
					$query = $conn->query($sql);
			
					if ($query->num_rows > 0 )
					{
							
							$insql = $sql;
							$result = $conn->query($insql);
							echo 	'<div class="Item">';
							while($row = $result->fetch_assoc()) 
							{
									echo 	'<div class="Food">';
									echo	'<div class="Title">';
									echo 	("<br>".$row["foodName"] );
									echo	'</div>';
									echo	'<div class="image">';
									?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
									echo	'</div>';	
									echo	'<div class="Name">';
									echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
									echo '</div></div>'; 
							}
							echo '</div>';
					}
					if ($query->num_rows == 0 )
					{
							echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
							echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
					}
			}
			if(($_POST['food'])=="Select the food")
			{
					echo'<p class="Nothave">Enter a value to search</p>';
			}
		}
		
	}
			
	//close the connection
	mysqli_close($conn);
}	

//from the mini search button....
				
if (isset($_POST['minisearch']))
{
	$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		}
	
	$search=$_POST['minisearch'];
	
	if (!empty($_POST['minisearch']))
	{
		$sql = "SELECT * FROM `food` WHERE `food`='$search'";
		$query = $conn->query($sql);
			
			if ($query->num_rows > 0 )
			{
				$insql = $sql;
				$result = $conn->query($insql);
				echo 	'<div class="Item">';
				while($row = $result->fetch_assoc()) 
				{
					echo 	'<div class="Food">';
					echo	'<div class="Title">';
					echo 	("<br>".$row["foodName"] );
					echo	'</div>';
					echo	'<div class="image">';
					?> <img src="<?php echo($row['Image'])?>" height="250px" width="250px" alt="#"><?php 	
					echo	'</div>';	
					echo	'<div class="Name">';
					echo	'<form action="food.php" method="POST"><input type="Submit" Value ="Customize and Order" name="MovetoCusto"></form>';
					echo '</div> </div>';
				}
				echo '</div>';
  			}
			if ($query->num_rows == 0 )
			{
				echo'<p class="Nothave">Sorry we dont have that food with us<br> Try to find a food by Visiting our Food page</p>';
				echo'<form action="food.php" method="POST"><input type="Submit" class="redirectbtn" Value ="Go to Food page" name="MovetoCusto"></form>';
			}
		}
	//close the connection
	mysqli_close($conn);

}
	
	
?>
<!-- html continous-->
			</center>
			<br><br><br><br><br><br>
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