<?php include 'navbar.php' ?>

<?php

include 'config.php';
$id = $_GET['id'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `event` WHERE id = '$id'");
$data = mysqli_fetch_array($datafetchquery);
?>

<!-- <div class='imgview'>
        <img src='$data[image]' alt=''>
   </div> -->

<link rel="stylesheet" href="css/eventshow.css">

<?php

echo "<div class='eventshow'>

   <div class='video-container'>
   <iframe src='$data[video]' frameborder='0' allowfullscreen></iframe>
   </div>
   <div class='myview'>
   <div class='mt-3 titleview'>
        <h2 class='fw-bolder'>$data[title]</h2>
   </div>
   <div class='des'>
    <p>$data[description]</p>
    </div>
    <div class='des'>
     <p><span class='viewp'>Place:</span> <span class='designp'>$data[place]</span></p>
    </div>
    <div class='des'>
    <p><span class='viewp'>Contact:</span> <span class='designp'>$data[contact]</span></p>
   </div>
   <div class='des'>
    <p><span class='viewp'>Time:</span> <span class='designp'>$data[start_date]</span> </p>
   </div>
    </div>
    </div>
    
    ";

?>

<script src="js/contact.js"></script>

<?php include 'footer.php' ?>