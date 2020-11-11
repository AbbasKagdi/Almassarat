<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Our Certification | Almassarat</title>
	  <meta name="description" content="Al Massarat Al Khalijia has certification for international complaince standards. Explore more about us here." />
    <meta name="keywords" content="General Trading, Bussiness, Construction, Kuwait, Certifications, Global Road Technology, Ultratecno">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
      .card-img-top {
        width: 100%;
        height: 10vw;
        object-fit: cover;
        object-position: 50% 50%;
        object-position: 0 0;
      }
      @media (min-width: 515px) and (max-width: 650px){
        .card-img-top {
          height: 30vw;
        }
      }
      @media (max-width: 514px) {
        .card-img-top {
          height: 40vw;
        }
      }
      .card a{
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      .orange{
          color: #ec7404;
      }
    </style>
  </head>
<body class='scroll1 page-about'>

<!-- Navbar -->
<?php include_once "nav.php"; ?>
<!-- front section -->
<!-- intro -->
<div class="jumbotron jumbotron-fluid py-0 my-5 bg-white" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Our Certification</h1>
    <small class="lead">Al Massarat Al Khalijia has certification for international complaince standards.</small>
    <hr class="mt-5 bg-danger" width="80%">
  </div>
</div>
<!-- feature -->
<!-- Removed
<div class="container row mb-5">
  <div class="col-md-5">
    <img src="img/banners/side.jpg" class="img-fluid" alt="Architechture">
  </div>
  <div class="col-md-7 text-left">
    <h3 class="my-3">Some great title that spans till the next line</h3>
    <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <p>"Lorem ipsum doDuis aute iruriatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
    <p class="lead">"Lorem ipsum doDuis aute iruriatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
  </div>
</div>
-->
<!-- certificate -->
<section class="">
  <div class="px-5 mb-5 container" id="amakiso">
    <h2 class="text-theme">AMAK Certifications</h2>
    <div class="mt-4 card-deck">
      <div class="card shadow5 bg-dark" id="ems">
        <img class="card-img-top" src="img/ems.jpg" alt="Environmental Management">
        <div class="card-body d-flex flex-column">
          <p class="text-white">Environmental Management</p>
          <a class="btn btn-danger mt-auto" href="static/certs/ems.pdf" target="_blank"><i class="fa fa-search"></i> ISO 14001:2015</a>
        </div>
      </div>
      <div class="card shadow5 bg-dark" id="ohs">
        <img class="card-img-top" src="img/ohs.jpg" alt="Occupational Health & Safety">
        <div class="card-body d-flex flex-column">
          <p class="text-white">Occupational Health & Safety</p>
          <a class="btn btn-danger mt-auto" href="static/certs/ohs.pdf" target="_blank"><i class="fa fa-search"></i> ISO 45001:2018</a>
        </div>
      </div>
      <div class="card shadow5 bg-dark" id="qms">
        <img class="card-img-top" src="img/qms.jpg" alt="Quality Management">
        <div class="card-body d-flex flex-column">
          <p class="text-white">Quality Management</p>
          <a class="btn btn-danger mt-auto" href="static/certs/qms.pdf" target="_blank"><i class="fa fa-search"></i> ISO 9001:2015</a>
        </div>
      </div>
    </div>
    <hr class="my-5">
  </div>
  <div class="px-5 mb-5 container" id="grtiso">
    <h2 class="orange">GRT Certifications</h2>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="mt-4 card shadow5 bg-dark">
          <img class="card-img-top" src="img/grt_iso9001.jpg" alt="Quality Management">
          <div class="card-body d-flex flex-column">
            <p class="text-white text-center">Quality Management</p>
            <a class="btn bg-orange text-white mt-auto" href="static/certs/grt_iso9001.pdf" target="_blank"><i class="fa fa-search"></i> ISO 14001:2015</a>
          </div>
        </div>
      </div>
    </div>
    <hr class="my-5" style="width:50%">
  </div>
  <div class="px-5 mb-5 container" id="utiso">
    <h2 class="text-primary">Ultratecno Certifications</h2>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="mt-4 card shadow5 bg-dark">
          <img class="card-img-top" src="img/ultra_iso9001.jpg" alt="Quality Management">
          <div class="card-body d-flex flex-column">
            <p class="text-white text-center">Quality Management</p>
            <a class="btn btn-primary mt-auto" href="static/certs/ultra_iso9001.pdf" target="_blank"><i class="fa fa-search"></i> ISO 14001:2015</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>