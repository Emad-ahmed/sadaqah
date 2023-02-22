<?php
include 'config.php';


$id = $_POST['id'];




$select_id = $_POST['select_id'];
$title = $_POST['title'];
$description = $_POST['description'];
$video = $_FILES['video'];
$oldVideo = $_POST['oldVideo'];



$videoLocation = $video['tmp_name'];
$videoName = $video['name'];

$videoDes = 'video/' . $videoName;
$videoSave = $videoName;
move_uploaded_file($videoLocation, $videoDes);




if (strlen($videoDes) > 6) {
    $updateQuery = "UPDATE `apeal_video` SET `appeal_id`='$select_id',`title` ='$title',`description`='$description',`video`='$videoSave' WHERE id='$id'";
    move_uploaded_file($videoLocation, $videoDes);
} else {
    $updateQuery = "UPDATE `apeal_video` SET `appeal_id`='$select_id',`title` ='$title',`description`='$description',`video`='$oldVideo' WHERE id='$id'";
    move_uploaded_file($videoLocation, $oldVideo);
}


if (!mysqli_query($conn, $updateQuery)) {
    die("Not Inserted!");
}else{
    echo "<script>alert('Image Changed Successfully!!')</script>";
    echo "<script>location.href='videoappealshow.php'</script>";
}


