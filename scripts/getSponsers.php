<?php


require ('config.php');

$query = "SELECT * from sponsers";

$record = mysqli_query($con , $query);

while($row = mysqli_fetch_assoc($record))
{
    echo '
    <div class="sponser col-xs-12 col-md-6 wow fadeInLeft " data-wow-duration="1.5s">
                    <div class="img-container">
                        <img src="imgs/sponsers/'.$row['image'].'"
                             class="img-responsive" draggable="false" alt="'.$row['name'].'" title="'.$row['name'].'">
                    </div>
                </div>
                ';
}
