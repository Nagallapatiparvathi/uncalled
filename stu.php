<?php
include_once 'connect.php';

if(isset($_POST["submit"])) {
    $pid = $_POST['problemID'];
    $des = $_POST['description'];


    $pdf = $_FILES['pdf']['name'];
    $pdf_type = $_FILES['pdf']['type'];
    $pdf_size = $_FILES['pdf']['size'];
    $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "stuuploads/".$pdf;

    move_uploaded_file($pdf_tem_loc,$pdf_store);

    $sqlStatement = "insert into sform values('$pid','$des','$pdf');";
    $queryResult = mysqli_query($dbConnection,$sqlStatement);
}
echo '<script>';
echo 'alert("File uploaded succesfully");';
echo 'window.location = "student_post.html";';
echo '</script>';
?>