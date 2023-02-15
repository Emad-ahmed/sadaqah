<?php include 'navbar.php' ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/footer.css">
<link rel="stylesheet" href="css/event.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<style>
    .carousel-item img{
        height: 30rem;
        object-fit:cover;
    }

    .maincard .card {
    height:24rem;
    border-bottom:1px solid 
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
}

</style>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/car1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
        <div>
            <a href="" class="btn btndonate pt-2 pb-2">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/car1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
        <div>
            <a href="" class="btn btndonate pt-2 pb-2">Donate Now</a>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/car1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
        <div>
            <a href="" class="btn btndonate pt-2 pb-2">Donate Now</a>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div class="row">
    <div class="col-md-3 col-sm-6 item">
    <a href="">
    <div class="card item-card card-block mb-3">
     <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
        <h6 class="item-card-title mt-3 mb-3 fw-bolder">Turkey and Syria Earthquake Emergency</h6>
        <p class="card-text">Hundreds killed after three deadly earthquakes hit Turkey.</p> 
    </div>
    </a>
    </div>
    <div class="col-md-3 col-sm-6 item">
    <a href="">
    <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
        <h6 class="card-title  mt-3 mb-3 fw-bolder">Pakistan Floods Emergency</h6>
        <p class="card-text">Over 33 million people have been affected by catastrophic monsoon floods.</p>
    </div>
    </a>
    </div>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block mb-3">

    <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">Winter Emergency</h5>
        <p class="card-text">You could help save someone’s life during the harsh winter months.</p> 
  </div>
    </div>
    <div class="col-md-3 col-sm-6 item">
      <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">Rebuilding Pakistan</h5>
        <p class="card-text">Give the gift of hope to a family in desperate need and help us Rebuild Pakistan.</p> 
  </div>
    </div>    
  </div>
  
</div>



<hr>

<div class="container mt-2 cardview mt-4" data-aos="fade-up">
<!--   <div class="card card-block mb-2">
    <h4 class="card-title">Card 1</h4>
    <p class="card-text">Welcom to bootstrap card styles</p>
    <a href="#" class="btn btn-primary">Submit</a>
  </div>   -->
  <div class="row">
    <div class="col-md-2 col-sm-6 item itemrelief">
    <a href="">
    <div class="card item-card card-block mb-3">
     <img src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" alt="Photo of sunset">
        <h6 class="item-card-title mt-3 mb-3 fw-bolder">Sadaqah</h6>
    </div>
    </a>
    </div>
    <div class="col-md-2 col-sm-6 item itemrelief">
    <a href="">
    <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/7357/startup-photos.jpg" alt="Photo of sunset">
        <h6 class="card-title  mt-3 mb-3 fw-bolder">Thirst Relief</h6>
    </div>
    </a>
    </div>
    <div class="col-md-2 col-sm-6 item itemrelief">
      <div class="card item-card card-block mb-3">

    <img src="https://static.pexels.com/photos/262550/pexels-photo-262550.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">100% Zakat</h5>
  </div>
    </div>


    <div class="col-md-2 col-sm-6 item itemrelief">
    <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">Feed Our World</h5>
    </div>
    </div>  


    <div class="col-md-2 col-sm-6 item itemrelief">
    <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">Feed Our World</h5>
    </div>
    </div>  

    <div class="col-md-2 col-sm-6 item itemrelief">
    <div class="card item-card card-block mb-3">
    <img src="https://static.pexels.com/photos/326424/pexels-photo-326424.jpeg" alt="Photo of sunset">
        <h5 class="card-title  mt-3 mb-3 fw-bolder">View All</h5>
    </div>
    </div>
    


    </div>

  </div>
  
</div>


<!-- Relief Card -->

<hr>


<div class="main maincard mt-5" data-aos="fade-up">

  <ul class="cards">
    <li class="cards_item">
      <a href="">
      <div class="card">
        <div class="card_image"><img src="img/trust1.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">One Night in Al Aqsa 2023</h2>
          <p class="card_text">Discover the secrets of Al-Aqsa during an exclusive showing of this awe-inspiring documentary!

      </p>
          <p class="card_text">Fri 29 Jun</p>

        </div>
      </div>
  </a>
    </li>
    <li class="cards_item">
    <a href="">
      <div class="card">
        <div class="card_image"><img src="img/trust1.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">The Great Muslim Pantomime 2022 - 2023</h2>
          <p class="card_text">
A pantomime that Muslim families all over the kingdom could enjoy over the festive holiday</p>
  
        </div>
      </div>
</a>
    </li>
    <li class="cards_item">
    <a href="">
      <div class="card">
        <div class="card_image"><img src="img/trust1.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Palestine Marathon</h2>
          <p class="card_text">
Join Penny Appeal in the hills of Bethlehem for the Palestine Marathon. </p>
       
        </div>
      </div>
</a>
    </li>
    
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