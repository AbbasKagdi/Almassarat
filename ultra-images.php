<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ultratecno Videos | Almassarat</title>
    <meta name="description" content="UltraTecno Image Gallery" />
    <meta name="keywords" content="UltraTecno, Industrial Cleaning, Ultrasonic">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
      .center {
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0%);
      }
      ::selection {
        color: #fff;
        background: #3b76b7;
      }
      .grid{
        background: #eedfe6;
      }
    </style>
  </head>
<body class='scroll1 page-gallery'>

<?php /* dyanamically add button */
define('seller', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/n2.jpg" /></div>
<!-- intro -->
<div class="jumbotron jumbotron-fluid pb-0 bg-white" id="intro">
  <img src="img/ultra/ultratecno.jpg" class="img-fluid" width="250vh" loading="eager" alt="Ultratecno"><br>
  <small class="lead">Explore our Images Gallery</small>
  <hr width="40%" class="bg-primary my-5">
</div>

<?php include_once "ultra-medianav.php"; ?>

<!-- GRT Images -->
<div class="container my-5 text-left">
  <!-- Ultratecno International Exhibitions -->
  <h2 class="text-primary" id="event">Ultratecno International Exhibitions
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#acm" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<60){
        for($k=0; $k<4 & $i<60; $k++){
          $i++;
          echo "<div class='col-md-3 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/events/($i).jpg' class='img-fluid grid' alt='Ultratecno International Exhibitions $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- ACM -->
  <h2 class="text-primary" id="acm">ACM Series
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#icm" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<9){
        for($k=0; $k<3 & $i<9; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/acm/($i).jpg' class='img-fluid grid' alt='ACM Series $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- ICM -->
  <h2 class="text-primary" id="icm">ICM Series
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#multi" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<6){
        for($k=0; $k<3 & $i<6; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/icm/($i).jpg' class='img-fluid grid' alt='ICM Series $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- Multistage Systems -->
  <h2 class="text-primary" id="multi">Multistage Systems
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#big" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<11){
        for($k=0; $k<3 & $i<11; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/multistage/($i).jpg' class='img-fluid grid' alt='Multistage Systems $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- Big Machines -->
  <h2 class="text-primary" id="big">Big Machines
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#print" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<13){
        for($k=0; $k<3 & $i<13; $k++){
          $i++;
          echo "<div class='col-md-6 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/big/($i).jpg' class='img-fluid grid' alt='Big Machines $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- Printing Machines -->
  <h2 class="text-primary" id="print">Printing Machines
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#auto" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<12){
        for($k=0; $k<3 & $i<12; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/print/($i).jpg' class='img-fluid grid' alt='Printing Machines $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">
  
  <!-- Automated Lines -->
  <h2 class="text-primary" id="auto">Automated Lines
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#factory" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<6){
        for($k=0; $k<3 & $i<6; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/machines/auto/($i).jpg' class='img-fluid grid' alt='Automated Lines $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">

  <!-- Factory -->
  <h2 class="text-primary" id="factory">Ultratecno Factory
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<13){
        for($k=0; $k<3 & $i<13; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/ultra/pix/factory/($i).jpg' class='img-fluid grid' alt='Ultratecno Factory $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-primary my-5" width="80%">
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<!-- image modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content bg-dark center" style="width:max-content;">       
      <div class="modal-body">
        <span class="modal-text text-white text-left"></span>
        <button type="button" class="close mb-3" data-dismiss="modal">
          <span class="text-white" aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <img src="" class="imagepreview" style="width: 100%;">
      </div>       
    </div>
  </div>
</div>

<!-- modal script -->
<script>
  $(function() {
    $('.pop').on('click', function() {
      $('.imagepreview').attr('src', $(this).find('img').attr('src'));
      $('.modal-text').text($(this).find('img').attr('alt'));
      $('#imagemodal').modal('show');
    });     
  });
</script>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>