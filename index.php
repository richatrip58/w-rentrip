<?php error_reporting(0); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
       <!--custom css-->
       <link rel="stylesheet" href="css/style.css">
    <!--fontawsome css-->
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
  
   
    

   <title>Wondrous RenTrip</title>
  </head>
  <body>

  <?php include "./navbar.php"; ?>




    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      
      <div class="carousel-indicators">
    
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
     
      </div>
      
      <div class="carousel-inner">
      
        <div class="carousel-item active">
        <img src="imgs/david-marcu-VfUN94cUy4o-unsplash.jpg" class="d-block w-100 img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Wondrous RenTrip</h5> 
            <p>Get a eco-friendly ride with Wondrous RenTrip</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/jan-muehlbach-sTa-fO_VM4k-unsplash.jpg"  class="d-block w-100 img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Nothing compares to the simple pleasure of riding a bicycle ;)</h5>
            <i class='fas fa-smile-beam' style='font-size:24px' color='white'></i> 
          </div>
        </div>
        <div class="carousel-item">
          <img src="imgs/oscar-aguilar-elias-B5p9If-Xic8-unsplash.jpg" class="d-block w-100 img-fluid" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dont't ride a bike to add days to life.<br> Ride a bicycle to add life to your days</h5>
            <i class='fas fa-biking' style='font-size:24px' color='white'></i> 
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

    <?php include "./footer.php"; ?>
   

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>

</body>
</html>
