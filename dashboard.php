<?php
    // trespasser
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
		session_regenerate_id();
	}
    if(!(isset($_SESSION['create'])) || !(isset($_SESSION['approve'])) || !(isset($_SESSION['brand']))){
        header("Location: 404.php");
        die();
    }
    $brand = ($_SESSION['brand'] == 1) ? "grt" : "ultra";
    $init = file_get_contents("static/blogs/$brand/log.json");
    $log = json_decode($init, true);
    
    // company indication
    $bg = ($brand== "grt") ? "dist" : "n2";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $brand ?> | Dashboard | Almassarat</title>
	<meta name="description" content="<?php echo $brand ?> | Dashboard | Almassarat" />
    <!-- Load Headers -->
    <?php include_once "headers.php"; ?>
    <style>
        .dashboard{
            position: relative;
            overflow: auto;
        }
    </style>
  </head>
<body class='scroll1 page-gallery'>

<?php /* dyanamically added button */
define('admin', TRUE);
include_once "nav.php";
?>

<!-- front section -->
<div><img id="banner" class="img-fluid w-100" src="img/banners/<?php echo $bg; ?>.jpg" /></div>

<!-- intro -->
<div class="my-5 text-center" id="intro">
  <div class="container">
    <h1 class="display-4 text-theme">Dashboard</h1>
    <p class="adapt-3 lead">
        Review blogs for approval. Click on review to view a published blog. Click on purge to delete a blog.
    </p>
  </div>
</div>
<div class="container my-5 dashboard">
<table class="table table-border table-striped table-hover text-center">
    <thead>
    <th>Blog ID</th>
    <th colspan='2'>Actions</th>
    </thead>
    <tbody>
    <tr>
        <td>100001</td>
        <td><a href="<?php echo $brand; ?>-feed.php?article=-100001" target="_blank" class="btn btn-info">Review</a></td>
        <td><input type="submit" class="btn btn-danger" value="Purge" disabled></td>
    </tr>
    <?php
    for($i = 1; $i < $log['total']; $i++){
        $id = $log['posts'][$i];
        echo "
        <tr>
            <td>$id</td>
            <td><a href='$brand-feed.php?article=-$id' target='_blank' class='btn btn-info'>Review</a></td>
            <td><button onclick='purge($id)' class='btn btn-danger'>Purge</button></td>
        </tr>
        ";
    }
    ?>
    </tbody>
</table>
</div>
<div class="my-5">
    <hr>
    <p class='lead'><a href='create.php' id='cr8'>Create Blog.</a></p><hr>
    <p class="lead"><a href='approve.php' id='mod'>Approve Blog.</a></p><hr>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<script>
    // purge
    function purge(id){
        data = "id="+id;
        $.ajax({
            type: "POST",
            url: "delete_blog.php",
            data: data,
            cache: false,
            success: function(result){
                if(!result)
                    alert("Fatal Error occurred");
                if(result == "ok")
                    alert("Blog deleted successfully!");
                else
                    alert(result);
            }
        });
        location.reload();
    }
</script>

<script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>