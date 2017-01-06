


<!DOCTYPE html>
<html lang="en">
<head>
<style>
 body {
 
    background: url("imag.jpg") no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
</head>
  <title>Bootstrap Case</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap.min1.js"></script>
  <script src="npm.js"></script>

<body>
<br>
<br>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="panel panel-danger">
    <div class="panel-heading">ONLINE QUIZ SYSTEM</div>
    <div class="panel-body">QUIZ</div>
	
</div>
</div>
</div>
</div>





<div class="container">
<div class="row">
   <div class="col-sm-6">

	  <div class="panel panel-success">
	 <div class="panel-heading"> LOGIN Form</div>
	 <div class="panel-body">
	  <?php
	  
	  if(isset($_GET['run'])&& $_GET['run']=="failed")
	{
		echo"Email & PASSWORD doesnt match";
		} 
		?>
  <form role="form" action="log.php"method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
    </div>
    <div class="form-group">
      <label for="pass">Password:</label>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
  </div>
  
  
  <div class="col-sm-6">
  
    <div class="panel panel-success">
   
	<div class="panel-heading"> REGISTRATION Form</div>
	<div class="panel-body">
	
	<?php 
	extract($_POST);
	//if(isset($_GET['run'])&& $_GET['run']=="success")//
	//{//
		//echo "<script> alert ('Email is already exist')</script>";//
		//exit();//
		if(isset($_GET['run'])&& $_GET['run']=="success")
	{
		echo"successfuly done";
		
	}
	//}//
	?>
	
	
	
	
  <form role="form" method="post" action="register.php" enctype="multipart/form-data">
    <div class="form-group">
	 <label for="Name">Name:</label>
      <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter Name" required/></div>
	  <div class="form-group">
	 <label for="MOBILE">MOBILE NUMBER:</label>
      <input type="text" class="form-control" name="MOBILE" id="MOBILE" placeholder="Enter MOBILE NUMBER" maxlength="10"  pattern="[0-9]{10}"  required></div>
	   <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></div>
	  <div class="form-group">
      <label for="pass">Password:</label>
      <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required/>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
  </div>
  </div>
  </div>
</div>

</body>
</html>

 

