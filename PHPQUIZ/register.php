<?php
include("user.php");
$register= new users;
extract($_POST);


$query = "insert into detail(Name,Mobile,email,pass) values('$Name','$MOBILE','$email','$pass')";

 

      if($register->signup($query))
     {
	$register->url("login.php?run=success");
        }
       
	
?>
