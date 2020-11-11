<?php

    if(isset($_GET['article'])){
		$bid = explode("-", $_GET['article']);
		$bid = end($bid);
		$bid = (is_numeric($bid)) ? $bid : 100001;
    }
	else{
		$bid = 100001;
	}
	try{
		$log = json_decode(file_get_contents("static/blogs/ultra/log.json"), true);
		// search in posts
		if(in_array($bid, $log['posts'])){
			$blog = json_decode(file_get_contents("static/blogs/ultra/". $bid .".json"), true);
		}
		// search in pending posts
		elseif(in_array($bid, $log['pending'])){
			$blog = json_decode(file_get_contents("static/blogs/ultra/". $bid .".json"), true);
		}
		// redirect for invalid post id
		else{
			header("Location: 404.php");
			die();
		}
		// save memory
		unset($log);
    }
    // redirect for invalid post id
    catch(Exception $e) {
        // for unknown exception
		header("Location: 404.php");
		die();
    }

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
    <title>Ultratecno | <?php echo $blog['title']; ?> | Almassarat</title>
    <meta name="description" content="Ultratecno | <?php echo $blog['title']; ?> | Almassarat" />
    <meta name="keywords" content="Almassarat, Ultratecno">
    <link rel="canonical" href="https://almassarat.com/ultra-feed.php">
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
        ::-moz-selection { /* Code for Firefox */
        color: #fff;
        background: #3b76b7;
        }
        ::selection {
            color: #fff;
            background: #3b76b7;
        }
    </style>
  </head>
<body class='scroll1 page-ultra'>
<center>
<?php /* dyanamically add button */
define('seller', TRUE);
include_once "nav.php";
?>
<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/blogs/ultra/<?php echo $blog['image']; ?>" /></div>

<!-- intro text -->
<div class="mt-5" id="intro">
  <div class="container-fluid">
    <?php if($bid > 100000000){echo("<p class='bg-danger container p-3 lead'>This post is not yet approved by the content moderator.</p>");} ?>
    <h1 class="display-4 text-theme"><?php echo $blog['title']; ?></h1>
    <p class="lead">
        <?php echo wordwrap($blog['subtitle'], 15); ?>
    </p>
  </div>
</div>

<!-- Content -->
<div class="row mb-5 container bg-light p-1" style="font-size: 1.2em">
    <div class="col-md-8 p-5 border-right" id="content">
        <p class="text-left"><?php echo wordwrap($blog['content'], 15); ?></p>
    </div>
    <div class="col-md-4 float-left p-5">
        <h6>Published on</h6>
        <p class="lead"><?php echo $blog['date']; ?></p>
        <h6>Author</h6>
        <p class="lead"><?php echo "". ucfirst($blog['author']) ."<br><small>". $blog['description'] ."</small>"; ?></p>
        <h6>Tags</h6>
        <?php
            $k = 0;
            foreach($blog['badges'] as $b){
                echo get_badge($b);
                $k++;
                if($k%2 == 0) {echo "<br>";}
            }
        ?>
    </div>
</div>
<!-- Footer -->
<?php include_once "footer.php"; ?>

</center>

<script>
$(document).ready(function () {
    if($(window).width() < 768) {
        $('#content').removeClass('border-right');
    }
});
</script>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>