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
$dataFetchQuery = "SELECT * FROM `appeal_image` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

?>


</style>

<div class="container w-50 m-auto bg-white p-3 border pt-2 event">
    <h2 class="text-center mb-5">Edit Appeal Image</h2>
    <div>
    <form action="EditappealImageAction.php" method="POST" enctype="multipart/form-data">
        
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
            <label for="image">Image</label>
            <input type="file"  name="image" class="form-control"  id="image">
        </div>
         

        <div>
            <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" class="form-control" hidden>
            <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" hidden>
        </div>
      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Edit Appeal Image</button>
        </div>
        
    </form>
    </div>
</div>