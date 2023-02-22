<?php
include 'config.php';




$title = $_POST['title'];
$place= $_POST['place'];
$contact = $_POST['contact'];
$description= $_POST['description'];
$start_date = $_POST['start_date'];
$ticket = $_POST['ticket'];
$image = $_FILES['image'];


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$video = $_FILES['video'];
$video_name = $video['name'];
$video_tmp_name = $video['tmp_name'];




$imageDes = 'eventImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);


$VideoDes = 'video/' . $video_name;
$videoSave = $video_name;
move_uploaded_file($video_tmp_name, $VideoDes);


$sql = "INSERT INTO `event`(`title`, `description`, `place`, `ticket`, `contact`, `image`, `video`, `start_date`) VALUES ('$title','$description','$place', '$ticket', '$contact','$imageSave','$videoSave','$start_date')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Resource Inserted!!')</script>";
    echo "<script>location.href='addevent.php'</script>";
}


