<?php
include 'config.php';


$id = $_POST['id'];




$title = $_POST['title'];
$amount= $_POST['amount'];
$description= $_POST['description'];
$image = $_FILES['poster_image'];
$oldImage = $_POST['oldImage'];



$imageLocation = $image['tmp_name'];
$imageName = $image['name'];



$imageDes = 'appealImage/' . $imageName;
$imageSave = $imageName;
move_uploaded_file($imageLocation, $imageDes);




if (strlen($imageDes) > 12) {
    $updateQuery = "UPDATE `appeal` SET `title`='$title',`poster_image`='$imageSave',`description`='$description',`need_amount`='$amount' WHERE id='$id'";
    move_uploaded_file($imageLocation, $imageDes);
} else {
    $updateQuery = "UPDATE `appeal` SET `title`='$title',`poster_image`='$oldImage',`description`='$description',`need_amount`='$amount' WHERE id='$id'";
    move_uploaded_file($imageLocation, $oldImage);
}


if (!mysqli_query($conn, $updateQuery)) {
    die("Not Inserted!");
}else{
    echo "<script>alert('Appeal Changed Successfully!!')</script>";
    echo "<script>location.href='apealshow.php'</script>";
}


