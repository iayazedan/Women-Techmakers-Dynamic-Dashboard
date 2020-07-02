<?php

require('config.php');

$title = $_REQUEST['title'];

$select = "SELECT * FROM posts WHERE title = '$title'";

$record = mysqli_query($con , $select);
$image = null;
while($row = mysqli_fetch_assoc($record))
{
    $id = $row['id'];
    $date = $row['date'];
    $time = $row['time'];
    $meetup = $row['meetup'];
    $location = $row['location'];
    $map = $row['map'];
    $post = $row['post'];
    $hashtag = $row['hashtag'];
    $hashbook = $row['hashbook'];
    $image = $row['image'];
}
$target = 'scripts/update.php';

$post = '<form action="'.$target.'" method="post" >

                                    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="title" class=" form-control-label">Event Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="id"  value="'.$id.'" name="postId" placeholder="id" class="form-control">
                                                    <small class="form-text text-muted">title</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="title" class=" form-control-label">Event Title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title" value="'.$title.'" name="title" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">title</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date" class=" form-control-label">Event Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" value="'.$date.'" name="date" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">date</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="time" class=" form-control-label">Event Time</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="time" id="time" value="'.$time.'" name="time" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">date</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Event Meetup</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="email-input" value="'.$meetup.'" name="meetup" placeholder="Enter your meetup" class="form-control">
                                                    <small class="help-block form-text">meetup Link</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Event Location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="password-input" value="'.$location.'" name="location" placeholder="Location" class="form-control">
                                                    <small class="help-block form-text">event location</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Event Location</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="map" name="map" value="'.$map.'" placeholder="Map location" class="form-control">
                                                    <small class="help-block form-text">event location map</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="post" class=" form-control-label">Event Description</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="post" id="post"  rows="9" placeholder="Content..." class="form-control">'.$post.'</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Hashtag</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hashtag" value="'.$hashtag.'" name="hashtag" placeholder="Hashtag" class="form-control">
                                                    <small class="help-block form-text">event hashtag</small>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Hashtag facebook</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hashbook" value="'.$hashbook.'" name="hashbook" placeholder="Hashtag facebook" class="form-control">
                                                    <small class="help-block form-text">event  hashtag facebook</small>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input-update" class=" form-control-label">Event Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <span><img src="../logo/'.$image.'" width="300px" height="300px"> </span>
                                                </div>
                                            </div>
                                            <div class="card-footer">

                                                <input type="submit" name="btn_update" value="submit" class="btn btn-primary btn-sm">

                                                </input>
<
                                            </div>
                                        </form>
                                        ';

$change = array('id' => $id, 'post' => $post);

echo json_encode($change);