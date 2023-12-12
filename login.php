<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log In</title>
  <!-- <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>  -->

    
<link rel = "stylesheet" href="projectlog.css" type="text/css">
</head>

<body>
<div class="topnav">
	 
           <p><b><a href="index.php">HOME</a></b></p> 
         
		   
   
     </div>

  <div class="login-card">
    <h1><em>Log-in</em></h1><br>
	<div class="name">
  <form method="post">
    <input type="text"  placeholder="Username" name="name" >
    <input type="password"  placeholder="Password" name="password" >
    <input type="submit"  class="login login-submit" value="login" name="login" >
  </form>
</div>
<br>
  <div class="login-help">
    <em><a href="#">Register</a> • <a href="#">Forgot Password</a></em>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <!-- <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script> -->

</body>

</html>
<?php
/*include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	
	//customer id generation
	
	
	

	$query="insert into info values('$name','$password')";
	if(mysqli_query($con,$query))
	{
		echo "Successfully inserted!";
                     
    }
	else
	{
		echo "error!";
	}
}
?>*/
include("connection.php");
if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql="select name,password from admin where name='$name' and password='$password'";
    $sql1="select name,password from  customer where name='$name' and password='$password'";
            $r=mysqli_query($con,$sql);
            $r1=mysqli_query($con,$sql1);
            if(mysqli_num_rows($r)>0)
            {
                $_SESSION['name']=$name;
                $_SESSION['admin_login_status']="loged in";
                header("Location:admin/admin.php");
            }
            
            else if(mysqli_num_rows($r1)>0)
            {
                $_SESSION['name']=$name;
                $_SESSION['customer_login_status']="loged in";
                header("Location:customer/admin.php");
            }
            else
            {
                echo "<p style='color: red;'>Incorrect name or password</p>";
            }
	
}
?>







