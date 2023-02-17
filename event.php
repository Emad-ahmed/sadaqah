<?php include 'navbar.php' ?>

<link rel="stylesheet" href="css/event.css">

<div class="main maincard">
    <h2 class="text-center mb-4">Event</h2>
  <ul class="cards">
  <?php
    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM `event`");


    while ($row = mysqli_fetch_array($alldata)) {
    if (strlen($row['description']) > 100)
      $new_string = substr($row['description'], 0, 100) . '';
    else
      $new_string = $row['description'];

    echo "<li class='cards_item'>
      <a href='eventshow.php?id=$row[id]' class='text-decoration-none'>
      <div class='card'>
        <div class='card_image'><img src='$row[image]'></div>
        <div class='card_content'>
          <h2 class='card_title'>$row[title]</h2>
          <p class='card_text'>$new_string...</p>
          <p class='card_text'><b>Place:</b> $row[place]</p>
          <p class='card_text'>$row[start_date]</p>

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