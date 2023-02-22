<?php include 'adminNavbar.php' ?>
<link rel="stylesheet" href="css/event.css">
<style>
    .adminconatiner
{
   
        margin-top: 4rem;
}
</style>

<?php

include 'config.php';

$id = $_GET['id'];
$dataFetchQuery = "SELECT * FROM `event` WHERE id = '$id'";
$run = mysqli_query($conn, $dataFetchQuery);
$data = mysqli_fetch_array($run);


?>

<div class="container w-50 m-auto bg-white p-3 border pt-2 event">
    <h2 class="text-center mb-5">Edit Event</h2>
    <div>
    <form action="editEventACtion.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" placeholder="Title" value="<?php echo $data['title'] ?>" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
        <label for="place">Place</label>
            <input type="text" placeholder="Place" value="<?php echo $data['place'] ?>" name="place" class="form-control" id="place">
        </div>
        <div class="mb-3">
            <label for="contact">Contact</label>
            <input type="number" placeholder="Contact" value="<?php echo $data['contact'] ?>" name="contact" class="form-control" id="contact">
        </div>
        <div class="mb-3">
            <label for="contact">Image</label>
            <input type="file"  name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
            <label for="contact">Video</label>
            <input type="file"  name="video" class="form-control" id="video">
        </div>

        <div class="mb-3">
            <label for="contact">Date</label>
            <input type="text" placeholder="Date" value="<?php echo $data['start_date'] ?>" name="start_date" class="form-control" id="start_date">
        </div>

        <div class="mb-3">
            <label for="contact">Ticket Details</label>
            <textarea name="ticket" placeholder="Ticket" class="form-control form-control-sm" id="ticket"><?php echo $data['ticket'] ?></textarea>
        </div>
      
        <div class="mb-3">
            <label for="contact">Description</label>
            <textarea name="description"  class="form-control form-control-sm" id="description"><?php echo $data['description'] ?></textarea>
        </div>

        <div>
            <input type="text" name="oldImage" value="<?php echo $data['image'] ?>" class="form-control" hidden>
            <input type="text" name="oldVideo" value="<?php echo $data['video'] ?>" class="form-control" hidden>
            <input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" hidden>

        </div>
      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Edit Event</button>
        </div>
        
    </form>
    </div>
</div>