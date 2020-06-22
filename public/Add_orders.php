<?php
require_once('methods/connect.php');
require('../libs/orders.php');
require('../libs/account.php');
require('../libs/provider.php');
require('../libs/detergents.php ');
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
<section>
    <form action="methods/create_orders.php" method="POST" class="regContent" enctype="multipart/form-data">
        <h1 class="text_table">Таблица заказ</h1>
        <div class="table_stile_add"  >

            <?php include('methods/List_detegrent.php');?>
            <table class="table_stile_table">
                <tr>
                    <th class="table_list" >Название компании</th>
                    <th class="table_list" >Дата заказа</th>
                </tr>
                <tr>
                    <td class="table_list">
                        <?php include('methods/List_name_company.php');?>
         </td>
                    <td class="table_list">
                        <input class="table_title_theme" type="date" name="order_date" id="order_date" required />
                    </td>
                </tr>
            </table>
            <input type="submit" name="Ok" value="Добавить" class="button7 form__bg"></input>
        </div>
    </form>
</section>
</body>
</html>



