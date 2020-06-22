<?php
require_once('methods/connect.php');
require('../libs/account.php');
require('../libs/orders.php');
require('../libs/provider.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url(img/background.png)">
<header class="header">
    <div class="header__wrapper">
        <?php include('methods/Header.php') ?>
    </div>
</header>
<section class="section-posters">
    <?php if($_SESSION['user']->director==1){
                include('methods/Orders.php');
            }
            else{
                include('methods/Orders.php');
                echo '</div>
        <div class="btn_add">
            <button class="button7"><a class="btn_href"  href="Add_orders.php">Добавить</a>  </button>
        </div>
    </div>';

    }?>
</section>
</body>
</html>



