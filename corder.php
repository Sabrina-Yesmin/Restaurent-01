<?php
   session_start();
   if(empty($_SESSION['cart']))
   {
	   $_SESSION['cart']=array();
   }

   if($_SESSION['customer_login_status']!="loged in" and ! isset($_SESSION['user_id']) )
    header("Location:../index.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['customer_login_status']="loged out";
	unset($_SESSION['user_id']);
   header("Location:../index.php");    
   }
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="product.css">
</head>
<body>

<div class="header">
  <h1>order now</h1>
</div>

<div class="topnav">
  <div class="topnav">
    <a href="product.php">home</a>

  <a href="?sign=out" style="float:right">Logout</a>
</div>
</div>

<div class="row">

  <div class="container">

  <form action="corder.php" method="post">
  <div class="row">
  
  <div class="row">
    <div class="col-25">
	<label for="quantity">Quantity</label>
    </div>
    <div class="col-75">
       <input type='text' value='' name='quantity'>
  </div>
  </div> 
  
  <div class="row">
    <input type="submit" value="Add to Cart" name="add">
  </div>
  </form>
</div>
<?php
include("../connection.php");
if(isset($_POST['add']))
{
	$food_id=$_SESSION['food_id'];
    $quantity=$_POST['quantity'];
	  $food_price=$_POST['food_price'];
	$total=array("food_id"=>"$food_id","quantity"=>$quantity);
    array_push($_SESSION['cart'],$total);
	$max=sizeof($_SESSION['cart']);
for($i=0; $i<$max; $i++) { 

while (list ($key, $val) = each ($_SESSION['cart'][$i])) { 
echo "$key -> $val ,"; 
} // inner array while loop
echo "<br>";
} // outer array for loop
}
?>
</div>

<div class="footer">
  <h2>Copyright@puc.cse</h2>
  
</div>

</body>
</html>



