<?php include 'adminNavbar.php' ?>
<link rel="stylesheet" href="css/event.css">
<style>

.adminconatiner
{
    margin-top: 4rem;
}


<?php

include 'config.php';

$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `apeal_video` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

?>


</style>

<div class="container w-50 m-auto bg-white p-3 border pt-2 event">
    <h2 class="text-center mb-5">Edit Appeal Video</h2>
    <div>
    <form action="EditappealVideoAction.php" method="POST" enctype="multipart/form-data">
        
    <div class="mb-3">
            <label for="title">Select Appeal</label>
            <select class="form-select" aria-label="Default select example" name="select_id">
            <?php
                include 'config.php';

                $alldata = mysqli_query($conn, "SELECT * FROM `appeal`");

                while ($row = mysqli_fetch_array($alldata)) {
                echo "<option value='$row[id]'>$row[title]</option>";
                }

                ?>
            
            </select>
        </div>
        <div class="mb-3">

        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" value="<?php echo $data['title'] ?>" name="title" class="form-control" placeholder="Title" id="title">
        </div>

        <div class="mb-3">
            <label for="description">Description</label>
            <textarea name="description" class='form-control' id="" cols="30" rows="10"><?php echo $data['description'] ?></textarea>
        </div>

        <div class="mb-3">
            <label for="video_link">Youtube Video Link</label>
            <input type="text"  name="video_link" value="<?php echo $data['video_link'] ?>" class="form-control" placeholder="Link" id="video_link">
        </div>
        

        <div class="mb-3">
            <label for="video">Video</label>
            <input type="file"  name="video" class="form-control"  id="video">
        </div>
         

        <div>
            <input type="text" name="oldVideo" value="<?php echo $data['video'] ?>" class="form-control" hidden>
            <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" hidden>
        </div>
      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Edit Appeal Video</button>
        </div>
        
    </form>
    </div>
</div>