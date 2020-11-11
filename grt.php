<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GRT | Almassarat</title>
    <meta name="description" content="GRT is a world leader in innovative road technology solutions that help overcome the global challenge of creating safer roads, while being cost-effective and environmentally responsible." />
    <meta name="keywords" content="Road Construction, GRT MENA, Global Road Technology">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
        h5{
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
        .cert{
            width:70%;
        }
        @media (max-width: 768px)
        and (min-width : 320px) {
            .cert{
                width:50%;
            }
        }
    </style>
  </head>
<body class='scroll1 page-grt'>

<?php /* dyanamically add button */
define('distributor', TRUE);
include_once "nav.php";
?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/truck.jpg" /></div>
<!-- intro -->
<div class="jumbotron jumbotron-fluid my-0 bg-white" id="intro">
  <div class="container">
    <!--    <h1 class="display-4 orange">GRT</h1> 
            <p class="lead">Global Road Technology</p> -->
    <img src="img/grt/large.jpg" width="180vw" alt="GRT Logo"><br>
    <p class="">Global Road Technology (GRT) is a world leader in innovative road technology solutions that help overcome the global challenge of creating safer roads and workplaces for people, industry and communities. GRT products also assist in making surfaces within mining, construction, infrastructure and farming projects stronger, longer lasting, as well as more cost-effective and environmentally responsible.</p>
    <br><p class="lead">At the end of 2019, We were blessed to acquire the exclusive Distributionship of Global Road Technology for the <br>GULF, MENA, and African countries.</p>
    <img src="img/grt/map.png" class="img-fluid" loading="lazy" alt="Countries under AMAK GRT Distributionship">
    <hr class="mt-5 " width="80%" style="background-color: #ec7404">
  </div>
</div>
<!-- About -->
<div class="container">
    <!-- About -->
    <div class="row px-5 py-4">
        <div class="col-md-3 p-2">
            <h5 class="orange">About</h5>
        </div>
        <div class="col-md-9 p-2 m-auto text-left">
            <p class="lead">GRT are the specialists in Dust Control, Soil Stabilisation, Erosion Control and Water Management.</p>
            <p class="">GRT is an international, engineering technology company focusing on providing innovative products and solutions for the mining, civil, agricultural, resources, land development, and environmental management sectors. GRT’s industry leading technology is proven to drive process efficiency, deliver sustainable infrastructure outcomes, and improve community health, safety and environmental outcomes.</p>
        </div>
    </div>
</div>
<!-- engineering -->
<div class="container">
    <div class="row px-5 py-4">
        <div class="col-md-3 p-2" style="background-color:#ec7404">
            <img src="img/grt/he.png" class="img-fluid" width="80em">
        </div>
        <div class="col-md-9 p-2 m-auto border border-dark">
            <p>GRT's foundation is engineering excellence and innovation. With highly experienced chartered engineers forming the core of our team, GRT can develop efficient, practical, site-specific solutions across mining, civil, environmental, and geotechnical disciplines, with application in the Roads, Rural, and Resource sectors.</p>
        </div>
    </div>
</div>
<!-- GRT Product Applications -->
<div class="container">
    <div class="row px-5 py-4">
        <div class="col-md-3 p-2">
            <h5 class="orange">GRT Product Applications</h5>
        </div>
        <div class="col-md-9 p-2 m-auto text-left">
            <p class="lead">GRT’s revolutionary and environmentally friendly dust control, soil stabilisation, erosion control and water management products have a wide range of proven applications.</p>
            <p class="">Formulated in the world’s leading laboratories and proven in the world’s toughest conditions, GRT’s innovative range of products and processes help create safe, reliable and resilient roads and infrastructure for people, industry and communities worldwide.</p>
        </div>
    </div>
    <!-- GRT Applications Menu -->
    <div class="row px-5 py-4 justify-content-center">
        <div class="col-md-4 px-1 py-0">
            <a href="dust-control.php" target="_blank">
                <div>
                    <img src="img/banners/dist.jpg" alt="DUST Control and Suppression" class="img-fluid mb-1">
                    <h5>DUST Control and Suppression</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
        <div class="col-md-4 px-1 py-0">
            <a href="military-application.php" target="_blank">
                <div>
                    <img src="img/banners/jet.jpg" alt="Military Application" class="img-fluid mb-1">
                    <h5>Military Applications</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
        <div class="col-md-4 px-1 py-0">
            <a href="soil-stabilisation.php" target="_blank">
                <div>
                    <img src="img/banners/soilstabs.jpg" alt="Soil Stabilisation & Civil Construction" class="img-fluid mb-1">
                    <h5>Soil Stabilsation</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
        <div class="col-md-4 px-1 py-0">
            <a href="erosion-control.php" target="_blank">
                <div>
                    <img src="img/banners/erosions.jpg" alt="Erosion and Sediment Control" class="img-fluid mb-1">
                    <h5>Erosion and Sediment Control</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
        <div class="col-md-4 px-1 py-0">
            <a href="agricultural-land.php" target="_blank">
                <div>
                    <img src="img/banners/cat.jpg" alt="Rural – Farms & Property Management" class="img-fluid mb-1">
                    <h5>Rural – Farms & Property Management</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
        <div class="col-md-4 px-1 py-0">
            <a href="oil_gas_applications.php" target="_blank">
                <div>
                    <img src="img/banners/oil.jpg" alt="Oil & Gas Applications" class="img-fluid mb-1">
                    <h5>Oil & Gas Applications</h5>
                </div>
            </a>
            <hr class="bg-theme" width="10%">
        </div>
    <!-- Shelved
        <div class="col-md-4 px-1 py-0">
            <a href="water-management.php" target="_blank">
                <img src="img/banners/water.jpg" alt="Water Management" class="img-fluid mb-1">
                <h5>Water Management</h5>
            </a>
            <hr class="bg-theme" width="10%">
        </div> -->
    </div>
    <!-- Compliance Principles -->
    <div class="small px-5 py-4 text-center">
        <div class="p-2">
            <h5 class="orange">Compliance Principles</h5>
            <p class="lead">Approving & Supporting Regulatory Compliance Practices & Principles</p>
        </div>
        <!-- Certifications & Compliances -->
        <div class="mt-5">
            <div class="row my-2 justify-content-center">
                <div class="col-xs-6 col-md-4"><a href="https://infostore.saiglobal.com/" target="_blank"><img src="img/grt/grt-iso.png" alt="ISO 9001" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.ieca.org/ieca" target="_blank"><img src="img/grt/ieca.png" alt="IECA" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.foodstandards.gov.au/Pages/default.asp" target="_blank"><img src="img/grt/foodstd.png" alt="Food Standards AUS/NZ" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.worldbank.org/" target="_blank"><img src="img/grt/worldbank.png" alt="World Bank" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.un.org/" target="_blank"><img src="img/grt/unitednations.png" alt="United Nations" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.unido.org/decade-action" target="_blank"><img src="img/grt/road-safety.png" alt="Decade of action for road safety" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.irf.global/" target="_blank"><img src="img/grt/irf.png" alt="IRF" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.who.int/" target="_blank"><img src="img/grt/who.png" alt="WHO" class="cert"></a></div>
                <div class="col-xs-6 col-md-4"><a href="https://www.grsproadsafety.org/" target="_blank"><img src="img/grt/global-road-safety.png" alt="Global road safety partnership" class="cert"></a></div>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>

<script>
    // script for banner slideshow
    var current = 0;
    var backgrounds = [];
    backgrounds[0] = 'img/banners/truck.jpg';
    backgrounds[1] = 'img/banners/dist.jpg';
    backgrounds[2] = 'img/banners/jet.jpg';
    backgrounds[3] = 'img/banners/soilstabs.jpg';
    backgrounds[4] = 'img/banners/erosions.jpg';
    backgrounds[5] = 'img/banners/cat.jpg';
    backgrounds[6] = 'img/banners/oil.jpg';
    backgrounds[7] = 'img/banners/mine.jpg';

    function changeBackground() {
        current++;
        if(current > 7) current = 0;

        $('#banner').fadeOut(100,function() {
            $('#banner').attr({
                'src' : backgrounds[current]
            });
            $('#banner').fadeIn(100);
        });

        setTimeout(changeBackground, 4000);
    }

    $(document).ready(function() {
        setTimeout(changeBackground, 4000);   
    });
</script>
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>