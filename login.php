<?php
include_once 'connect.php';

$uname=$_POST['uname'];
$pwrd=$_POST['password'];
$type1=$_POST['type'];
$s = strtolower($type1);
echo $s;

$sqlStatement = 'select * from login;';
$queryResult = mysqli_query($dbConnection,$sqlStatement);
$resultCheck = mysqli_num_rows($queryResult);

if($resultCheck>0) {
  while($row=mysqli_fetch_assoc($queryResult)) {
    if($row['uid']==$uname && $row['pwd']==$pwrd && $s=='student') {
      // header("Location:admin.php?submission=success");
      header("submission=success");
		echo '<script>';
		echo 'alert("Login Successfull");';
		echo 'window.location="student_post.html";';
		echo '</script>';
    }
	if($row['uid']==$uname && $row['pwd']==$pwrd && $s=='industry') {
		// header("Location:admin.php?submission=success");
		header("submission=success");
		  echo '<script>';
		  echo 'alert("Login Successfull");';
		  echo 'window.location="industry_post.html";';
		  echo '</script>';
	  }
  }
header("submission=failed");
echo '<script>';
echo 'alert("Incorrect Username or Password");';
echo 'window.location="verify.html";';
echo '</script>';
}
?>