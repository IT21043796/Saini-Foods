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
<html>
<head>
	<title>Saini Foods Customize Food</title>
	<link rel="stylesheet" type="text/css" href="Customize.css">
	<link rel="stylesheet" type="text/css" href="HdrNFtr.css">
	<script src="Customize.js"></script>
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
			<div class="bdy">
				<div class="Food">
					<center>
<!--php for adding the food and the name-->
<?php
	//database connection
		$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
		
		$n =1;
		while (!isset($_POST[$n]))
		{
			$n += 1;
		}
						
		$sql = 'SELECT * FROM food where `ID`='.$n;
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		?> <h2 class="topic"> <?php echo $row['foodName'].'<br>';?></h2><?php
		echo '<img src="'; echo $row['Image']; echo'" width="250px;" heigh="250px;" alt="#">';
		
		//close the connection
		mysqli_close($conn);
		
						
?>
					<h2 class=topic>Ratings</h2>
<?php
	$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	$n =1;
		while (!isset($_POST[$n]))
		{
			$n += 1;
		}
	$slq='Select * FROM food where `ID`='.$n;
	$resultf = $conn->query($sql);
	$row = $resultf->fetch_assoc();
	?><input type="hidden" id="input-get" name="pfromdb" value="<?php echo $row['Price'];?>">
	<input type="hidden" id=input-gettype value="<?php echo $row['food'];?>">
	<?php
		//close the connection
		mysqli_close($conn);
	?>
						
<?php
	$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	$n =1;
		while (!isset($_POST[$n]))
		{
			$n += 1;
		}
						
	$sql = 'SELECT * FROM rateus where `foodID`='.$n;
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0 )
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "Name : "; echo $row['fName']; echo " "; echo $row['lName']; echo '<br>';
			echo "Feedback : ";echo $row['msg']; echo '<br>';
			$n = $row['rate'];
			echo "Rating : "; echo '<br>';
			for ($i=0; $i<$n; $i++)
			{
				echo '<img src="Resources\Star.png" width="25px" height="25px" alt="#">';
			}
			$rem=5-$n;
			for ($i=$rem; $i>0; $i--)
			{
				echo '<img src="Resources\kstar.png" width="25px" height="25px" alt="#">';
			}echo '<br>';echo '<br>';
		}
	}
	if ($result->num_rows == 0 )
	{
		echo "No one have rated yet "; echo '<br>';
		echo "Be the first to rate "; echo '<br>';
	}
						
	//close the connection
	mysqli_close($conn);
?>
					
					</center>
				</div>	
				<div class="Vline"></div>
				
				<div class="dscption">
					<form action="OrderIt.php" method="POST">
					<div class="sliders">
						<div class="price">
							<p calss="pricep" id="amount" align="right">Price : <script>let p = document.querySelector('#input-get').value; document.write(p);</script>.00</p>
						</div>
						<div class="hidden_tags">
							<input type="hidden" id="fromsize" value="">
							<input type="hidden" id="fromchs">
							<input type="hidden" id="froms">
							<input type="hidden" id="fromm">
							<input type="hidden" id="finalPrice" placeholder="final price">
							<input type="hidden" id="qtyy" name="ordrqty">
							<input type="hidden" id= "grandtot" name="tots">
							<!--Food id of the order-->
	<?php
	$conn =  new mysqli('localhost','root','','reciepemanagementsystem');
		if($conn->connect_error) 
		{  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		} 
	$n =1;
		while (!isset($_POST[$n]))
		{
			$n += 1;
		}
	?><input type="hidden" name="fdid" value="<?php echo $n;?>">
	<?php
		//close the connection
		mysqli_close($conn);
	?>
							
							
						
						</div>
						
						<div class="selector">
							<div class="tuple">
								<div class="Type">Size</div>
								<div class="Colon">:</div>
								<div class="radio">
									<div class="R1"><center>	
											<input required type="radio" id="size1" name="size" value="Small" onClick="loadData('size1');"><br>
											<label for="size1">Small</label>
									</center></div>
									<div class="R2"><center>
											<input type="radio" id="size2" name="size" value="Regular" onClick="loadData('size2');"><br>
											<label for="size2">Regular</label>
									</center></div>
									<div class="R3"><center>
											<input type="radio" id="size3" name="size" value="Large" onClick="loadData('size3');"><br>
											<label for="size3">Large</label>
									</center></div>
								</div>
							</div>
							
							<div class="tuple">
								<div class="Type">Cheese</div>
								<div class="Colon">:</div>
								<div class="radio">
									<div class="R1"><center>	
											<input required type="radio" id="cheese1" value="None" name="cheese" onClick="loadData('chs1');"><br>
											<label for="cheese1">None</label>
									</center></div>
									<div class="R2"><center>
											<input type="radio" id="cheese2" name="cheese" value="Recomended" onClick="loadData('chs2');"><br>
											<label for="cheese2">Recomended</label>
									</center></div>
									<div class="R3"><center>
											<input type="radio" id="cheese3" name="cheese" value="Extra" onClick="loadData('chs3');"><br>
											<label for="cheese3">Extra</label>
									</center></div>
								</div>
							</div>	
							
							<div class="tuple">
								<div class="Type">Sauce</div>
								<div class="Colon">:</div>
								<div class="radio">
									<div class="R1"><center>	
											<input required type="radio" id="sauce1" name="sauce" value="None" onClick="loadData('sce1');"><br>
											<label for="sauce1">None</label>
									</center></div>
									<div class="R2"><center>
											<input type="radio" id="sauce2" name="sauce" value="Recomended" onClick="loadData('sce2');"><br>
											<label for="sauce2">Recomended</label>
									</center></div>
									<div class="R3"><center>
											<input type="radio" id="sauce3" name="sauce" value="Extra" onClick="loadData('sce3');"><br>
											<label for="sauce3">Extra</label>
									</center></div>
								</div>
							</div>	
							
							<div class="tuple">
								<div class="Type">Mayonnaise</div>
								<div class="Colon">:</div>
								<div class="radio">
									<div class="R1"><center>	
											<input required type="radio" id="mnce1" name="mnce" value="None" onClick="loadData('mnce1');"><br>
											<label for="mnce1">None</label>
									</center></div>
									<div class="R2"><center>
											<input type="radio" id="mnce2" name="mnce" value="Recomended" onClick="loadData('mnce2');"><br>
											<label for="mnce2">Recomended</label>
									</center></div>
									<div class="R3"><center>
											<input type="radio" id="mnce3" name="mnce" value="Extra" onClick="loadData('mnce3');"><br>
											<label for="mnce3">Extra</label>
									</center></div>
								</div>
							</div>	
							
							<div class="tuple">
								<div class="Type">Quantity</div>
								<div class="Colon">:</div>
								<div class="radio">
									
									<select id="qty" class="selectbox" name="ordrqty" onChange="getSelectValue();">
										<option >Qty</option>						
										<option value="1" >1</option>						
										<option value="2" >2</option>						
										<option value="3" >3</option>						
										<option value="4" >4</option>						
										<option value="5" >5</option>						
									</select>
								</div>
							</div>
							
							<div class="txtarea">
								<div class="Type">Special Instructions</div><br>
								<div class="radio">
									<textarea name="txtarea" id="txt1"rows="15" cols="55" placeholder="Enter Special Instrctions"></textarea></div>
							</div><br>
							<div class="sbmtcstm">
								<center><input type="submit" name="submitcustom" value="Procede to Order"></center>
							</div><br><br>
						</div>	
							
					</div>	
					</form>

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