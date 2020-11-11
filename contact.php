<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact | Almassarat</title>
	  <meta name="description" content="Feel free to contact us for bussiness opportunities, and questions about our products or services." />
    <meta name="keywords" content="General Trading, Bussiness, Construction, Kuwait, GRT MENA, Global Road Technology, Ultratecno, Contact">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
        .map-responsive{
            overflow:hidden;
            padding-bottom:25%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        @media (max-width: 514px) {
            .map-responsive{
                padding-bottom:60%;
            }
        }
    </style>
  </head>
<body class='scroll1 page-contact'>

<!-- Navbar -->
<?php /* dyanamically remove request quote button */
define('sitemap', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/sur.jpg" /></div>

<!-- intro -->
<div class="jumbotron jumbotron-fluid mb-0 bg-white" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Contact Us</h1>
    <small class="lead">Feel free to contact us for bussiness opportunities, and questions about our products or services.</small>
    <!-- services offered cards-->
    <div class=" my-5 container">
      <div class="mt-5 card-deck">
        <div class="card ">
          <div class="card-body">
            <h5 class="text-theme card-title">Location</h5>
            <p class="card-text small"><a href="https://goo.gl/maps/3ZxB7eiyco3DjgFq9" target="_blank">Free Trade Zone, Block 1, Plot 35, 2<sup>nd</sup> Floor, Shuwaikh, <b class="text-danger">Kuwait</b></a></p>
          </div>
        </div>
        <div class="card ">
          <div class="card-body">
            <h5 class="text-theme card-title">Phone</h5>
            <p class="card-text"><a href="tel:+96522411161" target="_blank">(<b class="text-danger">+</b>965) 2241 1161</a></p>
          </div>
        </div>
        <div class="card ">
          <div class="card-body">
            <h5 class="text-theme card-title">Social</h5>
            <p class="card-text">
              <div class="my-3 container row justify-content-center" style="font-size:1.5em;">
                <a href="https://twitter.com/AlMassarat" class="mx-1 fa fa-twitter" target="_blank"></a>
                <a href="https://www.youtube.com/channel/UC_gg2DG_3Dpo5vZFQDHQYUw" class="mx-1 fa fa-youtube-play text-danger" target="_blank"></a>
                <a href="https://www.linkedin.com/company/al-massarat-al-khalijia/" class="mx-1 fa fa-linkedin" target="_blank"></a>
			  </div>
            </p>  
          </div>
        </div>
        <div class="card ">
          <div class="card-body">
            <h5 class="text-theme card-title">Email</h5>
            <p class="card-text"><a href="mailto:info@almassrat.com" target="_blank">info<b class="text-danger">@</b>almassrat.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Map -->
<div class="map-responsive" id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3477.6903524860154!2d47.90947231544029!3d29.35006925799273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf8f416c5b3c87%3A0xdd4923aef4d2d48f!2sAl%20Massarat%20Al%20Khalijiya!5e0!3m2!1sen!2skw!4v1596008304145!5m2!1sen!2skw" width="1920" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>