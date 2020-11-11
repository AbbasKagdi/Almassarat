<?php
if(isset($_POST["mail"])){
    // all variables
    $mail = $_POST["mail"];
    $nom = $_POST["nom"];
    $msg = $_POST["msg"];
    $comp = $_POST["comp"];
    $cont = $_POST["cont"];
    $mob = $_POST["mob"];
    $tel = $_POST["tel"];
    $web = $_POST["web"];

    $to = "info@almassarat.com";
    $subject = "GRT Distributor | Website mail";

    $message = "
    <html>
    <head>
    <title>GRT Distributor Mail</title>
    </head>
    <body>
    <p>To the concerned Department,
    <br>You have a message from <b>$nom</b> representing the company <b>$comp</b>,
    <br>regarding GRT distributionship, for the region: <b>$cont</b>.
    <br>You can reach them at their company website:
    <br><a href='$web' target='_blank'>$web</a>
    <br>Contact them personally: <a href='tel:$mob'>$mob</a>
    <br>Or on their company number: <a href='tel:$tel'>$tel</a>
    <br>Alternatively you can mail them at: <a href='mailto:$mail'><b>$mail<b></a></p>
    <b>&quot;</b><p>".$_POST["msg"]."</p><b>&quot;</b>
    <p>Thank you,<br>Webmaster<br>Al Massarat Al Khalijia
    <br><br><small><b>Note: </b>This is an automatically generated email, please do not try to reply on this address, instead use the one attached in the mail.</small></p>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . PHP_EOL;
    $headers .= "Content-type:text/html; charset=UTF-8" . PHP_EOL;

    // More headers
    $headers .= 'From: Webmaster <webmaster@almassarat.com>' . PHP_EOL;
    $headers .= 'Cc: abbas@toveripals.com' . PHP_EOL;

    try{
        mail($to,$subject,$message,$headers);
    }
    catch(Exception $e){
        echo "<script>alert('Error in sending Email.');
        window.location.href='grt-distributor.php';</script>";
    }
    finally{
        echo "<script>alert('Email Sent Successfully!');
        window.location.href='grt-distributor.php';</script>";
    }
}
?>