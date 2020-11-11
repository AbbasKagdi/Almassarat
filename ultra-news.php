<?php

    // load news log
    $log = json_decode(file_get_contents("static/blogs/ultra/log.json"), true);
    // reverse post order to fetch latest blogs first
    $log["posts"] = array_reverse($log["posts"]);

    $limit = 9;
    if(isset($_GET['page'])){
        $page = is_numeric($_GET['page']) ? floor(abs($_GET['page'])) : 1;
        $page = (($page - 1) > $log['total']/$limit) ? 1: $page;
    }
    else{ $page = 1; }

    $start = ($page-1)>=0 ? $limit*($page-1) : 0;
    $stop = $start + $limit;
    $stop = min($stop, (int)$log['total']);

    function get_badge($color){
        switch($color){
            case 'launch': return "<span class='mx-1 badge badge-info'>Launch</span>";
            case 'bussiness': return "<span class='mx-1 badge badge-warning'>Bussiness</span>";
            case 'challenge': return "<span class='mx-1 badge badge-dark'>Challenge</span>";
            case 'case': return "<span class='mx-1 badge badge-secondary'>Case Study</span>";
            case 'alert': return "<span class='mx-1 badge badge-danger'>Alert</span>";
            case 'tech': return "<span class='mx-1 badge badge-primary'>Tech</span>";
            case 'environment': return "<span class='mx-1 badge badge-success'>Environment</span>";
            default: return "";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Ultratecno News | Almassarat</title>
    <meta name="description" content="Ultratecno News Gallery." />
    <meta name="keywords" content="UltraTecno, Industrial Cleaning, Ultrasonic Technology, Ultratecno News">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
      .card-img-top {
          width: 100%;
          height: 30vh;
          object-fit: cover;
      }
      ::selection {
        color: #fff;
        background: #3b76b7;
      }
    </style>
  </head>
<body class='scroll1 page-gallery'>
<center>
<?php /* dyanamically add button */
define('seller', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/n2.jpg" /></div>

<!-- intro -->
<div class="jumbotron jumbotron-fluid pb-0 bg-white" id="intro">
  <img src="img/ultra/ultratecno.jpg" class="img-fluid" width="250vh" loading="eager" alt="Ultratecno"><br>
  <small class="lead">Explore our News Gallery</small>
  <hr width="40%" class="bg-primary mt-5">
</div>

<?php include_once "ultra-medianav.php"; ?>

<div class="container text-center">
    <div class="input-group rounded">
        <div class="input-group-prepend">
            <span class="input-group-text outline-orange">
                <i class="fa fa-search" aria-hidden="true"></i>
            </span>
        </div>
        <input class="form-control border-secondary" id="srch" type="text" placeholder="Search on this page">
    </div>
</div>

<?php

// main loop
for($j = $start; $j < $stop; $j++){
    // fetch blog
    $blog = json_decode(file_get_contents("static/blogs/ultra/". $log['posts'][$j] .".json"), true);
    // save memory
    unset($blog['content']);
    // collect badges
    $badges = [];
    $k = 0;

    foreach($blog['badges'] as $b){
        $badges[$k] = get_badge($b);
        $k++;
    }
    
    // row creation
    if($j%3 == 0){
        $row1 = "<div class='container row my-5'>";
        $row2 = "";
    }
    else if($j%3 == 1){
        $row1 = "";
        $row2 = "";
    }
    else if($j%3 == 2){
        $row1 = "";
        $row2 = "</div>";
    }
    if($j == ($stop-1)){
        $row2 = "</div>";
    }

    // blog print
    echo "
    <!-- Blog $j -->
    $row1
        <div class='col-md-4'>
            <a href='ultra-feed.php?article=".urlencode($blog['subtitle'])."-".$blog['bid']."' target='_blank'>
                <div class='card mb-4 shadow5' style='border: 1px solid #3b76b7'>
                    <img class='card-img-top' src='img/blogs/ultra/".$blog['image']."' alt='".$blog['title']."'>
                    <div class='card-body'>
                        <h4 class='card-text text-dark'>".$blog['title']."</h4>
                        <p class='card-text text-dark'>".wordwrap($blog['subtitle'], 15)."</p>
                        ". implode($badges) ."   
                    </div>
                    <div class='card-footer'>
                        <p class='text-inline card-text'><small class='text-muted'>".$blog['date']."</small></p>
                    </div>
                </div>
            </a>
        </div>
    $row2";
}

$disable_link="style='pointer-events: none;'";
$pages = ceil($log['total'] / $limit);
?>

<!-- Pagination -->

    <nav>
        <ul class="pagination justify-content-center mx-5">
            <li class="page-item">
                <a class="page-link" <?php  if($page<=1){ echo $disable_link; } ?> href='ultra-news.php?page=<?php echo ($page-1); ?>' aria-label='Previous'><span aria-hidden='true'>&laquo;</span></a>
            </li>
            <li class="page-item">
                <a class="page-link" href='ultra-news.php?page=1'>First</a>
            </li>
            <?php
            for($i=1; $i<=$pages; $i++){
                if($i < 4){
                    if($i==$page){
                        echo "<li class='page-item active'><a class='page-link' href='ultra-news.php?page=$i'>$i</a></li>";
                    }
                    else{
                        echo "<li class='page-item'><a class='page-link' href='ultra-news.php?page=$i'>$i</a></li>";
                    }
                }
                else if($i == 4){
                    echo "<li class='page-item'><a class='page-link'>....</a></li>";
                }
                else{
                    break;
                }
            }
        ?>
            <li class="page-item">
                <a class="page-link" href='ultra-news.php?page=<?php echo $pages; ?>'>Last</a>
            </li>
            <li class="page-item">
                <a class="page-link" <?php if($page>=$pages){ echo $disable_link; } ?> href='ultra-news.php?page=<?php echo ($page+1); ?>' aria-label='Next'><span aria-hidden='true'>&raquo;</span></a>
            </li>
        </ul>
    </nav>

<!-- Footer -->
<?php include_once "footer.php"; ?>

</center>
<script>
  $(document).ready(function(){
      // hover
      $('.card').hover(function (){
          $(this).toggleClass('shadow5');
      });

      // search
      $("#srch").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $(".card").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      });
  });
</script>
<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>