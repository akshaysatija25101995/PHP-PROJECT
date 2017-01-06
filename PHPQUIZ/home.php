<?php
include("user.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->catshow();
//print_r($profile->data);
?>
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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap.min1.js"></script>
  <script src="npm.js"></script>

<body>
<div class="container">
  <h2>Online QUIZ in PHP</h2>
  <p><strong></strong></p>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
   
	<li style="float:right"><a href="logout.php">LOGOUT </a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
	 <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz</button></center>  
           <div class="col-sm-4"></div>
		   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">
	  <form  method="post" action="qus.php">
	<select class="form-control" id="" name="cat">
	<option>SELECT CATEGORY</option>
	 <?php
	   foreach($profile->cat as $category)
		  {  ?>			  			
			<option value="<?php echo $category['id'];?>"><?php echo $category['catname'];?></option>
			<?php   }?>
	   
      </select>
 <center> <input type="submit" value="submit" class="btn btn-primary"/></center>
	  </form>
	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>SHOWING PROFILE</h3>
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
		<th>Name</th>
		<th>MOBILE</th>
		<th>email</th>
      </tr>
    </thead>
    <tbody>
	<?php     
	foreach($profile->data as $prof)
	{?>
	<tr>
	<td><?php echo $prof['id'];?></td>
	<td><?php echo $prof['Name'];?></td>
	<td><?php echo $prof['MOBILE'];?></td>
	<td><?php echo $prof['email'];?></td>
	</tr>
	</tbody>
	<?php  } ?>
	</table>
	   <p></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>LOGOUT </h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
</body>
</html>








































