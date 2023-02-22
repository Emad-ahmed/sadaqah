<?php
include 'config.php';



$select_id = $_POST['selecttitle'];
$image = $_FILES['image'];

echo $select_id;


$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = 'appealImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);





$sql = "INSERT INTO `appeal_image`(`appeal_id`, `image`) VALUES ('$select_id','$imageSave')";


if (!mysqli_query($conn, $sql)) {

    die("Not Inserted!");
}else{
    echo "<script>alert('Image Inserted!!')</script>";
    echo "<script>location.href='imageappealshow.php'</script>";
}


