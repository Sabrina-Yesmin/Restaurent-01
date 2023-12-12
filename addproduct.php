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


<link rel = "stylesheet" href="addproduct.css" type="text/css">

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

<div class="topnav">

<p><a href="admin.php">BACK</a></p>

 
   
    <a href="addproduct.php">Add Product</a>
	<a href="store.php">STORE</a>
	
  <a href="?sign=out" style="float:right">Logout</a>


 </div>
 </div> 

 
    
<div class="c">


 
 <div class="o">
 <form method="post" action="addproduct.php" enctype="multipart/form-data" >
 <a name="order">
 
 <br>
 <br>
 <br>
 
 
 
 
  <table class="w3-table w3-bordered">
    
	 
	
	<tr>
	<br>
	  <th name="menu_id">MENU ID</th>
	<th name="menu_name">MENU NAME</th>
    
    <th name="food_id">FOOD ID</th>
	<th name="food_name">FOOD NAME</th>
	
   <th  name="food_price" >FOOD PRICE</th>
  </tr>
  <tr>
  <td>   <input type=""  name="menu_id" placeholder="" id="i"></td>
	<td>   <input type=""  name="menu_name" placeholder="" id="i"></td>
    <td> <input type=""   name="food_id" placeholder="" id="i"></td>
   <td>   <input type=""  name="food_name" placeholder="" id="i"></td>
    <td> <input type=""   name="food_price" placeholder="" id="i"></td>
	
  </tr>
 
	 </div>
  </table>
  <br>
  <br>
  <br>
     
	 
	 
	 
</div>

 <div class="row">
    <div class="col">
      <label for="image">Food Image</label>
    </div>
    <div class="col1">
      <input  type="file" id="image" name="pic">
	  </div>
  </div>


<center><button class="btn" name="Sign_Up" >Sign Up</button></center>

 


</form>
 
 </a>



</body>
</html>


<?php
include("../connection.php");
if(isset($_POST['Sign_Up']))
{
	$menu_id=$_POST['menu_id'];
	$menu_name=$_POST['menu_name'];
	$food_id=$_POST['food_id'];
	$food_name=$_POST['food_name'];
	$food_price=$_POST['food_price'];
	
	$ext= explode(".",$_FILES['pic']['name']);
    $c=count($ext);
    $ext=$ext[$c-1];
    $date=date("D:M:Y");
    $time=date("h:i:s");
    $image_name=md5($date.$time.$food_id);
    $image=$image_name.".".$ext;
	$query="insert into product values('$menu_id','$menu_name','$food_id','$food_name','$food_price','$image')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
		if($image !=null){
	                move_uploaded_file($_FILES['pic']['tmp_name'],"../uploadedimage/$image");
                    }
	}
	else
	{
		echo "error!";
	}
}
?>










