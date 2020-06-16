<?php
require('../libs/account.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Мистер Чистер</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(img/background.png)">
<header class="header">
    <div class="header__wrapper">
        <?php include('methods/Header.php') ?>
    </div>
</header>
<section class="section-posters">
    <?php if (isset($_SESSION['user'])) {}



    else{
        include ('methods/get_info.php');
    }
    ?>




</section>
</body>
</html>
