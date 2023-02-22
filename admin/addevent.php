<?php include 'adminNavbar.php' ?>

<?php

$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

?>
<link rel="stylesheet" href="css/event.css">
<style>
    .adminconatiner
{
   
        margin-top: 4rem;
}
</style>


<div class="container w-50 m-auto  p-3 border pt-2 event">
    <h2 class="text-center mb-5">Add Event</h2>
    <div>
    <ul class="breadcrumb">   
        <li class="breadcrumb-item active"><a href="eventshow.php">Event</a></li>
        <li class="breadcrumb-item active"><a href="addevent.php">Add Event</a></li>
    </ul>
    </div>
    <div>
    <form action="eventAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="title">Title</label>
            <input type="text" placeholder="Title" name="title" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="place">Place</label>
            <input type="text" placeholder="Place" name="place" class="form-control" id="place">
        </div>
        <div class="mb-3">
        <label for="contact">Contact</label>
            <input type="number" placeholder="Contact" name="contact" class="form-control" id="contact">
        </div>
        <div class="mb-3">
        <label for="contact">Image</label>
            <input type="file" placeholder="Contact" name="image" class="form-control" id="image">
        </div>
        <div class="mb-3">
        <label for="contact">Video</label>
            <input type="file" placeholder="Contact" name="video" class="form-control" id="video">
        </div>

        <div class="mb-3">
        <label for="contact">Date</label>
            <input type="text" placeholder="Date" name="start_date" class="form-control" id="start_date">
        </div>

        <div class="mb-3">
        <label for="contact">Ticekt Details</label>
            <textarea name="ticket" placeholder="Ticket" class="form-control form-control-sm" id="ticket"> </textarea>
        </div>
      
        <div class="mb-3">
        <label for="contact">Description</label>
            <textarea name="description" placeholder="Date" class="form-control form-control-sm" id="title"> </textarea>
        </div>
      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Add Event</button>
        </div>
        
    </form>
    </div>

    <div>
        <h2><?php echo $ip_address ?></h2>
        <h2><?php echo $user_agent ?></h2>
    </div>
</div>