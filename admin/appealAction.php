<?php
include 'config.php';





$title = $_POST['title'];
$amount= $_POST['amount'];
$description= $_POST['description'];
$poster_image = $_FILES['poster_image'];



$imageLocation = $poster_image['tmp_name'];
$imageName = $poster_image['name'];

$imageDes = 'appealImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);





$sql = "INSERT INTO `appeal`(`title`, `poster_image`, `description`, `need_amount`) VALUES ('$title','$imageSave','$description','$amount')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Resource Inserted!!')</script>";
    echo "<script>location.href='apealshow.php'</script>";
}


