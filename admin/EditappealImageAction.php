<?php
include 'config.php';


$id = $_POST['id'];




$select_id = $_POST['select_id'];
$image = $_FILES['image'];
$oldImage = $_POST['oldImage'];



$imageLocation = $image['tmp_name'];
$imageName = $image['name'];

$imageDes = 'appealImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);




if (strlen($imageDes) > 12) {
    $updateQuery = "UPDATE `appeal_image` SET `appeal_id`='$select_id',`image`='$imageSave' WHERE id='$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {
    $updateQuery = "UPDATE `appeal_image` SET `appeal_id`='$select_id',`image`='$oldImage' WHERE id='$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {
    die("Not Inserted!");
}else{
    echo "<script>alert('Image Changed Successfully!!')</script>";
    echo "<script>location.href='imageappealshow.php'</script>";
}


