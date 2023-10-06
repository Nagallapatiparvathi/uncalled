/*<?php
$username = "root";
$password = "";
$hostname = "localhost";
$database = "uncalled";

$db = mysqli_connect($hostname, $username, $password,$database) or die("Database connection error: " . mysqli_connect_error());

mysqli_select_db($db, $database);
?> */

<?php
 $dbServName='localhost';
 $dbUname='root';
 $dbPwd='';
 $dbName='uncalled';
 $dbConnection=mysqli_connect($dbServName,$dbUname,$dbPwd,$dbName);
 ?>

