<?php
   session_start();
   if($_SESSION['customer_login_status']!="loged in" and ! isset($_SESSION['name']) )
    header("Location:../index.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['customer_login_status']="loged out";
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

   <!--newsletter and contact--> 
            <meta charset="UTF-8"> 
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway"> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
     <!--newsletter and contact-->


<meta name="viewport" content="width=device-width, initial-scale=1">
</head>




<body>




<div class="topnav">
<p><a href="#home">HOME</a></p>
<p><a href="#rating skill">RATING</a></p>
<p><a href="#item">ITEM</a></p>

<p><a href="#order">ORDER</a></p>
<a href="product.php">Products</a>
 <a href="?sign=out" style="float:right">Logout</a>

 </div>
  







<div class="row">
  <div class="leftcolumn">
    <div class="card">
      
      <h3>Today <?php echo date('D M Y');?></h3>
      
      
    </div>

 <div class="content">
 
 
 <div class="f">
 <a name="home">

 
 <br>
 <br>
 <br>
 <br>
 
 <br>
 <br>

 
 </a>
 </div>
 
 </div>
  
  
 
 <a name="rating skill">
 
<div class="G">	

 <h5><center>Rating</h5></center>
<p5>5*****</p5>
<div class="container">
  <div class="star1">90%</div>
</div>
<p5>4****</p5>
<div class="container">
  <div class="star2">80%</div>
</div>
<p5>3***</p5>
<div class="container">
  <div class="star3">80%</div>
</div>
<p5>2**</p5>
<div class="container">
  <div class="star4">80%</div>
</div>
<p5>1*</p5>
<div class="container">
  <div class="star5">20%</div>
</div>
<p5>0</p5>
<div class="container">
  <div class="star6">0%</div>
</div>

<br>
<br>
<br>
</div>
 </a>
 <br>
 
 </div>
 
 
 
 <div class="i">
 <a name="item">
 <br>
 <br>
 <br>
 <br>
 <div class="ga">
 <a name="GALLERY">

  <!-- First Photo Grid-->
  
  
  <div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/10.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 350/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/11.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/12.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 400/=</p>
      
    </div>
    
    
    
    
  
  </div>


<div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/13.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/14.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 450/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/15.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>


</div>




<div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/1.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 400/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/2.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 350/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/3.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 400/=</p>
      
    </div>




</div>




<div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/4.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/5.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 250/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/6.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>




</div>




<div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/7.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/8.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b>SIMPLE PLATTER</b></p>
        <p> 250/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/9.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b>SPECIAL </b></p>
        <p> 500/=</p>
      
    </div>

 
 
 
 </div>
 
 <div class="w3-row-padding">
  
  
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/16.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>
    
    
    <div class="w3-third w3-container">
      <img src="uploadedimage/17.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 450/=</p>
      
    </div>
	
	
    
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="uploadedimage/18.jpg" alt="Norway" style="width:70%" class="w3-hover-opacity">
      
        <p><b></b></p>
        <p> 300/=</p>
      
    </div>



</div>

 
 
 
 
 
 
 
 

 


 
 </a>
 </div>
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 <div class="sear">
 <a name="order">
 
 
 
 <div class="i">
 <a name="CONTACT">
 <!-- Contact -->
  <div class="w3-container">
    
    <p>Let us book your next ORDER!</p>
    <i class="fa fa-map-marker" style="width:30px"></i>PROBORTOK CIRCLE AREA CTG<br>
    <i class="fa fa-phone" style="width:30px"></i> Phone: +00 151515<br>
    <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-black w3-padding-large" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
 </a>
 
<BR>
<BR>
<BR>
<br>
<BR>
<BR>
<BR>
<br>


</div>

 </a>
 </div>
 
 
 
 
 
 
 
 
</div>

<div class="footer">
  <p><center>THANK YOU FOR STAY WITH US</center></p>
  <!-- <a href="#Home"></a> -->
</div>

</body>
</ht