<?php
if(isset($_POST['btn_post']))

{
    require('config.php');

    $sponserName = $_POST['sponserName'];
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "../../imgs/sponsers/" . $filename;
    move_uploaded_file($filetmp, $filepath);


    $query = "INSERT INTO `sponsers` ( `name`, `image`) VALUES ( '$sponserName', '$filename');";

    mysqli_query($con ,$query);


    header('Location: ../sponsers.php');

}

