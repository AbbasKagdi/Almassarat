<?php
//debug info
//comment this block
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

// trespasser
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!(isset($_SESSION['create'])) || !(isset($_SESSION['approve'])) || !(isset($_SESSION['brand']))){
    if(!(isset($_SESSION['shortcut']))  || !(isset($_SESSION['brand']))){
	    header("Location: 404.php");
        die("wrong entry!");
    }
}

$brand = ($_SESSION['brand'] == 1)? "grt" : "ultra";
$init = file_get_contents("static/blogs/$brand/log.json");
$log = json_decode($init, true);

if (in_array($_POST['id'], $log['posts'])) {
    $old_id = $_POST['id'];
    // delete blog id
    if(($key = array_search($old_id, $log['posts'])) !== false)
        array_splice($log['posts'], $key, 1);
    // decrease post entries
    $total = $log['total'];
    $total -= 1;
    $log['total'] = $total;

    $blog = json_decode(file_get_contents("static/blogs/$brand/$old_id.json"), true);
    
    // remove image
    unlink("img/blogs/$brand/".$blog['image']);
    
    // remove blog
    unlink("static/blogs/$brand/$old_id.json");
    
    // update log
    file_put_contents("static/blogs/$brand/log.json", json_encode($log), LOCK_EX);

	die("ok");
}
else if (in_array($_POST['id'], $log['pending'])) {
    $old_id = $_POST['id'];
    // delete pending blog id
    if(($key = array_search($old_id, $log['pending'])) !== false)
        array_splice($log['pending'], $key, 1);
    // decrease pending entries
    $total = $log['pending_total'];
    $total -= 1;
    $log['pending_total'] = $total;

    $blog = json_decode(file_get_contents("static/blogs/$brand/$old_id.json"), true);
    
    // remove image
    unlink("img/blogs/$brand/".$blog['image']);
    
    // remove blog
    unlink("static/blogs/$brand/$old_id.json");
    
    // update log
    file_put_contents("static/blogs/$brand/log.json", json_encode($log), LOCK_EX);

    // clearing shorcut
    if(isset($_SESSION['shortcut'])){
        unset($_SESSION['shortcut']);
        unset($_SESSION['brand']);
    }
	die("ok");
}
else{
	die("Blog ID not in list!");
}
?>