<?php
include_once 'connect.php';

$problemID = $_POST['problemID'];
$description = $_POST['description'];
$document = $_POST['document'];

$sqlStatement = 'insert into indreg values("'.$problemID.'","'.$description.'","'.$document.'");';
$queryResult = mysqli_query($dbConnection,$sqlStatement);

header("submission=success");
echo '<script>';
echo 'alert("Registration Successfull");';
echo 'window.location="student_post.html";'; // can change in place of verify.html
echo '</script>';
?>
