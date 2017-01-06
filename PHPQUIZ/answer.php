<?php
include("user.php");
$ans= new users;
$answer=$ans->answer($_POST);
?>
<html>
<head>
<title>answer</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap-theme.min.css">
 
  <script src="jquery.min.js"></script>
  <script src="bootstrap.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap.min1.js"></script>
  <script src="npm.js"></script>
</head>
</body>

<?php
$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
$attempt_qus=$total_qus-$answer['no_answer'];
$right_ans=$answer['right'];
$wrong_ans=$answer['wrong'];
$no_ans=$answer['no_answer'];
?>
<div class="container">
<div class="col-sm-2"></div>
<div class="col-sm-8">
 <center> <h2>QUIZ RESULT</h2></center>

  <table class="table table-striped table-bordered table-hover table-condensed">
    <thead>
      <tr>
        <th>TOTAL NUMBER OF QUESTION</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td> Attempted question </td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr>
        <td>RIGHT ANSWER</td>
        <td><?php echo $right_ans;?></td>
      </tr>
      <tr>
        <td>WRONG ANSWER</td>
        <td><?php echo $wrong_ans;?></td>
      </tr>
	   <td>NO ANSWER</td>
        <td><?php echo $no_ans;?></td>
      </tr>
	  <td>YOUR RESULT</td>
        <td><?php 
		$per=$right_ans*100/($total_qus);
		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table>
</div>
</div>

















</body>
</html>