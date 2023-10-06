<?php
include_once 'connect.php';

$uname=$_POST['signup-username'];
$pwrd=$_POST['signup-password'];
$type1=$_POST['type'];
$s = strtolower($type1);

$sqlStatement1 = 'select * from login';
$queryResult1 = mysqli_query($dbConnection,$sqlStatement1);
$resultCheck = mysqli_num_rows($queryResult1);

if($resultCheck>0) {
  while($row=mysqli_fetch_assoc($queryResult1)) {
    if($row['uid']==$uname) {
      // header("Location:admin.php?submission=success");
        echo "<script>";
        echo 'alert("Username already exist!");';
        echo 'window.location="verify.html";';
        echo "</script>";
    }
	}
}

$sqlStatement = 'insert into login values("'.$uname.'","'.$pwrd.'","'.$s.'");';
$queryResult = mysqli_query($dbConnection,$sqlStatement);

header("submission=success");
echo '<script>';
echo 'alert("Registration Successful");';
echo 'window.location="verify.html";';
echo '</script>';
?>