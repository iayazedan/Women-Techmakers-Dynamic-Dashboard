<?php


require ('config.php');

$query = "SELECT * from posts";

$record = mysqli_query($con , $query);

while($row = mysqli_fetch_assoc($record))
    {
        echo '
            <div class="event col-xs-12 col-md-5 wow fadeIn " data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="imgBox">
                            <img src="logo/'.$row['image'].'" class="img-responsive" draggable="false" alt="I/O 2017 Logo" title="I/O 2017 Event in 6th October">
                            <span class="time">
                                <span class="fa fa-calendar-check-o"></span>
                                '.$row['date'].' <span class="fa fa-clock-o"></span>'.$row['time'].'
                            </span>
                        </div>
                        <div class="title">
                            <a class="eventName" href="'.$row['meetup'].'" target="_blank" draggable="false"><h2>'.$row['title'].'</h2></a>
                            
                            <span class="place">
                                <a href="'.$row['map'].'" target="_blank" draggable="false"><span class="glyphicon glyphicon-map-marker wow bounce " data-wow-duration="1.5s" data-wow-iteration="1" data-wow-delay="1s"></span>
                                    '.$row['location'].'</a>
                            </span>
                            <p class="lead">
                                    '.$row['post'].'                      
  </div>

                        <div class="hashtag">
                            <a href="'.$row['hashbook'].'" draggable="false" target="_blank"><span>#'.$row['hashtag'].'</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDG_OCTOBER/keywords_search" draggable="false" target="_blank"><span>#GDG_OCTOBER</span></a>
                            <a href="https://www.facebook.com/search/str/%23GDGOCTOBER/keywords_blended_posts" draggable="false" target="_blank"><span>#GDGOctober</span></a>
                        </div>
                    </div>
        ';
    }
