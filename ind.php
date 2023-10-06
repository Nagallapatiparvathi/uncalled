<?php
include_once 'connect.php';

if(isset($_POST["submit"])) {
    $pid = $_POST['problemID'];
    $st = $_POST['statement'];
    $des = $_POST['description'];


    $pdf = $_FILES['pdf']['name'];
    $pdf_type = $_FILES['pdf']['type'];
    $pdf_size = $_FILES['pdf']['size'];
    $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "induploads/".$pdf;

    echo $pid;
    echo $st;
    echo $des;
    echo $pdf_store;

    move_uploaded_file($pdf_tem_loc,$pdf_store);

    $sqlStatement = "insert into iform values('$pid','$st','$des','$pdf');";
    $queryResult = mysqli_query($dbConnection,$sqlStatement);
}

echo '<script>';
echo 'alert("File uploaded succesfully");';
echo 'window.location = "industry_post.html";';
echo '</script>';
?>