<!doctype html>
<html>
<head>
	<title>Saini Foods Contact Us</title>
	<link rel="stylesheet" type="text/css" href="contactus.css">
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
					<a  href = "home.php"><li>Home</li></a>
					<a href = "food.php"><li>Food</li></a>
					<a href = "galary.php"><li>Galary</li></a>
					<a href = "aboutus.php"><li>About Us</li></a>
					<a class = "current" href = "contactus.php"><li>Contact Us</li></a>
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
			<div class = "leftSide">
				<h1>Ask From Us</h1>
				<!--Form -->
				<form action="contactus.php" method="POST">
				<div class = "form" action="contactus.php">
					<div class = "First_2">
					<div class = "inputBox1">
					<span class ="detals">
						<table class = "t1"> 
							<tr>
                             <td>First Name</td>
							 <td class = "star">*</td>	
							</tr>
						</table>
					</span><br>
						
					<input type="text" placeholder="Enter your First Name" name="fName" required>
					</div>
					
					<div class = "inputBox2">
					<span class ="detals">
						<table  class = "t1"> 
							<tr>
                             <td>Last Name</td>
							 <td class = "star">*</td>	
							</tr>
						</table>
					</span><br>
						
					<input type="text" placeholder="Enter your Last Name" name="lName" required>
					</div>
					</div>
					
					<div class = "Last_3">
					<div class = "inputBoxlong">
					<span class ="detals">
						<table  class = "t1"> 
							<tr>
                             <td>Email Address</td>
							 <td class = "star">*</td>	
							</tr>
						</table>  
					</span><br>
						
					<input type="text" placeholder="sample@email.com" name="email" required>
					</div>
				
					<div class = "inputBoxlong">
					<span class ="detals">
						<table  class = "t1"> 
							<tr>
                             <td>Subject</td>
							 <td class = "star">*</td>	
							</tr>
						</table> 
					</span><br>
						
					<input type="text" placeholder="Enter the Subject*" name="title" required>
					</div>
					
					<div class = "msgBox">
					<span class ="detals">
						<table  class = "t1"> 
							<tr>
                             <td>Message</td>
							 <td class = "star">*</td>	
							</tr>
						</table>
					</span><br>
					<textarea cols = "10" placeholder = "Type the Message" rows = "5" name="msg" required></textarea>
					</div>
					</div>
					<center>
					<div class ="sbmtBtn">
						<input type = "Submit" value = "Submit" name="submit">
					</div>
					</center>
				</div>
				</form>
			</div>
<?php
	//database connection
	$conn=new mysqli('localhost','root','','reciepemanagementsystem');
	if($conn->connect_error) 
	{  
		die("Failed to connect with MySQL: ". mysqli_connect_error());  
	} 
	
	//writing the sqls..

		if(isset($_POST['submit']))
		{
			$fname=$_POST['fName'];
			$lname=$_POST['lName'];
			$email=$_POST['email'];
			$title=$_POST['title'];
			$msg=$_POST['msg'];
			
			
			$sql="INSERT INTO `contactus`(`fName`, `lName`, `email`, `Subject`, `msg`) VALUES ('$fname','$lname','$email','$title','$msg')";
		
			if($conn->query($sql))
			{
				echo"<script>alert('Messeage successfully Sent!')</script>";
			}
			else
			{
				echo"<script>alert('Error')</script>";
			}
		}
			//close the connection
			mysqli_close($conn);
		
?>			
			
			<div class = "rightSide">
				<div class = "details">
					<h1>How Can We Help</h1>
					
					<br><br><br>
					<p align="justify">If you have any issues regarding  our products of if you want toknow something about our <br> service please drop a message and our agents will contact you as soon as possible.</p>
				</div>
				
				<div class = "phnNo">
					<div class = "B1"><p> Contact Number </p><br> +94 70 222 2222</div>
					<div class = "B2"> <p>Emain Address</p> <br> inqueries.sainifood@gmail.com</div>
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