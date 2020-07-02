<?php
require('config.php');

$title = $_POST['title'];
$aboutUs = str_replace("'" ,"" ,$_POST['aboutUs']) ;




$update = "UPDATE settings SET webTitle = '$title' , aboutUs = '$aboutUs' WHERE id = 1";

mysqli_query($con , $update);

$con->close();
header('Location: ../setting.php');



