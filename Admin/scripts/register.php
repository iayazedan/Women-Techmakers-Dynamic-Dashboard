<?php

require('config.php');


$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['username'];
$query = "INSERT INTO `user` (`email` , `password` , `name`) VALUES ('$email','$password', '$name')";
$record = mysqli_query($con , $query);

header('Location: ../index.php');
