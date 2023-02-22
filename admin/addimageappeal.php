<?php include 'adminNavbar.php' ?>
<link rel="stylesheet" href="css/event.css">
<style>

.adminconatiner
{
    margin-top: 4rem;
}

</style>


<div class="container w-50 m-auto bg-white p-3 border pt-2 event">
    <h2 class="text-center mb-5">Add Image</h2>
    <div>
    <ul class="breadcrumb">   
        <li class="breadcrumb-item active"><a href="apealshow.php">Appeal</a></li>
        <li class="breadcrumb-item active"><a href="addimageappeal.php">Add Image</a></li>
        <li class="breadcrumb-item active"><a href="addvideoappeal.php">Add Video</a></li>
    </ul>
    </div>
    <div>
    <form action="ImageappealAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title">Select Appeal</label>
            <select class="form-select" aria-label="Default select example" name='selecttitle'>
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
            <input type="file"  name="image" class="form-control" placeholder="$" id="image">
        </div>
         
        
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Add Image</button>
        </div>
        
    </form>
    </div>
</div>