<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GRT | GRT Products | Almassarat</title>
    <meta name="description" content="Complete range of GRT Products and their application" />
    <meta name="keywords" content="Road Construction, GRT MENA, Global Road Technology, Products">
    <link rel="stylesheet" href="static/styles/grtcar.css">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
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
        .hr-orange{
            background-color: #ec7404;
        }
    </style>
  </head>
<body class='scroll1 page-grt'>

<?php /* dyanamically add button */
define('distributor', TRUE);
include_once "nav.php";
?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/dust.jpg" /></div>
<!-- intro -->
<div class="jumbotron jumbotron-fluid my-0 bg-white" id="intro">
  <div class="container">
    <h1 class="display-4 orange">GRT Products</h1> 
    <p class="lead my-1">Complete range of GRT Products</p>
  </div>
</div>
<!-- GRT Nav -->
<?php include_once "grt-nav.php"; ?>
<!-- Content -->
<!-- Remove d-flex justify-content-center to left align articles -->
<div class="container my-5">
    <img src="img/grt/grt-products.png" class="img-fluid img-responsive" alt="GRT Home Products">
    <hr class="hr-orange my-5" style="width:70%">
    <!-- Dust Control & Suppression -->
    <h3 class="mt-5 adapt-3  orange">Dust Control & Suppression</h3>
    <div class="row my-5 text-left justify-content-center d-flex justify-content-center" id="dust">
        <!--
        Removed
        <div class="col-md-4 small">
            <a href="grt5000.php"><h5 class="orange">GRT5000: </h5></a>
            <p>Tough, polymer-based dust control technology can be sprayed from a water cart or cannon onto the dust generating surface, whether it be an LV road, farm track or open area. GRT5000 dries and forms a stable layer of bonded material resistant to traffic, wind erosion, rainfall impact, overland flow, pedestrian and animal traffic.</p>
        </div>
        -->
        <div class="col-md-4 small">
            <a href="wetloc.php"><h5 class="orange mb-3">GRT Wet-Loc: </h5></a>
            <p>Non-drying and non-setting, synthetic fluid designed to adsorb into soil particles preventing them from becoming airborne. GRT Wet-Loc is a long-lasting, totally waterless application that is ideally suited to underground mining roads, areas of heavy damaging traffic such as tracked machinery routes, and race tracks (speedways and even horse and camel tracks).</p>
        </div>
        <!--
        Removed
        <div class="col-md-4 small">
            <h5 class="orange">GRT: ACTIVATE UG <p>Super activated, dust control for underground mining. This product is injected into water supply lines and sprayed through existing spray systems for the longwall, continuous miners, conveyors and designed to target harmful airborne coal and silica dusts.</p>
        </div>
        -->
        <div class="col-md-4 small">
        <a href="haulloc.php"><h5 class="orange mb-3">GRT Haul-Loc: </h5></a>
            <p>Ultra-concentrate that uses GRT’s LCP technologies to improve the efficiency and effectiveness of water cart operations by up to 500%. Save water, eliminate dust, and improve safety on your haul roads.</p>
        </div>
        <!--
        Removed
        <div class="col-md-4 small">
            <h5 class="orange">GRT: ACTIVATE: </h5></p>Cutting edge dust control technology that makes water work better, harder, and more efficiently. Injected through existing dust spray systems, trucks or stabilizers, key applications are for quarrying crushers and conveyors and for road construction.</p>
        </div>
        -->
        <hr style="width:50%">
    </div>
    <!-- Soil Stabilization & Civil Construction -->
    <h3 class="adapt-3 orange">Soil Stabilization & Civil Construction</h3>
    <div class="row my-5 text-left justify-content-center" id="soil">
        <div class="col-md-4 small">
            <a href="grt7000.php" target="_blank"><h5 class="orange">GRT 7000: </h5></a>
            <p><b>Polymer Seal (Environmental)</b> A specially formulated liquid polymer, GRT7000 is a key solution that dries clear, and is environmentally friendly. Engineered for use in civil construction, it can act as a clear polymer sealant as well as a high performing stabilization agent.</p>
        </div>
        <div class="col-md-4 small">
            <a href="grt9000.php" target="_blank"><h5 class="orange">GRT 9000: </h5></a>
            <p><b>Polymer Soil Stabilization</b> GRT’s most advanced polymer soil stabilization product, GRT9000 was developed, for use in the construction of high-quality and cost-effective pavement applications.</p>
        </div>
        <div class="col-md-4 small">
            <a href="grtpcm.php"><h5 class="orange">GRT PCM: </h5></a>
            <p><b>Polymer Cement Modifier (PCM)</b> Cracking of cemented gravels used in road construction have historically limited their use to specific applications; whereas if the cracking can be reduced or eliminated, their use could be extended to a much wider range of applications.</p>
        </div>
        <hr style="width:50%">
    </div>
    <!-- Erosion & Sediment Control -->
    <h3 class="adapt-3 orange">Erosion & Sediment Control</h3>
    <div class="row my-5 text-left justify-content-center" id="erosion">
        <!--
        Removed
        <div class="col-md-4 small">
            <h5 class="orange">Nature Plus: </h5></p>A specially formulated liquid polymer combined with a highly effective source of phosphorus and nitrogen to increase germination and strike rate, GRT Nature Plus is a key solution for all revegetation needs. Engineered for use in civil construction and Mine site rehabilitation.</p>
        </div>
        -->
        <div class="col-md-4 small">
            <a href="envirobinder.php"><h5 class="orange">Enviro Binder: </h5></a>
            <p><b>DON’T CATCH SEDIMENT – STOP EROSION AT THE SOURCE!</b>
            <br>GRT: Enviro Binder is a unique erosion control product proven to outperform in any application and provide immediate, long lasting results.</p>
        </div>
    </div>
    <hr class="mb-5" style="width:50%">
    <!-- Water Management --><!-- Shelved
    <h3 class="adapt-3 orange">Water Management</h3>
    <div class="row my-5 text-left justify-content-center" id="water">
        <div class="col-md-4 small">
            <a href="static/catalogs/grt_damsealer_tds.pdf"><h5 class="orange">GRT DamSealer: </h5></a>
            </p>Specifically formulated, complex matrix of soluble and insoluble polymers designed to find and seal leaks in tailings and water storage dams. Following the currents caused by the leaks, the product finds problem areas- plugging cracks and sealing fault lines. The hydrostatic pressure of the water in the dams, also assists in holding GRT: Dam Sealer in place – stopping leaks and preventing new ones!</p>
        </div>
        <div class="col-md-4 small">
            <a href="static/catalogs/grt_cc_tds.pdf"><h5 class="orange">GRT CC: </h5></a>
            </p><b>Concentrated Coagulant</b>, used to clarify water contaminated with finely suspended clays in dams and sedimentation basins. It is also used for removal of nutrients such as phosphate from water and fluoride from industrial wastewater.</p>
        </div>
        <div class="col-md-4 small">
            <a href="static/catalogs/grt_liquidfloc_tds.pdf"><h5 class="orange">GRT Liquid Floc: </h5></a>
            </p>GRT: Liquid Floc is a premium flocculation product utilising long-chain polymer (LCP) technology to clarify water by capturing suspended particles and dropping them out of suspension. This clarifies water contaminated with finely suspended particles in dams and sedimentation basins.</p>
        </div>
        <hr style="width:50%">
    </div> -->
    <!-- Military Applications -->
    <h3 class="adapt-3 orange">Military Applications</h3>
    <div class="row my-5 text-left justify-content-center" id="military">
        <div class="col-md-4 small">
            <!-- Hidden <h5 class="orange">GRT 1000: </p> -->
            <p><a class="font-weight-bold" href="static/catalogs/grt.pdf" target="_blank">Military Grade Polymer:</a>
                <br>Runways, Military Camps, Temporary Roads and Accesses. It is a tough durable, all purpose polymer soil binder and sealant that achieves a stable layer of clear, bonded material resistant to wind erosion, rain impact, pedestrians, and traffic.</p>
        </div>
        <div class="col-md-4 small">
            <!-- Hidden <h5 class="orange">GRT 2000: </p> -->
            <p><a class="font-weight-bold" href="static/catalogs/grt.pdf" target="_blank">Combat & Natural Disaster Zone Dust Control:</a>
                <br>When buildings and other infrastructure are damaged because of combat or demolished due to natural disasters, many hazardous dusts can be released into the environment. This is a significant health hazard for the civilian population as well as military personnel deployed for combat or humanitarian reasons.</p>
        </div>
        <div class="col-md-4 small">
            <!-- Hidden <h5 class="orange">GRT 3000: </p> -->
            <p><a class="font-weight-bold" href="static/catalogs/grt.pdf" target="_blank">Rapid Deployment Dust Control:</a>
                <br>Depending on the natural environments military operations are set in, the presence of water – either too much or not enough creates – critical issues for aircraft, built infrastructure, logistics and equipment management.</p>
        </div>
        <hr style="width:50%">
    </div>
    <!-- Agriculture Land, Resource & Site Management -->
    <h3 class="adapt-3 orange">Rural – Farms & Property Management</h3>
    <div class="row my-5 text-left justify-content-center" id="site">
        <div class="col-md-4 small">
            <a href="soilloc.php"><h5 class="orange">Soil-Loc (RURAL): </h5></a>
            <p><b>Broad-acre Cropping Land Protection Protect The Earth – Save Your Topsoil</b>
            <br><br>GRT Soil-Loc is a cost effective, broad-acre wind erosion technology designed to protect cropping lands when they are most vulnerable. High seasonal winds or storm events can remove as much as 50-100mm of valuable topsoil from cropping and agricultural lands. This top layer of soil is also the layer that contains valuable seed, fertilisers and herbicides.</p>
        </div>
        <div class="col-md-4 small">
            <a href="soilloc.php"><h5 class="orange">Soil-Loc (RESOURCES): </h5></a>
            <p><b>Broad-Scale Dust Suppression Designed to Stop Broad-Scale Wind Erosion</b>
            <br><br>GRT Soil-Loc is a cost effective, broad-scale wind erosion technology designed to protect sensitive exposed surfaces. High seasonal winds or storm events can remove as much as 50-100mm of materials from exposed surfaces causing land degradation and transportation of unwanted dust and contaminants.</p>
        </div>
    <!--
        Removed
        <div class="col-md-4 small">
            <h5 class="orange">Rubble-Loc: </h5></p>Demolition & Recovery Site Dust Control
            <br><br>GRT Rubble-Loc is a cost effective dust and wind erosion control technology designed to for use on dynamic sites such as demolition sites, material stockpiles and natural disaster sites – both emergency and recovery/reconstruction phase.</p>
        </div>
        Removed
        <div class="col-md-4 small">
            <h5 class="orange">Ore-Loc: </h5></p>BULK MATERIAL DUST CONTROL</p>
            <p>Control your stockpiles & Cover your loads!
            <br>GRT Ore-Loc is a robust, liquid polymer that provides an exceptional surface coating/crusting solution on all ore and material surface types. Designed specifically for the tough conditions of the resources sector, GRT Ore-Loc can be applied directly to raw materials using existing or specially designed spray-bar systems or simply by conventional water cart.</p>
        </div>
    -->
    <hr style="width:50%">
    </div>
    <!-- Oil & Gas Applications -->
    <h3 class="adapt-3 orange">Oil & Gas Applications</h3>
    <div class="row my-5 text-left justify-content-center" id="oil">
        <div class="col-md-4 small">
            <a href="static/catalogs/grt.pdf"><b>The GRT Effect! </b></a>
            <p>Used by the world’s largest resources companies, large-scale oil and gas operations trust GRT to make their jobs easier. Our expert team work with clients to Eliminate Fugitive Dust, Create and Maintain Roads, Hardstands, Drill and Well Pads, Helipads, Access Roads, Temporary Roads, Oil Pits hardstands and surrounding areas, Erosion and Sediment Control, Parking Lots, Industrial Areas Roads and Surroundings, Farm Tanks Areas, Pipeline Protection and Coverings and much more.</p>
        </div>
        <div class="col-md-4 small">
            <a href="oil_gas_applications.php"><b>Ease in Operations:</b></a>
            <p>GRT’s environmentally friendly soil stabilization and dust control solutions assist oil and gas companies to achieve maximum efficiency with minimum environmental impact. There are a wide range of oil and gas applications that GRT products offer.</p>
        </div>
    </div>
    <div class="my-5">
        <hr>
        <a href="static/catalogs/grt.pdf" class="btn btn-lg bg-orange text-white mt-5" role="button" title="GRT Products Master Catalog" target="_blank"><i class="fa fa-file-pdf-o"></i> View Catalog</a>
    </div>
</div>

<hr class="hr-orange" width="70%">

<?php include_once 'grtcar.php'; ?>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<!-- <script defer src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
<!-- <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script> -->
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>