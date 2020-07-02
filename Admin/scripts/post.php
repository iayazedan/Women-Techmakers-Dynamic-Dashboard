<?php



if(isset($_POST['btn_post']))
{
    require('config.php');

    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $meetup = $_POST['meetup'];
    $location = $_POST['location'];
    $map = $_POST['map'];
    $post = $_POST['post'];
    $hashtag = $_POST['hashtag'];
    $hashbook = $_POST['hashbook'];
    $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "../../logo/".$filename;
    move_uploaded_file($filetmp,$filepath);

    $query = "INSERT INTO `posts` (`id`, `title`, `post`, `meetup`, `location`, `map`, `date`, `time`, `image`,`hashtag`,`hashbook`)
                VALUES (NULL, '$title', '$post', '$meetup', '$location', '$map', '$date', '$time', '$filename','$hashtag','$hashbook')";

    mysqli_query($con ,$query);


    header('Location: ../update.php');


}