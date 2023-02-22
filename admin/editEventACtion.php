<?php
include 'config.php';


$id = $_POST['id'];




$title = $_POST['title'];
$place= $_POST['place'];
$contact = $_POST['contact'];
$description= $_POST['description'];
$start_date = $_POST['start_date'];
$ticket = $_POST['ticket'];
$image = $_FILES['image'];
$oldImage = $_POST['oldImage'];
$oldVideo = $_POST['oldVideo'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$video = $_FILES['video'];
$video_name = $video['name'];
$video_tmp_name = $video['tmp_name'];




$imageDes = 'eventImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);




$VideoDes = 'video/' . $video_name;
$VideoSave = $video_name;
move_uploaded_file($video_tmp_name, $VideoDes);


if (strlen($imageDes) > 11 ||  strlen($VideoDes) > 6) {
    $updateQuery = "UPDATE `event` SET `title`='$title',`description`='$description',`place`='$place',`ticket`='$ticket',`contact`='$contact',`image`='$imageSave',`video`='$VideoSave',`start_date`='$start_date' WHERE id='$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {
    $updateQuery = "UPDATE `event` SET `title`='$title',`description`='$description',`place`='$place',`ticket`='$ticket',`contact`='$contact',`image`='$oldImage',`video`='$oldVideo',`start_date`='$start_date' WHERE id='$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {
    die("Not Inserted!");
}else{
    echo "<script>alert('Event Changed Successfully!!')</script>";
    echo "<script>location.href='eventshow.php'</script>";
}


