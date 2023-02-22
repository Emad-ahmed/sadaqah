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
$dataFetchQuery = "SELECT * FROM `appeal` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);

?>


</style>

<div class="container w-50 m-auto bg-white p-3 border pt-2 event">
    <h2 class="text-center mb-5">Edit Appeal</h2>
    <div>
    <form action="EditappealAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="title">Title</label>
            <input type="text" placeholder="Title" value="<?php echo $data['title'] ?>" name="title" class="form-control" id="title">
        </div>

        <div class="mb-3">
        <label for="poster_image">Poster Image</label>
            <input type="file"  name="poster_image" class="form-control" id="poster_image">
        </div>

        <div class="mb-3">
        <label for="amount">Need Amount</label>
            <input type="text" value="<?php echo $data['need_amount'] ?>" name="amount" class="form-control" placeholder="$" id="amount">
        </div>
       
       
      
        <div class="mb-3">
        <label for="contact">Description</label>
            <textarea name="description"  class="form-control form-control-sm" id="description"><?php echo $data['description'] ?></textarea>
        </div>


        <div>
            <input type="text" name="oldImage" value="<?php echo $data['poster_image'] ?>" class="form-control" hidden>
            <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" hidden>
        </div>

      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Edit Appeal</button>
        </div>
        
    </form>
    </div>
</div>