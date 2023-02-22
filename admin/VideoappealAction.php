<?php
include 'config.php';






$select_id = $_POST['selecttitle'];
$title = $_POST['title'];
$description = $_POST['description'];
$video_link = $_POST['video_link'];









$sql = "INSERT INTO `apeal_video`(`appeal_id`, `title`, `description`, `video_link`) VALUES ('$select_id', '$title', '$description', '$video_link')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Video Inserted!!')</script>";
    echo "<script>location.href='videoappealshow.php'</script>";
}


