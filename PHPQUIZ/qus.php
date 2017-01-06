<?php
include("user.php");
$qus=new users;
$cat=$_POST['cat'];
$qus->qusshow($cat);
$_SESSION['cat']=$cat;
//echo"<pre>";
//print_r($qus->qus);
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
 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap.min1.js"></script>
  <script src="npm.js"></script>
  <body>
<div class="container">
  <h2>ONLINE QUIZ</h2>
  <form method="post" action="answer.php">
  <?php $i=1;
  foreach($qus->qus as $qust) {  ?>
  <table class="table table-bordered">
    <thead>
      <tr class="danger">
        <th><?php echo $i; ?> <?php echo $qust['question'];?></th>
         </tr>
    </thead>
    <tbody>
	<?php if(isset($qust['ans1'])) {?>
      <tr class="info">
        <td>&nbsp;1&emsp;<input type="radio" value="0" name="<?php echo $qust['id']; ?>" /><?php echo $qust['ans1'];?></td>
      </tr>
	<?php }?>
	<?php if(isset($qust['ans2'])) {?>
	  <tr class="info">
        <td>&nbsp;2&emsp;<input type="radio" value="1" name="<?php echo $qust['id']; ?>" /> <?php echo $qust['ans2'];?></td>
      </tr>
	  <?php }?>
	  <?php if(isset($qust['ans3'])) {?>
	  <tr class="info">
        <td>&nbsp;3&emsp; <input type="radio" value="2" name="<?php echo $qust['id']; ?>" /> <?php echo $qust['ans3'];?></td>
      </tr>
	   <?php }?>
	   <?php if(isset($qust['ans4'])) {?>
	  <tr class="info">
        <td>&nbsp;4&emsp;<input type="radio" value="3" name="<?php echo $qust['id']; ?>" /> <?php echo $qust['ans4'];?></td>
      </tr>
	  <tr class="info">
	  <td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id']; ?>" /></td>
	  
      <?php }?>
    </tbody>
  </table>
  <?php  $i++; }?>
 <center> <button type="submit" value="submit Quiz" class="btn btn-success btn-lg">Submit</button></center>
  </form>
</div>
</body>
</html>


