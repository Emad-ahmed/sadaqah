<?php include 'navbar.php' ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/event.css">
<link rel="stylesheet" href="css/btn.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    .carousel-item img{
        height: 29rem !important;
        object-fit:cover;
        opacity: 0.5;
    }

    .maincard .card {
    height:28rem !important;
    border-bottom:1px solid 
  }

  .card
  {
    border-radius:3rem 1rem 3rem 1rem !important;
  }

  @media screen and (max-width: 768px) {

	.carousel-item img{
        height: 18rem !important;
        object-fit:cover;
    }
    .carousel-control-next-icon
    {
      position: absolute;
      top: 10rem;
    
    }
    .carousel-control-prev-icon
    {
      position: absolute;
      top: 10rem;
    }

    @media screen and (max-width: 900px) {
	
      .carousel-control-next-icon
    {

      top: 7rem;
    
    }
    .carousel-control-prev-icon
    {

      top: 7rem;
    }
	
}
}

</style>

<!-- <?php

include 'admin/config.php';

$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];


$_duplicate_ip = mysqli_query($conn, "SELECT * FROM `visitors` WHERE user_agent= '$user_agent'");



if (mysqli_num_rows($_duplicate_ip) > 0) {
  echo "<script>location.href = 'index.php'</script>";
} else {
  $insert_query = "INSERT INTO `visitors`(`ip_address`, `user_agent`) VALUES ('$ip_address','$user_agent')";
  mysqli_query($conn,  $insert_query);
  echo "<script>location.href = 'index.php'</script>";
}


?> -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top:6.9%;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-info" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-info" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-info" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
   
  <?php
    $query = "SELECT * FROM appeal";
    $result = $conn->query($query);

    // Store the data in an array
    $items = array();
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }

  ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php foreach ($items as $index => $item): ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $index; ?>" class="<?php echo $index == 0 ? 'active' : ''; ?>"></li>
        <?php endforeach; ?>
      </ol>
      <div class="carousel-inner">
        <?php foreach ($items as $index => $item): ?>
            
          <div class="carousel-item <?php echo $index == 0 ? 'active' : ''; ?>">
          <?php
          echo "<a href='fullapealshow.php?id=$item[id]'>";
          ?>
            <img src="admin/appealImage/<?php echo $item['poster_image']; ?>" class="d-block w-100">
            <div class="carousel-caption d-none d-md-block">
            <div>
              <a href='fullapealshow.php?id=<?php echo $item['id']; ?>' class='btn btndonate pt-2 pb-2'>Donate Now</a>
            </div>
            </div>
        </a>
          </div>
        <?php endforeach; ?>
      </div>
     
    </div>


  </div>


  <button class="carousel-control-prev mt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next mt-5" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Donate Now Page -->
<div class="donation"> 
<div class="container ">
<form action="">
    <div class="row">
       
            <div class="col-lg-2 mt-4">
                <div class="donatefund">
                   <span>Donate To Fund</span>
                </div>
            </div>
            <div class="col-lg-4">
            <div class="input-group mb-3">
                <span class="input-group-text text-white" id="basic-addon1">£</span>
                <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-4">
            <div class="input-group mb-3">
            <select class="form-select" id="inputGroupSelect01">
                <option value="1">Single</option>
                <option value="2">Monthly</option>

            </select>
            </div>
            </div>
            <div class="col-lg-2 mt-4">
                <div>
                    <button type="submit">Donate Now</button>
                </div>
            </div>
     
    </div>
    </form>
</div>
</div>

<hr>

<div class="container mt-2 cardview mb-5" data-aos="fade-up">
  <h1 class="text-center mt-3 mb-5 appeal">Current Appeals</h1>
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div class="row">

  <?php
    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM `appeal`");


    while ($row = mysqli_fetch_array($alldata)) {
    if (strlen($row['description']) > 100)
      $new_string = substr($row['description'], 0, 100) . '';
    else
      $new_string = $row['description'];
      
    echo "<div class='col-md-3 col-sm-6 item'>
    <a href='fullapealshow.php?id=$row[id]'>
    <div class='card item-card card-block mb-3 mycard'>
     <img src='admin/appealImage/$row[poster_image]' alt='Photo of sunset'>
        <h6 class='item-card-title mt-3 mb-3 fw-bolder'>$row[title]</h6>
        <p class='card-text'>$new_string</p> 
        <div>
        <div class='parent'>
          <button class='btn-gradient-1'>Donate Now</button>
        </div>
        </div>
    </div>
    </a>
    </div>";
    }
    ?>
    <div class='col-md-3 col-sm-6 item'>
    <a href=''>
    <div class='card item-card card-block mb-3 mycard'>
     <img src='img/appeal.jpg' alt='Photo of sunset'>
        <h6 class='item-card-title mt-3 mb-3 fw-bolder'>All Appeals</h6>
        <p class='card-text'>All Appeals</p> 
        <div>
        <div class='parent'>
          <button class='btn-gradient-1'>Donate Now</button>
        </div>
        </div>
    </div>
    </a>
    </div>


   
     
  </div>
  
</div>



<hr>

<div class='zakacard'>
<div class="container mt-2  mt-4" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-4">
    <a href="">
        <div class="card text-center" style="width: 20rem; height:30rem;">
  <img src="img/zakat.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Zakat</h5>
    <p class="card-text text-justify-center">Zakat is an obligatory act of worship for Muslims, which involves giving a portion of their wealth to those in need. It is one of the five pillars of Islam and is considered a means of purifying one's wealth and gaining reward from Allah.</p>
      </div>
  </div>
  </a>
      </div>
      <div class="col-lg-4">
  <a href="">
      <div class="card text-center" style="width: 20rem; height:30rem;">
  <img src="img/sada.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sadaqah</h5>
    <p class="card-text text-justify-center">Sadaqah is a voluntary act of giving in Islam, which involves giving any kind of charitable act, whether it be through money, time, or effort. It is considered a virtuous deed and is believed to have many benefits, both in this life and the hereafter.</p>
  </div>
</div>
</a>
      </div>
   
      <div class="col-lg-4">
      <a href="">
      <div class="card text-center" style="width: 20rem; height:30rem;">
  <img src="img/world.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Feed Our World</h5>
    <p class="card-text text-justify-center">Feed Our World is a global movement that aims to end world hunger and poverty through education, advocacy, and action. It seeks to address the root causes of food insecurity and promote sustainable solutions for feeding the world's growing population.</p>
    
    
  </div>
</div>
</a>
      </div>
    </div>
</div>
</div>



<!-- Relief Card -->

<hr>


<div class="main maincard mt-5" data-aos="fade-up">

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
      <a href='eventshow.php?id=$row[id]'>
      <div class='card'>
        <div class='card_image'><img src='admin/eventImage/$row[image]'></div>
        <div class='card_content'>
          <h2 class='card_title'>$row[title]</h2>
          <p class='card_text'>$new_string..</p>
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



<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init(
        {
          duration: 800, 
          easing: 'ease',
        }
      );
    </script>


<?php include 'footer.php' ?>