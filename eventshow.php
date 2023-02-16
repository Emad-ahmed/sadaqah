<?php include 'navbar.php' ?>

<?php

include 'config.php';
$id = $_GET['id'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `event` WHERE id = '$id'");
$data = mysqli_fetch_array($datafetchquery);
?>


<link rel="stylesheet" href="css/eventshow.css">

<?php

echo "<div class='eventshow'>
   <div class='imgview'>
        <img src='$data[image]' alt=''>
   </div>
   <div class='mt-3 titleview'>
        <h2 class='fw-bolder'>$data[title]</h2>
   </div>
   <div class='des'>
    <p>$data[description]</p>
    </div>
    </div>";

?>

<script src="js/contact.js"></script>

<?php include 'footer.php' ?>