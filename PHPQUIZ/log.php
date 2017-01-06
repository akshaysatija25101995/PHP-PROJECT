<?php
include("user.php");
$signin=new users;
extract($_POST);
if(isset($_POST['Submit'])) 
	  {
	 $email = $_POST['email'];
	$pass = $_POST['pass'];
	  }
	  $check_user = "select * from detail where email = '$email' AND pass ='$pass'";
if($signin->signin($email,$pass))
{
	$signin->url("home.php");
}
else
{
	$signin->url("login.php?run=failed");
}


?>
