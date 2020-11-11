<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Al Massarat Al Khalijiya</title>
	  <meta name="description" content="Welcome to Al Massarat Al Khalijiya, General Trading and Contracting Company: Home to the most advanced and innovative solution providers of Construction and Maintenance Technologies in Kuwait, & GCC Countries." />
    <meta name="keywords" content="General Trading, Bussiness, Construction, Kuwait, GRT MENA, Global Road Technology, Ultratecno">
    <?php include_once "headers.php"; ?>
    <style>
        @media (max-width: 514px) {

        }
        @media (min-width: 1400px) {
          .carousel-caption h2{
            font-size: 4em;
          }
          .carousel-caption p{
            font-size: 2em;
          }
          div.carousel-caption{
            transform:translateY(-150px);
          }
          .carousel-indicators{
            transform:translateY(-130px);
          }
        }
        @media (min-width: 1024px) and (max-width: 1400px) {
          .carousel-caption h2{
            font-size: 3em;
          }
          .carousel-caption p{
            font-size: 1.5em;
          }
          div.carousel-caption{
            transform:translateY(-100px);
          }
          .carousel-indicators{
            transform:translateY(-80px);
          }
        }
        @media (max-width: 600px) {
          .carousel-caption h2{
            font-size: 1.5em;
          }
          .carousel-caption p{
            font-size: 0.8em;
          }
        }
        .orange{
            color: #ec7404;
        }
        .parallax{
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-position: center;
          background-size: cover;
        }
    </style>
  </head>
<body class='scroll1 page-home'>

<!-- Navbar -->
<?php /* dyanamically remove request quote button */
define('sitemap', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div id="intro">
  <?php /*
  <div id="carlinks" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carlinks" data-slide-to="0" class="active"></li>
      <li data-target="#carlinks" data-slide-to="1"></li>
      <li data-target="#carlinks" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner text-dark">
      <!-- First -->
      <div class="carousel-item active">
        <img class="d-block img-fluid adjust" src="img/banners/n0.jpg" alt="Third slide">
        <div class="carousel-caption bg-trans">
          <h1 class="text-theme display-4">AMAK</h1>
          <p class="text-dark lead adapt">Praesent commodo cursus.</p>
        </div>
      </div>
      <!-- Second -->
      <div class="carousel-item">
        <img class="d-block img-fluid adjust" src="img/banners/n2.jpg" alt="Second slide">
        <div class="carousel-caption bg-trans">
          <h1 class="text-theme display-4">Second</h1>
          <p class="text-dark lead adapt">Lorem ipsum dolor sit amet, elit.</p>
        </div>
      </div>
      <!-- Third -->
      <div class="carousel-item">
        <img class="d-block img-fluid adjust" src="img/banners/n1.jpg" alt="First slide">
        <div class="carousel-caption bg-trans">
          <h1 class="text-theme display-4">Buildings</h1>
          <p class="text-dark lead adapt">Yup we make buildings.</p>
        </div>
      </div>
    </div>
      <!-- left -->
    <a class="carousel-control-prev" href="#carlinks" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
      <!-- right -->
    <a class="carousel-control-next" href="#carlinks" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  */ 
  include_once "carousel.php" ;
  ?>
</div>

<!-- Welcome section -->
<div class="container p-5 my-5">
<p class="adapt-2">Welcome to</p>
<h1 class="display-4">Al Massarat Al Khalijiya</h1>
<hr class="bg-danger" style="width:50%">
<p class="adapt-2 mt-5">General Trading and Contracting Company: Home to the most advanced and innovative solution providers of Construction and Maintenance Technologies in Kuwait, & GCC Countries.</p>
<p class="adapt-2">From <a href="construction.php" target="_blank">Consultation to Construction</a>; and <a href="soil-stabilisation.php" target="_blank">Road Safety</a> to <a href="ultrasonic-cleaning.php" target="_blank">Equipment Maintenance</a>, We've got you covered in all sectors. Explore our website, to know more <a href="about.php">about us</a>, and <a href="index.php#services">our services</a>.</p>
</div>

<!-- Parallax: Intro -->
<div class="parallax p-5" style="background-image: url('img/banners/petro.jpg')">
<div class="my-5">
  <div class=" container mt-3 p-4">
    <p class="lead text-wrap small"></p>
    <br>
    <h3 class="text-white">Providing Effective and Innovative Industrial Solutions, for the GULF & MENA regions since 2014.</h3>
    <br>
  </div>
</div>
</div>

<!-- services offered cards-->
<div class="p-5 my-5 container" id="service">
  <a href="about.php"><h2>What We Offer</h2></a>
  <hr class="bg-danger" style="width:50%">
  <div class="mt-5 card-deck">
    <div class="card shadow5">
      <img class="card-img-top" src="img/p3.jpg" alt="Industrial Services">
      <div class="card-body d-flex flex-column">
        <h5 class="text-theme card-title">Industrial Partners</h5>
        <p class="card-text small">Our Industrial Services division focuses on providing the market with cutting edge technologies aimed at optimizing operations as well as saving on time and cost...</p>
        <a class="btn btn-danger mt-auto" href="industry.php" target="_blank">Read More</a>
      </div>
    </div>
    <!-- Manpower Supply Removed
    <div class="card shadow5">
      <img class="card-img-top" src="img/p2.jpg" alt="Manpower Supply">
      <div class="card-body d-flex flex-column">
        <h5 class="text-theme card-title">Manpower Supply</h5>
        <p class="card-text small">Al Massarat Manpower Supply division has been created to fulfill the requirements currently arising in Kuwait, for an efficient and productive workforce. Whether you require direct or indirect manpower...</p>
        <a class="btn btn-danger mt-auto" href="manpower.php" target="_blank">Read More</a>
      </div>
    </div> -->
    <div class="card shadow5">
      <img class="card-img-top" src="img/p4.jpg" alt="Contracting & Construction">
      <div class="card-body d-flex flex-column">
        <h5 class="text-theme card-title">Contracting & Construction</h5>
        <p class="card-text small">Al Massarat Al Khalijiya offers a full spectrum of contracting services, built on the principles of innovation, integrity, quality and value. Regardless of the nature of the project, ....</p>
        <a class="btn btn-danger mt-auto" href="construction.php" target="_blank">Read More</a>
      </div>
    </div>
  </div>
</div>

<!-- Email Us --><!-- Blocked till improvisation
<div class="container-fluid bg-danger text-white p-5">
<div class="row container">
  <div class="col-lg-9 col-md-8 col-sm-12"><h2 class="adapt-3">Are construction process, equipment maintenance, or potential profit loss a concern right now?</h2></div>
  <div class="col-lg-3 col-md-4"><a href="mailto:info@almassarat.com" class="btn btn-lg btn-dark border-white mt-3">We're here to help</a></div>
</div>
</div> -->

<!-- product section -->
<div class="px-5 my-5 container">
  <h2>Explore Our Products</h2>
  <hr style="width:50%;" class="bg-danger">
  <div class="mt-5 card-deck px-3">
    <div class="card shadow5">
      <img class="card-img-top" src="img/grt/stats.jpg" alt="GRT Products">
      <div class="card-body d-flex flex-column bg-light">
        <h5 class="orange card-title">Global Road Technology</h5>
        <p class="card-text small">Road Technology Solutions</p>
        <a class="btn bg-orange text-white mt-auto" href="grt-products.php" target="_blank">Explore</a>
      </div>
    </div>
    <div class="card shadow5">
      <img class="card-img-top" src="img/ultra/solder.jpg" alt="Ultratecno">
      <div class="card-body d-flex flex-column bg-light">
        <h5 class="text-primary card-title">Ultratecno</h5>
          <p class="card-text small">Power Ultrasonic Cleaning Solutions</p>
        <a class="btn btn-primary mt-auto" href="ultratecno-products.php" target="_blank">Explore</a>
      </div>
    </div>
  </div>
</div>
<!--
<div class="p-5 my-5 container">
  <h2>Explore Our Products</h2>
  <hr style="width:50%" class="bg-theme">
  <div class="row mt-5 justify-content-center">
    <div class="col-md-5 mb-3">
      <div class="card shadow5">
        <img class="card-img-top" src="img/grt/stats.jpg" alt="GRT Products">
        <div class="card-body d-flex flex-column bg-light">
          <h5 class="orange card-title">Global Road Technology</h5>
          <p class="card-text small">Road Technology Solutions</p>
          <a class="btn bg-orange text-white mt-auto" href="grt-products.php" target="_blank">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-md-5 mb-3">
      <div class="card shadow5">
        <img class="card-img-top" src="img/ultra/solder.jpg" alt="Ultratecno">
        <div class="card-body d-flex flex-column bg-light">
          <h5 class="text-primary card-title">Ultratecno</h5>
          <p class="card-text small">Ultrasonic Cleaning Solutions</p>
          <a class="btn btn-primary mt-auto" href="ultratecno-products.php" target="_blank">Explore</a>
        </div>
      </div>
    </div>
  </div>
</div>
      -->
<!-- Parallax: Sustainable Development -->
<div class="parallax p-5" style="background-image: url('img/banners/environ.jpg')">
  <div class=" container mt-3 p-4">
    <p class="lead text-wrap small"></p>
    <br>
    <br>
    <h3 class="text-white">We Believe in Sustainable Development</h3>
    <br>
    <br>
  </div>
</div>

<!-- Ending -->
<div class="bg-white p-3 my-5">
  <div class="container">
    <picture>
      <source srcset="img/amak-texts.png" media="(max-width: 768px)">
      <img src="img/amak-text.png" alt="AMAK" class="img-fluid">
    </picture>
  </div>
</div>

<!-- delete if rejected ---- trusted brand --><!--
<div class="container text-left p-1 my-5 row fade">
    <div class="col-md-4 col-sm-6 media my-4">
      <img class="mr-3" src="img/iso.png" alt="Generic placeholder image" width="90">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Certified Management</h5>
        <p class="small p-1">Cras sit anisi vulputate fringillaliberoerra turpis. Fusce liberoerra turpis. Fusce . Donec lacinia congue felis in faucibus.</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 media my-4">
      <img class="mr-3" src="img/env.png" alt="Generic placeholder image" width="90">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Environmentally Responsible</h5>
        <p class="small p-1">Cras sit amet nibh liberoerra turpis. Fusce liberoerliberoerra turpis. Fusce ra turpis. Fusce liberoerra turpis. Fusce condifdgds in faucibus.</p>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 media my-4">
      <img class="mr-3" src="img/logos.png" alt="Generic placeholder image" width="90">
      <div class="media-body">
        <h5 class="mt-0 mb-1">Trusted in Kuwait</h5>
        <p class="small p-1">Cras sit amet nibh libers viverra turpis. liberoerra turpis. Fusce liberoerra turpis. Fusce liberoerra turpis. Fusce Fusce conde felis in faucibus.</p>
      </div>
    </div>
</div> -->

<!-- Footer -->
<?php include_once "footer.php"; ?>

<!-- Carousel control for mobile -->
<script>
  $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
  });
</script>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>