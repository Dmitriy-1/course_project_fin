<?php
require_once('methods/connect.php');
require('../libs/account.php');
require('../libs/request.php');
require('../libs/inquiries_client.php');
require('../libs/services.php');
require('../libs/washer.php');
require('../libs/sinks.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Авторизация и регистрация</title>-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(img/background.png)">
<header class="header">
    <div class="header__wrapper">
        <?php include('methods/Header.php') ?>
    </div>
</header>
<section class="section-posters">


    <?php include('methods/Request.php') ?>

    <?php
    if(isset($_SESSION['message'])){
        echo'<p class="msg">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>


</section>
</body>
</html>



