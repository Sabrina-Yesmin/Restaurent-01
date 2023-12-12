<?php
   session_start();
   if($_SESSION['admin_login_status']!="loged in" and ! isset($_SESSION['name']) )
    header("Location:../index.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['admin_login_status']="loged out";
	unset($_SESSION['name']);
   header("Location:../index.php");    
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>protfolio</title>


<link rel = "stylesheet" href="admin.css" type="text/css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




<meta name="viewport" content=""width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-
awesome/4.7.0/css/font-awesome.min.css">



<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- table -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>




<body>




<div class="topnav">

<p><a href="../index.php">BACK</a></p>
<p><a href="#home">HOME</a></p>
<p><a href="#profile">PROFILE</a></p>
<p><a href="#contact">CONTACT</a></p>
<p><a href="#menu">MENU</a></p>

 <a href="addproduct.php">ADD PRODUCT</a>

 <a href="?sign=out" style="float:right">Logout</a>
 </div>
  


 <div class="content">
 
 
 <div class="f">
 <a name="home">
 
 <br>
  <center><b><em>WELCOME ADMIN HOMEPAGE</em></b></center>
 <br>
 </a>
 </div>

 </div>
 <a name="profile">
  <img class="im" src="uploadedimage/me.jpg" width=150px height=180px>   
  <div class="G">	
<p><em><b>First Name</b></em> :Sabrina Yesmin</p>

<p><em><b>Last Name</b></em>  :Sani</p>

<p><em><b>Birth Date</b></em> :25-08-1997</p>

<p><em><b>Email Id</b></em>   :Sabrinasabrin599@gmail.com</p>

<p><em><b>Mobile No</b></em>  :01879303516</p>

<p><em><b>Hobbies</b></em>    :Drawing/Cooking/Singing/Photo Editing/Programming</p>

<p><em><b>Address</b></em>    :Shabu Mansion,Bibirhat,Sunnia Madrasha,Ctg,Bangladesh</p>  





<h4><b><em><center>    </center></em><b></h4>
 <br>
 <center> </center>
<br> 
 </div> 
 
    
<div class="c">
 <a name="contact">
 <!-- Contact -->
  <div class="w3-container">
   
    <p>CONTACT WITH CHEF</p>
    <i class="fa fa-map-marker" style="width:30px"></i>PROBORTOK CIRCLE AREA CTG<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
    
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>

<!-- End page content -->
 </a>
 


</div>


 
 
 
 <div class="i">
 <a name="menu">
 <br>
   <p>DATABASE</p>
 
 <div class="w3-container">
 
  <table class="w3-table w3-bordered">
    <tr>
      <th>Menu Id</th>
      <th>Menu Name</th>
      <th>Food Id</th>
	   <th>Food Name</th>
	    <th>Food Price</th>
    </tr>
    <tr>
      <td>M-1</td>
      <td>Breakfast</td>
     <td>
	 F-1 
	  <br>
	  F-2
	  <br>
	  F-3
	   <br>
	  F-4
	   <br>
	  F-5
	   <br>
	  F-6
	   <br>
	  F-7
	   <br>
	  F-8
	  </td>
	  <td>
	  Tea
	  <br>
	  Green Tea
	  <br>
	  coffee
	  <br>
	  black coffee
	  <br>
	  bread with egg
	  <br>
	  bread with vegetable
	  <br>
	  platter 1
	  <br>
	  platter 2
	  <br>
	  </td>
      <td>
	  10
	  <br>
	   25
	  <br>
	   30
	  <br>
	   40
	  <br>
	   30
	  <br>
	   25
	  <br>
	   50
	  <br>
	   100
	 
	  
	  </td>
    </tr>
    <tr>
	<td>M-2</td>
      <td>Lunch</td>
      <td>
	   F-9 
	  <br>
	  F-10
	  <br>
	  F-11
	   <br>
	  F-12
	   <br>
	  F-13
	   <br>
	  F-14
	   <br>
	  F-15
	   <br>
	  F-16
	
	  </td>
      <td>
	  
	  biriyani
	  <br>
	  chicken biriyani
	  <br>
	  beef biriyani
	  <br>
	  vegetable biriyani
	  <br>
	 rice
	  <br>
	 egg
	  <br>
	vegetable
	  <br>
	 dal
	  <br>
	  
	  
	  </td>
      <td>
	  
	   100
	  <br>
	   250
	  <br>
	   300
	  <br>
	   150
	  <br>
	   20
	  <br>
	   15
	  <br>
	   30
	  <br>
	   20
	  
	  
	  </td>
    </tr>
    <tr>
	<td>M-3</td>
      <td>Dinner</td>
      <td>
	  F-17 
	  <br>
	  F-18
	  <br>
	  F-19
	   <br>
	  F-20
	   <br>
	  F-21
	   <br>
	  F-22
	   <br>
	  F-23
	   <br>
	  F-24
	  
	  
	  </td>
      <td>
	  
	   biriyani
	  <br>
	  chicken biriyani
	  <br>
	  beef biriyani
	  <br>
	  vegetable biriyani
	  <br>
	 rice
	  <br>
	 egg
	  <br>
	vegetable
	  <br>
	 dal
	  <br>
	 
	  </td>
      <td>
	  
	  100
	  <br>
	   250
	  <br>
	   300
	  <br>
	   150
	  <br>
	   20
	  <br>
	   15
	  <br>
	   30
	  <br>
	   20
	  
	  
	 
	  
	  </td>
    </tr>
  </table>
</div>

 <br>
 <br>
 <br>
 </a>
 </div>
 
 
 
 
 
 
 



 </a>
 </div>
 
 
 </a>
 </div>
 


 
 </a>
 </div>
 
 
 
 
 
 
 
 
</div>

<div class="footer">
  <p><center>THANK YOU FOR STAY WITH US</center></p>
  
</div>

</body>
</html>
