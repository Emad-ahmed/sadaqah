<?php include 'adminNavbar.php' ?>
<link rel="stylesheet" href="css/event.css">
<style>

.adminconatiner
{
    margin-top: 4rem;
}

</style>

<div class="container w-50 m-auto bg-white p-3 border pt-2 event mt-2">
    <h2 class="text-center mb-5">Add Appeal</h2>
    <div>
    <form action="appealAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="title">Title</label>
            <input type="text" placeholder="Title" name="title" class="form-control" id="title">
        </div>

        

        
        <div class="mb-3">
        <label for="poster_image">Poster Image</label>
            <input type="file"  name="poster_image" class="form-control" id="poster_image">
        </div>

        <div class="mb-3">
        <label for="amount">Need Amount</label>
            <input type="text"  name="amount" class="form-control" placeholder="$" id="amount">
        </div>
       
       
      
        <div class="mb-3">
        <label for="contact">Description</label>
            <textarea name="description"  class="form-control form-control-sm" id="title"> </textarea>
        </div>


      
        <div class="w-25 m-auto"> 
            <button type="submit" class="btn  col-12">Add Event</button>
        </div>
        
    </form>
    </div>
</div>