<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GRT Images | Almassarat</title>
    <meta name="description" content="GRT Images Gallery." />
    <meta name="keywords" content="Road Construction, GRT MENA, Global Road Technology">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
      .hr-orange{
        background-color: orangered;
      }
      .orange{
        color: #ec7404;
      }
      img.grid{
        object-fit: cover;
      }
      .center {
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0%);
        width: max-content;
      }
      .grid{
        background: #ec7404;
      }
      ::selection {
        color: #fff;
        background: #ec7404;
      }
      /* ipad */
      @media (max-width: 768px) and (min-width : 320px) {
        .center{
          width: 90vw;
        }
      }
    </style>
  </head>
<body class='scroll1 page-gallery'>

<?php /* dyanamically add button */
define('distributor', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/dist.jpg" /></div>
<!-- intro -->
<div class="jumbotron jumbotron-fluid pb-0 bg-white" id="intro">
  <img src="img/grt/grt.jpg" class="img-fluid" width="200vh" loading="eager" alt="GRT"><br>
  <small class="lead">Explore our Images Gallery</small>
  <hr class="mt-5 " width="40%" style="background-color: #ec7404">
</div>

<?php include_once "grt-media-nav.php"; ?>

<!-- GRT Images -->
<div class="container my-5 text-left">
  <!-- Dust Control -->
  <h2 class="orange" id="dust">
    Dust Control 
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#supress" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<13){
        for($k=0; $k<3 & $i<13; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/dust/($i).jpg' class='img-fluid grid' alt='Dust Control $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Dust Supperession -->
  <h2 class="orange" id="supress">Dust Suppression and Road Stabilization
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#rail" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<35){
        for($k=0; $k<3 & $i<35; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/suppression/($i).jpg' class='img-fluid grid' alt='Dust Supperession $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Railway Applications -->
  <h2 class="orange" id="rail">Railway Applications
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#mining" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<11){
        for($k=0; $k<3 & $i<11; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/rail/($i).jpg' class='img-fluid grid' alt='Railway Applications $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">
  
  <!-- Mining Applications -->
  <h2 class="orange" id="mining">Mining Applications
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#erosion" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<15){
        for($k=0; $k<3 & $i<15; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/mining/($i).jpg' class='img-fluid grid' alt='Mining Applications $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Erosion Control -->
  <h2 class="orange" id="erosion">Erosion and Sediment Control
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#farm" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<21){
        for($k=0; $k<3 & $i<21; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/erosion/($i).jpg' class='img-fluid grid' alt='Erosion Control $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">
  
  <!-- Farm Applications -->
  <h2 class="orange" id="farm">Farm and Rural Applications
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#military" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<13){
        for($k=0; $k<3 & $i<13; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/farm/($i).jpg' class='img-fluid grid' alt='Farm Applications $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Military Applications -->
  <h2 class="orange" id="military">Military Applications
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#road" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<11){
        for($k=0; $k<3 & $i<11; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/military/($i).jpg' class='img-fluid grid' alt='Military Applications $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Road Preparation -->
  <h2 class="orange" id="road">Parking Lots and Industrial Area Applications
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#soil" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<22){
        for($k=0; $k<3 & $i<22; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/water/($i).jpg' class='img-fluid grid' alt='Road Preparation $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- Soil Stabilization -->
  <h2 class="orange" id="soil">Soil and Road Stabilization
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#vehicle" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<23){
        for($k=0; $k<3 & $i<23; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/soil/($i).jpg' class='img-fluid grid' alt='Soil Stabilization $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- GRT Vehicles -->
  <h2 class="orange" id="vehicle">GRT Vehicles and Heavy Equipments
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#site" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<29){
        for($k=0; $k<3 & $i<29; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/vehicles/($i).jpg' class='img-fluid grid' alt='GRT Vehicles $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- GRT Onsite -->
  <h2 class="orange" id="site">GRT Onsite
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a>
    <a href="#lab" class="small text-secondary"><i class="fa fa-arrow-down"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<9){
        for($k=0; $k<3 & $i<9; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/site/($i).jpg' class='img-fluid grid' alt='GRT Onsite $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
  <hr class="bg-danger my-5" width="80%">

  <!-- GRT Research & Developement -->
  <h2 class="orange" id="lab">GRT Research & Developement
    <a href="#intro" class="small text-dark"><i class="fa fa-arrow-up"></i></a></h2>
  <div class="row mt-5">
    <?php
      $i=0;
      while($i<11){
        for($k=0; $k<3 & $i<11; $k++){
          $i++;
          echo "<div class='col-md-4 px-1 py-1'><a class='pop'><div><img src='img/grt/pix/lab/($i).jpg' class='img-fluid grid' alt='GRT Research & Developement $i'></div></a></div>";
        }
        $k=0;
      }
    ?>
  </div>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<!-- image modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" data-dismiss="modal">
    <div class="modal-content bg-dark center">       
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