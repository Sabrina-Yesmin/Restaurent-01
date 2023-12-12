<?php
   session_start();
   if($_SESSION['admin_login_status']!="loged in" and ! isset($_SESSION['user_id']) )
    header("Location:../index.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['admin_login_status']="loged out";
	unset($_SESSION['user_id']);
   header("Location:../index.php");    
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>protfolio</title>


<link rel = "stylesheet" href="store.css" type="text/css">

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

<p><a href="admin.php">BACK</a></p>
<p><a href="#home">HOME</a></p>


<a href="store.php">STORE</a>

 <a href="?sign=out" style="float:right">Logout</a>
 
 </div>
  


 <div class="content">
 
 
 <div class="f">
 <a name="home">
 
 <br>
  <center><b><em>WELCOME STORE HOMEPAGE</em></b></center>
 <br>
 </a>
 </div>

 </div>
 
 
   <div class="row">

  <div class="container">
  
  <div class="row">
    <form action="store.php" method="post">
	<input type="submit" value="Show Product" name="show">
	</form>
	<?php
 include("../connection.php");
 if(isset($_POST['show']))
 {
 $sql="select * from product";
 $r=mysqli_query($con,$sql);
 echo "<table id='customers'>";
 echo "<tr>
 <th>MENU ID</th>
 <th>FOOD ID</th>
 <th>FOOD NAME</th>
 <th>FOOD PRICE</th>
  </tr>";
  
    while($row=mysqli_fetch_array($r))
    {
        $menu_id=$row['menu_id'];	
		$food_id=$row['food_id'];
		$food_name=$row['food_name'];
		$food_price=$row['food_price'];
    echo "<tr>
    <td>$menu_id</td><td>$food_id</td><td>$food_name</td><td>$food_price</td>
    </tr>";
    }
	echo "</table>";
 }
?>
  </div>  
  <form action="store.php" method="post">
  <div class="row">
  <hr/>
  <h4 align='center'>Store New  Information</h4>
  <center>
    <div class="col-25">
      <label >MENU ID</label>
    </div>
    <div class="col-75">
	<select name="menu_id">
	</center>
<?php
 include("../connection.php");
 $sql="select menu_id from product";
 $r=mysqli_query($con,$sql);
 
 
    while($row=mysqli_fetch_array($r))
    {
        $menu_id=$row['menu_id'];
        echo "<option value='$menu_id'>$menu_id</option>";
    }
 
 
 
?>
</select>
    </div>
  </div>
  
  <div class="row">
   <center> <div class="col-25">
      <label for="food_id">FOOD ID</label>
    </div>
    <div class="col-75">
      <input type="text" id="food_id" name="food_id" placeholder="food id..">
	  </div></center>
  </div>
  
  
  <div class="row">
    <center><div class="col-25">
      <label for="food_name">FOOD NAME</label>
    </div>
    <div class="col-75">
      <input type="text" id="food_name" name="food_name" placeholder="food name..">
	  </div></center>
  </div>
  
  
  
  <div class="row">
    <center><div class="col-25">
      <label for="food_price">FOOD PRICE</label>
    </div>
    <div class="col-75">
      <input type="text" id="food_price" name="food_price" placeholder="food price..">
	  </div></center>
  </div>
  
  
  
 
  
  <div class="row">
    <center><input type="submit" value="Add" name="submit"></center>
  </div>
  </form>
</div>
</div>


<div class="footer">
  <p><center>THANK YOU FOR STAY WITH US</center></p>
  
</div>

</body>
</html>
<?php
include("../connection.php");
if(isset($_POST['submit']))
{
	$menu_id=$_POST['menu_id'];
	
	$food_id=$_POST['food_id'];
	$food_name=$_POST['food_name'];
	$food_price=$_POST['food_price'];
	
	$query="insert into store values('$menu_id','$food_id','$food_name','$food_price')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
    }
	else
	{
		echo "error!".mysqli_error($con);
	}
}
?>