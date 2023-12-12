<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>




<div class="topnav">
  <a href="index.php">Home</a>
 
</div>


  <div class="container">

 <center> <h1>Register</h1></center>

<form method="post">
  <input type="text" class="input" placeholder="Enter Name" name="name">
  <br>
   <input type="number" class="input" placeholder="Enter Mobile no" name="mobile">
   <br>
  <input type="text" class="input" placeholder="Enter Address" name="address">
  <br>
 <input type="email" class="input" placeholder="Enter email" name="email">
<br>
<input type="password" class="input" placeholder="Enter password" name="password">

 <div>
 
 
 <center><button class="btn" name="Sign_Up" >Sign Up</button></center>
 <br>

 </form>
 </div>
 </body>
 </html>




<?php
include("connection.php");
if(isset($_POST['Sign_Up']))
{
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$query="insert into customer values('$name','$mobile','$address','$email','$password')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
	}
	else
	{
		echo "error!";
	}
}
?>



