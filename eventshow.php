<?php include 'navbar.php' ?>

<link rel="stylesheet" href="css/event.css">

<div class="main maincard">
    <h2 class="text-center mb-4">Event</h2>
  <ul class="cards">
  <?php
    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM `event`");


    while ($row = mysqli_fetch_array($alldata)) {

    echo "<li class='cards_item'>
      <a href='eventshow.php?id=$row[id]' class='text-decoration-none'>
      <div class='card'>
        <div class='card_image'><img src='img/trust1.jpg'></div>
        <div class='card_content'>
          <h2 class='card_title'>One Night in Al Aqsa 2023</h2>
          <p class='card_text'>Discover the secrets of Al-Aqsa during an exclusive showing of this awe-inspiring documentary!

</p>
          <p class='card_text'>Fri 29 Jun</p>

        </div>
      </div>
      </a>
    </li>";
    }
    
    ?>
    
  </ul>
</div>


<script src="js/contact.js"></script>

<?php include 'footer.php' ?>