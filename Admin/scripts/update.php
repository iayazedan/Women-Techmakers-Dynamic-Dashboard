<?php



if(isset($_POST['btn_update']))
{
    require('config.php');
    $id = $_POST['postId'];
    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $meetup = $_POST['meetup'];
    $location = $_POST['location'];
    $map = $_POST['map'];
    $post = $_POST['post'];
    $hashtag = $_POST['hashtag'];
    $hashbook = $_POST['hashbook'];


    $query = "UPDATE `posts` SET `title` ='$title' , `post` ='$post' , `meetup` = '$meetup', `location` = '$location',
      `map` = '$map', `date` = '$date', `time` = '$time',`hashtag`='$hashtag',`hashbook` ='$hashbook'
       WHERE id = '$id'";

    mysqli_query($con ,$query);

    header('Location: ../update.php');

}