
<?php
   session_start();
   // Cart implementation code
   if(isset($_POST['add']))
   {
	   if(isset($_SESSION['cart']))  
	   {
		 $food_id_array_food_id=array_column($_SESSION['cart'],'food_id'); 
 		 if(!in_array($_GET['id'],$food_id_array_food_id))
		 {
			 $count=count($_SESSION['cart']);
			 $food_id_array= array ( 
		  
		   'food_id' => $_POST['food_id'],
		   'quantity' => $_POST['quantity'],
		   'food_price' => $_POST['food_price'],
		 
		   );
			$_SESSION['cart'][$count]=$food_id_array; 
		 }
		 else
		 {
			 echo "<script>alert('food_id already added')</script>";
			 echo "<script>window.location='product.php'</script>";
		 }
	   }	
       else
	   {
		    $food_id_array= array ( 
		   'food_id' => $_POST['food_id'],
		   'quantity' => $_POST['quantity'],
		   'food_price' => $_POST['food_price'],
		  
		   );
		   $_SESSION['cart'][0]=$food_id_array;
	   }		   
   }
  
   
   
   
   
   // Logout code
 
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


<div class="topnav">
  <div class="topnav">
 
  <a href="product.php">All Products</a>
  <a href="?sign=out" style="float:right">Logout</a>
</div>
</div>

<div class="row">
<br>
	<br>

  <div class="container">

  <form action="product.php" method="post">
  <div class="row">
    <div class="col-25">
    </div>
    <center><div class="col-75">
	<br>
	<br>
	<br>
	 <br>
	<br>
	<em><label for="catg">Select menu name</label></em>
	<select name="catg">
<?php
 include("../connection.php");
 $sql="select distinct menu_name from product";
 $r=mysqli_query($con,$sql);
 
 
    while($row=mysqli_fetch_array($r))
    {
        $menu_name=$row['menu_name'];
        echo "<option value='$menu_name'>$menu_name</option>";
    }
?>
</select>
  </div></center>
  </div> 
  <center><div class="row">
  <br>
	<br>
	
    <input type="submit" value="GO" name="go">
	<br>
	<br>
	<br>
  </div></center>
  </form>
  <br>
	<br>
</div>
<?php
include("../connection.php");
if(isset($_POST['go']))
{
	$c=$_POST['catg'];
	
	$query="select * from product,store where product.menu_id=store.menu_id and product.menu_name='$c'";
	$r=mysqli_query($con,$query);
	echo "<table id='customers'>";
 echo "<tr>
 <th>menu_id</th>
 <th>menu_name</th>
 <th>food_id</th>
 <th>food_name</th>
 <th>food_price</th>
 <th>Image</th>
  <th>quantity</th>

  </tr>";
    while($row=mysqli_fetch_array($r))
    {
		$menu_id=$row['menu_id'];
        $menu_name=$row['menu_name'];
		$food_id=$row['food_id'];
		$food_name=$row['food_name'];
		$food_price=$row['food_price'];
		$image=$row['image'];
		echo "<form action='product.php?action=add&id=$menu_id' method='post'>";	
    echo "<tr>
    <td>$menu_id</td><td>$menu_name</td><td>$food_id</td><td>$food_name</td><td>$food_price</td>
	<td><img src='../uploadedimage/$image' height='100px' width='100px'></td>
 
	 <td><input type='text' value='1' name='quantity'>
	<input type='hidden' value='$food_id' name='food_id'>
	<input type='hidden' value='$food_price' name='food_price'>
	</td>
	<td><input type='submit' value='Add to cart' name='add'></td>
	</tr>";
	echo "</form>";
    }
	echo "</table>";
}
?>
</div>

<div>
<h3>Order Details</h3>
<table id='customers'>
<tr>
 <th>food_id</th>
 <th>quantity</th>
 <th>price</th>
 <th>total</th>
</tr>
<?php
if(!empty($_SESSION['cart']))
{
	$total=0;
	foreach ($_SESSION['cart'] as $keys => $values)
	{
		echo "<tr>";
?>		
		<td><?php echo $values['food_id']; ?></td>		
		<td><?php echo$values['quantity']; ?></td>
		<td><?php echo$values['food_price']; ?></td>
		
		<td><?php echo number_format($values['quantity']*$values['food_price'],2); ?></td>
		
	    </tr>
<?php		
		$total=$total+($values['quantity']*$values['food_price']);
	}
	echo "<tr>";
	echo "<td colspan='3' align='right'>Total</td>";
?>	
	<td><?php echo number_format($total,2); ?></td>
	<td></td>
<?php	
}
?>
</table>
<div>
<form action='product.php' method='post'>
<div class="row">
    <input type="submit" value="Submit your Order" name="corder">
</div>
</form>
<?php
// Save the orders in database
if(isset($_POST['corder']))
{
	include("../connection.php");
	$num=rand(10,1000);
	$order_id="O-".$num;
	$order_date=date("D-M-Y");
	
	
	$sqlorder="insert into customer_order values('$order_id','$order_date')";
	mysqli_query($con,$sqlorder);
	foreach ($_SESSION['cart'] as $keys => $values)
	{
		$total=0;
		$food_id=$values['food_id'];
		$quantity=$values['quantity'];
		$food_price=$values['food_price'];
		$total=$values['quantity']*$values['food_price'];
		$sql="insert into order_line values('$food_id','$quantity','$food_price','$total')";
	    mysqli_query($con,$sql);
	}
	echo "your order has been submited successfully";
	unset($_SESSION['cart']);
}
?>	
</div>
	
<div class="footer">

  <center><h2>THANKS FOR STAY WITH US</h2></center>
  
</div>

</body>
</html>

