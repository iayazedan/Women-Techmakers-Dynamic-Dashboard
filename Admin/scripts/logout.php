<?php 


            setcookie('login', '', time() -1, "/"); // 86400 = 1 day
        header('Location: ../index.php');
