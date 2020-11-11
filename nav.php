
<!-- skip to main for screenreaders -->
<div id="skip" class="w-100 bg-dark"><a href="#intro" class="skip sr-only sr-only-focusable">Skip to main content</a></div>

<!-- Experimental -->
<nav class="navbar navbar-expand-lg navbar-secondary static-top" style="background: #eedfe6; background: radial-gradient(circle, rgba(238,223,230,1) 0%, rgba(235,244,255,1) 100%);">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="AMAK logo" width="120" style="z-index:100">
    </a>
    <div class="collapse navbar-collapse mt-auto pb-3" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="tel:+96522411161"><i class="fa fa-phone"></i> (+965) 2241 1161</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mailto:info@almassarat.com"><i class="fa fa-envelope"></i> info@almassarat.com</a>
        </li>
        <?php
          // custom behavior based on the page.
          if(!defined('unquot')){
            if(defined('distributor')){
              $text = "<small>Become a Distributor</small>";
              $class = "bg-orange text-white btn-sm";
              $href = "grt-distributor.php";
              $icon = "fa fa-user-plus";
              $context = "GRT";
              $content = "Join our campaign, and become a distriutor for GRT in GULF and African countries.";
            }
            elseif(defined('seller')){
              $text = "View Applications";
              $class = "btn-primary btn-sm";
              $href = "ultratecno-products.php";
              $icon = "fa fa-gears";
              $context = "Ultratecno";
              $content = "Explore our product range, and Request a free quote today.";
            }
            elseif(defined('sitemap')){
              $text = "Sitemap";
              $class = "btn-danger btn-sm";
              $href = "sitemap.php";
              $icon = "fa fa-thumb-tack";
              $context = "Need Navigation?";
              $content = "Find all our resources at one place.";
            }
            elseif(defined('admin')){
              $text = "Admin Panel";
              $class = "btn-danger btn-sm";
              $href = "create.php";
              $icon = "fa fa-bolt";
              $context = "Hello Admin!";
              $content = "Create, Approve or Manage Blogs for GRT & Ultratecno";
            }
            else{
              $text = "Enquire";
              $class = "btn-danger btn-sm";
              $href = "contact.php";
              $icon = "fa fa-quote-left";
              $context = "Have a Question?";
              $content = "Feel free to give us a mail or contact us.";
            }
            echo 
          "<li class='nav-item'>
            <a href='$href' id='progbut' tabindex='0' class='nav-link btn float-right $class' role='button' data-toggle='popover' data-trigger='hover' title='$context' data-content='$content' data-placement='bottom'><i class='$icon' aria-hidden='true'></i> <span class='d-md-inline-block'>$text</span></a>
          </li>";

          /* echo "<div class='col-md-2 d-none d-md-block'>
            <a class='$class' href='$href'><i class='$icon' aria-hidden='true'></i> <span class='d-md-inline-block'>$text</span></a>
          </div>"; */
          }
        ?>
      </ul>
    </div>
  </div>
</nav>

<?php /*
<!-- top nav -->
<div class="container px-2 py-3">
  <div class="text-left row">
    <div class="col-md-2">
      <a href="index.php"><img src="img/logo.png" width="80vh"></a>
    </div>
    <div class="col-md-4 d-none d-md-block">
      <h3>Al Massarat Al Khalijia</h3>
      <!-- <img src="img/amak.png" class="img-fluid" alt="masarrat"> -->
    </div>
    <div class="col-md-2 d-none d-md-block">
      <a href="tel:+96522411161" class="font-weight-bold"><i class="fa fa-phone"></i> (+965) 2241 1161</a>
    </div>
    <div class="col-md-2 d-none d-md-block">
      <a href="mailto:info@almassarat.com" class="font-weight-bold small"><i class="fa fa-envelope"></i> info@almassarat.com</a>
    </div>
    
    // custom behavior based on the page.
    if(!defined('unquot')){
      if(defined('distributor')){
        $text = "<small>Become a Distributor</small>";
        $class = "btn bg-orange text-white btn-sm float-right";
        $href = "grt-distributor.php";
        $icon = "fa fa-user-plus";
        $context = "GRT";
        $content = "Join our campaign, and become a distriutor for GRT in GULF and African countries.";
      }
      elseif(defined('seller')){
        $text = "Request Quote";
        $class = "btn btn-primary btn-sm float-right";
        $href = "ultratecno-products.php";
        $icon = "fa fa-shopping-bag";
        $context = "Ultratecno";
        $content = "Explore our product range, and Request a free quote today.";
      }
      elseif(defined('sitemap')){
        $text = "Sitemap";
        $class = "btn btn-danger btn-sm float-right";
        $href = "sitemap.php";
        $icon = "fa fa-thumb-tack";
        $context = "Need Navigation?";
        $content = "Find all our resources at one place.";
      }
      else{
        $text = "Enquire";
        $class = "btn btn-danger btn-sm float-right";
        $href = "contact.php";
        $icon = "fa fa-quote-left";
        $context = "Have a Question?";
        $content = "Feel free to give us a mail or contact us.";
      }
      echo 
    "<div class='col-md-2 d-none d-md-block'>
      <a href='$href' tabindex='0' class='$class' role='button' data-toggle='popover'  data-trigger='hover' title='$context' data-content='$content' data-placement='bottom'><i class='$icon' aria-hidden='true'></i> <span class='d-md-inline-block'>$text</span></a>
    </div>";
    }    
  </div>
</div>
*/
?>
<!-- main navbar -->
<div class="" id="mainnav">
  <nav class="navbar navbar-expand-md navbar-light bg-light p-0 sticky-top">
    <button class="ml-3 border navbar-toggler btn bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i class="fa fa-bars" style="color:#fff; font-size:28px;" id="toggler-icon"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item mx-2 home active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-2 about">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item mx-2 services dropdown">
          <a class="nav-link dropdown-toggle" href="industry.php" id="services" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Services</a>
          <div class="dropdown-menu bg-light text-center border border-dark" aria-labelledby="services">
              <a class="dropdown-item bg-light" href="industry.php">Industrial Partners</a>
              <a class="dropdown-item bg-light" href="construction.php">Contracting & Construction</a>
          </div>
        </li>
        <li class="nav-item mx-2 grt dropdown">
          <a class="nav-link dropdown-toggle" href="grt.php" id="grt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GRT</a>
          <div class="dropdown-menu bg-light text-center border border-dark" aria-labelledby="grt">
              <a class="dropdown-item bg-light" href="grt.php">GRT</a>
              <!-- <a class="dropdown-item"><small>------- Applications -------</small></a> -->
              <hr style="width:80%">
              <a class="dropdown-item bg-light" href="grt-products.php">GRT Products</a>
              <a class="dropdown-item bg-light" href="grt-distributor.php">Distributor Opportunities</a>
              <hr style="width:80%">
              <a class="dropdown-item bg-light" href="dust-control.php">Dust Control & Suppression</a>
              <a class="dropdown-item bg-light" href="soil-stabilisation.php">Soil Stabilzation</a>
              <a class="dropdown-item bg-light" href="erosion-control.php">Erosion & Sediment Control</a>
              <a class="dropdown-item bg-light" href="military-application.php">Military Applications</a>
              <a class="dropdown-item bg-light" href="agricultural-land.php">Rural & Farm Applications</a>
              <a class="dropdown-item bg-light" href="oil_gas_applications.php">Oil & Gas Applications</a>
              <!-- <a class="dropdown-item" href="water-management.php">Water Management</a> -->
              <!-- <a class="dropdown-item"><small>------- Commercial -------</small></a> -->
          </div>
        </li>
        <li class="nav-item mx-2 ultra dropdown">
          <a class="nav-link dropdown-toggle" href="ultratecno.php" id="ut" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ultratecno</a>
          <div class="dropdown-menu bg-light text-center border border-dark" aria-labelledby="ut">
              <a class="dropdown-item bg-light" href="ultratecno.php">UltraTecno</a>
              <hr style="width:80%">
              <a class="dropdown-item bg-light" href="ultrasonic-machines.php">Cleaning Machines</a>
              <a class="dropdown-item bg-light" href="ultrasonic-cleaning.php">Industrial Cleaning</a>
              <a class="dropdown-item bg-light" href="ultrasonic-technology.php">Ultrasonic Technology</a>
              <hr style="width:80%">
              <a class="dropdown-item bg-light" href="ultra-transform.php">Ultra Transform</a>
              <a class="dropdown-item bg-light" href="ultratecno-products.php">UltraTecno Applications</a>
          </div>
        </li>
        <!-- Manpower Supply Removed
        <li class="nav-item mx-2 manpower">
          <a class="nav-link" href="manpower.php">Manpower Supply</a>
        </li> -->
        <li class="nav-item mx-2 gallery dropdown">
          <a class="nav-link dropdown-toggle" href="grt-videos.php" id="media" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Media</a>
          <div class="dropdown-menu bg-light text-center border border-dark" aria-labelledby="media">
              <a class="dropdown-item bg-light" href="grt-videos.php">GRT</a>
              <a class="dropdown-item bg-light" href="ultra-videos.php">UltraTecno</a>
          </div>
        </li>
        <li class="nav-item mx-2 contact">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
<script>
  // add active class to nav item based on page (sr-only)
  ( function ($) {
    var activenav,
        matches = document.body.className.match(/(^|\s)page-(\w+)(\s|$)/); //
    if (matches) {
        activenav = matches[2];
        //remove active class
        $(".active").removeClass("active");
        $(".navbar-nav .nav-item").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active').find(".nav-link").append(" <span class='sr-only'>(current)></span>");
            }
        });
        $(".navbar-nav").each( function () {
            if( $(this).hasClass(activenav) ) {
                $(this).addClass('active').append(" <span class='sr-only'>(current)></span>");
            }
        });
    }
  })(jQuery);

  // change navbar toggler icon
  jQuery(document).ready(function($) {
    $(".navbar-toggler").click(function() {
      $("#toggler-icon").toggleClass("fa-times");
      $("#toggler-icon").toggleClass("fa-bars");
    });
  });

// popover enabled
$(document).ready(function(){ $('[data-toggle="popover"]').popover(); });
</script>