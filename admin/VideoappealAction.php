<?php
include 'config.php';






$select_id = $_POST['selecttitle'];
$title = $_POST['title'];
$description = $_POST['description'];
$video = $_FILES['video'];

echo $select_id;


$videoLocation = $video['tmp_name'];
$videoName = $video['name'];
$videoDes = 'video/' . $videoName;
$videoSave = $videoName;
move_uploaded_file($videoLocation, $videoDes);



$sql = "INSERT INTO `apeal_video`(`appeal_id`, `title`, `description`, `video`) VALUES ('$select_id', '$title', '$description', '$videoSave')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Video Inserted!!')</script>";
    echo "<script>location.href='videoappealshow.php'</script>";
}


