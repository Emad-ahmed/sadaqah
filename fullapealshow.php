<?php include 'navbar.php' ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/apealshow.css">

<!-- <div class='imgview'>
        <img src='$data[image]' alt=''>
   </div> -->

<?php

include 'config.php';

$id = $_GET['id'];


$datafetchquery = mysqli_query($conn, "SELECT * FROM `appeal` WHERE id = '$id'");
$data = mysqli_fetch_array($datafetchquery);


?>

<link rel="stylesheet" href="css/eventshow.css">




<?php
$new_string = substr($data['description'], 0, 50) . '...';

echo "<div class='container'>
<div class='row'>
    <div class='col-lg-6'>
        <div class='collectfund'>
            <p>Your donations will go to this appeal's general fund, so your generosity can help where it's needed most!</p>
            <form action='dontaion.php'>
                <input type='text' placeholder='$' class='form-control'>

                <div class='mt-4 donatebtn'>
                    <button type='submit' class='btn'>Donate Now</button>
                </div>
            </form>
        </div>
    </div>
    <div class='col-lg-6'>
    <div class='imgview'>
        <img src='admin/appealImage/$data[poster_image]' alt='' class='carouselimg'>
    </div>
    </div>
</div>
</div>
<div class='container text-center rama'>
<h2 class='ramadanpack'>$data[title]</h2>
<p class='mt-3'>
    $data[description]
</p>



    
    



</div>



";



   
?>


<div class="container mthing">
    <div class="row justify-content-center d-flex">
<?php
    include 'config.php';
    $alldata = mysqli_query($conn, "SELECT * FROM `apeal_video` WHERE appeal_id = '$id'");
    while ($row = mysqli_fetch_array($alldata)) {

    echo "
    <div class='col-lg-12'>
    <h1 class='text-center'>$row[title]</h1>
    <div class='video-container'>
    <iframe src='$row[video_link]?autoplay=0' frameborder='0' allowfullscreen></iframe>
    </div>
    </div>
    ";
    }

    ?>
    
    </div>
</div>


<?php include 'footer.php' ?>