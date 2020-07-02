<?php

require('config.php');


$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * from `user` where `email` = '$email' AND `password` = '$password'";

$record = mysqli_query($con , $query);

$row_cnt = mysqli_num_rows($record);


if($row_cnt >0)
{
    while ($row = mysqli_fetch_assoc($record))
    {
        setcookie('login', $row['email'], time() + (86400 * 30), "/"); // 86400 = 1 day
        header('Location: ../index.php');
    }
}
else
{
    header('Location: ../login.php');

}