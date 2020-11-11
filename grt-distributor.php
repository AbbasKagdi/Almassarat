<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GRT | Almassarat</title>
    <meta name="description" content="Join the Almassarat team as we experience substancial global growth, and are currently offering distributor opportunities in GCC & African Countries. Contact the team today!" />
    <meta name="keywords" content="Bussiness, Road Construction, Kuwait, GRT MENA, Global Road Technology, Distributor">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
        h5:hover{
            color: #ec7404;
        }
        a.img-fluid:hover hr.bg-theme{
            width: 50%;
        }
        ::-moz-selection { /* Code for Firefox */
          color: #fff;
          background: #ec7404;
        }
        ::selection {
          color: #fff;
          background: #ec7404;
        }
        .orange{
            color: #ec7404;
        }
        .jumbotron{
            padding-bottom:0;
        }
    </style>
  </head>
<body class='scroll1 page-grt'>

<?php /* dyanamically added button */
define('unquot', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/mine.jpg" /></div>
<!-- intro -->
<div class="jumbotron jumbotron-fluid pt-0 my-5 bg-white" id="intro">
  <div class="container">
    <h1 class="display-4 orange">Distributor Opportunities</h1>
    <p class="lead">Join The Global Road Technology Team</p>
    <br><p class="">Al Massarat Al Khalijiya General Trading and Contracting Company “AMAK”, the exclusive distributor for Global Road Technology “GRT” in the Gulf Countries, The MENA Region and Africa is currently offering distributor opportunities. Enquiries and applications to distribute Global Road Technology products in your country are now welcome. For a chance at a mutually beneficial relationship with a burgeoning global brand, act now.</p>
  </div>
</div>

<!-- Feats -->
<div class="p-5 container small bg-light">
  <div class="row">
    <div class="col-md-6">
      <h5 class="orange">Opportunities:</h5>
      <p class="">AMAK is offering Country Distributorship. Distributor opportunities for a corporate entity to sell and market Global Road Technology products within a country. You will be supported by an established brand, engineering, marketing and management system.</p>
    </div>
    <div class="col-md-6">
      <h5 class="orange">Our commitment</h5>
      <p class="">AMAK grants distributorships to parties who have gone through a selection process to ensure that their needs, desires and expectations match those of the company system. Our aim is to nurture a long term trusted relationship with each Distributor and team member, encouraging their contributions and assisting their personal development and education.</p>
    </div>
  </div>
</div>

<!-- Form -->
<div class="container my-5">
  <h3 class="orange  text-left">Our Distributorships</h3>
  <p class=" text-left">As an appointed and licensed distribution partner you will be part of a dynamic distributorship that is ready to provide your clients with outstanding service and products.</p>
  <div class="row mt-4">
    <div class="col-md-4 order-md-2 bg-dark text-left p-4 my-2" style="height:fit-content">
      <h4 class="orange text-center">Our System</h4>
      <ul class="text-white" style="list-style-type:none;">
        <li class="my-3"><span class="orange">&#8594;</span> We provide the business tools, training and systems</li>
        <li class="my-3"><span class="orange">&#8594;</span> You provide the face to face contact with future customers</li>
        <li class="my-3"><span class="orange">&#8594;</span> We provide the marketing and support to ensure brand awareness</li>
        <li class="my-3"><span class="orange">&#8594;</span> You reap the financial benefits with residual income attached</li>
      </ul>
    </div>
    <div class="col-md-8 order-md-1 my-2">
      <form class="outline-orange text-left p-4" action="grt-mail.php" method="POST">
        <h4 class="orange  text-left">Distributor Application Enquiry</h4>
        <p class=" text-left">If you would like to apply for the distribution rights for your country that is in AMAK territory “Gulf Countries, MENA and Africa”, please complete and submit the form below</p>
        <div class="form-group">
          <input type="text" class="form-control border-secondary" name="nom" placeholder="Name with Title" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control border-secondary" name="comp" placeholder="Company" required>
        </div>
        <div class="form-group">
          <!-- onblur event to prepend http:// -->
          <input type="url" class="form-control border-secondary" name="web" value="http://your-company-website.com" onclick="prepend(this)">
        </div>
        <div class="form-group">
          <input type="email" class="form-control border-secondary" aria-describedby="emailHelp" name="mail" placeholder="Email address" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control border-secondary" name="cont" placeholder="Country of interest within GCC, MENA & Africa*" required>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control border-secondary" name="mob" placeholder="Mobile number" required>
        </div>
        <div class="form-group">
          <input type="tel" class="form-control border-secondary" name="tel" placeholder="Company phone number" required>
        </div>
        <div class="form-group">
          <textarea class="form-control border-secondary" rows="5" name="msg" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn btn-lg bg-orange text-white" name="sub">Submit Request</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script>
function prepend (web) {
  web.value = "http://";
}
</script>
</body>
</html>